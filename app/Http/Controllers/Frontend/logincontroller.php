<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
     public function loginshow()
     {
         return view('users.pages.login');
     }
}
