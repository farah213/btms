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
        $bookings = Booking::where('trip_id',$id)->get();
        $book = $bookings->pluck('id');
        // dd($book);
        $bookingSeat = Bookings_seat::whereIn('bookings_id',$book)->get();
        $bookedSeat = $bookingSeat->pluck('seat_id');
        // dd($bookedSeat);
        $seat = Seat::whereNotIn('id',$bookedSeat)->get();
        // dd($seat);
        $trip = Trip::find($id);
        if ($trip) {
            return view('users.pages.showseatinfo',compact('trip','seat'));

        }
    }

    public function bookTicket(Request $request,$id){
        //  dd($request->all());
        
        $trip = Trip::find($id);
        // dd($trip->price);
        $book = Booking::create([
            'user_id'=>auth()->user()->id,
            'trip_id'=>$id
        ]);
        foreach ($request->seat as $key=>$seat) {     
            Bookings_seat::create([
                'bookings_id'=>$book->id,
                'seat_id'=>$seat
            ]);
        }
        // dd($key+1);
        $subtotal = $trip->price * ($key+1);
        $book = Booking::find($book->id);
        $book->update([
            'sub_total'=>$subtotal
        ]);
        return redirect()->back()->with('message','your ticket booking done');

    }
}
