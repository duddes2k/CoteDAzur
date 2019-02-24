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

            $table->unsignedInteger('booking_id');
            $table->foreign('booking_id')
                ->references('id')
                ->on('bookings');

            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('phone', 25);
            $table->string('email', 50);
            $table->text('other_info')->nulllable();

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
