<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index() {
        return view('login');
    }
    
    function login (Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            // Kalau otentikasi sukses
            session()->flash('success', 'Login Berhasil');
           return redirect('admin/dashboard');
        } else {
            session()->flash('failed', 'Login Tidak Berhasil');
            return redirect('/')->withErrors('Salah');
        }
    }

    function logout () {
        Auth::logout();
        session()->flash('logout', 'Logout Berhasil!');
        return redirect('/');
    }
}
