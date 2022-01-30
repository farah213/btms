<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusRoute;
use App\Models\Trip;


class bookingticketcontroller extends Controller
{
    
     public function bookingshow()
     {
           
         $from = BusRoute::all();        
         return view('users.pages.bookingticket',compact('from'));
     }
     public function webbusdetails(Request $request){
        // dd($request->all());
        $date = $request->date;
         $from = $request->query('from');
          $to = $request->query('to');
       
        if($from && $to){
            $trip= Trip ::where('from',$from)
            ->where('to',$to)->get(); 
             return view('users.pages.webbusdetails',compact('trip','date'));
        }
        //  dd(request()->all());
          $trip=Trip::all();

         return view('users.pages.webbusdetails',compact('trip'));
     }
       public function webbusdetailsstore(Request $request)
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
         return redirect()->back();
    }
}
