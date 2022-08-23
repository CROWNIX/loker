<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perusahaan - register</title>

    <!-- Custom fonts for this template-->
    <link href="/perusahaan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/perusahaan/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Perusahaan</h1>
                                @if (session()->has("error"))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session("error") }}
                                    </div>     
                                @endif
                            </div>
                            <form class="user" action="/perusahaan/register" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="nama_perusahaan" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Nama Perusahaan" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Email Perusahaan" required>
                                    </div>
                                    </div>
                                     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                       <textarea class="form-control form-control-text" name="tentang_perusahaan" placeholder="Deskripsi Perusahaan" required></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="alamat" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Alamat Perusahaan" required>
                                    </div>
                                </div>
                               <!--  <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div> -->
                                 <div class="form-group">
                                    <input type="number" name="no_telp" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Telpon Perusahaan" required>
                                </div>
                                <div class="form-group row">
                                   <!--  <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="User name">
                                    </div> -->
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Password" required>
                                    </div>
                                </div>
                                  <div class="form-group">
                                        <label>Upload SIUP</label>
                                        <input type="file" name="gambar" 
                                        class="form-control"
                                        placeholder="Upload SIUP" required>
                                </div>
                                <button class="btn btn-primary pull-right" name="daftar" value="simpan">Submit</button>
                                   
                                
                               
                               
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah Memiliki Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/perusahaan/vendor/jquery/jquery.min.js"></script>
    <script src="/perusahaan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/perusahaan/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/perusahaan/js/sb-admin-2.min.js"></script>

</body>

</html>