<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use App\Orders;
use DB;
use Pesapal;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaymentsController extends Controller
{
    public function payment(){//initiates payment
        $cartItems = Cart::content();
        //$total_price = DB::table('orders')->where('user_id',Auth::guard('web')->id())->value('total_price');
    	$orders  = orders::find(Auth::guard('buyer')->id());
        $orders ->transaction_id = Pesapal::random_reference();
        $orders->status = 2;
        $orders ->total_price = Cart::total();//+$shipping_cost;
        $orders -> save();

        $details = array(
        'amount' =>Cart::total(),
        'description' => 'Test Transaction',
         'type' => 'MERCHANT',
         'first_name' => 'joseph',
            'last_name' => 'shiyuli',
          'email' => 'jose@gmail.com',
            'phonenumber' => '0702092083',
           'reference' => $orders->transaction_id,
           'height'=>'400px',
            'currency' => 'KES'
       );
       $iframe=Pesapal::makePayment($details);
       $orders = DB::table('orders')->where('user_id',Auth::guard('buyer')->user()->id)->get();
       $cartItems = Cart::content();
       return view('front.checkout.checkout-payment', compact('iframe','orders','cartItems'));
    }
    public function paymentsuccess(Request $request)//just tells u payment has gone thru..but not confirmed
    {
        $trackingid = $request->input('tracking_id');
        $ref = $request->input('merchant_reference');

        $payments = Payment::where('transactionid',$ref)->first();
        $payments -> trackingid = $trackingid;
        $payments -> status = 'PENDING';
        $payments -> save();
        //go back home
        $payments=Payment::all();
        return view('payments.business.home', compact('payments'));
    }
    //This method just tells u that there is a change in pesapal for your transaction..
    //u need to now query status..retrieve the change...CANCELLED? CONFIRMED?
    public function paymentconfirmation(Request $request)
    {
        $trackingid = $request->input('pesapal_transaction_tracking_id');
        $merchant_reference = $request->input('pesapal_merchant_reference');
        $pesapal_notification_type= $request->input('pesapal_notification_type');

        //use the above to retrieve payment status now..
        $this->checkpaymentstatus($trackingid,$merchant_reference,$pesapal_notification_type);
    }
    //Confirm status of transaction and update the DB
    public function checkpaymentstatus($trackingid,$merchant_reference,$pesapal_notification_type){
        $status=Pesapal::getMerchantStatus($merchant_reference);
        $payments = Payment::where('trackingid',$trackingid)->first();
        $payments -> status = $status;
        $payments -> payment_method = "PESAPAL";//use the actual method though...
        $payments -> save();
        return "success";
    }
}