<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perusahaan = [
            [
                "nama_perusahaan" => "PT Marina Global Internusa",
                "email"=> "info@marinaglobal.co.id",
                "alamat" => "Rukan Sedayu Square Blok G No. 3 & 5 Jl. Outer Ring Road, Cengkareng, Jakarta Barat 11730",
                "password"=> Hash::make("12345678"),
                "tentang_perusahaan" => "PT Marina Global Internusa merupakan perusahaan trading yang bergerak di bidang penyedia produk-produk marine dan diving dalam mendukung para boat builders dan industri maritim di Indonesia.",
                "no_telp" => "02129027777",
                "dokumen" => "default.jpeg",
                "status" => "aktif",
            ],
            [
                "nama_perusahaan" => "PT Colorindo Chemtra",
                "email"=> "info@colorindochemtra.com",
                "alamat" => "Jalan Raya Meruya Ilir Jakarta barat, 11630 5, RT....",
                "password"=> Hash::make("12345678"),
                "tentang_perusahaan" => "PT. COLORINDO CHEMTRA adalah salah satu perusahaan distribusi kimia terkemuka di Indonesia, Colorindo Chemtra didedikasikan untuk menyediakan produk berkualitas tinggi dengan fokus pada kebutuhan pasar dan mengantisipasi tren teknologi terkini; memberikan bantuan teknis dan layanan yang dianggap sama pentingnya.",
                "no_telp" => "02158906040",
                "dokumen" => "default.jpeg",
                "status" => "aktif",
            ],
            [
                "nama_perusahaan" => "PT SUPRANUSA SINDATA",
                "email"=> "PT SUPRANUSA SINDATA",
                "alamat" => "Jl. Bukit Gading Raya, Perkantoran Gading Bukit Indah blok O No. 3-5, Kelapa Gading,",
                "password"=> Hash::make("12345678"),
                "tentang_perusahaan" => "PT. Supranusa Sindata adalah perusahaan IT terkemuka yang menyediakan solusi manajemen perhotelan di Indonesia.",
                "no_telp" => "02150860678",
                "dokumen" => "default.jpeg",
                "status" => "aktif",
            ],
        ];
        DB::table("perusahaan")->insert($perusahaan);
    }
}