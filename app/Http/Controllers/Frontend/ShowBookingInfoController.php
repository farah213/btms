<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowBookingInfoController extends Controller
{
    public function showbookinginfo(){
        $details = Booking::with('bookings_seat')->where('user_id',auth()->user()->id)->get();
        // dd($details);
        // dd(auth()->user());
        return view('users.pages.showbookinginfo',compact('details'));
    }
     public function viewinfo($id){
         $detail = Booking::find($id);
         return view('users.pages.viewinfo',compact('detail'));
     }
}
