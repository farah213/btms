<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddbusinfoController extends Controller
{
    public function addbusinfo()
    {
        return view('admin.layout.addbusinfo');
    }
}
