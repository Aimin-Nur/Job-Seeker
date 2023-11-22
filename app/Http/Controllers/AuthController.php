<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        if (Auth::guard('user')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = Auth::guard('user')->user();

            // Periksa peran pengguna dan arahkan ke halaman yang sesuai
            if ($user->role == 'User') {
                return redirect('/');
            } elseif ($user->role == 'Admin') {
                return redirect('/dashboardAdmin');
            }
        }

        return redirect('/login')->with(['warning' => 'Email atau Password Anda tidak terdaftar.']);
    }

    public function LogoutUser()
    {
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            return redirect('/login')->with(['logout' => 'Anda berhasil Logout.']);
        }
    }

    // public function LoginAdmin(Request $request)
    // {
    //     if(Auth::guard('admin')->attempt([
    //         'email' => $request -> email,
    //         'password' => $request->password,
    //         ])){
    //         return redirect('/dashboardAdmin');
    //        }else{
    //         return redirect('/portal')->with(['warning' => 'Email atau Password Anda tidak terdaftar.']);
    //        }
    // }


    // public function LogoutAdmin()
    // {
    //     if(Auth::guard('admin')->check()){
    //         Auth::guard('admin')->logout();
    //         return redirect('/portal')->with(['sukses' => 'Anda Berhasil Logout.']);;
    //     }
    // }
}
