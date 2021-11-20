<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function Bus()
    {
        return view('admin.layout.bus');
    }
    
    public function addbusinfo()
    {
        return view('admin.layout.addbusinfo');
    }

    public function store(Request $request)
    {
       

        Bus::create([
            'bus_name' =>$request->input('name'),
            'bus_type' =>$request->input('type'),
            'bus_from' =>$request->input('bus_from'),
            'bus_to' =>$request->input('bus_to'),
            'price' =>$request->input('bus_price'),             
         ]);
    }

}

