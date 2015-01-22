<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {

	protected $table = 'blogs';
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
			$table->string('title', 250);
			$table->text('description');
			$table->string('link', 250);
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
