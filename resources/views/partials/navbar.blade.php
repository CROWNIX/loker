<style>
    .profile-img {
        margin-top: -5px;
        margin-right: 5px;
        float: left;
        background: url(example.jpg) 50% 50% no-repeat;
        /* 50% 50% centers image in div */
        background-size: auto 100%;
        /* Interchange this value depending on prefering width vs. height */
        width: 30px;
        height: 30px;
    }

</style>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fa fa-close"></i>
                    </span>
                </button>
                <h4 class="modal-title" id="mySmallModalLabel">
                    Masuk
                </h4>
                <form action="/login" method="POST" class="sm-frm form-login" style=" padding:25px">

                    @csrf
                    <div class="form-group row has-success">
                        <label for="emailLogin" class="col-lg-4 col-form-label">Email</label>
                        <div class="col-lg-6">
                            <input type="email" name="emailLogin" class="form-control" id="emailLogin" placeholder="Enter Email">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="passwordLogin" class="col-lg-4 col-form-label">Password</label>

                        <div class="col-lg-6">
                            <input type="password" name="passwordLogin" class="form-control" id="passwordLogin" placeholder="Enter Password">

                        </div>
                    </div>
                    <br>
                    <div class="form-group row has-success">
                        <div class="col-lg-8 ml-auto">
                            <input type="Submit" class="btn btn-primary" value="Login" />
                            <input type="button" class="btn btn-warning" onclick="location.href='/perusahaan/login';" value="Masuk sebagai perusahaan" />
                        </div>
                    </div>
                    {{-- <a href="/perusahaan/login" class="btn btn-warning">Masuk sebagai perusahaan</a> --}}
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <!-- large modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fa fa-close"></i>
                    </span>
                </button>
                <h4 class="modal-title" id="myLargeModalLabel">Daftar</h4>
                <form class="lg-frm" action="daftar.php" method="POST" style="padding:25px" enctype="multipart/form-data">
                    <label>Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    <label>Password :</label>
                    <input type="text" name="password" class="form-control" placeholder="Enter Password">
                    <label>Nama Lengkap :</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Enter Nama Lengkap">
                    <label>Alamat :</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Enter Alamat">
                    <label>No Telepon :</label>
                    <input type="text" name="no_telepon" class="form-control" placeholder="Enter No Telepon">
                    <label>Jenis Kelamin :</label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
                    <label>Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir"> <br>

                    <label>Tempat Lahir :</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Enter Tempat Lahir">
                    <label>Tamatan Pendidikan :</label>
                    <input type="text" name="tamatan_pendidikan" class="form-control" placeholder="Enter Tamatan Pendidikan">
                    <button class="btn btn-default pull-right" name="simpan" value="simpan">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<!--menu start-->
<section id="menu">
    <div class="container">
        <div class="menubar">
            <nav class="navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo/logo.png" alt="logo">
                    </a> -->
                </div>
                <!--/.navbar-header -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Beranda</a></li>
                        @auth
                        <li><a href="/pusat-informasi">Pusat Informasi</a></li>
                        <li><a href="/lowongan-kerja">Lowongan Kerja</a></li>
                        <li><a href="lamaran">Riwayat Pekerjaan</a></li>
                        {{-- <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" style="background: none; border:none; color: white; margin-top: 3.4rem;" class="logout">Logout</button>

                            </form>
                        </li> --}}
                        <li class="dropdown" style="background: none !important;">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
                                <div class="img-rounded profile-img"><img src="{{ asset("storage/user/". auth()->user()->foto) }}" style="border-radius: 50%; height: 3rem;" alt="tidak ada poto"> </div>
                                {{ auth()->user()->username}}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/user/profile">Profile</a></li>
                                <li class="form-logout">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit">logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                        @else
                        <li><a href="/pusat-informasi">Pusat Informasi</a></li>
                        <li><a href="/lowongan-kerja">Lowongan Kerja</a></li>
                        <li><a class="text-white" href="#" style="cursor:pointer" data-toggle="modal" data-target=".bs-example-modal-sm">

                                Masuk </a>
                        <li><a type="button" style="cursor:pointer" data-toggle="modal" data-target="#exampleModal">Daftar</a>

                        </li>

                        @endauth
                    </ul><!-- / ul -->
                </div><!-- /.navbar-collapse -->
            </nav>
            <!--/nav -->
        </div>
        <!--/.menubar -->
    </div><!-- /.container -->

