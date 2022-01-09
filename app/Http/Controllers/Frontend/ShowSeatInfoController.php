<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Seat;
use App\Models\Booking;
use App\Models\Bookings_seat;



class ShowSeatInfoController extends Controller
{
    public function showseatinfo($id){
        $seat = Seat::all();
        $trip = Trip::find($id);
        if ($trip) {
            return view('users.pages.showseatinfo',compact('trip','seat'));

        }
    }

    public function bookTicket(Request $request,$id){
        // dd($request->all());
        // dd($id);
        // $trip = Trip::find($id);
        $book = Booking::create([
            'user_id'=>auth()->user()->id,
            'trip_id'=>$id
        ]);
        foreach ($request->seat as $seat) {
            Bookings_seat::create([
                'bookings_id'=>$book->id,
                'seat_id'=>$seat
            ]);
        }
        return redirect()->back();

    }
}
