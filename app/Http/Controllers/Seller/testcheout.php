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

            $recepient= DB::table('users')->where('id',$sendy->user_id)->get()->first();
            $delivery_details= DB::table('shipings')->where('id',$sendy->user_id)->get()->first();
            $sellers= DB::table('sellers')->where('id',$cartItem->options->seller_id)->get()->first();
            $recepient_details= DB::table('users')
                 ->leftJoin('shipings', 'shipings.id', '=', 'shipings.user_id')
                 ->get()->first();
          $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://private-anon-efb47e5b8a-sendypublicapi.apiary-mock.com/v1/#request");
          curl_setopt($ch, CURLOPT_HEADER, FALSE);

          curl_setopt($ch, CURLOPT_POST, TRUE);
 
            curl_setopt($ch, CURLOPT_POSTFIELDS,"{
           \"command\": \"request\",
           \"data\": {
           \"api_key\": \"V5NMutKdAKcCR2AQNbmD\",
           \"api_username\": \"luchetu\",
           \"from\": {
        
        <?php foreach($sellers as $seller): ?>
         \"from_name\": \" <?php echo $seller->first_name?>\",
      \"from_lat\": <?php echo $seller->longitude?>,
      \"from_long\":<?php echo $seller->latitude?>,
      \"from_description\": \"\"
      <?php endforeach; ?>
     
    },
    \"to\": {
      \"to_name\": \"<?php echo  $recepient_details->first_name ?>\",
      \"to_lat\": <?php echo $recepient_details->buyer_latitude?>,
      \"to_long\": <?php echo $recepient_details->buyer_longitude ?>,
      \"to_description\": \"\"
    },
    \"recepient\": {
      \"recepient_name\": \"Humphrey\",
      \"recepient_phone\": \"0702092083\",
      \"recepient_email\": \"humluchetu@gmail.com\"
    },
    \"delivery_details\": {
      \"pick_up_date\": \"<?php echo $delivery_details->delivery_date echo $delivery_details->delivery_time?>\",
      \"collect_payment\": {
        \"status\": false,
        \"pay_method\": 0,
        \"amount\": <?php echo Cart::subtotal() ?>
      },
      \"return\": true,
      \"note\": \" Sample note\",
      \"note_status\": true,
      \"request_type\": \"delivery\",
      \"order_type\": \"ondemand_delivery\",
      \"ecommerce_order\": \"ecommerce_order_001\",
      \"skew\": 1,
      \"package_size\": [
        {
          \"weight\": 20,
          \"height\": 10,
          \"width\": 200,
          \"length\": 30,
          \"item_name\": \"laptop\"
        }
      ]
    }
  }
}");

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
            $shiping->user_id= Auth::guard('buyer')->user()->id;
            $shiping->save();

      return redirect('checkout-address')->with('cartItems', $cartItems);
    }
    public function test(){
     $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://private-anon-efb47e5b8a-sendypublicapi.apiary-mock.com/v1/#request");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"command\": \"complete\",
  \"data\": {
    \"api_key\": \"V5NMutKdAKcCR2AQNbmD\",
    \"api_username\": \"luchetu\",
    \"order_no\": \"AA23MS878\",
    \"delivery_details\": {
      \"pick_up_date\": \"2016-04-15 12:12:12\",
      \"collect_payment\": {
        \"status\": false,
        \"pay_method\": 0,
        \"amount\": 10
      },
      \"return\": false,
      \"note\": \" Sample note\",
      \"note_status\": true
    }
  }
}");

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
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
