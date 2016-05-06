<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTextmessagelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('textmessagelog', function(Blueprint $table)
		{
			$table->foreign('shipmentid', 'textmessagelog_shipmentid')->references('id')->on('shipment')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('textmessageid', 'textmessagelog_textmessageid')->references('id')->on('textmessage')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('textmessagelog', function(Blueprint $table)
		{
			$table->dropForeign('textmessagelog_shipmentid');
			$table->dropForeign('textmessagelog_textmessageid');
		});
	}

}
