<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSquadronsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('squadrons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('squadron');
			$table->string('country');
			$table->string('logo');
			$table->string('web');
			$table->mediumText('description');
			$table->mediumText('internal_description');
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
		Schema::drop('squadrons');
	}

}
