<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function locationform()
    {
        return view ('admin.layout.locationform');
    }

    //store

    public function locationstore (Request $request){

        {
           $this->validate($request,[
               'location_name' => 'required',
               'status' =>  'required',
           ]);
   
              $locations = new Location();
              $locations->location_name  = $request->input('location_name');
              $locations->status  = $request->input('status');
   
              $locations->save();
   
   
              return redirect()->back()->with('msg','Submit Successfully.');
              
           }
            }
            public function locationlist(){
                return view ('admin.layout.locationlist');
            }
} 
 