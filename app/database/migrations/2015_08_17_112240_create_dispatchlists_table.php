<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispatchlistsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatchlists', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->double('req_amount');
            $table->double('total_amount');
            $table->string('note');
            $table->string('dispatch_list_id');
            $table->string('status');
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
        Schema::drop('dispatchlists');
    }

}
