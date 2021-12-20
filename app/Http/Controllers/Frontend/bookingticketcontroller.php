<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusRoute;

class bookingticketcontroller extends Controller
{
     public function bookingshow()
     {
         $from = BusRoute::all();
        // dd($from);
         return view('users.pages.bookingpage',compact('from'));
     }
}
