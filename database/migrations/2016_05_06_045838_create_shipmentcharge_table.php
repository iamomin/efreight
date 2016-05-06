<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShipmentchargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipmentcharge', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shipmentid')->unsigned()->index('shipmentcharge_shipmentid_idx');
			$table->integer('chargetype')->unsigned();
			$table->string('chargename', 45);
			$table->decimal('chargeamount', 9)->default(0.00);
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
		Schema::drop('shipmentcharge');
	}

}
