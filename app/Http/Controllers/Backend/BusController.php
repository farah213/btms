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
    

        Bus::create([
            'name' =>$request->input('name'),
            'type' =>$request->input('type'),
            'bus_from' =>$request->input('bus_from'),
            'bus_to' =>$request->input('bus_to'),
            'bus_price' =>$request->input('bus_price'),             
         ]);
         return redirect()->back();
    }

}

