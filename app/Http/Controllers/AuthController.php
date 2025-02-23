<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user =User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
            ]);
            $token =$user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'token'=>$token,
                'user'=>$user
            ]);
    }
  

    public function login(Request $request)
    {
        

    }
}
