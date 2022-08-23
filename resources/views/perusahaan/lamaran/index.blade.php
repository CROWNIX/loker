@extends('layouts.perusahaan')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">Data Apply pelamar</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Lowongan Kerja </th>
                            <th>Nama Pelamar</th>
                            <th>No Telpon</th>
                            <th>Jenis Kelamin</th>
                            <th>judul Lowongan</th>
                            <th>Tanggal Apply</th>
                            <th>Tanggal posting</th>
                            <th>kategori</th>
                            
                            <th>Jadwal Interview</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                    <tbody>       
                        @foreach ($lamaran as $l)
                        <tr>
                            <td>{{ $l->id }}</td>
                            <td>{{ $l->user->nama_lengkap }}</td>
                            <td>{{ $l->user->no_telepon }}</td>
                            <td>{{ $l->user->jenis_kelamin }}</td>
                            <td>{{ $l->lowongan->judul }}</td>
                            <td>{{ $l->tgl_lamaran }}</td>
                            <td>{{ $l->lowongan->tanggal_posting }}</td>
                            <td>{{ $l->lowongan->id_kategori }}</td>
                            <td>{{ $l->tgl_interview }}</td>
                            <td><a href="download_cv.php?filename={{ $l->user->cv }}" onclick="alert('belum selesai')">Download CV</a>
                                <a href="index.php?page=jadwal_interview&id={{ $l->id }}" onclick="alert('belum selesai')" class="btn btn-primary">Jadwal interview</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of M

@endsection