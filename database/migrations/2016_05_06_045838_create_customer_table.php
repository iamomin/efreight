<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 45);
			$table->string('firstname', 45);
			$table->string('lastname', 45);
			$table->string('password', 45);
			$table->enum('status', array('Active','Inactive','Suspended'))->default('Active');
			$table->integer('addressid')->unsigned()->index('customer_addressid_idx');
			$table->string('email', 45);
			$table->string('contact', 15);
			$table->timestamp('lastmodified')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('remembertoken', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
