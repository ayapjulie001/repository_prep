<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportationAndLocationsTable extends Migration {

	protected $table = 'transportation_and_locations';
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
			$table->string('loc_name', 250);
			$table->integer('location_type_id')->unsigned(); //LOCATION TYPES
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
