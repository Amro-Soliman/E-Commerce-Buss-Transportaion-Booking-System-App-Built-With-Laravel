<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationalintervalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operationalintervals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('start_date');
            $table->string('end_date');
            $table->boolean('Saturday')->default(0)->nullable;
            $table->boolean('Sunday')->default(0)->nullable;
            $table->boolean('Monday')->default(0)->nullable;
            $table->boolean('Tuesday')->default(0)->nullable;
            $table->boolean('Wednesday')->default(0)->nullable;
            $table->boolean('Thursday')->default(0)->nullable;
            $table->boolean('Friday')->default(0)->nullable;




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
        Schema::dropIfExists('operationalintervals');
    }
}
