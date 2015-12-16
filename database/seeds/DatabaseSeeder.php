<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->truncateTables(array(
				'squadrons',
				'user_states',
				'users',
				'profiles'
		));

		$this->call('SquadronTableSeeder');
		$this->call('UserStateTableSeeder');
		$this->call('CreateAdminSeeder');
		$this->call('UserTableSeeder');
		//$this->call('');


	}

	private function truncateTables(array $tables)
	{
		$this->checkForeignKeys(false);

		foreach ($tables as $table) {
			DB::table($table)->truncate();
		}

		$this->checkForeignKeys(true);
	}

	private function checkForeignKeys($check)
	{
		$check=$check ? '1':'0';
		DB::statement('SET FOREIGN_KEY_CHECKS ='. $check);
	}

}
