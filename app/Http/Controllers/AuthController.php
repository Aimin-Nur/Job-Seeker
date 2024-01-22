<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function LoginUser(Request $request)
    {

        if (Auth::guard('user')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Autentikasi sebagai user berhasil
            $user = Auth::guard('user')->user();
            $userId = $user->id;
            return redirect('/logUser/' . $userId);
        } elseif (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Autentikasi sebagai admin berhasil
            return redirect('/dashboardAdmin');
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

    public function LogoutAdmin()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect('/login')->with(['logout' => 'Anda berhasil Logout sebagai Admin.']);
        }
    }

    public function LoginCompany(Request $request)
    {
        if (Auth::guard('company')->attempt([
            'nama_company' => $request->field_company,
            'password' => $request->field_password,
        ])) {
            // Autentikasi sebagai user berhasil
            $company = Auth::guard('company')->user();
            $companyId = $company->id_company;
            return redirect('/profileCompany/' . $companyId);
        }

        return redirect('/login')->with(['warningCompany' => 'Nama Perusahaan atau Password Anda salah.']);
    }
}
