<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('type')->index('vehicle_vehicletypeid_idx');
			$table->string('number', 10);
			$table->integer('userid')->unsigned()->index('vehicle_userid_idx');
			$table->string('color', 45)->default('');
			$table->boolean('status', 1);
			$table->decimal('latitude', 10, 7);
			$table->decimal('longitude', 10, 7);
			$table->string('device', 45);
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
		Schema::drop('vehicle');
	}

}
