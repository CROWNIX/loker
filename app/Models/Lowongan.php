<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = "lowongan_kerja";
    protected $guarded = ["id"];

    public function lamaran(){
        return $this->hasMany(Lamaran::class, "id_lowongan_kerja");
    }

    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class, "id_perusahaan");
    }

    public function kota(){
        return $this->belongsTo(Kota::class, "id_kota");
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, "id_kategori");
    }
}