<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills', function(Blueprint $table)
		{
			$table->increments('id');
            $table->double('room_charges');
            $table->double('bed_charges');
            $table->double('operation_charges');
            $table->double('meal_charges');
            $table->double('medicine_charges');
            $table->double('total_charges');
            $table->string('note');
            $table->string('patient_id');
            $table->string('bill_id');
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
		Schema::drop('bills');
	}

}
