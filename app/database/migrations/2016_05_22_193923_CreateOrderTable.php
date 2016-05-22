<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOrder', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('intId');
			$table->integer('intProdId');
			$table->string('strName', 100);
			$table->string('strUserEmail', 100);
			$table->string('strContactNumber', 25);
			$table->text('strAddress');
			$table->integer('intDeliveryMode');
			$table->timestamps();
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
		Schema::dropIfExists('tblOrder');
	}

}
