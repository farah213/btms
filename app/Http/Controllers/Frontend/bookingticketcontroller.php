<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bookingticketcontroller extends Controller
{
     public function bookingshow()
     {
         return view('users.pages.bookingpage');
     }
}
