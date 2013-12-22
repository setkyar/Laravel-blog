<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTabel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function($table)
	    {
	        $table->increments('id');
	        $table->string('username');
	        $table->string('email')->unique();
	        $table->string('password');
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
		Schema::drop('user');
	}

}