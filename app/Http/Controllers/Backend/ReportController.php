<?php

namespace App\Http\Controllers\Backend;

use App\Models\Booking;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        // dd($request->all());
        $search = $request->query('search');

        if($search){
            // dd($search);

        $user = User::where('email', 'LIKE', '%' .$search. '%')->get();

            $user_id = $user->pluck('id');

            // dd($user_id);
            $details = Booking::where('user_id',$user_id)->orderBy('id', 'DESC')->get();
            // dd($details);
       return view('admin.layout.reportlist',compact('details'));

        }


        $details = Booking::with('bookings_seat')->orderBy('id', 'DESC')->get();
        return view('admin.layout.reportlist',compact('details'));
    }

    
}
