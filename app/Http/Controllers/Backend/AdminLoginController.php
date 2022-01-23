<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){
        return view ('admin.layout.adminlogin');

    }

   public function dologin(Request $request){
        $userpost=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($userpost)){
            return redirect()->route('dashboard')->with('message','Login succesful!');
        }
        else
        return redirect()->route('admin.login');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logout succesful!');
    }
}
