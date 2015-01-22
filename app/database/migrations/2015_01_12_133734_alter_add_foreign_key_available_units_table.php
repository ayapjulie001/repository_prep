<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyAvailableUnitsTable extends Migration {

	protected $table = 'available_units';

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
			$table->foreign('furnishing_type_id')->references('id')->on('furnishing_types');

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
			$table->dropForeign('available_units_condominium_id_foreign');
			$table->dropForeign('available_units_furnishing_type_id_foreign');
		});
	}

}
