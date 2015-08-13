<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opt', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('operation_reason');
            $table->date('date');
            $table->time('time');
            $table->string('status');
            $table->integer('timeslot_id');
            $table->integer('employee_id');
            $table->integer('patient_id');
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
		Schema::drop('opt');
	}

}
