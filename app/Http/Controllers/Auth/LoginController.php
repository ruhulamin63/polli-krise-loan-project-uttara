<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_index() {

        return view('authenticate.login-from');
    }
    public function postLogin() {
        
        return view('authenticate.login-from');
    }


    public function registration(){

        return view('authenticate.register-from');
    }
    public function postRegistration(){

        return view('authenticate.register-from');
    }
}
