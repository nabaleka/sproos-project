<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\products;
use Gloudemans\Shoppingcart\Facades\Cart;
#use App\Model\order;
use App\Orders;
use App\shipings;
use App\sellers;
use App\User;
use App\Users;
use App\Seller;
use App\sendy;  
use DB;

class CheckoutController extends Controller
{
  public function __construct()
    {
        $sendy_seller_id="";
    }
   
    public function sendy(Request $request){
       
        
        $this->validate($request, [
              'estate' => 'required',
              'room' => 'required',
              'address' => 'required',
              'location_type' => 'required',
              ]);
     
  
   

   $address =$request->address;
   $url="http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode( $address);
  $json = file_get_contents($url);
  $data = json_decode($json, TRUE);
  $long=$data['results'][0]['geometry']['location']['lng'];
  $lat=$data['results'][0]['geometry']['location']['lat'];

          
           //store request send to api
            $sendy=new sendy;
            $sendy->buyer_address=  $address;
            $sendy->room=$request->room;
            $sendy->location_type=$request->location_type;
            $sendy->estate=$request->estate;
            $sendy->buyer_longitude= $long;
            $sendy->buyer_latitude= $lat;
            //insert seller id
            $cartItems = Cart::content();
            foreach($cartItems as $cartItem) {
            $sendy->seller_id= $cartItem->options->seller_id;
            }
            $sendy->user_id= Auth::guard('buyer')->user()->id;
            $sendy->save();

           

      //intergrating sendy API

           
       $cart=Cart::Content();
        // dd($cart;
foreach ($cart as $crt) {
  // echo $crt->options->seller_id;
 $productName = products::where('seller_id',$crt->options->seller_id)->first()->name;
  $sellerName = Seller::where('id',$crt->options->seller_id)->first()->first_name." ". Seller::where('id',$crt->options->seller_id)->first()->last_name;
$sellerLon = floatval(Seller::where('id',$crt->options->seller_id)->first()->longitude);
$sellerLat = floatval(Seller::where('id',$crt->options->seller_id)->first()->latitude);
$sellerAddress = Seller::where('id',$crt->options->seller_id)->first()->address;
$sellerNumber = Seller::where('id',$crt->options->seller_id)->first()->phonenumber;
$sellerEmail = Seller::where('id',$crt->options->seller_id)->first()->email;

//fetch from users
$buyerName = User::where('id',Auth::guard('buyer')->user()->id)->first()->first_name." ". User::where('id',Auth::guard('buyer')->user()->id)->first()->last_name;
$buyerNumber = User::where('id',Auth::guard('buyer')->user()->id)->first()->phonenumber;
$buyerEmail = User::where('id',Auth::guard('buyer')->user()->id)->first()->email;

//fetch from sendies
$buyerLon = floatval(sendy::where('user_id',Auth::guard('buyer')->user()->id)->first()->buyer_longitude);
$buyerLat = floatval(sendy::where('user_id',Auth::guard('buyer')->user()->id)->first()->buyer_latitude);
$buyerAddress = sendy::where('user_id',Auth::guard('buyer')->user()->id)->first()->buyer_address;


//fetch from shippings
$deliveryInstructions= Shipings::where('user_id',Auth::guard('buyer')->user()->id)->first()->delivery_instructions;
$deliveryTime= Shipings::where('user_id',Auth::guard('buyer')->user()->id)->first()->delivery_time;
$deliveryDate= Shipings::where('user_id',Auth::guard('buyer')->user()->id)->first()->delivery_date;
 $data = json_encode(
      
    [

     'command'=> 'request',
        'data'=>
    [
          'api_key'=> 'mysendykey',
          'api_username'=> 'mysendyusername',
   
   
     'from'=>
    [
          'from_name'=> $sellerName,
          'from_lat'=>$sellerLat,
          'from_long'=>$sellerLon,
          'from_description'=>$sellerAddress,
    ],
  
    
     'to'=>
    [
      'to_name'=> $buyerName,
      'to_lat'=>  $buyerLat,
      'to_long'=> $buyerLon,
      'to_description'=>$buyerAddress
    ],
     'recepient'=>
    [
          'recepient_name'=> $buyerName,
          'recepient_phone'=> "$buyerNumber",
           'recepient_email'=>$buyerEmail
    ],
     'delivery_details'=>
      ['pick_up_date'=>'2017-09-26 12:22:07',
       'collect_payment'=>
        [
         'status'=> false,
          'pay_method'=> 0,
          'amount'=> 10
        ],
          
         
        ],
        
    
        'return'=> true,
        'note'=> 'Sample note',
        'note_status'=> true,
        'request_type'=> 'quote',
        'order_type'=> 'ondemand_delivery',
        'ecommerce_order'=>'ecommerce_order_001',
        'skew'=>1,

        'package_size'=>
    [
          'weight'=> 5,
          'height'=> 10,
          'width'=>20,
          'length'=> 30,
           'item_name'=>$productName
    ],
    ], 

]);

 return $this->callSendyAPI($data);

}     
    }

