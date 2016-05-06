<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShipmentchargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shipmentcharge', function(Blueprint $table)
		{
			$table->foreign('shipmentid', 'shipmentcharge_shipmentid')->references('id')->on('shipment')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shipmentcharge', function(Blueprint $table)
		{
			$table->dropForeign('shipmentcharge_shipmentid');
		});
	}

}
