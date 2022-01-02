<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusRoute;

class BookingController extends Controller
{
    public function bookinginfo()
    {
        
        return view('admin.layout.bookinginfo');
    }
}
