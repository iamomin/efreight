<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmployeegroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('employeegroup', function(Blueprint $table)
		{
			$table->foreign('employeeid', 'employeegroup_employeeid')->references('id')->on('employee')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('securitygroupid', 'employeegroup_securitygroupid')->references('id')->on('securitygroup')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('employeegroup', function(Blueprint $table)
		{
			$table->dropForeign('employeegroup_employeeid');
			$table->dropForeign('employeegroup_securitygroupid');
		});
	}

}
