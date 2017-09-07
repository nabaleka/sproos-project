<?php



namespace App\Http\Controllers\Admin\Auth;



use App\Http\Controllers\Controller;

use App\Admin;


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

    protected $redirectTo = '/admin';

    public function __construct()

        {

            $this->middleware('guest:admin',['except' => ['logoutAdmin']]);

        }



    /**

     * Create a new controller instance.

     *

     * @return void

     */



     public function showLoginForm()

    {

        return view('admin.login');

    }

    public function login(Request $request)

    {

      //Validate
       $this->validate($request , [
           'email'=>'required|email',
           'password'=>'required|min:6',
       ]);

       //Attempt
       if( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
           //if successful redirect
           return redirect()->intended(route('admin'));
       }

       return redirect()->back()->withInput($request->only('email','remember'));

    }

    public function logoutAdmin(){
      
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));

    }

}
