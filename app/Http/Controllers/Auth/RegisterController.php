<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
   
    /**
     * Create a new user instance after a valid registration.
     *
     * @param App\Http\Requests\RegisterRequest $request
     * @return \App\User
     */
    protected function create(RegisterRequest $request)
    {
        
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            //'password' => bcrypt($request['password']),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Sukces rejestracji uzytkownika' ,
        ]);
        
    }
}
