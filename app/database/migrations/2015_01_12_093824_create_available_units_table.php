<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableUnitsTable extends Migration {

	protected $table = 'available_units';
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
			$table->bigInteger('condominium_id')->unsigned(); // CONDOMINIUMS
			$table->decimal('price', 12, 4);
			$table->string('floor_area', 250);
			$table->integer('beds');
			$table->integer('baths');
			$table->string('url', 100);
			$table->string('filename', 50);
			$table->integer('furnishing_type_id')->unsigned();
			$table->integer('no_unit_available');
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
