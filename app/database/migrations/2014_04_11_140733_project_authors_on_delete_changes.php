<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectAuthorsOnDeleteChanges extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('project_authors', function($table)
		{		
			$table->dropForeign('project_authors_project_foreign');
			$table->foreign('project')->references('id')->on('projects')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('project_authors', function($table)
		{
			$table->dropForeign('project_authors_project_foreign');
			$table->foreign('project')->references('id')->on('projects');
		});
	}

}
