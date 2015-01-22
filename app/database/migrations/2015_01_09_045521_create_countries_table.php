<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

    protected $table = 'countries';
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
            $table->string('long_name', 100);
            $table->string('short_name', 100);
            $table->string('iso2', 15)->nullable();
            $table->string('iso3', 15)->nullable();
            $table->string('iso_number', 15)->nullable();
            $table->string('country_code', 15)->nullable();
            $table->string('un_member', 50)->nullable();
            $table->string('cctld', 50)->nullable();
            $table->string('flag_url', 50)->nullable();
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
