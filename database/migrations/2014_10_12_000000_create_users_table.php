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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string("password");
            $table->string("nama_lengkap");
            $table->string("alamat");
            $table->string("no_telepon");
            $table->string("jenis_kelamin");
            $table->date("tanggal_lahir");
            $table->string("tempat_lahir");
            $table->string("tamatan_pendidikan");
            $table->string("cv");
            $table->integer("is_admin")->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};