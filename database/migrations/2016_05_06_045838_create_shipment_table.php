<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('status', array('Quote','Pending','Active','Canceled','Delivered','Error'))->default('Quote')->index('shipment_status');
			$table->integer('userid')->unsigned()->index('shipment_userid_idx');
			$table->string('pon', 45);
			$table->integer('from')->unsigned()->index('shipment_from_idx');
			$table->integer('to')->unsigned()->index('shipment_to_idx');
			$table->timestamp('datecreated')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->date('datetoship');
			$table->time('pickuptime');
			$table->string('description', 250);
			$table->string('contactname', 45);
			$table->string('contactphone', 15);
			$table->integer('vehicleid')->unsigned()->index('shipment_vehicleid_idx');
			$table->smallInteger('estimateddistance')->unsigned();
			$table->smallInteger('estimatedminutes')->unsigned()->default(0);
			$table->smallInteger('totaldistance')->unsigned()->default(0);
			$table->enum('distancemeasure', array('KM','MI'))->default('KM');
			$table->string('pickuplocation', 250);
			$table->string('deliverylocation', 250);
			$table->enum('hazardous', array('N','Y'))->default('N');
			$table->integer('customerid')->unsigned()->index('shipment_customerid_idx');
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
		Schema::drop('shipment');
	}

}
