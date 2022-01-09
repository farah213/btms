<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Seat;


class ShowSeatInfoController extends Controller
{
    public function showseatinfo($id){
        $seat = Seat::all();
        $trip = Trip::find($id);
        if ($trip) {
            return view('users.pages.showseatinfo',compact($trip,'seat'));

        }
    }
}
