@extends('layouts.admin')

@section('container')
<form action="/admin/kategori/{{ $kategori->id }}" method="post" enctype="multipart/form-data">
    @method("put")
    @csrf
	<table>
		<tr>
	    <td>Nama kategori</td>
	    <td>:</td>
	    <td><input type="text" name="nama_kategori"  value="{{ $kategori->nama_kategori }}" ></td>
	  </tr>


    </tr>

	  <tr>
	    <td colspan="3" align="center"><input type="submit" name="update" value="Update"></td>
	  </tr>
	</table>
</form>

@endsection