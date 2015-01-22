<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyCitiesTable extends Migration {

	protected $table = 'cities';

	/**
	 * Run the migrations.
	 *
	 * @return voidSchema::dropIfExists($this->table);
	 */
	public function up()
	{
		echo "altering table $this->table...\n";
		Schema::table($this->table, function (Blueprint $table) {

			$table->foreign('province_id')->references('id')->on('provinces');

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
			$table->dropForeign('cities_province_id_foreign');
		});
	}

}
