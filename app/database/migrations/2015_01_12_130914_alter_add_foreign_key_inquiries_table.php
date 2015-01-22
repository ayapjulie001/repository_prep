<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyInquiriesTable extends Migration {

	protected $table = 'inquiries';

	/**
	 * Run the migrations.
	 *
	 * @return voidSchema::dropIfExists($this->table);
	 */
	public function up()
	{
		echo "altering table $this->table...\n";
		Schema::table($this->table, function (Blueprint $table) {

			$table->foreign('estate_developer_id')->references('id')->on('estate_developers');

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
			$table->dropForeign('inquiries_estate_developer_id_foreign');
		});
	}

}
