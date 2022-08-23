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
                        @foreach ($interview as $i)
                        <tr>
                            
                            <td>{{ $i->lowongan->id }}</td>
                            <td>{{ $i->user->nama_lengkap }}</td>
                            <td>{{ $i->user->no_telepon }}</td>
                            <td>{{ $i->user->jenis_kelamin }}</td>
                            <td>{{ $i->lowongan->judul }}</td>
                            <td>{{ $i->tgl_lamaran }}</td>
                            <td>{{ $i->lowongan->tanggal_posting }}</td>
                            <td>{{ $i->lowongan->id_kategori }}</td>
                            <td>{{ $i->lowongan->batas_waktu }}</td>
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
<!-- End of Main Content -->


@endsection