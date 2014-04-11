<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectsOnDeleteChanges extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('compatibility', function($table)
		{
			$table->dropForeign('compatibility_project_foreign');
			$table->foreign('project')->references('id')->on('projects')->onDelete('cascade');
			
			$table->dropForeign('compatibility_version_foreign');
			$table->foreign('version')->references('id')->on('ndless')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('compatibility', function($table)
		{
			$table->dropForeign('compatibility_project_foreign');
			$table->foreign('project')->references('id')->on('projects');
			
			$table->dropForeign('compatibility_version_foreign');
			$table->foreign('version')->references('id')->on('ndless');
		});
	}

}
