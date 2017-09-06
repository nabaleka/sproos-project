<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

class BuyerRegisterController extends Controller
{
    protected $redirectPath = '/account-profile';
    //shows registration form to buyer
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

  //Handles registration request for buyer
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create buyer
        $buyer = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($buyer);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phonenumber' => $data['phonenumber'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Seller
   protected function guard()
   {
       return Auth::guard('buyer');
   }
}
