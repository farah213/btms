<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
   public function locationlist()
    {
        $location=Location::all();
        return view ('admin.layout.locationlist',[
            'location'=>$location
        ]);
        
    }

    public function locationform()
    {
        return view ('admin.layout.locationform');
    }
     

    //store

    public function locationstore (Request $request){

        {
           
   
              $locations = new Location();
              $locations->Location_name  = $request->input('Location_name');
              $locations->To  = $request->input('To');
              $locations->save();
   
             return redirect()->back()->with('msg','Submit Successfully.');
              
           }
            }
            
} 
 