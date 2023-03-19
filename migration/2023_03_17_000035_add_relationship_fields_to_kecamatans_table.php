<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToKecamatansTable extends Migration
{
    public function up()
    {
        Schema::table('kecamatans', function (Blueprint $table) {
            $table->unsignedBigInteger('kota_id')->nullable();
            $table->foreign('kota_id', 'kota_fk_7786951')->references('id')->on('kota');
        });
    }
}
