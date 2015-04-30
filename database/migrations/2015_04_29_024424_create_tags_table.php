<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


		Schema::create('tags', function(Blueprint $table)
		{
			// $table->engine = "InnoDB";
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('pipe_dream_tag', function(Blueprint $table)
		{

			$table
				->integer('tag_id')
			//	->length(10)
				->unsigned()
				->index();
			$table
				->foreign('tag_id')
				->references('id')
				->on('tags')
				->onDelete('cascade');

			$table
				->integer('pipe_dream_id')
			//	->length(10)
				->unsigned()
				->index();
			$table
				->foreign('pipe_dream_id')
				->references('id')
				->on('pipe_dreams')
				->onDelete('cascade');

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
		Schema::drop('pipe_dream_tag');
		Schema::drop('tags');
	}

}
