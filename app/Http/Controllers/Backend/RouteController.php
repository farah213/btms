<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function route()
    {
        return view('admin.layout.route');
    }
}
