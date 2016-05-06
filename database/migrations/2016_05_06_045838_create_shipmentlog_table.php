<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShipmentlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipmentlog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shipmentid')->unsigned()->index('shipmentlog_shipmentid_idx');
			$table->string('message', 45);
			$table->string('detail', 150);
			$table->string('status', 45);
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
		Schema::drop('shipmentlog');
	}

}
