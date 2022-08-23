<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\User;
use Illuminate\Http\Request;

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
        $lamaran->dokumen = $user->cv;
        $lamaran->tgl_interview = "";
        $lamaran->save();
        return redirect('/lamaran')->with('success', "Anda berhasil melamar");
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