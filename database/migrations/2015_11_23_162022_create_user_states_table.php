<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_states', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('state')->unique();
			$table->string('description');
			$table->string('image');
			$table->string('image_thumb');
			$table->mediumText('obs');
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
		Schema::drop('users');
	}

}
