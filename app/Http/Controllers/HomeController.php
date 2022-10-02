<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    //Load Home Page
    public function show(){
        return view('user.home');
    }
}
