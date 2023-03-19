<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('kota', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->dropForeign('provinsi_fk_7786952');
            Schema::disableForeignKeyConstraints();
        });

        Schema::table('provinsis', function (Blueprint $table) {
            $table->string('id', 20)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
