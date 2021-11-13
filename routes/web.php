<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\RouteController;

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

// Route::get('/', function () {
//     return view('admin.content');
// });

Route::get('/', [ContentController::class,'test']);
Route::get('/passengerlist',[ContentController::class,'passenger'])->name('passenger');
Route::get('/buslist', [BusController::class,'Bus'])->name('Bus');
Route::get('/bookinglist', [ContentController::class,'booking'])->name('booking');
Route::get('/routelist', [RouteController::class,'Route'])->name('Route');
Route::get('/reportlist', [ContentController::class,'report'])->name('report');