<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPaymentController extends Controller
{
    public function userpayment($id){
        // dd($id);
        $view = true;
        $booking = Booking::find($id);
        $payment = Payment::where('booking_id',$id)->get();
        // dd($payment);
        if ($payment->isEmpty() ) {
            $view = false;
            return view('users.pages.userpayment',compact('id','booking','view'));
        }else {
            return view('users.pages.userpayment',compact('id','booking','view'));
        }
        
        
    }

    public function postPayment(Request $request,$id){
        // dd($request->all());
        // dd($id);     
        Payment::create([
            'booking_id'=>$id,
            'user_id'=>$request->user_id,
            'payment_mathod'=>$request->payment_mathod,
            'transaction_id'=>$request->transaction_id,
            'amount'=>$request->amount,
        ]);
        return redirect()->back()->with('message','payment succesful!');
    }
}
