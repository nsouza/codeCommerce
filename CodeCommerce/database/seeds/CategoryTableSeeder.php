<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;
use Faker\Factory as Faker;


class CategoryTableSeeder extends Seeder {
	function run() {
		DB::table('categories')->truncate();
		
		$faker = Faker::create();
		
		Foreach(range(1,15) as $i){
		
		Category::create([
				'name'=> $faker->word(),
				'description' => $faker->sentence()
		]);
		
		}
	}
}