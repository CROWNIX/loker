<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LamaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lamaran = [
            [
                "id_user" => 1,
                "id_lowongan_kerja" => 2,
                "tgl_lamaran" => "2022-08-15",
                "status_lamaran" => "Lamar",
                "dokumen" => "Ela Rosita.pdf",
                "tgl_interview" => "0000-00-00",
            ],
        ];
        DB::table("lamaran")->insert($lamaran);
    }
}