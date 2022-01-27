<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings_seats', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('bookings_id')->unsigned();
             $table->foreign('bookings_id')->references('id')->on('bookings');
             $table->unsignedBigInteger('seat_id')->unsigned();
             $table->foreign('seat_id')->references('id')->on('seats');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings_seats');
    }
}
