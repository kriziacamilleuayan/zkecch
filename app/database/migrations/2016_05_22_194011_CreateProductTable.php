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
			$table->increments('intId');
			$table->integer('intUserId');
			$table->string('strName', 100);
			$table->string('strDescription', 250);
			$table->string('strYearCreated', 25);
			$table->text('strImagePath')->nullable();
			$table->timestamps();
			$table->integer('intCategory');
			$table->integer('intStatusId');
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
