<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblProduct', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('intArtId');
			$table->integer('intUserId');
			$table->string('strArtName', 100);
			$table->string('strArtDescription', 250);
			$table->string('strYearCreated', 25);
			$table->text('strArtImagePath')->nullable();
			$table->timestamps();
			$table->integer('intCategory');
			$table->integer('intStatus');
			$table->string('strPrice', 100);
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblProduct');
	}

}
