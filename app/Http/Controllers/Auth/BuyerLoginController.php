<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\admin\categories;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class BuyerLoginController extends Controller

{

    /*

    |--------------------------------------------------------------------------

    | Login Controller

    |--------------------------------------------------------------------------

    |

    | This controller handles authenticating users for the application and

    | redirecting them to your home screen. The controller uses a trait

    | to conveniently provide its functionality to your applications.

    |

    */



    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:buyer',['except'=>['logout','buyerLogout']]);
    }



    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    protected $redirectTo = '/account-profile';



    /**

     * Create a new controller instance.

     *

     * @return void

     */



     public function showLoginForm()

    {
        $categories = categories::all();
        $cartItems = Cart::content();
        return view('auth.login',compact('categories','cartItems'));

    }

    public function login(Request $request)

    {
      //Validate
       $this->validate($request , [
           'email'=>'required|email',
           'password'=>'required|min:6'

       ]);

       //Attempt
       if( Auth::guard('buyer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
           //if successful redirect
           return redirect()->intended( route('account'));
       }

       return redirect()->back()->withInput($request->only('email','remember'));
  
    }
     /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function buyerLogout()
     {
         Auth::guard('buyer')->logout();
         //Auth::guard('web')->logout();
         return redirect()->guest(route('login'));
     }

}
