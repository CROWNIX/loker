<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lowongan = [
            [
                "id_perusahaan" => 1,
                "judul"=> "FINANCE & ACCOUNTING STAFF",
                "id_kota" => 1,
                "lokasi" => "Rukan Sedayu Square Blok G No. 3 & 5 Jl. Outer Ring Road, Cengkareng, Jakarta Barat 11730",
                "deskripsi" => "Usia antara  22-35 tahun Lulusan SMK/D3 Akuntansi atau manajemen Pengalaman dibidang finance dan accounting lebih diutamakan Jujur, ulet, teliti, rajin, disiplin dan berprilaku baik Mampu bekerja dengan timeline Mampu bekerja baik di dalam tim atau secara individual",
                "tanggal_posting" => "2022-08-15",
                "id_kategori" => 1,
                "batas_waktu" => "2022-09-15",
                "foto" => "262d1.PNG",
            ],
            [
                "id_perusahaan" => 1,
                "judul"=> "IT Programmer",
                "id_kota" => 1,
                "lokasi" => "Jl. Raya Meruya Ilir, Jakarta Barat 11630 ",
                "deskripsi" => "Jl. Raya Meruya Ilir, Jakarta Barat 11630 ",
                "tanggal_posting" => "2022-08-15",
                "id_kategori" => 3,
                "batas_waktu" => "2022-09-15",
                "foto" => "381d3.PNG",
            ],
            [
                "id_perusahaan" => 3,
                "judul"=> "IT PROGRAMMER (BACKEND DEVELOPER)",
                "id_kota" => 1,
                "lokasi" => "Jl. Bukit Gading Raya, Perkantoran Gading Bukit In...",
                "deskripsi" => "Membuat aplikasi sesuai SOP perusahaan Pengembanga...",
                "tanggal_posting" => "2022-08-15",
                "id_kategori" => 1,
                "batas_waktu" => "2022-09-15",
                "foto" => "752d4.PNG",
            ],
            [
                "id_perusahaan" => 3,
                "judul"=> "IT PROGRAMMER (BACKEND DEVELOPER)",
                "id_kota" => 1,
                "lokasi" => "Jl. Bukit Gading Raya, Perkantoran Gading Bukit In...",
                "deskripsi" => "Membuat aplikasi sesuai SOP perusahaan Pengembanga...",
                "tanggal_posting" => "2022-08-15",
                "id_kategori" => 1,
                "batas_waktu" => "2022-09-15",
                "foto" => "752d4.PNG",
            ],
            [
                "id_perusahaan" => 3,
                "judul"=> "IT PROGRAMMER (BACKEND DEVELOPER)",
                "id_kota" => 1,
                "lokasi" => "Jl. Bukit Gading Raya, Perkantoran Gading Bukit In...",
                "deskripsi" => "Membuat aplikasi sesuai SOP perusahaan Pengembanga...",
                "tanggal_posting" => "2022-08-15",
                "id_kategori" => 1,
                "batas_waktu" => "2022-09-15",
                "foto" => "752d4.PNG",
            ],
            [
                "id_perusahaan" => 3,
                "judul"=> "IT PROGRAMMER (BACKEND DEVELOPER)",
                "id_kota" => 1,
                "lokasi" => "Jl. Bukit Gading Raya, Perkantoran Gading Bukit In...",
                "deskripsi" => "Membuat aplikasi sesuai SOP perusahaan Pengembanga...",
                "tanggal_posting" => "2022-08-15",
                "id_kategori" => 1,
                "batas_waktu" => "2022-09-15",
                "foto" => "752d4.PNG",
            ],
        ];
        DB::table("lowongan_kerja")->insert($lowongan);
    }
}