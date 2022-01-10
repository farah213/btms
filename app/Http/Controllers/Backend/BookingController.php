<?php

namespace App\Http\Controllers\Backend;

use App\Models\Booking;
use App\Models\BusRoute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function bookinginfo()
    {
        $details = Booking::with('bookings_seat')->get();
        // dd($details);
        return view('admin.layout.bookinginfo',compact('details'));
    }
     
}
