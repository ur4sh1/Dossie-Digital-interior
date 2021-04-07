<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){
        if(Auth::check() === true){
            return view('admin.dashboard');
        }
        return redirect()->route( 'admin.login');
    }

    public function login(){
        return view('admin.login');
    }

}
