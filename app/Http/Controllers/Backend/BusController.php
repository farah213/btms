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

    public function edit($id){
        // dd($id);
        $bus=Bus::find($id);
        return view('admin.layout.editbusinfo',[
            'bus'=>$bus
        ]);
    }
    public function update(Request $request){
        // dd($request);
        $bus=Bus::findOrFail($request->id);
        $bus->bus_name = $request->bus_name;
        $bus->bus_type = $request->bus_type;
        $bus->seat_capacity = $request->seat_capacity;
        $bus->coach_number = $request->coach_number;
        $bus->seat_availablity = $request->seat_availablity;
        $bus->seat_number = $request->seat_number;

        $bus->save();
        return redirect('/bus');
    }

    
    public function delete($id){
        $bus=Bus::find($id);
        $bus->delete();
        return redirect()->back();

    }

}

