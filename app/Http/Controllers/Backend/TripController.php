<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller

{
   
    public function trip(){
        $trip=Trip::all();
        return view('admin.layout.trip',compact('trip'));
    }
    public function tripform(){
        return view('admin.layout.tripform');
    }
     public function tripstore(Request $request)
    { 
        //   dd($request->all());
        $request->validate([
            'bus_name' =>'required',
            'bus_type' =>'required',
            'from' =>'required',
            'to' =>'required',
            'time' =>'required',
            'price' =>'required'
            
        ]);

        Trip::create([
            'bus_name' =>$request->input('bus_name'),
            'bus_type' =>$request->input('bus_type'),
            'from' =>$request->input('from'),
            'to' =>$request->input('to'),
            'time' =>$request->input('time'),
            'price' =>$request->input('price'),
            
                    
         ]);
         return redirect()->back()->with('message', 'Trip added succesfully !');
    }
}
