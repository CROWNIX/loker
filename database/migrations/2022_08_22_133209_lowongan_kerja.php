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
        Schema::create('lowongan_kerja', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_perusahaan");
            $table->string("judul");
            $table->foreignId("id_kota");
            $table->text("lokasi");
            $table->text("deskripsi");
            $table->date("tanggal_posting");
            $table->foreignId("id_kategori");
            $table->date("batas_waktu");
            $table->string("foto");
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
        Schema::dropIfExists("lowongan_kerja");
    }
};