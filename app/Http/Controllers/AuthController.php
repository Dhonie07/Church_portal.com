<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignup(){

        return view('User.Auth.Sign-up');
    }
}
