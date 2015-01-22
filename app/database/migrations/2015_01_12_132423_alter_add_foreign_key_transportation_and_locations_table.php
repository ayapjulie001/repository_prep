<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyTransportationAndLocationsTable extends Migration {

	protected $table = 'transportation_and_locations';

	/**
	 * Run the migrations.
	 *
	 * @return voidSchema::dropIfExists($this->table);
	 */
	public function up()
	{
		echo "altering table $this->table...\n";
		Schema::table($this->table, function (Blueprint $table) {
			$table->foreign('location_type_id')->references('id')->on('location_types');
            $table->foreign('condominium_id')->references('id')->on('condominiums');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table($this->table, function(Blueprint $table) {
			$table->dropForeign('transportation_and_locations_location_type_id_foreign');
			$table->dropForeign('transportation_and_locations_condominium_id_foreign');
		});
	}

}
