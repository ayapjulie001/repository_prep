<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesAndFacilitiesTable extends Migration {

	protected $table = 'amenities_and_facilities';
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
			$table->string('name', 250);
			$table->bigInteger('condominium_id')->unsigned(); //CONDOMINIUMS
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
