<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userform()
    {
        $data=User::all();
        return view('admin.layout.userform',compact('data'));
    }

  
}
