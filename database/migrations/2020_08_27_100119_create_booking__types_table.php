<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking__types', function (Blueprint $table) {
            $table->id();
            $table->string('room_id');
            $table->string('table_id');
            $table->string('event_id');
            $table->string('shop_id');
            $table->timestamps();

            $table->foreign('room_id')
                ->reference(id)
                ->on('room');
            $table->foreign('table_id')
                ->reference(id)
                ->on('table');
            $table->foreign('event_id')
                ->reference(id)
                ->on('table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking__types');
    }
}
