<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwimDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swim_data', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('swimmer_id');
            $table->date('date');
            $table->string('time');
            $table->integer('distance');
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
        Schema::dropIfExists('swim_data');
    }
}
