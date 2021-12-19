<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
 public function driver(){
         $driver=Driver::all();
      return view('admin.layout.driver',compact('driver'));
    }
    public function driverform(){
        return view('admin.layout.driverform');
    }
     public function driverstore(Request $request)
    { 
        //   dd($request->all());
        $request->validate([
            'name' =>'required',
            'phone' =>'required',
            'age' =>'required',
            'voter_id' =>'required',
            'driver_licence_no' =>'required',
            
        ]);

    

        Driver::create([
            'name' =>$request->input('name'),
            'phone' =>$request->input('phone'),
            'age' =>$request->input('age'),
            'voter_id' =>$request->input('voter_id'),
            'driver_licence_no' =>$request->input('driver_licence_no'),
            
                    
         ]);
         return redirect()->back();
    }
}
