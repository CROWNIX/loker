@extends('layouts.admin')

@section('container')
<!-- Begin Page Content --> 
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4"><a target="_blank"
            
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pencari Kerja</h6>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Pencari kerja </th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>No telpon</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            
                        @endforeach
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->nama_lengkap }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->no_telepon }}</td>
                            <td>{{ $user->jenis_kelamin }}</td>
                            <td>{{ $user->tanggal_lahir }}</td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

@endsection