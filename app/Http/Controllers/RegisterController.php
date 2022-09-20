<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function LoadRegister(){
        return view('user.register');
    }
}
