<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function LoginUser(Request $request)
    {
        if(Auth::guard('user')->attempt([
            'email' => $request -> email,
            'password' => $request->password,
            ])){
            return redirect('/');
           }else{
            return redirect('/login')->with(['warning' => 'Email atau Password Anda tidak terdaftar.']);
           }
    }

    public function LogoutUser()
    {
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            return redirect('/login')->with(['logout' => 'Anda berhasil Logout.']);
        }
    }
}
