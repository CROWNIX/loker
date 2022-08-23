<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kota = [
            [
                "nama_kota" => "Jakarta Barat",
            ],
            [
                "nama_kota" => "Bogor",
            ],
            [
                "nama_kota" => "Jakarta Utara",
            ],
        ];
        DB::table("kota")->insert($kota);
    }
}