<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiumRatingTrailsTable extends Migration {

	protected $table = 'condominium_rating_trails';
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
			$table->bigInteger('condominium_id')->unsigned(); //CONDOMINIUMS
            $table->date('date');
			$table->decimal('amen_fac_rate', 5, 2);
			$table->longText('amen_fac_desc');
			$table->decimal('transpo_rate', 5, 2);
			$table->longText('transpo_desc');
			$table->string('pop_building_unit', 100);
			$table->string('pop_units_per_floor', 100);
            $table->integer('parking_type_id')->unsigned(); //PARKING TYPES
			$table->longText('parking_desc');
			$table->string('private_parking_price', 100);
            $table->decimal('security_rate', 5, 2);
            $table->integer('security_score');
            $table->longText('security_desc');
            $table->decimal('sound_rate', 5, 2);
            $table->longText('sound_desc');

            $table->integer('environment_composure_id')->unsigned(); //
            $table->integer('noise_isolation_id')->unsigned(); //
            $table->integer('accessibility_type_id')->unsigned(); //
            $table->integer('transportation_type_id')->unsigned(); //

			$table->string('desc_pic_url', 100);
			$table->string('cover_pic_url', 100);
			$table->string('security_pic_url', 100);

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
