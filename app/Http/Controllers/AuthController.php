<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){ 
            return redirect('/admin/dashboard')->with('login_sukses', 'Selamat datang ');
        }
        else {
            return redirect('/login')->with('gagal', 'Email atau Password salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('info', 'Anda berhasil logout! Sampai jumpa!');
    }
}
