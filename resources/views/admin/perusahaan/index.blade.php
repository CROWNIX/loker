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
            <h6 class="m-0 font-weight-bold text-primary">Perusahaan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (session()->has("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session("success") }}
                </div> 
                    
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Perusahaan </th>
                            <th>Nama Perusahaan </th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tentang Perusahaan</th>
                            <th>No telp</th>
                            <th>Status </th>
                            <th>Dokumen Siup</th>
                            <th>Action</th>
                        </tr>
                    </thead>     
                    <tbody>
                        @foreach ($perusahaan as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama_perusahaan }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->tentang_perusahaan }}td>
                            <td>{{ $p->no_telp }}</td>
                            <td>{{ $p->dokumen }}</td>
                            <td>{{ $p->status }}</td>
                            <td>  <a href="/admin/perusahaan/{{ $p->id }}/edit" class="btn btn-primary">Edit Status</a></td>
                            
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
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"></span>
       </button>
      </div>
      <div class="modal-body">

@endsection