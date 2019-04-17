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

<body class="profile-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{url('/')}}">AOENG </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
               {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                        <i class="material-icons"></i> 登录
                    </a>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://github.com/fevwind" target="_blank" data-original-title="Follow us on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('material-kit/img/city-profile.jpg')}}');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="{{asset('material-kit/img/faces/avatar.jpg')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">YongFeng Dang</h3>
                            <h6>PHPer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p>这个人很懒,什么也没有留下!</p>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            {{--<li class="nav-item">
                                <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                    <i class="material-icons">camera</i> Studio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                    <i class="material-icons">palette</i> Work
                                </a>
                            </li>--}}
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i> I
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i> Love
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                    <i class="material-icons">favorite</i> You
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="studio">
                    <div class="row">
                        <div class="col-md-3 ml-auto">
                           {{-- <img src="../assets/img/examples/studio-1.jpg" class="rounded">--}}
                        </div>
                        <div class="col-md-3 mr-auto">

                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="works">
                    <div class="row">
                        <div class="col-md-3 ml-auto">

                        </div>
                        <div class="col-md-3 mr-auto">

                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="favorite">
                    <div class="row">
                        <div class="col-md-3 ml-auto">

                        </div>
                        <div class="col-md-3 mr-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer" data-background-color="black">
    <div class="container">
        <nav class="float-left">
         {{--   <ul>
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
            </ul>--}}
        </nav>
        <div class="copyright float-right">
            &copy;
            2019, made with <i class="material-icons">favorite</i> by
            <a href="https://github.com/fevwind" target="_blank">Dang</a> .
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
