<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration {

	protected $table = 'inquiries';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		echo "migrating table $this->table...\n";
		Schema::create($this->table, function (Blueprint $table) {

			$table->bigIncrements('id');
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('email', 100);
			$table->string('contact_number', 100);
			$table->longtext('message');
			$table->bigInteger('estate_developer_id')->unsigned(); //ESTATE DEVELOPERS
			$table->boolean('is_deleted')->default(0);
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists($this->table);
	}

}
