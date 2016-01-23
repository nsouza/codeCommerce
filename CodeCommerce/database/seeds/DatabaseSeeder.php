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
		Model::unguard(); //Não esqueça de rodas o dump-autoload

		$this->call('UserTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('ProductTableSeeder');
		
	}

}
