<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
   public function Routelist()
    {
        $route=Route::all();
        return view ('admin.layout.routelist',[
            'route'=>$route
        ]);
        
    }

    public function routeform()
    {
        return view ('admin.layout.routeform');
    }
     

    //store

    public function routestore (Request $request){

        {
            $request->validate([
               'Route_name'  =>'required' ,
                'To'  =>'required' ,

            ]);
           
   
              $routes = new Route();
              $routes->Route_name  = $request->input('Route_name');
              $routes->To  = $request->input('To');
              $routes->save();
   
             return redirect()->back()->with('msg','Submit Successfully.');
              
           }
            }
            
} 
 