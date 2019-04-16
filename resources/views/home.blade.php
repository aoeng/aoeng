<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('material-kit/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('material-kit/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        AOE NG
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('material-kit/css/material-kit.css?v=2.0.5')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{url('/')}}">
                AOE NG </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> 分类
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{route('php')}}" class="dropdown-item">
                            <i class="fa fa-php"></i>PHP
                        </a>
                        <a href="{{route('vue')}}" class="dropdown-item">
                            <i class="fa fa-vue"></i> Vue
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">
                        <i class="material-icons">account_circle</i> 站长简介
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://github.com/aoeng" target="_blank" data-original-title="Follow us on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url({{asset('material-kit/img/bg2.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>AOE NG.</h1>
                    <h3>My Show Time.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">

    <div class="section section-download" id="downloadSection">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2>Do you love this UI Kit?</h2>
                    <h4>Cause if you do, it can be yours for FREE. Hit the buttons below to navigate to our website where you can find the kit. Our friends from
                        <a href="https://themeisle.com/?utm_campaign=mkfree-hestia&amp;utm_source=creativetim&amp;utm_medium=website" target="_blank">ThemeIsle</a> created a Wordpress Theme which can be also downloaded for free. Start a new project or give an old Bootstrap project a new look!</h4>
                </div>
                <div class="col-sm-8 col-md-6 ml-auto mr-auto">
                    <a href="https://www.creative-tim.com/product/material-kit" class="btn btn-primary btn-lg">
                        <i class="fa fa-html5"></i> Free HTML Download
                    </a>
                    <a href="https://themeisle.com/themes/hestia/?utm_campaign=mkfree-hestia&amp;utm_source=creativetim&amp;utm_medium=website" target="_blank" class="btn btn-primary btn-lg">
                        <i class="fa fa-wordpress"></i> Wordpress Theme
                    </a>
                </div>
            </div>
            <br>
            <br>
            <div class="row text-center">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2>Want more?</h2>
                    <h4>We've just launched
                        <a href="https://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-mk-demos" target="_blank">Material Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap UI Kit inspired by Material Design.</h4>
                </div>
                <div class="col-sm-8 col-md-5 ml-auto mr-auto">
                    <a href="https://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-mk-demos" class="btn btn-rose btn-upgrade btn-lg" target="_blank">
                        <i class="material-icons">unarchive</i> Upgrade to PRO
                    </a>
                </div>
            </div>
            <div class="sharing-area text-center">
                <div class="row justify-content-center">
                    <h3>Thank you for supporting us!</h3>
                </div>
                <button id="twitter" class="btn btn-raised btn-twitter sharrre">
                    <i class="fa fa-twitter"></i> Tweet
                </button>
                <button id="facebook" class="btn btn-raised btn-facebook sharrre">
                    <i class="fa fa-facebook-square"></i> Share
                </button>
                <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
                    <i class="fa fa-google-plus"></i> Share
                </button>
                <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank" class="btn btn-raised btn-github">
                    <i class="fa fa-github"></i> Star
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="footer" data-background-color="black">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{asset('material-kit/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material-kit/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material-kit/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('material-kit/js/plugins/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{asset('material-kit/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('material-kit/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_KEY')}}"></script>-->
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('material-kit/js/material-kit.js?v=2.0.5')}}" type="text/javascript"></script>
{{--<script src="{{asset('js/app.js')}}" type="text/javascript"></script>--}}
<script>
    $(document).ready(function() {
        //init DateTimePickers
        materialKit.initFormExtendedDatetimepickers();

        // Sliders Init
        materialKit.initSliders();
    });


    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }

</script>
</body>

</html>
