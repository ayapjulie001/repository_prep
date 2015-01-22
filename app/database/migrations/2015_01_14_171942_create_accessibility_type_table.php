<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessibilityTypeTable extends Migration {

    protected $table = 'accessibility_types';
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
            $table->string('accessibility', 250);
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
