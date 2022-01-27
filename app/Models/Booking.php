<?php

namespace App\Models;

use App\Models\Trip;
use App\Models\User;
use App\Models\Bookings_seat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $guarded = [];
    use HasFactory, SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bookings_seat(){
        return $this->hasmany(Bookings_seat::class,'bookings_id','id');
    }

    public function trip(){
        return $this->belongsTo(Trip::class);
    }

    public function seat(){
        return $this->belongsToMany(Seat::class);
    }


     public function counter(){
        return $this->belongsTo(Counter::class,'counter_id','id');
    }
}
