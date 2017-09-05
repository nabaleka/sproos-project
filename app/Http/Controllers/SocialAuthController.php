<?php

namespace App\Http\Controllers;
use App\LoginUser;

use Illuminate\Http\Request;
use App\Exceptions\SocialAuthException;

class SocialAuthController extends Controller
{
    
    protected $loginUser;
    
    public function __construct(LoginUser $loginUser)
    {
        $this->loginUser = $loginUser;
    }

    public function auth($provider)
    {
        return $this->loginUser->authenticate($provider);
    }
 
    public function login($provider)
    {
        try {
            $this->loginUser->login($provider);
            return redirect()->back();
        } catch (SocialAuthException $e) {
            return redirect()->back()->with('flash-message', $e->getMessage());
        }
    }
}
