<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auditlog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('record', 45);
			$table->integer('recordid')->unsigned();
			$table->string('field', 45);
			$table->string('oldvalue', 250);
			$table->string('newvalue', 250);
			$table->string('description', 250);
			$table->timestamp('lastmodified')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('modifiedby')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auditlog');
	}

}
