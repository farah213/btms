<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function bus()
    {
        $bus=Bus::all();
        return view('admin.layout.bus',[
            'bus'=>$bus
        ]);
    }
    
    public function addbusinfo()
    {
        return view('admin.layout.addbusinfo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bus_name' =>'required',
            'bus_type' =>'required',
            'seat_capacity' =>'required',
            'coach_number' =>'required',
            'seat_availablity' =>'required',
            'seat_number' =>'required',
        ]);

    

        Bus::create([
            'bus_name' =>$request->input('bus_name'),
            'bus_type' =>$request->input('bus_type'),
            'seat_capacity' =>$request->input('seat_capacity'),
            'coach_number' =>$request->input('coach_number'),
            'seat_availablity' =>$request->input('seat_availablity'),
            'seat_number' =>$request->input('seat_number'),
                    
         ]);
         return redirect()->back();
    }

}

