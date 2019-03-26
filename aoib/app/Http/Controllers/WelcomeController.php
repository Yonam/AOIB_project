<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function showWelcmePageAsLogin(){
    	return redirect('signin.index');
    }
}
