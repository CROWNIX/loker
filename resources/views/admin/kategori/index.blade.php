@extends('layouts.admin')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4"><a target="_blank"
            
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
          
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#ModalTambah">Tambah Kategori
          </button></h6>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
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
                            <th>Id Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($kategori as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->nama_kategori }}</td>
                            <td>  <a href="/admin/kategori/{{ $k->id }}/edit" class="btn btn-primary">Ubah Kategori</a></td>
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
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori</h5>
           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
         </button>
        </div>

        <div class="modal-body">
          
          <div class="form-group">
              <form action="/admin/kategori" method="POST">
                @csrf
              <label>Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" required>
            
              
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