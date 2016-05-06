<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shipment', function(Blueprint $table)
		{
			$table->foreign('customerid', 'shipment_customerid')->references('id')->on('customer')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('from', 'shipment_from')->references('id')->on('address')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('to', 'shipment_to')->references('id')->on('address')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('userid', 'shipment_userid')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('vehicleid', 'shipment_vehicleid')->references('id')->on('vehicle')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shipment', function(Blueprint $table)
		{
			$table->dropForeign('shipment_customerid');
			$table->dropForeign('shipment_from');
			$table->dropForeign('shipment_to');
			$table->dropForeign('shipment_userid');
			$table->dropForeign('shipment_vehicleid');
		});
	}

}
