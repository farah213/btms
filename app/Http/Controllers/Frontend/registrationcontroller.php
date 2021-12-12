<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use  Illuminate\Support\Facades\Auth;

class registrationcontroller extends Controller
{
    public function registrationshow()
    {
        return view('users.pages.registration');
    }

    public function userstore(Request $request)
    {
        // dd($request->all());


        User::Create([
        'name'=>$request->name,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'password'=>bcrypt( $request->password),
        'phone'=>$request->phone,
        
        ]);
        return redirect()->back();
        
    }
  

    public function loginPost(Request $request){
        // dd($request->all());

        $userpost = $request->except('_token');
        // dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('frontend.user');
        }
        else
        return redirect()->route('loginshow');
    }

}
