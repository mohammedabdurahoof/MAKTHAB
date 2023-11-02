<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eduglobal - Education & Courses HTML Template">
    <meta name="keywords"
        content="academy, course, education, elearning, learning, education html template, university template, college template, school template, online education template, tution center template">

    <!-- SITE TITLE -->
    <title>MAKTHAB ACADEMY</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/user/images/favicon.png') }}">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/animate.css') }}" />
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/themify-icons.css') }}" />
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/all.min.css') }}" />
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{ asset('assets/user/owlcarousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/owlcarousel/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/owlcarousel/css/owl.theme.default.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/magnific-popup.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}" />
    <link rel="stylesheet" id="layoutstyle" href="{{ asset('assets/user/color/theme.css') }}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106310707-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-106310707-1', {
            'anonymize_ip': true
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G6MPNF0KNC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-G6MPNF0KNC');
    </script>


    <script>
        var sc_project = 11981757;
        var sc_invisible = 1;
        var sc_security = "35d2687e";
        var sc_https = 1;
    </script>
    <script src="https://www.statcounter.com/counter/counter.js" async></script>

</head>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <span class="spinner"></span>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- END LOADER -->

    @include('user.partials.header')
    @yield('contant')
    @include('user.partials.footer')

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{ asset('assets/user/js/jquery-1.12.4.min.js') }}"></script>
    <!-- jquery-ui -->
    <script src="{{ asset('assets/user/js/jquery-ui.js') }}"></script>
    <!-- popper min js -->
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/user/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/user/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup min js  -->
    <script src="{{ asset('assets/user/js/magnific-popup.min.js') }}"></script>
    <!-- waypoints min js  -->
    <script src="{{ asset('assets/user/js/waypoints.min.js') }}"></script>
    <!-- parallax js  -->
    <script src="{{ asset('assets/user/js/parallax.js') }}"></script>
    <!-- countdown js  -->
    <script src="{{ asset('assets/user/js/jquery.countdown.min.js') }}"></script>
    <!-- jquery.counterup.min js -->
    <script src="{{ asset('assets/user/js/jquery.counterup.min.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/user/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope min js -->
    <script src="{{ asset('assets/user/js/isotope.min.js') }}"></script>
    <!-- jquery.parallax-scroll js -->
    <script src="{{ asset('assets/user/js/jquery.parallax-scroll.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('assets/user/js/scripts.js') }}"></script>

</body>

</html>
