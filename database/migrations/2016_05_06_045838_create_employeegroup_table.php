<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeegroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employeegroup', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('securitygroupid')->unsigned()->index('employeegroup_securitygroupid_idx');
			$table->integer('employeeid')->unsigned()->index('employeegroup_employeeid_idx');
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
		Schema::drop('employeegroup');
	}

}
