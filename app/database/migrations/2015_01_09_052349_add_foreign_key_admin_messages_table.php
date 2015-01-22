<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAdminMessagesTable extends Migration {

    protected $table = 'admin_messages';

    /**
     * Run the migrations.
     *
     * @return voidSchema::dropIfExists($this->table);
     */
    public function up()
    {
        echo "altering table $this->table...\n";
        Schema::table($this->table, function (Blueprint $table) {

            $table->foreign('country_id')->references('id')->on('countries');

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
            $table->dropForeign('admin_messages_country_id_foreign');
        });
    }
}
