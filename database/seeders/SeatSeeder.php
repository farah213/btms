<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Seat;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seat::create([
            'seat_number'=>'A1'
        ]);
        Seat::create([
            'seat_number'=>'A2'
        ]);
        Seat::create([
            'seat_number'=>'A3'
        ]);
        Seat::create([
            'seat_number'=>'A4'
        ]);
        Seat::create([
            'seat_number'=>'B1'
        ]);

        Seat::create([
            'seat_number'=>'B3'
        ]);
        Seat::create([
            'seat_number'=>'B4'
        ]);
        Seat::create([
            'seat_number'=>'C2'
        ]);
        Seat::create([
            'seat_number'=>'C4'
        ]);
        Seat::create([
            'seat_number'=>'D1'
        ]);
        Seat::create([
            'seat_number'=>'D3'
        ]);
        Seat::create([
            'seat_number'=>'E1'
        ]);
        Seat::create([
            'seat_number'=>'E2'
        ]);
        Seat::create([
            'seat_number'=>'F1'
        ]);
        Seat::create([
            'seat_number'=>'F2'
        ]);
        Seat::create([
            'seat_number'=>'G2'
        ]);
        Seat::create([
            'seat_number'=>'G3'
        ]);
        Seat::create([
            'seat_number'=>'H2'
        ]);
        Seat::create([
            'seat_number'=>'H4'
        ]);

    }
}
