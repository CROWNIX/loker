<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                "username"=>"admin",
                "email"=> "admin@gmail.com",
                "password"=> Hash::make("12345678"),
                "nama_lengkap" => "admin",
                "alamat" => "Jl Duta bandara",
                "no_telepon" => "082111111111",
                "jenis_kelamin" => "laki-laki",
                "tanggal_lahir" => "2022-08-30",
                "tempat_lahir" => "tegal",
                "tamatan_pendidikan" => "smk",
                "cv" => "default.jpg",
                "is_admin" => 1
            ],
            [
                "username"=>"rahmat",
                "email"=> "rahmatfauzi841@gmail.com",
                "password"=> Hash::make("12345678"),
                "nama_lengkap" => "rahmat",
                "alamat" => "Jl Duta bandara",
                "no_telepon" => "082111111111",
                "jenis_kelamin" => "laki-laki",
                "tanggal_lahir" => "2022-08-30",
                "tempat_lahir" => "tegal",
                "tamatan_pendidikan" => "smk",
                "cv" => "default.jpg",
                "is_admin" => 0
            ],
        ];
        DB::table("users")->insert($user);
    }
}