<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('balancesheets', function(Blueprint $table)
		{
			$table->increments('id');
            $table->double('total_amount');
            $table->double('payable_amount');
            $table->double('receivable_amount');
            $table->string('vendor_id');
            $table->string('balancesheet_id');
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
		Schema::drop('balancesheets');
	}

}
