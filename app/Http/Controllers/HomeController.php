<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    //Load Home Page
    public function LoadHome(){
        return view('user.home');
    }
}
