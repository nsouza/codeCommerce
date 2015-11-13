<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("name", 100);
			$table->text(("description"));
			$table->decimal('price', 5, 2);
			$table->timestamps();
		});
	}

	
	
	//'name' => $faker->word(),
	//'description'=> $faker->sentence,
	//'price'=>$faker->randomNumber(2),
	//'category_id' => $faker->numberBetween(1,15)
	
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
