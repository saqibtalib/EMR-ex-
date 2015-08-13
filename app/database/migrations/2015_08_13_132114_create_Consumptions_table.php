<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumptionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Consumptions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('meal');
            $table->string('medicine');
            $table->string('bed');
            $table->string('room');
            $table->string('operation');
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
        Schema::drop('Consumptions');
    }

}
