<?php

namespace App\Http\Controllers\Backend;

use App\Models\Trip;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function test()
    {
        

        return view('admin.content');
    }
    public function dashboard()
    {
        $count['trip']=Trip::all()->count();
        $count['booking']=Booking::all()->count();
        $count['userform']=User::all()->count();
        
        return view ('admin.content', compact('count'));
    }
}
