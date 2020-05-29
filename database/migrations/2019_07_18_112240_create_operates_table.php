<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vehicle_id');
            $table->integer('trip_id');
            $table->date('date_from');
            $table->date('date_to');


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
        Schema::dropIfExists('operates');
    }
}
