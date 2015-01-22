<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiumUnitTypesTable extends Migration {

	protected $table = 'pivot_condominium_unit_types';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		echo "migrating table $this->table...\n";
		Schema::create($this->table, function (Blueprint $table) {

			$table->increments('id');
			$table->bigInteger('condominium_id')->unsigned(); // CONDOMINIUMS
			$table->foreign('condominium_id')->references('id')->on('condominiums');
			$table->integer('unit_type_id')->unsigned(); // UNIT TYPES
			$table->foreign('unit_type_id')->references('id')->on('unit_types');
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
