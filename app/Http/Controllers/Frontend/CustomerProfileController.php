<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function customerprofile(){
        return view('users.pages.customerprofile');
    }
}
