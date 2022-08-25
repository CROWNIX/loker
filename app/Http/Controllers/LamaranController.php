<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("lamaran.index", [
            "lamaran" => Lamaran::where("id_user", auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user() == null){
            return redirect("/lowongan-kerja")->with("error", "Login dulu");
        }
        $user = User::where("id", auth()->user()->id)->first();

        $lamaran = new Lamaran();
        $lamaran->id_user = auth()->user()->id;
        $lamaran->id_lowongan_kerja = $request->id_lowongan_kerja;
        $lamaran->tgl_lamaran = date("Y-m-d");
        $lamaran->status_lamaran = "lamar";
        $lamaran->tgl_interview = "";
        // $array = [];
        $mkdir = date("Y-m-d H:i:s");
        $storage = File::makeDirectory('storage/document/'.$mkdir);
        // dd($request->file('document'));
        foreach ($request->file('document') as $x) {
            $originalname = $x->getClientOriginalName();
            // dd($originalname);
            // $extension = $x->extension();
            // $name = $x.'.'.$extension;
            $x->move('storage/document/'.$mkdir,$originalname);
            // $array[] = $name;
        }

        // $d = json_encode($array);
        $lamaran->document = $mkdir;

        // $zip = new ZipArchive();
        // $fileName = 'test.zip';
        // if($zip->open(public_path($fileName),ZipArchive::CREATE)=== true){
        //     $files = File::files(public_path('validation'));
        //     foreach($files as $key =>$x){
        //         $relativeName = basename($x);
        //         $zip->addFile($x,$relativeName);
        //     };
        //     $zip->close();
        // }
        // return response()->download(public_path($fileName));
        $lamaran->save();
        return redirect('/lamaran')->with('success', "Anda berhasil melamar");
    }

    public function zip(Request $request){
        $zip = new ZipArchive();
        $idLowongan = $request->lowongan;
        $idPerusahaan = $request->perusahaan;
        $lowongan = Lowongan::all()->where('id',$idLowongan);
        $perusahaan = Perusahaan::all()->where('id',$idPerusahaan);
        foreach ($lowongan as $l){
        }
        foreach ($perusahaan as $p){
        }
        $fileName = 'nama='.auth()->user()->username.', lowongan='.$l->judul.', perusahaan='.$p->nama_perusahaan.', tanggal='.$request->download.'.zip';
        if($zip->open(storage_path('app/public/document/'.$fileName),ZipArchive::CREATE)=== true){
            $files = File::files('storage/document/'.$request->download);
            foreach($files as $key =>$x){
                $relativeName = basename($x);
                $zip->addFile($x,$relativeName);
            };
            $zip->close();
        }
        return response()->download(storage_path('app/public/document/'.$fileName));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}