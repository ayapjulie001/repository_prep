<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyCondominiumsTable extends Migration {

	protected $table = 'condominiums';

	/**
	 * Run the migrations.
	 *
	 * @return voidSchema::dropIfExists($this->table);
	 */
	public function up()
	{
		echo "altering table $this->table...\n";
		Schema::table($this->table, function (Blueprint $table) {

			$table->foreign('city_id')->references('id')->on('cities');
			$table->foreign('condominium_status_id')->references('id')->on('condominium_statuses');
			$table->foreign('estate_developer_id')->references('id')->on('estate_developers');
			$table->foreign('property_type_id')->references('id')->on('property_types');

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
			$table->dropForeign('condominiums_city_id_foreign');
			$table->dropForeign('condominiums_condominium_status_id_foreign');
			$table->dropForeign('condominiums_estate_developer_id_foreign');
			$table->dropForeign('condominiums_property_type_id_foreign');
		});
	}

}
