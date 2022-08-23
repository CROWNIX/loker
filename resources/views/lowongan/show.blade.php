@extends("layouts.main")

@section("container")
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <form action="/lamaran" method="POST">
                    @csrf
                    <input type="hidden" name="id_lowongan_kerja" value="{{ $lowongan->id }}">
                    <table border="0" cellspacing="0" style="min-width: 120px;min-height: 300px;" class="table">
                        <tr>
                            <td colspan="3" class="text-center">{{ $lowongan->perusahaan->nama_perusahaan }} </td>
                        </tr>
                        <tr>

                            <td colspan="3" class="text-center"> {{ $lowongan->judul }} </td>
                        </tr>
                        <tr>
                            <td align="center"> Deskripsi </td>
                            <td>:</td>
                            <td>{{ $lowongan->deskripsi }}</td>
                        </tr>
                        <tr>
                            <td align="center"> Kategori </td>
                            <td>:</td>
                            <td> {{ $lowongan->kategori->id }} </td>
                        </tr>
                        <tr>
                            <td align="center"> Kota </td>
                            <td>:</td>
                            <td>{{ $lowongan->kota->nama_kota }}</td>
                        </tr>
                        <tr>
                            <td align="center"> Batas Waktu </td>
                            <td>:</td>
                            <td>{{$lowongan->batas_waktu}}</td>
                        </tr>
                    </table>
                    <div class="text-center" role="group" aria-label="...">
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan" id="lik">
                        <input type="button" class="btn btn-primary" value="Back"
                            onclick="location.href='lowongan-kerja">
                    </div>
                </form>
            </div>
            <!--/.service-single-->
        </div>
        <!--/.col-->

    </div>
    <!--/.col-->
</div>
<!--/.row-->
</div>
<!--/.service-content-one-->
@endsection