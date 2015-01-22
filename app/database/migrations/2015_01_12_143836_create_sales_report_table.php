<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesReportTable extends Migration {

	protected $table = 'sales_reports';
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
			$table->string('referral_no', 250);
			$table->string('referral_name', 250);
			$table->string('referral_email', 250);
			$table->bigInteger('unit_id')->unsigned(); // UNITS AVAILABLE
			$table->foreign('unit_id')->references('id')->on('available_units');
			$table->decimal('unit_price', 12, 4);
			$table->decimal('commission', 12, 4);
			$table->integer('quantity');
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
