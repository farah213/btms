<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\DriverController;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ReportController;
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

Route::group(['middleware'=>'auth'],function(){
    

Route::get('/admin', [HomeController::class,'test']);
Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
//route for bus
Route::get('/bus', [BusController::class,'bus'])->name('bus');
Route::get('/add/businfo',[BusController::class,'addbusinfo'])->name('addbusinfo');
Route::post('/store',[BusController::class,'store'])->name('store');
Route::get('/bus/{id}/delete',[BusController::class,'delete'])->name('bus.delete');
Route::get('/bus/{id}/edit',[BusController::class,'edit'])->name('bus.edit'); 
Route::post('/bus/update',[BusController::class,'update'])->name('bus.update');

// route for counter
 Route::get('/counter/form' ,[CounterController::class,'counter'])->name('counter.details');
 Route::get('/counter' ,[CounterController::class,'counterdetails'])->name('counter');
 Route::post('/counter/store' ,[CounterController::class,'counterstore'])->name('counter.store');

//  route for driver
Route::get('/driver/details' ,[DriverController::class,'driver'])->name('driver.details');
Route::get('/driver/form' ,[DriverController::class,'driverform'])->name('driver.form');
Route::post('/driver/store' ,[DriverController::class,'driverstore'])->name('driver.store');

// route for trip
Route::get('/trip/details' ,[TripController::class,'trip'])->name('trip.details');
Route::get('/trip/form' ,[TripController::class,'tripform'])->name('trip.form');
Route::post('/trip/store' ,[TripController::class,'tripstore'])->name('trip.store');




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
});








//website

Route::get('/', function(){
    return view('users.master');
})->name('frontend.user');

Route::get('/user/login/show',[registrationcontroller::class,'loginshow'])->name('loginshow');
Route::post('/login/post',[registrationcontroller::class,'loginPost'])->name('user.post.login');
Route::get('/user/registration/show',[registrationcontroller::class,'registrationshow'])->name('registration');
Route::post('/user/store',[registrationcontroller::class,'userstore'])->name('user.store');
Route::get('/user/logout',[registrationcontroller::class,'logout'])->name('user.logout');
Route::get('/bookingticket/show',[bookingticketcontroller::class,'bookingshow'])->name('booking');
Route::get('/webbusdetails/show',[bookingticketcontroller::class,'webbusdetails'])->name('webbusdetails');





