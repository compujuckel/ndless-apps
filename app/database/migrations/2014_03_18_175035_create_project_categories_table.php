<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_categories', function($table)
		{
			$table->unsignedInteger('project');
			$table->unsignedInteger('category');
			$table->foreign('project')->references('id')->on('projects');
			$table->foreign('category')->references('id')->on('categories');
			$table->primary(array('project','category'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_categories');
	}

}
