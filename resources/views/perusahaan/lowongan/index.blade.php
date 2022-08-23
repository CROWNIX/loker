@extends('layouts.perusahaan')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">Iklan Lowongan Kerja</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pencari Kerja
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalTambah">Tambah Lowongan kerja
          </button></h6>
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
                            <th>Id Lowongan Kerja </th>
                            <th>Perusahaan </th>
                            <th>judul</th>
                            <th>kota</th>
                            <th>lokasi</th>
                            <th>Deskripsi pekerjaan</th>
                            <th>Tanggal_posting</th>
                            <th>kategori</th>
                            <th>Batas Waktu</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongan as $l)
                        <tr>
                            <td>{{ $l->id }}</td>
                            <td>{{ $l->perusahaan->nama_perusahaan }}</td>
                            <td>{{ $l->judul }}</td>
                            <td>{{ $l->kota->nama_kota }}</td>
                            <td>{{ $l->lokasi }}</td>
                            <td>{{ $l->deskripsi }}</td>
                            <td>{{ $l->tanggal_posting }}</td>
                            <td>{{ $l->kategori->nama_kategori }}</td>
                            <td>{{ $l->batas_waktu }}</td>
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

<!-- Modal Pop Up Tambah -->

<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
       </button>
      </div>

      <div class="modal-body">
        
        <div class="form-group">
            <form action="/perusahaan/lowongan" method="POST" enctype="multipart/form-data">
                @csrf
            <label>Judul Lowongan</label>
            <input type="text" name="judul" class="form-control">
            <label>Kota :</label>
            <select name="id_kota" >
                @foreach ($kota as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kota }}</option>
                @endforeach
            </select><br>
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control">
            <label>Kategori</label>
             <select name="id_kategori" >
                @foreach ($kategori as $x)
                <option value="{{ $x->id }}">{{ $x->nama_kategori }}</option>
                @endforeach
            </select><br>
             <label>Deksripsi Pekerjaan</label>
            <input type="text" name="deskripsi" class="form-control">
        </div>
        <div class="form-group">
            <label>Gambar Lowongan</label>
            <input type="file" name="gambar" class="form-control">
        </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="input" class="btn btn-primary">Save changes</button>
       
      </div>
         </form>
      </div>
     
    </div>
  </div>
</div>



@endsection