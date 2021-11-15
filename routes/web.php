<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\AddbusinfoController;


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
Route::get('/bus', [BusController::class,'Bus'])->name('bus');
Route::get('/route', [RouteController::class,'route'])->name('route');
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
Route::get('/add/businfo',[AddbusinfoController::class,'addbusinfo'])->name('addbusinfo');
// Route::post('/addbusinfo', [AddbusinfoController::class,'addbusinfo'])->name('addbusinfo');
