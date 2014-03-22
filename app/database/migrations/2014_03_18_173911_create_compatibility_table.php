<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompatibilityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compatibility', function($table)
		{
			$table->unsignedInteger('project');
			$table->unsignedInteger('version');
			$table->foreign('project')->references('id')->on('projects');
			$table->foreign('version')->references('id')->on('ndless');
			$table->primary(array('project','version'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('compatibility');
	}

}
