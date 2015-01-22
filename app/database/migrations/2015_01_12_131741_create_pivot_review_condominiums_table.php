<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotReviewCondominiumsTable extends Migration {

	protected $table = 'pivot_review_condominiums';

	/**
	 * Run the migrations.
	 *
	 * @return voidSchema::dropIfExists($this->table);
	 */
	public function up()
	{
		echo "migrating table $this->table...\n";
		Schema::create($this->table, function (Blueprint $table) {

			$table->increments('id');
			$table->bigInteger('review_id')->unsigned()->index();
			$table->foreign('review_id')->references('id')->on('reviews');
			$table->bigInteger('condominium_id')->unsigned()->index();
			$table->foreign('condominium_id')->references('id')->on('condominium_rating_trails');
			$table->boolean('is_deleted')->default(0);

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
