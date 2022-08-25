@extends('layouts.main')

@section('container')


<div class="container-fluid">
    <div class="row" style="justify-content: center !important; display: flex; margin-top: 2rem;">
        <div class="col" >
            <div style="text-align: center; margin-bottom: 2rem">
                <img src="{{ asset("storage/user/". auth()->user()->foto) }}" style="border-radius: 50%; height: 15rem; width: 15rem; " alt="tidak ada poto">

            </div>
            <table class="table table-striped table-bordered">
                {{-- <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>{{ auth()->user()->username }}</td>
                </tr> --}}
                <tr>
                <tr>
                    <td>Email</td>
                
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                
                    <td>{{ auth()->user()->nama_lengkap }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                
                    <td>{{ auth()->user()->alamat }}</td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                
                    <td>{{ auth()->user()->no_telepon }}</td>
                </tr>
                <tr>
                    <td>Jeni Kelamin</td>
                    <td>{{ auth()->user()->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ auth()->user()->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                
                    <td>{{ auth()->user()->tempat_lahir }}</td>
                </tr>
                <tr>
                    <td>Tamatan Pendidikan</td>
                
                    <td>{{ auth()->user()->tamatan_pendidikan }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>

@endsection