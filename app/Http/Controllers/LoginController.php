<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        if(Auth::check()){
            return redirect('/');
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::Attempt($data)){
            return redirect('/dashboard')->with('success', 'Anda berhasil Login');
        } else {
            return redirect('/login')->with('error', 'anda gagal login');
        }
    }

    public function actionLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
