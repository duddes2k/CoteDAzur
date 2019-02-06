<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('bookings_id');
            $table->foreign('bookings_id')->references('id')->on('bookings');

            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone', 25);
            $table->string('email', 50);
            $table->text('other_info');
            $table->text('departure_address');
            $table->text('arrival_address');

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
        Schema::dropIfExists('clients');
    }
}
