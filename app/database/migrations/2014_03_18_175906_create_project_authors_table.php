<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_authors', function($table)
		{
			$table->unsignedInteger('project');
			$table->unsignedInteger('author');
			$table->foreign('project')->references('id')->on('projects');
			$table->foreign('author')->references('id')->on('authors');
			$table->primary(array('project','author'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_authors');
	}

}
