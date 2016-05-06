<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicletypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicletype', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('type', 45);
			$table->string('name', 45);
			$table->enum('measureofunit', array('KM','MI'))->default('KM');
			$table->decimal('baseunit', 9)->unsigned()->default(0.00);
			$table->decimal('baserate', 9)->unsigned()->default(0.00);
			$table->decimal('rateperunit', 9)->unsigned()->default(0.00);
			$table->decimal('waitingcharge', 9)->unsigned()->default(0.00);
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
		Schema::drop('vehicletype');
	}

}
