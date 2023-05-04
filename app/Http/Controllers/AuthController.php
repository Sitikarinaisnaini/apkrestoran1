<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('auth.login');
    }
    public function register (){
        return view('auth.register');
    }
    public function postregister(Request $request){
        $user = new \App\Models\User;
        $user->role ="pegawai";
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->Password =bcrypt ($request->password);
        $user->telp = $request->telp;
        $user->alamat= $request->alamat;

        $user->save();
        return redirect('/login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/dashboard');
}

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
