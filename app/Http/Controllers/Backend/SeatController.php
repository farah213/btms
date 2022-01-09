<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function seat(){
        $seat=Seat::all();
        return view('admin.layout.seat',[
         'seat'=>$seat    
        ]);
    }
    public function addseatinfo(){
        return view('admin.layout.addseatinfo');
    }
     public function store(Request $request)
     {
        //  dd($request->all());
         Seat::create([
            'seat_number' =>$request->seat_number,
            'seat_status' =>$request->status,
            ]);
         return redirect()->back();
     }
     public function seatdelete($id){
         Seat::find($id)->delete();
         return redirect()->back()->with('success','Seat Delete.');
     }

}
