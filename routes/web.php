<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LocationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class,'test']);
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
//route for bus
Route::get('/bus', [BusController::class,'Bus'])->name('bus');
Route::get('/add/businfo',[BusController::class,'addbusinfo'])->name('addbusinfo');
Route::post('/store',[BusController::class,'store'])->name('store');

//route for user
Route::get('/userform', [UserController::class, 'userform'])->name('userform');

//route for location
Route::get('/locationform',[LocationController::class,'locationform'])->name('locationform');
Route::post('/locationstore', [LocationController::class,'locationstore'])->name('locationstore');
Route::get('/locationlist', [LocationController::class,'locationlist'])->name('locationlist');

//route for booking
Route::get('/bookingtable', [BookingController::class,'bookingtable'])->name('bookingtable');
