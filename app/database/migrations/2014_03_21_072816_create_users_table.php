<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('user_name');
			$table->string('email');
			$table->string('password');
			$table->timestamps();
			$table->string('user_display')->nullable();
			$table->string('user_location')->nullable();
			$table->string('user_intro')->nullable();
			$table->string('user_posts')->default(0);
			$table->string('user_gender')->nullable();
			$table->string('user_birth')->nullable();
			$table->foreign('avatar_id')->references('id')->on('images')->unsigned();
			$table->string('playby')->nullable();
			$table->string('birthdate')->nullable();
			$table->string('gender')->nullable();
			$table->string('occupation')->nullable();
			$table->string('rank')->nullable();
			$table->string('personality')->nullable();
			$table->string('biography')->nullable();
			$table->string('freeform')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
