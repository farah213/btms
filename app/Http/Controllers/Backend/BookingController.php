<?php

namespace App\Http\Controllers\Backend;

use App\Models\Booking;
use App\Models\BusRoute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function bookinginfo()
    {
        $details = Booking::with('bookings_seat')->get();
        // dd($details);
        return view('admin.layout.bookinginfo',compact('details'));
    }

    public function bookingRelease(){
        $now = Carbon::now();

        $booking = Booking::all();

        foreach ($booking as $key => $book) {
            $book_time = $book->created_at;

            $diffInHoure = Carbon::parse($book_time);
            $length = $diffInHoure->diffInHours($now);
            // dd($length);
            if ($length>=24) {
                $book->delete();
                return redirect()->back();
            }
            else {
                return redirect()->back()->with('error', 'no seats are booked');
            }
        }
    }
     
}
