<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;
class UserTableSeeder extends Seeder {
	function run() {
		DB::table ( 'users' )->truncate ();
		
		$user = factory (CodeCommerce\User::class)->create ( [ 
				'name' => 'Wesley',
				'email' => 'wesleywillians@gmail.com',
				'password' => Hash::make ( 123456 ) 
		] );
		
		$user = factory ( 'CodeCommerce\User', 10 )->create ();
	}
}