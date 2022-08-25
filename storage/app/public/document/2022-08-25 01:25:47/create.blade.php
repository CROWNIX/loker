@extends('layouts.main')
@section('title', $title)
@section('container')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    {{-- Preloader end --}}

    {{-- Main wrapper start --}}
    <div id="main-wrapper">
        {{-- Nav header start --}}
        @include('partials.navbar-admin')
        {{-- Nav header end --}}

        {{-- Sidebar start --}}
        @include('partials.sidebar-admin')
        {{-- Sidebar end --}}

        {{-- Content body start --}}
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">SHM</a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('/beban-shm/create') }}">Buat Beban SHM</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/beban-shm" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="grid-nama-wilayah">
                                                nama wilayah
                                            </label>
                                            <div class="col-lg-6">
                                                <input required class="form-control" id="grid-nama-wilayah"
                                                    value="{{ old('wilayah') }}" name="wilayah" type="text"
                                                    placeholder="Masukan Nama wilayah">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="provinsi">
                                                Provinsi
                                            </label>
                                            <div class="col-lg-6">
                                                <select id="provinsi" autocomplete="off" name="provinsi"
                                                    class="theSelect form-control">
                                                    <option value="">
                                                        Pilih Provinsi
                                                    </option>
                                                    @foreach ($provinsi as $prov)
                                                        <option value="{{ $prov->nama }}" @selected(old('provinsi') == $prov->nama)>
                                                            {{ $prov->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kabupaten">
                                                Kabupaten atau Kota
                                            </label>
                                            <div class="col-lg-6">
                                                <select autocomplete="off" class="form-control theSelect " name="kabupaten"
                                                    id="kabupaten" disabled>
                                                    <option value="{{ old('kabupaten') }}" selected>
                                                        {{ old('kabupaten') ?? 'Pilih Kabupaten / Kota' }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kawasan">
                                                kawasan
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="kawasan" value="{{ old('kawasan') }}"
                                                    name="kawasan" type="text" placeholder="Masukan Nama Kawasan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kecamatan">
                                                Kecamatan
                                            </label>
                                            <div class="col-lg-6">
                                                <select id="kecamatan" required autocomplete="off"
                                                    class="form-control theSelect" disabled name="kecamatan">
                                                    <option value="" selected>
                                                        {{ old('kecamatan') ?? 'Pilih Kecamatan' }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="grid-nama-desa">
                                                nama desa
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="grid-nama-desa" value="{{ old('desa') }}"
                                                    name="desa" type="text" placeholder="Masukan Nama Desa">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="grid-pola">
                                                pola
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="grid-pola" name="pola"
                                                    value="{{ old('pola') }}" type="text" placeholder="Masukan Pola">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tahun_patan">
                                                tahun patan
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="tahun_patan"
                                                    value="{{ old('tahun_patan') }}" name="tahun_patan" type="text"
                                                    placeholder="Masukan Tahun Patan">
                                                <script>
                                                    $('#tahun_patan').mask('####/####/####/####/####')
                                                </script>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="grid-jumlah-kk">
                                                Jumlah kk
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="grid-jumlah-kk"
                                                    value="{{ old('jumlah_KK') }}" name="jumlah_KK" type="text"
                                                    placeholder="Masukan Jumlah KK">
                                            </div>
                                        </div>
                                        <h1 class="card-title">Beban Tugas shm</h1>
                                        <div class="basic-form">
                                            <div class="form-row">
                                                <div class="col">
                                                    <label for="grid-target">
                                                        target
                                                    </label>
                                                    <input class="form-control" id="grid-target" type="number"
                                                        value="{{ old('target') }}" name="target" placeholder="Target">
                                                </div>
                                                <div class="col">
                                                    <label for="grid-realisasi">
                                                        realisasi
                                                    </label>
                                                    <input class="form-control" id="grid-realisasi"
                                                        value="{{ old('realisasi') }}" name="realisasi" type="number"
                                                        placeholder="Realisasi" disabled>
                                                </div>
                                                <div class="col">
                                                    <label for="grid-sisa">
                                                        sisa
                                                    </label>
                                                    <input class="form-control" id="grid-sisa" type="number"
                                                        name="sisa" value="{{ old('sisa') }}" placeholder="Sisa"
                                                        readonly disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h1 class="card-title">Status HPL Bidang</h1>
                                        <div class="basic-form">
                                            <div class="form-row">
                                                <div class="col">
                                                    <input id="horizontal-list-radio-status-bina" type="radio"
                                                        value="BINA" @if (old('status_HPL') == 'BINA') checked @endif
                                                        name="status_HPL" class="radio-control">
                                                    <label for="horizontal-list-radio-status-bina"
                                                        class="">BINA</label>
                                                </div>
                                                <div class="col">
                                                    <input id="horizontal-list-radio-status-serah" type="radio"
                                                        value="SERAH" name="status_HPL" class="radio-control"
                                                        @if (old('status_HPL') == 'SERAH') checked @endif>
                                                    <label for="horizontal-list-radio-status-serah">SERAH</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="basic-form" id="data-hpl">
                                            <div class="form-row">
                                                <div class="col">
                                                    <label class="" for="grid-belum">
                                                        belum hpl
                                                    </label>
                                                    <input class="form-control" id="grid-belum" type="number"
                                                        value="{{ old('belum_HPL') }}" name="belum_HPL"
                                                        placeholder="Belum HPL" disabled>
                                                </div>
                                                <div class="col">
                                                    <label class="" for="grid-sudah">
                                                        sudah hpl
                                                    </label>
                                                    <input class="form-control" id="grid-sudah"
                                                        value="{{ old('sudah_HPL') }}" name="sudah_HPL" type="number"
                                                        placeholder="Sudah HPL" disabled>
                                                </div>
                                                <div class="col">
                                                    <label class="" for="grid-jumlah">
                                                        jumlah
                                                    </label>
                                                    <input class="form-control" id="grid-jumlah" name="jumlah_hpl"
                                                        value="{{ old('jumlah_hpl') }}" type="number"
                                                        placeholder="Jumlah" readonly disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <br><label class="col-form-label" for="grid-Permasalahan lahan">
                                                Permasalahan lahan
                                            </label><br>
                                            <div class="form-row">

                                                @foreach ($permasalahan as $masalah)
                                                    <div class="col">
                                                        <div class="input-group mb-3 ">
                                                            <div class="input-group-prepend ">
                                                                <div class="input-group-text">
                                                                    <input masalah id="{{ $masalah->alias }}"
                                                                        type="checkbox" value="{{ $masalah->alias }}"
                                                                        name="permasalahan[]"
                                                                        @if ($masalah->alias == 'CLEAR') @checked(true) @endif>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $masalah->nama }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="masalah-checked">
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="grid-jumlah-bdg-beban-shm">
                                                Jumlah BDG Beban Shm
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="grid-jumlah-bdg-beban-shm" type="number"
                                                    placeholder="Jumlah BDG Beban SHM" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="grid-jumlah-sp-beban-shm">
                                                Jumlah SP Beban Shm
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="grid-jumlah-sp-beban-shm" type="number"
                                                    placeholder="Jumlah SP Beban SHM" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tahun-ipl">
                                                tahun IPL
                                            </label>
                                            <div class="col-lg-6">
                                                <select autocomplete="off" class="form-control theSelect"
                                                    name="tahun_IPL" id="tahun-ipl">
                                                    <option value="">Masukan Tahun Ipl</option>
                                                    @for ($i = 1945; $i <= date('Y'); $i++)
                                                        { <option value="{{ $i }}">
                                                            {{ $i }}
                                                        </option>
                                                        }
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="data_spacial">
                                                Data Spacial
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="data_spacial"
                                                    value="{{ old('data_spacial') }}" name="data_spacial" type="text"
                                                    placeholder="Masukan Data Spacial">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="message" class="col-lg-4 col-form-label">Keterangan</label>
                                            <div class="col-lg-6">
                                                <textarea id="message" rows="4" class="form-control" placeholder="Keterangan" name="keterangan">{{ old('keterangan') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        {{-- Content body end --}}


    </div>
    <script src="{{ url('assets/js/filter.js') }}"></script>
    <script>
        $(".theSelect").select2();
        $('input[name="kawasan"]').val('{{ old('kawasan') }}');
        // $('form :input').map(function() {
        //     let name = $(this).prop('name')
        //     let type = $(this).prop('type')
        //     if (name != '') {
        //         if ((type == "checkbox" || type == "radio") && this.checked) {
        //             console.log($(this).val());
        //         }
        //         // all other fields, except buttons
        //         else if (type != "button" && type != "submit") {
        //             console.log($(this).val());
        //         }
        //     }

        // })

        $('#data-hpl').hide();
        $('#provinsi').on('change', function() {
            $('#kabupaten').html(
                `<option selected value="">Pilih Kabupaten / Kota</option>`);
            $('#kecamatan').html(
                `<option selected value="">Pilih Kecamatan</option>`);
            if ($(this).val() != '') {
                $('#kabupaten').removeClass('cursor-not-allowed');
                $('#kabupaten').removeAttr('disabled');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('ajaxGetKabupatenByProvinsi.post') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        column: 'nama',
                        value: $(this).val()
                    },
                    success: function(res) {
                        $.each(res, function(index, value) {
                            $('#kabupaten').append(
                                `<option value="${value.nama}">${value.nama}</option>`)
                        })
                    }
                })
            } else {
                $('#kabupaten').addClass('cursor-not-allowed');
                $('#kabupaten').attr('disabled', true);
                $('#kecamatan').addClass('cursor-not-allowed');
                $('#kecamatan').attr('disabled', true);
            }
        })
        $('#kabupaten').on('change', function() {
            // console.log($(this).val());
            $('#kecamatan').html(
                `<option selected value="">Pilih Kecamatan</option>`);
            if ($(this).val() != '') {
                $('#kecamatan').removeClass('cursor-not-allowed');
                $('#kecamatan').removeAttr('disabled');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('ajaxGetKecByKab.post') }}",
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        column: 'nama',
                        value: $(this).val()
                    },
                    success: function(res) {
                        $.each(res, function(index, value) {
                            $('#kecamatan').append(
                                `<option value="${value.nama}">${value.nama}</option>`)
                        })
                    }
                })
            } else {
                $('#kecamatan').addClass('cursor-not-allowed');
                $('#kecamatan').attr('disabled', true);
            }
        })

        $('#grid-target').on('change', function() {
            $('#grid-belum').removeAttr('disabled')
            $('#grid-sudah').removeAttr('disabled')
            $('#grid-realisasi').removeAttr('disabled')
            let sisa = $(this).val() - $('#grid-realisasi').val();
            if (sisa >= 0) {
                $('#grid-sisa').val(sisa);
                $('#grid-jumlah').val(sisa);
            } else {
                $('input[name="status"]').props('disabled', true);
                $('input[name="status"]').props('checked', false);
                alert('realisasi tidak boleh lebih besar dari target')
            }

        })
        $('#grid-realisasi').on('change', function() {
            let sisa = $('#grid-target').val() - $(this).val();
            if (sisa >= 0) {
                $('#grid-sisa').val(sisa);
                $('#grid-jumlah').val(sisa);
            } else {
                $('input[name="status"]').props('disabled', true);
                $('input[name="status"]').props('checked', false);
                alert('realisasi tidak boleh lebih besar dari target')
            }
        })

        $('input[name="status_HPL"]').on('change', function() {
            $('#data-hpl').show();
        })

        $('#grid-belum').on('change', function() {
            $('#grid-sudah').val(parseInt($('#grid-sisa').val()) - parseInt($(this).val()));
            $('#grid-sudah').attr('disabled', true);
        })
        $('#grid-sudah').on('change', function() {
            $('#grid-belum').val(parseInt($('#grid-sisa').val()) - parseInt($(this).val()));
            $('#grid-belum').attr('disabled', true);
        })
        let output = ` <div id="masalah-${$('input[masalah]:checked').val()}">
                    <p class=""> ${$('input[masalah]:checked').val()}</p>
                <div class="basic-form" >
                <div class="form-row">
                    <div class="col">
                    <input
                    class="BDG form-control"
                    id="grid-${$('input[masalah]:checked').val()}-BDG" type="number" name="${$('input[masalah]:checked').val()}-BDG" placeholder="BDG">
                </div>
                    <div class="col">
                    <input
                        class="SP form-control"
                        id="grid-${$('input[masalah]:checked').val()}-SP" name="${$('input[masalah]:checked').val()}-SP" type="number" placeholder="SP">
                        </div>
                        </div>
                        </div>
                        </div>`
        $('#masalah-checked').append(output);

        $('input[masalah]').on('change', function() {
            if (this.checked) {
                let output = ` <div id="masalah-${$(this).val()}">
                    <br><p class=""> ${$(this).val().replace(/-/gi, ' ')}</p>
                    <div class="basic-form" >
                <div class="form-row">
                        <div class="col">
                    <input
                    class="BDG form-control"
                    id="grid-${$(this).val()}-BDG" type="number" name="${$(this).val()}-BDG" placeholder="BDG">
                    </div>
                    <div class="col">
                    <input
                        class="SP form-control"
                        id="grid-${$(this).val()}-SP" name="${$(this).val()}-SP" type="number" placeholder="SP">
                        </div>
                        </div>
                        </div>
                    </div>`
                $('#masalah-checked').append(output);
            } else {
                $(`#masalah-${$(this).val()}`).remove();
            }
        })

        $('#grid-jumlah-sp-beban-shm').on('click', function() {
            let jumlah = 0;
            $('#masalah-checked :input.SP').map(function() {
                jumlah += parseInt($(this).val());
            })
            $(this).val(jumlah);
        })
        $('#grid-jumlah-bdg-beban-shm').on('click', function() {
            let totalBDG = 0;
            $('.error').remove();
            $('#masalah-checked :input.BDG').map(function() {
                totalBDG += parseInt($(this).val());
            })
            if (totalBDG > parseInt($('#grid-sisa').val()) || totalBDG < parseInt($('#grid-sisa').val())) {
                $(this).after(
                    `<p class="m-0 text-danger error">total BDG harus = ${parseInt($('#grid-sisa').val())}</p>`
                )
            }
            $(this).val(totalBDG);
        })
    </script>
@endsection
