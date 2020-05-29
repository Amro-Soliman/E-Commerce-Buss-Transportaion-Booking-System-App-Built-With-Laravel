<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('line_name');
            $table->integer('operator_id');
            $table->integer('departure_station')->foreign('departure_station_fk')->references('station_id')->on('stations');
            $table->integer('arrival_station')->foreign('arrival_station_fk')->references('station_id')->on('stations');
            $table->longText('description');



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
        Schema::dropIfExists('lines');
    }
}
