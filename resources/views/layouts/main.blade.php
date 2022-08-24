<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!-- TITLE OF SITE -->
    <title>loker

    </title>

    <!-- for title img -->
    <link rel="shortcut icon" type="image/icon" href="/images/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!--animate.css-->
    <link rel="stylesheet" href="/css/animate.css">

    <!--hover.css-->
    <link rel="stylesheet" href="/css/hover-min.css">

    <!--vedio player css-->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet" />


    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link href="/css/bootsnav.css" rel="stylesheet" />

    <!--style.css-->
    <link rel="stylesheet" href="/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="/css/responsive.css">

    <!--app.css-->
    <link rel="stylesheet" href="/css/app.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    @include("partials.navbar")

    @yield("container")
    <!-- jaquery link -->

    <script src="/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!--modernizr.min.js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="/js/bootsnav.js"></script>

    <!-- for manu -->
    <script src="/js/jquery.hc-sticky.min.js" type="text/javascript"></script>


    <!-- vedio player js -->
    <script src="/js/jquery.magnific-popup.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--owl.carousel.js-->
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>

    <!-- counter js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>

    <!--Custom JS-->
    <script type="text/javascript" src="/js/jak-menusearch.js"></script>
    <script type="text/javascript" src="/js/custom.js"></script>
    <script type="text/javascript">
        $('.filter_nama').select2({
            theme: "classic"
        });

    </script>

    {{-- validasi --}}
    {{-- validasi --}}
    <script src="/validation/jquery.validate.min.js"></script>
    <script src="/validation/validate-register.js"></script>
    <script src="/validation/validate-login.js"></script>
    <script>
        function previewImage() {
            const image = document.querySelector('#foto');
            const imageShow = document.querySelector('.img-show');
            imageShow.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imageShow.src = oFREvent.target.result;
            }
        }

        function previewImage1() {
            const image1 = document.querySelector('#foto1');
            const imageShow1 = document.querySelector('.img-show1');
            imageShow1.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image1.files[0]);
            oFReader.onload = function(oFREvent) {
                imageShow1.src = oFREvent.target.result;
            }
        }

        function previewVideo() {
            const image1 = document.querySelector('#video');
            const imageShow1 = document.querySelector('.video-show');
            imageShow1.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image1.files[0]);
            oFReader.onload = function(oFREvent) {
                imageShow1.src = oFREvent.target.result;
            }
        }

    </script>


</body>

</html>