       //make request to sendy API
public function callSendyAPI($data){
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://apitest.sendyit.com/v1/#request");
          
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HEADER, FALSE);

          curl_setopt($ch, CURLOPT_POST, TRUE);
 
           curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

           curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Content-Type: application/json"
           ));
            $response = curl_exec($ch);
          
           curl_close($ch);
           $response= json_decode($response, TRUE);
  //$cost= $sendy['data']['amount'];
  //$distance= $sendy['data']['distance'];

 //store into variables
     $order_no = $response['data']['order_no'];
     $cost= $response['data']['amount'];
     session()->put('orders', $order_no);
     session()->put('shipping', $cost);
  

          $cart=Cart::Content();
          foreach ($cart as $crt) {

$deliveryTime= Shipings::where('user_id',Auth::guard('buyer')->user()->id)->first()->delivery_time;
$deliveryDate= Shipings::where('user_id',Auth::guard('buyer')->user()->id)->first()->delivery_date;
$complete = json_encode(
      [
        
 'command'=> 'complete',
 'data'=> [
    'api_key'=> 'mysendykey',
          'api_username'=> 'mysendyusername',
           'order_no'=>session()->get('orders'),
   
     'delivery_details'=> 
      ['pick_up_date'=>'2017-09-27 13:22:07',
       'collect_payment'=>[
       'status'=> false,
          'pay_method'=> 0,
          'amount'=> 10,
      ],
      'return'=> false,
        'note'=> 'Sample note',
        'note_status'=> true
    ]
  ]

]);
      return $this->completeSendyAPI($complete);


    }
    

}
     
 public function completeSendyAPI($complete){

 $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://apitest.sendyit.com/v1/#complete");
          
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);
 
           curl_setopt($ch, CURLOPT_POSTFIELDS, $complete);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));
$rider= curl_exec($ch);
curl_close($ch);
$driver = json_encode(
      [
        
 'command'=> 'track',
 'data'=> [
    'api_key'=> 'mysendykey',
    'api_username'=> 'mysendyusername',
    'order_no'=>session()->get('orders')
  ]

]);

return $this->tracksendy($driver);     

}
public function tracksendy($driver){
  $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://apitest.sendyit.com/v1/#track");
          
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);
 
           curl_setopt($ch, CURLOPT_POSTFIELDS, $driver);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));
$rider_response= curl_exec($ch);
curl_close($ch);
$rider_response = json_decode($rider_response, TRUE);
$rider_phone =$rider_response['data']['rider_details']['rider_phone'];
  session()->put('phone', $rider_phone);
  return redirect()->route('checkout-payment');

}
     public function shipping(Request $request){
        $cartItems = Cart::content();
        $this->validate($request, [
            'deliveryDate' => 'required',
            'deliveryTime' => 'required',
            'phoneNumber' => 'required|min:10|max:16',
            'deliveryInstructions' => 'required|',
            'phoneNumber' => 'required|min:5|max:25']);

            $shiping=new Shipings;
            $shiping->delivery_date= $request->deliveryDate;
            $shiping->delivery_time= $request->deliveryTime;
            $shiping->delivery_instructions= $request->deliveryDate;
            $shiping->phone_number= $request->phoneNumber;
             foreach($cartItems as $cartItem) {
            $shiping->seller_id= $cartItem->options->seller_id;
            }
            $shiping->user_id= Auth::guard('buyer')->user()->id;
            $shiping->save();

      return redirect('checkout-address')->with('cartItems', $cartItems);
    }
   

    public function checkoutReview(){
        $cartItems = Cart::content();
     
        return view ('front.checkout.checkout-review',compact('cartItems'));
    }

    public function checkoutAddress(){
        
          // check for user login
         
          $cartItems = Cart::content();
          $orders = DB::table('orders')->where('user_id',Auth::guard('buyer')->user()->id)->first();
          return view ('front.checkout.checkout-address', compact('cartItems','orders'));
         
      
          
      }



   public function checkoutShipping(){
    
        $phoneNumber = DB::table('users')->where('id',  Auth::guard('buyer')->user()->id)->value('phonenumber');
          return view ('front.checkout.checkout-shipping',compact('cartItems','phoneNumber'));
      }
  
      public function checkoutPayment(){
          $cartItems = Cart::content();
           $orders = DB::table('orders')->where('user_id',Auth::user()->id)->first();
          return view ('front.checkout.checkout-payment',compact('cartItems','orders'));
      }
       public function checkoutFinal() 
    {
           Cart::destroy();
           $request->session()->forget('shipping');
       \Session::flash('done', 'Payments successfull!');
        return view('front.checkout.checkout-complete');
    }

}
