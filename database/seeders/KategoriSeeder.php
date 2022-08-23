<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                "nama_kategori" => "Akuntansi Barat",
            ],
            [
                "nama_kategori" => "Farmasi",
            ],
            [
                "nama_kategori" => "Informasi Teknologi",
            ],
        ];
        DB::table("kategori")->insert($kategori);
    }
}