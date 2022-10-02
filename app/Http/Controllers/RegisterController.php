<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    public function show(){
        return view('user.register');
    }

    public function store(Request $request){
        $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email|unique:users',
            'password' => ['required',Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()      
        ],
        'password_confirmation' => 'required|same:password'
        ]);

        $credentials=[
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => Role::USER,
        ];

        $user =User::create($credentials);

        if($user){
            return back()->withSuccess("You have successfully registered");
        }

        return back()->withError("Oops, Something went wrong!");

    }
}