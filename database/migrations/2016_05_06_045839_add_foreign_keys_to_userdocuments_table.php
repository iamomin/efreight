<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserdocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('userdocuments', function(Blueprint $table)
		{
			$table->foreign('userid', 'userdocuments_userid')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('userdocuments', function(Blueprint $table)
		{
			$table->dropForeign('userdocuments_userid');
		});
	}

}
