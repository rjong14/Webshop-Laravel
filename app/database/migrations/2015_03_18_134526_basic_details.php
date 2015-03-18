<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BasicDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Categorie', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
		});

    
		Schema::create('menu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('label');
      $table->string('link');
      $table->bigInteger('parent')->nullable();
		});
    
 		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('description');
      $table->timestamp('date');
      $table->bigInteger('gebrID')->nullable();
		});   
    
  	Schema::create('orderregel', function(Blueprint $table)
		{
			$table->increments('order_regel_id');
      $table->bigInteger('order_id')->nullable();
      $table->bigInteger('producten_id')->nullable();
      $table->string('aantal')->nullable();
		});     
     
    
   	Schema::create('producten', function(Blueprint $table)
		{
			$table->increments('id');
      $table->bigInteger('prCategorie')->nullable();
      $table->string('prNaam')->nullable();
      $table->string('prPrijs')->nullable();
      $table->string('prImage')->nullable();
      $table->string('isURL')->nullable();
      $table->string('prBeschrijving')->nullable();
      $table->string('prKbeschrijving')->nullable();
      $table->timestamps();
		});        
    
    
		if (!Schema::hasTable('users')) {
            Schema::create(
                'users',
                function ($table) {
                    $table->bigIncrements('id');
			        $table->string('username', 16);
			        $table->string('password', 64);
			        $table->timestamps();
			    }
			);
     }
    
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Categorie');
		Schema::drop('menu');
		Schema::drop('orders');
    Schema::drop('orderregel');
    Schema::drop('producten');
    Schema::drop('users');
	}

}
