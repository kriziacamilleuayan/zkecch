<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblUser', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('intId');
			$table->integer('intUserType');
			$table->string('strUserName', 100);
			$table->string('strPenName', 50);
			$table->string('strDescription', 250);
			$table->string('strWebsite', 50);
			$table->string('strContactNumber', 25);
			$table->text('strImagePath')->nullable();
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
		Schema::dropIfExists('tblUser');
	}

}
