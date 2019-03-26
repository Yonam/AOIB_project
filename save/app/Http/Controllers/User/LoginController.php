<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

  //  use AuthenticatesUsers;
    protected $redirectTo = '/dashboard';

    public function  __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
    	 return view('user.signin');

    }

    public function logins(){
        
    }


}
