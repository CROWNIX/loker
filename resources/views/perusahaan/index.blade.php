@extends('layouts.perusahaan')

@section('container')
<h2>Selamat Datang</h2>
<h2>{{ session("nama_perusahaan") }}</h2>
<h2>Status : {{ session("status") }}</h2>

@endsection