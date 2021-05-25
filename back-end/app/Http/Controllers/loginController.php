<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;


class loginController extends Controller
{
    //
    public function login(Request $request)
    {
        # code..
        $request->validate([
            'email'=>['required','email'],
            'password' => ['required']
        ]);
       
        // $user = Auth::attempt($request->only('email','password'));
        $user = User::where('email',$request['email'])->first();

        if(!$user || !Hash::check($request['password'], $user->password)){
            return  response()->json(['invalid'=>'The provided credentials are incorrect.'],422);
        }else{

            $token = $user->createToken('myapptoken')->plainTextToken;

            $response = ["user"=>$user, "token"=>$token];
            return $response;
        }

    }

    public function logout(Request $request)
    {
        # code...
        // $user = User::where('email',$request['email'])->first();
        Auth::user()->tokens()->delete();
        // Auth::logout();
    
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
    }
}
