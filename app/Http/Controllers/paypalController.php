<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use App\Orders;
use App\Order_details;
use App\pesapals;
use DB;
use Pesapal;
use PayPal;
use Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;

class paypalController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
           $paypal = new \Netshell\Paypal\Paypal;
        $this->_apiContext = $paypal->ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig([
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ]);

    }
  
// ...
public function getCheckout()
{
 $paypal = new \Netshell\Paypal\Paypal;
	$payer = $paypal->Payer();
	$payer->setPaymentMethod('paypal');
    
	

		$to_USD=$total_cost=str_replace(",", "", Cart::total());//add shipping
		$total_cost=$to_USD*100;//convert to USD
		$amount = $paypal->Amount();
	    $amount->setCurrency('USD');
	    $amount->setTotal($total_cost); // This is the simple way,
	// you can alternatively describe everything in the order separately;
	// Reference the PayPal PHP REST SDK for details.
		
	
	

	$transaction = $paypal->Transaction();
	$transaction->setAmount($amount);
	$transaction->setDescription('fashion');

	$redirectUrls = $paypal->RedirectUrls();
	$redirectUrls->setReturnUrl(action('paypalController@getDone'));
	$redirectUrls->setCancelUrl(action('paypalController@getCancel'));

	$payment =$paypal->Payment();
	$payment->setIntent('sale');
	$payment->setPayer($payer);
	$payment->setRedirectUrls($redirectUrls);
	$payment->setTransactions(array($transaction));

	$response = $payment->create($this->_apiContext);
	$redirectUrl = $response->links[1]->href;
	
	return Redirect::to( $redirectUrl );
}
public function getDone(Request $request)
{ 
	 $paypal = new \Netshell\Paypal\Paypal;
	$id = $request->get('paymentId');
	$token = $request->get('token');
	$payer_id = $request->get('PayerID');
	$payment = $paypal->getById($id, $this->_apiContext);
	$paymentExecution = PayPal::PaymentExecution();
	$paymentExecution->setPayerId($payer_id);
	$executePayment = $payment->execute($paymentExecution, $this->_apiContext);


        //Generate random string
        $string = "";
        for ($i = 0; $i <= (10/32); $i++)
        $string .= md5(time() + rand(0, 99));
        $max_start_index = (32*$i)-10;
        $random_string = substr($string, rand(0, $max_start_index), 10);


        //end
        $unique_id = $random_string;
        $transaction = Pesapal::random_reference();
        foreach($cartItems as $cartItem){
            
            $pay = new paypals;
            $pay ->paypal_unique_id = $payment;
            $pay ->state= "confirmed";
            $pay ->order_id = strtoupper($unique_id);
            $pay ->tracking_id = strtoupper($unique_id);
            $pay ->save();

            $orders = new Orders;
           $orders ->transaction_id = $payment;
           $orders ->total_price =Cart::subtotal();
           $orders ->tax =Cart::tax();
           $orders->status = "confirmed";
           $orders->unique_order_id = strtoupper($unique_id);
           $orders->total_quantity = $cartItem->qty;
           $orders->price = $cartItem->subtotal();
           $orders->seller_id = $cartItem->options->seller_id;
           $orders->product_id = $cartItem->id;
           $orders ->user_id = Auth::user()->id;
           $orders->unique_order_id = strtoupper($unique_id);
           $orders -> save();

            $order_details = new Order_details;
            $order_details ->user_id = Auth::user()->id;
            $order_details->unique_order_id = $orders->unique_order_id;
            $order_details->product_id = $orders->product_id;
            $order_details ->seller_id = $orders->seller_id ;
            $order_details-> save();
           
        }
    // Clear the shopping cart, write to database, send notifications, etc.

    // Thank the user for the purchase
         \Session::flash('done', 'Payments successfull!');
	 return view('front.checkout.checkout-complete', compact('payments'));
}

public function getCancel()
{
     //Generate random string
        $string = "";
        for ($i = 0; $i <= (10/32); $i++)
        $string .= md5(time() + rand(0, 99));
        $max_start_index = (32*$i)-10;
        $random_string = substr($string, rand(0, $max_start_index), 10);


        //end
        $unique_id = $random_string;
        $transaction = Pesapal::random_reference();
        foreach($cartItems as $cartItem){
            
            $pay = new paypals;
            $pay ->paypal_unique_id = $payment;
            $pay ->state= "CANCELED";
            $pay ->order_id = strtoupper($unique_id);
            $pay ->tracking_id = strtoupper($unique_id);
            $pay ->save();

            $orders = new Orders;
           $orders ->transaction_id = $payment;
           $orders ->total_price =Cart::subtotal();
           $orders ->tax =Cart::tax();
           $orders->status = "CANCELED";
           $orders->unique_order_id = strtoupper($unique_id);
           $orders->total_quantity = $cartItem->qty;
           $orders->price = $cartItem->subtotal();
           $orders->seller_id = $cartItem->options->seller_id;
           $orders->product_id = $cartItem->id;
           $orders ->user_id = Auth::user()->id;
           $orders->unique_order_id = strtoupper($unique_id);
           $orders -> save();

            $order_details = new Order_details;
            $order_details ->user_id = Auth::user()->id;
            $order_details->unique_order_id = $orders->unique_order_id;
            $order_details->product_id = $orders->product_id;
            $order_details ->seller_id = $orders->seller_id ;
           $order_details-> save();
           
        }
        \Session::flash('message', 'Payments cancelled!');
	 return view('front.checkout.checkout-payments', compact('payments'));
}
//Customize Paypal payment page

//First we need to create a new WebProfile for obtain the id, then in the future we can simply set this id to the payment object.

public function createWebProfile(){

	$flowConfig =  $paypal::FlowConfig();
	$presentation =  $paypal::Presentation();
	$inputFields =  $paypal::InputFields();
	$webProfile =  $paypal::WebProfile();
	$flowConfig->setLandingPageType("Billing"); //Set the page type

	$presentation->setLogoImage("https://www.example.com/images/logo.jpg")->setBrandName("Example ltd"); //NB: Paypal recommended to use https for the logo's address and the size set to 190x60.

	$inputFields->setAllowNote(true)->setNoShipping(1)->setAddressOverride(0);
	
	$webProfile->setName("Example " . uniqid())
		->setFlowConfig($flowConfig)
		// Parameters for style and presentation.
		->setPresentation($presentation)
		// Parameters for input field customization.
		->setInputFields($inputFields);

	$createProfileResponse = $webProfile->create($this->_apiContext);
        
	return $createProfileResponse->getId(); //The new webprofile's id
}
}
