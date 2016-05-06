<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicledocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicledocuments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehicleid')->unsigned()->index('vehicledocuments_vehicleid_idx');
			$table->string('name', 45);
			$table->string('type', 45);
			$table->binary('data', 65535);
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
		Schema::drop('vehicledocuments');
	}

}
