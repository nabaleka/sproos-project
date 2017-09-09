<?php



namespace App\Http\Controllers\Seller\Auth;



use App\Http\Controllers\Controller;

use App\Seller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class LoginController extends Controller

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


    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    
    protected $redirectTo = '/seller';

    public function __construct()
    {
        $this->middleware('guest:seller',['except'=>['logoutSeller']]);
    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */



     public function showLoginForm()

    {

        return view('seller.login');

    }

    public function login(Request $request)

    {
      //Validate
       $this->validate($request , [
           'email'=>'required|email',
           'password'=>'required|min:6'

       ]);

       //Attempt
       if( Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
           //if successful redirect
           return redirect()->intended( route('seller'));
       }

       return redirect()->back()->withInput($request->only('email','remember'));
    }

    //Function to log out the seller guard
    public function logoutSeller(){
        Auth::guard('seller')->logout();
        return redirect(route('seller.login'));
    }

}
