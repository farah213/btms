<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function test(){
        return view('admin.content');
    }
    public function passenger()
    {
        return view('admin.layout.passengerlist');
    }
    public function booking()
    {
        return view('admin.layout.bookinglist');
    }
    public function report()
    {
        return view('admin.layout.reportlist');
    }
}
