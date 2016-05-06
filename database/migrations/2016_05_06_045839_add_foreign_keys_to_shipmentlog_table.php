<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShipmentlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shipmentlog', function(Blueprint $table)
		{
			$table->foreign('shipmentid', 'shipmentlog_shipmentid')->references('id')->on('shipment')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shipmentlog', function(Blueprint $table)
		{
			$table->dropForeign('shipmentlog_shipmentid');
		});
	}

}
