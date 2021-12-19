<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function counterdetails(){
        $counter=Counter::all();

        return view('admin.layout.counter',compact('counter'));
    }
    public function counter(){
        return view('admin.layout.counterform');
    }
     public function counterstore(Request $request)
    {
        $request->validate([
            'counter_location' =>'required',
            'phone' =>'required',
            
        ]);

    

        Counter::create([
            'counter_location' =>$request->input('counter_location'),
            'phone' =>$request->input('phone'),
            
                    
         ]);
         return redirect()->back();
    }
}
