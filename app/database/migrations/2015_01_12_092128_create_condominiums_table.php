<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiumsTable extends Migration {

	protected $table = 'condominiums';
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
			$table->string('short_name', 100);
			$table->string('long_name', 100);
			$table->string('address', 100);
			$table->decimal('star_rating', 5,2);
			$table->bigInteger('city_id')->unsigned(); //CITIES
			$table->integer('condominium_status_id')->unsigned(); //CONDOMINIUM STATUSES
			$table->bigInteger('estate_developer_id')->unsigned(); //ESTATE DEVELOPERS
			$table->integer('property_type_id')->unsigned(); //PROPERTY TYPES
			$table->string('units', 250);
			$table->integer('no_unit_available');

			$table->integer('year_built');
			$table->integer('building_no');
			$table->integer('floor_no');
			$table->integer('elevator_no');
            $table->integer('cctv_no');
            $table->integer('security_no');
			$table->string('association_dues', 100);
			$table->string('map_link', 250);
			$table->longText('description');
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
