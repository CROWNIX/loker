@extends('layouts.admin')

@section('container')
<form action="/admin/perusahaan/{{ $perusahaan->id }}" method="post">
    @method("put")
    @csrf
	<table>
		<tr>
	    <td>Nama Perusahaan</td>
	    <td>:</td>
	    <td><input type="text" name="nama_perusahaan" readonly="" value="{{ $perusahaan->nama_perusahaan }}" ></td>
	  </tr>

    <tr>
      <td>Status Perusahaan</td>
      <td>:</td>
      <td><select name="status">
      <option value="{{ $perusahaan->status }}">{{ $perusahaan->status }}</option>
      <option value="Aktif">Aktif</option>
      <option value="Blokir">Blokir</option>

      </select></td>
    </tr>

	  <tr>
	    <td colspan="3" align="center"><input type="submit" name="update" value="Update"></td>
	  </tr>
	</table>
</form>
@endsection