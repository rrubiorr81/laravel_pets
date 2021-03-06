<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('population');
			$table->integer('language_id')->unsigned();
			$table->foreign('language_id')->references('id')->on('languages');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
