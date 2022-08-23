
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
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
                <form action="/login" method="POST" class="sm-frm" style="padding:25px">
                    @csrf
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    <label>Password :</label>
                    <input type="text" name="password" class="form-control" placeholder="Enter Password">
                    <button type="Submit" class="btn btn-primary">Login</button>
                    <a href="/perusahaan/login" class="btn btn-warning">Masuk sebagai perusahaan</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- large modal -->
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
</div>

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
                        <li>
                            <form action="/logout" method="post">
                            @csrf
                            <button type="submit" style="background: none; border:none; color: white; margin-top: 3.4rem;" class="logout">Logout</button>
                            </form>
                        </li> 
                        @else
                        <li><a href="/pusat-informasi">Pusat Informasi</a></li>
                        <li><a href="/lowongan-kerja">Lowongan Kerja</a></li>
                        <li><a class="text-white" href="#" data-toggle="modal" data-target=".bs-example-modal-sm">
                                Masuk</a>
                        <li><a type="button" data-toggle="modal" data-target="#exampleModal">Daftar</a>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="exampleModalLabel">Daftar</h4>
                <form class="lg-frm" action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label>Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                    <label>Email :</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    <label>Password :</label required>
                    <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
                    <label>Nama Lengkap :</label>
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Enter Nama Lengkap" required>
                    <label>Alamat :</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Enter Alamat" required>
                    <label>No Telepon :</label>
                    <input type="text" name="no_telepon" class="form-control" placeholder="Enter No Telepon" required>
                    <label>Jenis Kelamin :</label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
                    <label>Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir"> <br>
                    <label>Tempat Lahir :</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Enter Tempat Lahir" required>
                    <label>Tamatan Pendidikan :</label>
                    <input type="text" name="tamatan_pendidikan" class="form-control" placeholder="Enter Tamatan Pendidikan" required>
                    <label>Upload CV</label>
                    <td><input type="file" name="gambar" required></td>
                    <input type="submit" value="Daftar">
                    </td>
                </form>
            </div>
        </div>
    </div>
</div>