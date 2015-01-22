<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyDeveloperMessagesTable extends Migration {

	protected $table = 'developer_messages';

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
			$table->dropForeign('developer_messages_estate_developer_id_foreign');
		});
	}

}
