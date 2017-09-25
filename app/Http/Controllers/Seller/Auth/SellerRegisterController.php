<?php

namespace App\Http\Controllers\Seller\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seller;
use Illuminate\Support\Facades\Validator;

class SellerRegisterController extends Controller
{
    protected $redirectPath = '/seller';
    //shows registration form to seller
    public function showRegistrationForm()
    {
        return view('seller.register');
    }

  //Handles registration request for seller
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $seller = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($seller);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phonenumber' => 'required|min:10|max:15',
            'email' => 'required|email|max:255|unique:sellers',
            'password' => 'required|min:6|confirmed',
            
        ]);


    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {

         $address =$data['address'];
       $url="http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode( $address);
       $json = file_get_contents($url);
      $data2 = json_decode($json, TRUE);
      $lat=$data2['results'][0]['geometry']['location']['lat'];
      $long=$data2['results'][0]['geometry']['location']['lng'];

      
        return Seller::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'address' => $data['address'],
            'latitude' =>  $lat,
            'longitude' =>  $long,
            'phonenumber' => $data['phonenumber'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Seller
   protected function guard()
   {
       return Auth::guard('seller');
   }
}
