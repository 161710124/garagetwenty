<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GarageTwenty</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/Frontend/images/favicon.png') }}">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/material-design-iconic-font.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/font-awesome.min.css') }}">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/fontawesome-stars.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/meanmenu.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/owl.carousel.min.css') }}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/slick.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/animate.css') }}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/jquery-ui.min.css') }}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/venobox.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/nice-select.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/magnific-popup.css') }}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/bootstrap.min.css') }}">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/helper.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/responsive.css') }}">
        <!-- Modernizr js -->
        <script src="{{ asset('assets/Frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Middle Area -->
                @include('partials.headermid')
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                @include('partials.headerbot')
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Slider With Banner Area -->
            @yield('content')
            <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->
            @include('partials.chat')
            @include('partials.foot')
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{ asset('assets/Frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/Frontend/js/vendor/popper.min.js') }}"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{ asset('assets/Frontend/js/bootstrap.min.js') }}"></script>
        <!-- Ajax Mail js -->
        <script src="{{ asset('assets/Frontend/js/ajax-mail.js') }}"></script>
        <!-- Meanmenu js -->
        <script src="{{ asset('assets/Frontend/js/jquery.meanmenu.min.js') }}"></script>
        <!-- Wow.min js -->
        <script src="{{ asset('assets/Frontend/js/wow.min.js') }}"></script>
        <!-- Slick Carousel js -->
        <script src="{{ asset('assets/Frontend/js/slick.min.js') }}"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{ asset('assets/Frontend/js/owl.carousel.min.js') }}"></script>
        <!-- Magnific popup js -->
        <script src="{{ asset('assets/Frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Isotope js -->
        <script src="{{ asset('assets/Frontend/js/isotope.pkgd.min.js') }}"></script>
        <!-- Imagesloaded js -->
        <script src="{{ asset('assets/Frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Mixitup js -->
        <script src="{{ asset('assets/Frontend/js/jquery.mixitup.min.js') }}"></script>
        <!-- Countdown -->
        <script src="{{ asset('assets/Frontend/js/jquery.countdown.min.js') }}"></script>
        <!-- Counterup -->
        <script src="{{ asset('assets/Frontend/js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('assets/Frontend/js/waypoints.min.js') }}"></script>
        <!-- Barrating -->
        <script src="{{ asset('assets/Frontend/js/jquery.barrating.min.js') }}"></script>
        <!-- Jquery-ui -->
        <script src="{{ asset('assets/Frontend/js/jquery-ui.min.js') }}"></script>
        <!-- Venobox -->
        <script src="{{ asset('assets/Frontend/js/venobox.min.js') }}"></script>
        <!-- Nice Select js -->
        <script src="{{ asset('assets/Frontend/js/jquery.nice-select.min.js') }}"></script>
        <!-- ScrollUp js -->
        <script src="{{ asset('assets/Frontend/js/scrollUp.min.js') }}"></script>
        <!-- Main/Activator js -->
        <script src="{{ asset('assets/Frontend/js/main.js') }}"></script>
    <!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2JWyk%2bY2nnGNPnubWYp0IpWzbvgu5g9FoknEYoWVh3iuueyF9Cokeg%2bfw1oirjJtplnHzELM1FbdsP8%2fXqC1%2b9Y1aiReIRvi%2bWGME0nYdchiredsvrq1kx85IOhNZfJBYHtoC0i4dnlp63lS30c1pS49A7pR3%2fgg7B%2fxCnKhp9Pj0ntrtQNtpegzLP6Hy1CBiH7jqUy4yN4mhKNituR0w8VNUepOrF%2fL2vlvQiBn5ya0RFcfNc1ghMnDvuue%2fkqB%2foEQmK%2ffUNrFnq2vL0%2fyXAcuTdHEUFd9KY1lDrGoNzTdk%2bcqyLkZZVcU%2fvW6LO1CpFWNrLMRLjANEhNd%2bPptTVbDI8oTq1n3hUur9ewb4F1c93VfZpATbmOrXf0%2fXlUWZcx3gJ3aA8KZnHj6kinAWvFiH7F8wjAokwCrVCMuaIYZo2DCk9rVSAA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script> -->
    @yield('js')
</body>
</html>