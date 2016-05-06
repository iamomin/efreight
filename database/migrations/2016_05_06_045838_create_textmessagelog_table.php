<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextmessagelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('textmessagelog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shipmentid')->unsigned()->index('textmessagelog_shipmentid_idx');
			$table->integer('textmessageid')->unsigned()->index('textmessagelog_textmessageid_idx');
			$table->enum('status', array('Unsent','Sending','Delivered','Failure','Enroute','Undeliverable','Received'));
			$table->enum('ownertype', array('Customer','User'));
			$table->integer('ownerid')->unsigned();
			$table->text('message', 65535);
			$table->timestamp('datecreated')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('datedelivered');
			$table->string('phone', 15);
			$table->boolean('attempt')->default(0);
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
		Schema::drop('textmessagelog');
	}

}
