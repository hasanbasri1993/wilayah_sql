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
        Schema::table('desas', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->dropForeign('kecamatan_fk_7786947');
            Schema::disableForeignKeyConstraints();
        });

        Schema::table('kecamatans', function (Blueprint $table) {
            $table->foreign('kota_id', 'kota_fk_7786951')->references('id')->on('kota');
            $table->string('id', 20)->change();
            $table->string('kota_id', 20)->change();
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
