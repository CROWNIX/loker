@extends('layouts.main')

@section('container')
@if (session()->has("error"))
		<script>
			alert("Login Dulu")
		</script>      
    	@endif
<style>
    .card {
        position: relative;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 6px;
        width: 100%;
        background: rgb(231 230 255) !important;
    }

    .card::before {
        content: "";
        width: 8px;
        height: 100%;
        background: #aba9f9;
        position: absolute;
        border-radius: 6px 0 0 6px;
        left: 0;
        top: 0;
    }

    .card:hover {
        transform: scale(1.01);
        background-color: rgb(167 164 235) !important;
    }

    .card .card-body {
        width: 100%;
        padding: 0 1rem 1rem;
    }

    .card .card-body .judul {
        text-align: left;
        font-size: 19px;
        color: #333;
        height: 4.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card .card-body .details {
        text-align: left;
        font-size: 14px;
        margin: 16px 0 0px;
        color: #333;
        font-weight: bold;
        margin-bottom: 13px;
    }

    .margin {
        font-size: 15px;
        margin: 16px 0 0px;
    }


    .card-perusahaan {
        border-color: #999;
        background-color: #ededed;
        margin-bottom: 15px;
    }

    .card-perusahaan p:last-child {
        margin-bottom: 0;
    }

    .card-perusahaan .nama {
        text-align: left;
        color: #337ab7;
        font-size: 20px;
        text-transform: uppercase;
        height: 5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    @media only screen and (max-width:1205px) {

        .card-perusahaan .nama {
            font-size: 18px;
        }

        .card .card-body .judul {
            font-size: 17px;
        }

        .card .card-body .details {
            font-size: 12px;
        }
    }

    @media only screen and (max-width:992px) {

        .card-perusahaan .nama {
            font-size: 13px;
        }

        .card .card-body .judul {
            font-size: 12px;
        }

        .card .card-body .details {
            font-size: 10px;
        }
    }
</style>
<section class="about-part service-part">
    <div class="container">
        <div class="about-part-details text-center">
            <h2>Informasi Lowongan Kerja</h2>
            <div class="about-part-content">
                <div class="breadcrumbs">
                    <div class="container">
                        <ol class="breadcrumb">
                            <form method="POST" action="" class="form-inline">
                                <div class="row">
                                    <div class="form-group mb-2">
                                       <!--  <select name="s_jurusan" id="s_jurusan" class="form-control" required>
                                            <option value="">Kategori Lowongan</option>
                                            {{-- <?php
                                            $kategori = mysqli_query($connect, 'SELECT * FROM kategori');
                                            while ($x = mysqli_fetch_assoc($kategori)) {
                                            ?>
                                                <option value="<?php echo $x['id_kategori'] ?>">
                                                    <?php echo $x['nama_kategori'] ?>
                                                </option>
                                            <?php } ?> --}}
                                        </select> -->
                                    </div>
                                    <div class="form-group mb-2">
                                       <!--  <select name="kota" id="s_jurusan" class="form-control" required>
                                            <option value="">Kota</option>
                                            {{-- <?php
                                            $kota = mysqli_query($connect, 'SELECT * FROM kota');
                                            while ($x = mysqli_fetch_assoc($kota)) {
                                            ?>
                                                <option value="<?php echo $x['id_kota'] ?>"><?php echo $x['nama_kota'] ?>
                                                </option>
                                            <?php } ?> --}}
                                        </select> -->
                                    </div>
                                    <!-- <button class="btn btn-primary form-control" id="search" name="search" type="submit" onclick="search(document.getElementById('search').value)">Cari</button> -->

                                </div>
                            </form>

                        </ol>
                        <!--/.breadcrumb-->
                    </div>
                    <!--/.container-->
                </div>
                <!--/.breadcrumbs-->
            </div>
            <!--/.about-part-content-->
        </div>
        <!--/.about-part-details-->
    </div>
    <!--/.container-->

</section>
<div class="container">
        <div class="row">
            @foreach ($lowongan as $l)
            <a href="lowongan-kerja/{{ $l->id }}" class="col-sm-12 col-lg-3 col-md-4" style="padding: 0 4px;">
            <div >
                <div class="card card-perusahaan"  style="cursor: pointer;">
                    <img src="{{ asset("storage/perusahaan/" . $l->foto) }}" class="img-responsive" style="height: 8rem; width: 16rem; object-fit:contain; padding: .30em; object-position: left;">
                    <div class="card-body">
                        <div class="nama">{{ $l->perusahaan->nama_perusahaan }}"; </div>
                        <div class="judul">{{ $l->judul }}</div>
                        <div class="details">
                            {{ $l->kategori->nama_kategori }}<br>{{ $l->kota->nama_kota }}
                        </div>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($q)) {
                $id_pencari_kerja = $row['id_lowongan_kerja'];
                $kota = $row['id_kota'];
            ?>
                <div class="col-sm-12 col-lg-3 col-md-4" style="padding: 0 4px;">
                    <div class="card card-perusahaan" onclick="window.location.href = 'index.php?page=detail_loker&id=<?= $row['id_lowongan_kerja']; ?>'" style="cursor: pointer;">
                        <img src="perusahaan/img/<?php echo "$row[foto]"; ?>" class="img-responsive" style="height: 8rem; width: 16rem; object-fit:contain; padding: .30em; object-position: left;">
                        <div class="card-body">
                            <div class="nama"><?php echo "$row[nama_perusahaan]"; ?></div>
                            <div class="judul"><?php echo "$row[judul]"; ?></div>
                            <div class="details">
                                <?php echo "$row[nama_kategori]"; ?><br><?php echo "$row[nama_kota]"; ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
        </div>
    </div> --}}

@endsection