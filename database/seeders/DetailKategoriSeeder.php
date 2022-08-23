<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_kategori = [
            [
                "id_kategori" => 3,
                "jobdesk_kategori" => "IT Support"
            ],
            [
                "id_kategori" => 3,
                "jobdesk_kategori" => "IT Development"
            ],
        ];
        DB::table("detail_kategori")->insert($detail_kategori);
    }
}