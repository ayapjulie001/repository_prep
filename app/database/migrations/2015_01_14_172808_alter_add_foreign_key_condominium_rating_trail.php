<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyCondominiumRatingTrail extends Migration {

    protected $table = 'condominium_rating_trails';

    /**
     * Run the migrations.
     *
     * @return voidSchema::dropIfExists($this->table);
     */
    public function up()
    {
        echo "altering table $this->table...\n";
        Schema::table($this->table, function (Blueprint $table) {

            $table->foreign('condominium_id')->references('id')->on('condominiums');
            $table->foreign('parking_type_id')->references('id')->on('parking_types');
            $table->foreign('environment_composure_id')->references('id')->on('composure_types');
            $table->foreign('noise_isolation_id')->references('id')->on('composure_types');
            $table->foreign('accessibility_type_id')->references('id')->on('accessibility_types');
            $table->foreign('transportation_type_id')->references('id')->on('accessibility_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function(Blueprint $table) {
            $table->dropForeign('condominium_rating_trails_condominium_id_foreign');
            $table->dropForeign('condominium_rating_trails_parking_type_id_foreign');
            $table->dropForeign('condominium_rating_trails_environment_composure_id_foreign');
            $table->dropForeign('condominium_rating_trails_noise_isolation_id_foreign');
            $table->dropForeign('condominium_rating_trails_accessibility_type_id_foreign');
            $table->dropForeign('condominium_rating_trails_transportation_type_id_foreign');
        });
    }

}
