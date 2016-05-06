<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSecuritygrouppermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('securitygrouppermissions', function(Blueprint $table)
		{
			$table->foreign('securitygroupid', 'securitygrouppermissions_securitygroupid')->references('id')->on('securitygroup')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('securitygrouppermissions', function(Blueprint $table)
		{
			$table->dropForeign('securitygrouppermissions_securitygroupid');
		});
	}

}
