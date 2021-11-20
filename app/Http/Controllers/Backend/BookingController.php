<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingtable()
    {
        return view('admin.layout.bookingtable');
    }
}
