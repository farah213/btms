<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users');
             $table->unsignedBigInteger('trip_id')->unsigned();
             $table->foreign('trip_id')->references('id')->on('trips');
             $table->integer('sub_total')->nullable();
              $table->foreignId('counter_id')->constrained();
             $table->softDeletes();
            //  $table->string('status')->default('booked');
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
        Schema::dropIfExists('bookings');
    }
}
