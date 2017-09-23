<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Model\Admin\products;
use Gloudemans\Shoppingcart\Facades\Cart;
#use App\Model\order;
use App\Orders;
use App\shipings;
use App\sellers;
use App\users; 
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
  $long=$data['results'][0]['geometry']['location']['lat'];
  $lat=$data['results'][0]['geometry']['location']['lng'];

          
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

           
         
           $shipings_details = DB::table('shipings')
                  ->leftJoin('sellers', 'sellers.id', '=', 'shipings.seller_id')
                  ->leftJoin('sendies', 'sendies.id', '=','shipings.user_id')
                  ->leftJoin('users', 'users.id', '=','shipings.user_id')
                  ->select('shipings.*', 'sellers.first_name as seller_name', 'sellers.phonenumber as seller_phonenumber', 'sellers.email as seller_email', 'users.first_name as customer_name', 'users.phonenumber as customer_phonenumber', 'users.email as customer_email', 'sellers.latitude as latitude', 'sellers.longitude as longitude', 'sellers.address as address', 'sendies.buyer_address as buyer_address', 'sendies.buyer_longitude as buyer_longitude', 'sendies.buyer_latitude as buyer_latitude')
                 ->where('shipings.user_id', '=', Auth::guard('buyer')->user()->id)
                  ->get();
 foreach ( $shipings_details as  $shipings_detail){
    $data = json_encode(
      
    [

     'command'=> 'request',
        'data'=>
    [
          'api_key'=> 'mysendykey',
          'api_username'=> 'mysendyusername'
    ],
   
     'from'=>
    [
          'from_name'=> $shipings_detail->seller_name,
          'from_lat'=>$shipings_detail->longitude,
          'from_long'=>$shipings_detail->latitude,
          'from_description'=>$shipings_detail->address,
    ],
  
    
     'to'=>
    [
      'to_name'=>$shipings_detail->customer_name,
      'to_lat'=>  $shipings_detail->buyer_latitude,
      'to_long'=> $shipings_detail->buyer_longitude,
      'to_description'=>$shipings_detail->buyer_address,
    ],
     'recepient'=>
    [
          'recepient_name'=> $shipings_detail->customer_name,
          'recepient_phone'=> $shipings_detail->customer_phonenumber,
           'recepient_email'=>$shipings_detail->customer_email
    ],
     'delivery_details'=>
      ['pick_up_date'=>$shipings_detail->delivery_date  ,
       'collect_payment'=>
        [
         'status'=> 'false',
          'pay_method'=> 0,
          'amount'=> 'art::subtotal()'
        ],
          
         
        ],
        
    
        'return'=> true,
        'note'=> 'Sample note',
        'note_status'=> true,
        'request_type'=> 'delivery',
        'order_type'=> 'ondemand_delivery',
        'ecommerce_order'=>'ecommerce_order_001',
        'skew'=>1,

        'package_size'=>
    [
          'weight'=> 5,
          'height'=> 10,
          'width'=>20,
          'length'=> 30,
           'item_name'=>'cloth'
    ],
    

]);
    }
          $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://private-anon-efb47e5b8a-sendypublicapi.apiary-mock.com/v1/#request");
          
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          
          curl_setopt($ch, CURLOPT_POST, TRUE);
 
           curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));
$response = curl_exec($ch);

curl_close($ch);

var_dump($response);

              

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

      public function newTest(){
           $shipings_details = DB::table('shipings')
                  ->leftJoin('sellers', 'sellers.id', '=', 'shipings.seller_id')
                  ->leftJoin('sendies', 'sendies.id', '=','shipings.user_id')
                  ->leftJoin('users', 'users.id', '=','shipings.user_id')
                  ->select('shipings.*', 'sellers.first_name as seller_name', 'sellers.phonenumber as seller_phonenumber', 'sellers.email as seller_email', 'users.first_name as customer_name', 'users.phonenumber as customer_phonenumber', 'users.email as customer_email', 'sellers.latitude as latitude', 'sellers.longitude as longitude', 'sellers.address as address', 'sendies.buyer_address as buyer_address', 'sendies.buyer_longitude as buyer_longitude', 'sendies.buyer_latitude as buyer_latitude')
                 ->where('shipings.user_id', '=', Auth::guard('buyer')->user()->id)
                  ->get();
 foreach ( $shipings_details as  $shipings_detail){
    $data = json_encode(
      
    [

     'command'=> 'request',
        'data'=>
    [
          'api_key'=> 'mysendykey',
          'api_username'=> 'mysendyusername'
    ],
   
     'from'=>
    [
          'from_name'=> $shipings_detail->seller_name,
          'from_lat'=>$shipings_detail->longitude,
          'from_long'=>$shipings_detail->latitude,
          'from_description'=>$shipings_detail->address,
    ],
  
    
     'to'=>
    [
      'to_name'=>$shipings_detail->customer_name,
      'to_lat'=>  $shipings_detail->buyer_latitude,
      'to_long'=> $shipings_detail->buyer_longitude,
      'to_description'=>$shipings_detail->buyer_address,
    ],
     'recepient'=>
    [
          'recepient_name'=> $shipings_detail->customer_name,
          'recepient_phone'=> $shipings_detail->customer_phonenumber,
           'recepient_email'=>$shipings_detail->customer_email
    ],
     'delivery_details'=>
      ['pick_up_date'=>$shipings_detail->delivery_date  ,
       'collect_payment'=>
        [
         'status'=> 'false',
          'pay_method'=> 0,
          'amount'=> 'art::subtotal()'
        ],
          
         
        ],
        
    
        'return'=> true,
        'note'=> 'Sample note',
        'note_status'=> true,
        'request_type'=> 'delivery',
        'order_type'=> 'ondemand_delivery',
        'ecommerce_order'=>'ecommerce_order_001',
        'skew'=>1,

        'package_size'=>
    [
          'weight'=> 5,
          'height'=> 10,
          'width'=>20,
          'length'=> 30,
           'item_name'=>'cloth'
    ],
    

]);
    }
 return   $shipings_details;
    }
      public function checkoutComplete(){
       
        Cart::destroy();
          return view('front.checkout.checkout-complete');
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

}
