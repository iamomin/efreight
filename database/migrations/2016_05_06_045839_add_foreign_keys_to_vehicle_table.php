<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicle', function(Blueprint $table)
		{
			$table->foreign('userid', 'vehicle_userid')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type', 'vehicle_vehicletypeid')->references('id')->on('vehicletype')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicle', function(Blueprint $table)
		{
			$table->dropForeign('vehicle_userid');
			$table->dropForeign('vehicle_vehicletypeid');
		});
	}

}
