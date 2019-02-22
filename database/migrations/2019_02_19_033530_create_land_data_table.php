<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_data', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('swimmer_id');
            $table->date('date');
            $table->string('time');
            $table->integer('intensity');
            $table->integer('duration');
            $table->integer('workload');

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
        Schema::dropIfExists('land_data');
    }
}
