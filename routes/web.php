<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Frontend\logincontroller;
use App\Http\Controllers\Frontend\registrationcontroller;
use App\Http\Controllers\Frontend\bookingticketcontroller;





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



Route::get('/admin', [HomeController::class,'test']);
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
//route for bus
Route::get('/bus', [BusController::class,'bus'])->name('bus');
Route::get('/add/businfo',[BusController::class,'addbusinfo'])->name('addbusinfo');
Route::post('/store',[BusController::class,'store'])->name('store');
Route::get('/bus/{id}/delete',[BusController::class,'delete'])->name('bus.delete');
Route::get('/bus/{id}/edit',[BusController::class,'edit'])->name('bus.edit'); 
Route::post('/bus/update',[BusController::class,'update'])->name('bus.update');



//route for user
Route::get('/userform', [UserController::class, 'userform'])->name('userform');


//route for location
Route::get('/routeform',[RouteController::class,'routeform'])->name('routeform');
Route::post('/routestore', [RouteController::class,'routestore'])->name('routestore');
Route::get('/routelist', [RouteController::class,'routelist'])->name('routelist');

//route for booking
Route::get('/bookingtable', [BookingController::class,'bookingtable'])->name('bookingtable');

//route for payment
Route::get('/paymentinfo', [PaymentController::class,'payment'])->name('payment');

//route for report
Route::get('/report', [ReportController::class,'report'])->name('reportlist');








//website

Route::get('/', function(){
    return view('users.master');
})->name('frontend.user');

Route::get('/user/login/show',[logincontroller::class,'loginshow'])->name('loginshow');
Route::get('/user/registration/show',[registrationcontroller::class,'registrationshow'])->name('registration');
Route::get('/bookingticket/show',[bookingticketcontroller::class,'bookingshow'])->name('booking');
Route::post('/user/store',[registrationcontroller::class,'userstore'])->name('user.store');
Route::post('/login/post',[registrationcontroller::class,'loginPost'])->name('user.post.login');


