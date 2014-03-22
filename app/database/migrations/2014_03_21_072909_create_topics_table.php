<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('topic_name', 65);
			$table->string('topic_desc')->nullable();
			$table->date('ingame_date')->nullable();
			$table->foreign('cat_id')->references('id')->on('categories')->unsigned();
			$table->foreign('board_id')->references('id')->on('boards')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->unsigned();
			$table->foreign('group_id')->references('id')->on('groups')->unsigned();
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
		Schema::drop('topics');
	}

}
