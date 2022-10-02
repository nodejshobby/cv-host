<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Show login form
    public function show(){
        return view('user.login');
    }

    // Authenticates users
    public function signin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember_me = ($request->remember_me) ? TRUE : FALSE;

        if(Auth::attempt(['email'=> $request->email,'password'=>$request->password, 'role_id' => Role::USER],$remember_me)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withInput($request->only('email'))->withError("Username or Password is incorrect!");
    }


    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home.show');
    }
    
}
