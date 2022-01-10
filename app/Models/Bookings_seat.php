<?php

namespace App\Models;

use App\Models\Seat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookings_seat extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function seat(){
        return $this->belongsTo(Seat::class);
    }
}
