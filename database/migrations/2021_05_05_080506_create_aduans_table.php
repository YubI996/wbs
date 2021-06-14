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
            $table->integer('jenis_aduan')->unsigned();
            $table->foreign('jenis_aduan')->references('slug')->on('jenis_aduans');
            $table->string('file_bukti')->nullable();
            $table->enum('status', [1, 2, 3, 4, 5, 6, 7])->nullable();
            // $table->enum('status', [1, 2])->nullable();
            $table->string('catatan_verifikasi')->nullable();
            $table->string('file_verifikator')->nullable();
            // $table->enum('status', [1, 2])->nullable();
            $table->string('catatan_validasi')->nullable();
            $table->string('file_inspektur')->nullable();
            // $table->enum('hasil_penyidikan', [1,2])->nullable();
            $table->string('nama_terlapor');
            $table->string('jabatan_terlapor');
            $table->string('pangkat_terlapor');
            $table->string('instansi_terlapor');
            $table->string('unit_terlapor');
            $table->string('kota_terlapor');
            $table->string('penjelasan');
            $table->date('tgl_selesai')->nullable();
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
