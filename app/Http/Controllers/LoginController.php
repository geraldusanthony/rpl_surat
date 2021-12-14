<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('layoutmhs');
        }
        return redirect ('loginpage');
    }

    public function postloginadmin (Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('admin');
        }
        return redirect ('loginadmin');
    }

    public function postlogindosen (Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('dosen');
        }
        return redirect ('logindosen');
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('loginpage');
    }
    public function logoutdosen (Request $request){
        Auth::logoutdosen();
        return redirect('logindosen');
    }
    public function logoutadmin (Request $request){
        Auth::logoutadmin();
        return redirect('loginadmin');
    }
}
