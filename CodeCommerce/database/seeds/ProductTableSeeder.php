<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
use Faker\Factory as Faker;


class ProductTableSeeder extends Seeder {
	function run() {
		DB::table('products')->truncate();
		
		$faker = Faker::create();
		
		Foreach(range(1,40) as $i){
			
			foreach (range(1, 40) as $i){
		
		Product::create([
				'name'=> $faker->word(),
				'description' => $faker->sentence(),
				'price' => $faker->randomNumber(2),
				'categoty_id' => $faker->numberBetween(1,15)
		]);
		
		}
		}
	}
}