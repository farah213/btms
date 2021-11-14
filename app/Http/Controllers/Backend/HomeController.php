<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test()
    {
        return view('admin.content');
    }
    public function dashboard()
    {
        return view ('admin.content');
    }
}
