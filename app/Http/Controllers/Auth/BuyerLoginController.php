<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use App\User;

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
        $this->middleware('guest:buyer');
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

        return view('auth.login');

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
           return redirect()->intended( route('account-profile'));
       }

       return redirect()->back()->withInput($request->only('email','remember'));
   #}

        #$this->validateLogin($request);

        #if ($this->attemptLogin($request)) {

            #return $this->sendLoginResponse($request);

        #}

        #return $this->sendFailedLoginResponse($request);

    }

     /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function logout(Request $request)
     {
         Auth::guard('buyer')->logout();
         Auth::guard()->logout();
         $request->session()->flush();
         $request->session()->regenerate();
         return redirect()->guest(route( 'login' ));
     }

}
