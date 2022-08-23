<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Perusahaan;
use App\Models\Lowongan;
use App\Models\Kota;
use App\Models\Kategori;
use App\Models\Lamaran;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->check()){
            return redirect("/admin/login");
        }

        return view("admin.perusahaan.index", [
            "perusahaan" => Perusahaan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan)
    {
        if(!auth()->check()){
            return redirect("/admin/login");
        }

        return view("admin.perusahaan.edit", [
            "perusahaan" => $perusahaan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $data = [
            "status" => $request->status,
        ];

        $perusahaan->update($data);

        return redirect("/admin/perusahaan")->with("success", "Perusahaan berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard(){
        if(!session()->has("login")){
            return redirect("/perusahaan/login");
        }

        return view("perusahaan.index");
    }

    public function login(){

        return view("perusahaan.auth.login");
    }

    public function authenticate(Request $request){
        $checkPerusahaan = Perusahaan::where("email", $request->email)->first();

        if(!$checkPerusahaan){
            return back()->with("error", "Login Failed");
        }

        if(!Hash::check($request->password, $checkPerusahaan->password)){
            return back()->with("error", "Login Failed");
        }

        session([
            "login" => "true",
            "email" => $checkPerusahaan->email,
            "status" => $checkPerusahaan->status,
            "nama_perusahaan" => $checkPerusahaan->nama_perusahaan,
            "id" => $checkPerusahaan->id,
        ]);

        return redirect("/perusahaan/dashboard")->with("success", "Anda berhasil Login");
    }

    public function register(){
        return view("perusahaan.auth.register");
    }

    public function daftarPerusahaan(Request $request){
        $checkPerusahaan = Perusahaan::where("email", $request->email)->first();

        if($checkPerusahaan){
            return back()->with("error", "Login Failed");
        }
        
        $perusahaan = new Perusahaan();
        $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        $perusahaan->email = $request->email;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->password =  bcrypt($request->password);
        $perusahaan->tentang_perusahaan = $request->tentang_perusahaan;
        $perusahaan->no_telp = $request->no_telp;
        if($request->file("gambar")){
            $perusahaan->dokumen = $request->file("gambar")->store("perusahaan");
        }
        $perusahaan->status = "aktif";
        $perusahaan->save();
        return redirect("/perusahaan/login")->with("success", "Perusahaan berhadil didaftarkan");
    }

    public function lowongan(){
        return view("perusahaan.lowongan.index", [
            "lowongan" => Lowongan::where("id_perusahaan", session("id"))->get(),
            "kota" => Kota::all(),
            "kategori" => Kategori::all()
        ]);
    }

    public function tambahLowongan(Request $request){
        
        $aac = date("Y-m-d ");

        $lowongan = new Lowongan();
        $lowongan->id_perusahaan = session("id");
        $lowongan->judul = $request->judul;
        $lowongan->id_kota = $request->id_kota;
        $lowongan->lokasi = $request->lokasi;
        $lowongan->deskripsi = $request->deskripsi;
        $lowongan->tanggal_posting = date('Y-m-d', strtotime('+1 month', strtotime($aac)));
        $lowongan->id_kategori = $request->id_kategori;
        $lowongan->batas_waktu = date("Y-m-d ");
        if($request->file("gambar")){
            $lowongan->foto = $request->file("gambar")->store("perusahaan");
        }
        $lowongan->save();
        return redirect("/perusahaan/lowongan")->with("success", "Lowongan berhasil ditambahkan");

    }       

    public function lamaran(){
        $lowongan = Lowongan::where("id_perusahaan", session("id"))->get();
        $lamaran = [];
        foreach($lowongan as $l){
            $checkLamaran = Lamaran::where("id_lowongan_kerja", $l->id)->where("status_lamaran", "Lamar")->first();

            if($checkLamaran){
                $lamaran[] = $checkLamaran;
            }
        }

        return view("perusahaan.lamaran.index", [
            "lamaran" => $lamaran,
        ]);
    }

    public function interview(){
        $lowongan = Lowongan::where("id_perusahaan", session("id"))->get();
        $interview = [];
        foreach($lowongan as $l){
            $checkLamaran = Lamaran::where("id_lowongan_kerja", $l->id)->where("status_lamaran", "Interview")->first();

            if($checkLamaran){
                $interview[] = $checkLamaran;
            }
        }
        
        return view("perusahaan.interview.index", [
            "interview" => $interview,
        ]);
    }
}