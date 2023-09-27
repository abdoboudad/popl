<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name'=>'required|string|min:3|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:8|max:50',
        ]);
        $user = User::create([
            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>Hash::make($fields['password']),
        ]);
        $token = $user->createToken('myapptoken')->plainTextToken;
        return response([
            'user'=>$user,
            'token'=>$token,
        ],201);
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:50',
        ]);
        $user = User::where('email',$fields['email'])->first();
        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response([
                'message'=>'bad login !!',
            ],401);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        return response([
            'user'=>$user,
            'token'=>$token,
        ],201);
    }   

    public function logout(){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'you has been logout',
        ];
    }
}
