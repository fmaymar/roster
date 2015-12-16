<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('name')->nullable();
			$table->string('surname')->nullable();
			$table->string('surname2')->nullable();
			$table->string('callsign')->unique();
			$table->date('birthdate')->nullable();
			$table->string('nationality')->nullable();
			$table->string('country')->nullable();
			$table->string('prov')->nullable();
			$table->string('local')->nullable();
			$table->string('addres')->nullable();
			$table->string('first_tlf')->nullable();
			$table->string('second_tlf')->nullable();
			$table->string('photo')->nullable();
			$table->string('photo_thumb')->nullable();
			$table->string('sign')->nullable();
			$table->string('sign_thumb')->nullable();
			$table->integer('squadron_id')->unsigned();
			$table->foreign('squadron_id')->references('id')->on('squadrons');
			$table->integer('user_state_id')->unsigned();
			$table->foreign('user_state_id')->references('id')->on('user_states');
			$table->boolean('show');
			$table->mediumText('obs')->nullable();
			$table->mediumText('internal_obs')->nullable();
			$table->enum('type',['admin','colaborator','user']);
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
		Schema::drop('profiles');
	}

}
