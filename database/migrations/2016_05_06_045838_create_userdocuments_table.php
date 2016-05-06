<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserdocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userdocuments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 45);
			$table->string('type', 45);
			$table->binary('data', 65535);
			$table->integer('userid')->unsigned()->index('userdocuments_userid_idx');
			$table->timestamp('lastmodified')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userdocuments');
	}

}
