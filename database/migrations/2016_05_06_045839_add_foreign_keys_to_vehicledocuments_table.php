<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehicledocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicledocuments', function(Blueprint $table)
		{
			$table->foreign('vehicleid', 'vehicledocuments_vehicleid')->references('id')->on('vehicle')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicledocuments', function(Blueprint $table)
		{
			$table->dropForeign('vehicledocuments_vehicleid');
		});
	}

}
