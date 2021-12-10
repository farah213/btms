<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
    public function registrationshow()
    {
        return view('users.pages.registration');
    }

}
