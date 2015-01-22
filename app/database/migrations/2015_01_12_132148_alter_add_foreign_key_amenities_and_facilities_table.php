<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyAmenitiesAndFacilitiesTable extends Migration {

	protected $table = 'amenities_and_facilities';

	/**
	 * Run the migrations.
	 *
	 * @return voidSchema::dropIfExists($this->table);
	 */
	public function up()
	{
		echo "altering table $this->table...\n";
		Schema::table($this->table, function (Blueprint $table) {

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
			$table->dropForeign('amenities_and_facilities_condominium_id_foreign');
		});
	}

}
