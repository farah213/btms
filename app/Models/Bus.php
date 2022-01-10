<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    // protected $guarded = [];
    protected $fillable=['bus_name','bus_type','seat_capacity','coach_number'];
    use HasFactory;
}
