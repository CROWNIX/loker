<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin </title>

    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">

  
    <link href="/admin/css/style.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include("partials.admin.sidebar")
        @include("partials.admin.topbar")
        <!-- Begin Page Content -->
        <div class="container-fluid">

            @yield("container")

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


 <!-- Footer -->
 <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



<!-- Bootstrap core JavaScript-->
<script src="/admin/vendor/jquery/jquery.min.js"></script>
<script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/admin/js/demo/chart-area-demo.js"></script>
<script src="/admin/js/demo/chart-pie-demo.js"></script>
</body>

</html>