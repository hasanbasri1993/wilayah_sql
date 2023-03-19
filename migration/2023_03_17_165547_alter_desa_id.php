<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->dropForeign('desa_fk_7787303');
            Schema::disableForeignKeyConstraints();
        });

        Schema::table('desas', function (Blueprint $table) {
            $table->foreign('kecamatan_id', 'kecamatan_fk_7786947')->references('id')->on('kecamatans');
            $table->string('id', 20)->change();
            $table->string('kecamatan_id', 20)->change();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('desa_id', 20)->change();
            $table->foreign('desa_id', 'desa_fk_7787303')->references('id')->on('desas');
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