</section>
<!--/#menu-->

{{-- profile --}}
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Daftar
                    </span>
                </h5>
            </div>
            <div class="modal-body">
                <form class="lg-frm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row has-success">
                        <label for="username" class="col-lg-4 col-form-label">Username</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="email" class="col-lg-4 col-form-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="email" class="form-control" id="email" placeholder="Enter Email">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="password" class="col-lg-4 col-form-label">Password</label>
                        <div class="col-lg-6">
                            <input type="password" readonly name="password" class="form-control" id="password" placeholder="Enter Password">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="nama_lengkap" class="col-lg-4 col-form-label">Nama Lengkap</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Enter Nama Lengkap">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="alamat" class="col-lg-4 col-form-label">Alamat</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="alamat" class="form-control" id="alamat" placeholder="Enter Nama Lengkap">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="no_telepon" class="col-lg-4 col-form-label">No Telepon</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="no_telepon" class="form-control" id="no_telepon" placeholder="Enter No Telepon">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label">Jenis Kelamin</label>

                        <div class="col-lg-6">
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="laki-laki" <span class="form-radio-sign"> Laki-laki</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="perempuan" <span class="form-radio-sign"> perempuan</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Enter Tempat Lahir">

                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <div class="col-lg-6">
                            <input type="date" readonly name="tanggal_lahir" class="form-control" id="tanggal_lahir">


                        </div>
                    </div>

                    <div class="form-group row has-success">
                        <label for="tamatan_pendidikan" class="col-lg-4 col-form-label">No Telepon</label>
                        <div class="col-lg-6">
                            <input type="text" readonly name="tamatan_pendidikan" class="form-control" id="tamatan_pendidikan" placeholder="Enter Tamatan Pendidikan">


                        </div>
                    </div>

                    {{-- <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label" for="foto">Foto</label>
                        <div class="col-lg-6">
                            <img class="img-show mb-3 img-fluid rounded d-block" style="height: 200px" alt=""><br>
                            <input type="file" name="foto" class="form-control-file" id="foto" onchange="previewImage()">
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>

                    </td>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- endprofile --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Daftar
                    </span>
                </h5>
            </div>
            <div class="modal-body">
                <form class="lg-frm form-valide" action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row has-success">
                        <label for="username" class="col-lg-4 col-form-label">Username</label>
                        <div class="col-lg-6">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="email" class="col-lg-4 col-form-label">Email</label>
                        <div class="col-lg-6">
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="password" class="col-lg-4 col-form-label">Password</label>
                        <div class="col-lg-6">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="nama_lengkap" class="col-lg-4 col-form-label">Nama Lengkap</label>
                        <div class="col-lg-6">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Enter Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="alamat" class="col-lg-4 col-form-label">Alamat</label>
                        <div class="col-lg-6">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Enter Nama Lengkap">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label for="no_telepon" class="col-lg-4 col-form-label">No Telepon</label>
                        <div class="col-lg-6">
                            <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Enter No Telepon">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label">Jenis Kelamin</label>

                        <div class="col-lg-6">
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="laki-laki" <span class="form-radio-sign"> Laki-laki</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="perempuan" <span class="form-radio-sign"> perempuan</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                        <div class="col-lg-6">
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Enter Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <div class="col-lg-6">
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">

                        </div>
                    </div>

                    <div class="form-group row has-success">
                        <label for="tamatan_pendidikan" class="col-lg-4 col-form-label">No Telepon</label>
                        <div class="col-lg-6">
                            <input type="text" name="tamatan_pendidikan" class="form-control" id="tamatan_pendidikan" placeholder="Enter Tamatan Pendidikan">

                        </div>
                    </div>

                    <div class="form-group row has-success">
                        <label class="col-lg-4 col-form-label" for="foto">Foto</label>
                        <div class="col-lg-6">
                            <img class="img-show mb-3 img-fluid rounded d-block" style="height: 200px" alt=""><br>
                            <input type="file" name="foto" class="form-control-file" id="foto" onchange="previewImage()">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    </td>
                </form>
            </div>
        </div>
    </div>
</div>
