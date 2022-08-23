<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";
    protected $guarded = ["id"];

    public function lowongan(){
        return $this->hasMany(Lowongan::class);
    }

    public function detailKategori(){
        return $this->hasMany(Detail_kategori::class);
    }
}