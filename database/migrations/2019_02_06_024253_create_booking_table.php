<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('service_id');
            $table->foreign('service_id')
                    ->references('id')
                    ->on('bookings');

            $table->date('departure_date');
            $table->string('departure_time', 25);
            $table->date('return_date');
            $table->string('return_time', 25);
            $table->string('status', 15);

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
