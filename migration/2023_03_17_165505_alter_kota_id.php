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

        Schema::table('kecamatans', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->dropForeign('kota_fk_7786951');
            Schema::disableForeignKeyConstraints();
        });

        Schema::table('kota', function (Blueprint $table) {
            $table->foreign('provinsi_id', 'provinsi_fk_7786952')->references('id')->on('provinsis');
            $table->string('id', 20)->change();
            $table->string('provinsi_id', 20)->change();
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
