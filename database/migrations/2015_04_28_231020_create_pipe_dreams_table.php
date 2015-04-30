<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePipeDreamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pipe_dreams', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name')->nullable();
			$table->string('title');
			$table->text('description')->nullable();
			$table->string('location')->nullable();
			$table->timestamps();

			$table->foreign('user_id')
						->references('id')
						->on('users')
						->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pipe_dreams');
	}

}
