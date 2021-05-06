<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('jenis_aduan_id');
            $table->string('nama_terlapor');
            $table->string('jabatan_terlapor');
            $table->string('pangkat_terlapor');
            $table->string('instansi_terlapor');
            $table->string('unit_terlapor');
            $table->string('kota_terlapor');
            $table->string('penjelasan');
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
        Schema::dropIfExists('aduans');
    }
}
