
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>Dashboard | Remark Material Admin Template</title>

    <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('global/css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('iconbar/assets/css/site.min.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('global/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/flag-icon-css/flag-icon.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/waves/waves.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/chartist/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{asset('iconbar/assets/examples/css/dashboard/v1.css')}}">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('global/fonts/material-design/material-design.min.css')}}">
    <link rel="stylesheet" href="{{asset('global/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="{{asset('global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{asset('global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{asset('global/vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition dashboard">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

{{--navbar--}}
@include('layouts.navbar')
{{--menubar--}}
@include('layouts.sidebar')
<!-- Page -->
@yield('content')
<!-- End Page -->


<!-- Footer -->
@include('layouts.footer')
<!-- Core  -->
<script src="{{asset('global/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
<script src="{{asset('global/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('global/vendor/popper-js/umd/popper.min.js')}}"></script>
<script src="{{asset('global/vendor/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('global/vendor/animsition/animsition.js')}}"></script>
<script src="{{asset('global/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('global/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
<script src="{{asset('global/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
<script src="{{asset('global/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
<script src="{{asset('global/vendor/waves/waves.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('global/vendor/switchery/switchery.js')}}"></script>
<script src="{{asset('global/vendor/intro-js/intro.js')}}"></script>
<script src="{{asset('global/vendor/screenfull/screenfull.js')}}"></script>
<script src="{{asset('global/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
<script src="{{asset('global/vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('global/vendor/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
<script src="{{asset('global/vendor/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('global/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>


<!-- Scripts -->
<script src="{{asset('global/js/Component.js')}}"></script>
<script src="{{asset('global/js/Plugin.js')}}"></script>
<script src="{{asset('global/js/Base.js')}}"></script>
<script src="{{asset('global/js/Config.js')}}"></script>

<script src="{{asset('iconbar/assets/js/Section/Menubar.js')}}"></script>
<script src="{{asset('iconbar/assets/js/Section/Sidebar.js')}}"></script>
<script src="{{asset('iconbar/assets/js/Section/PageAside.js')}}"></script>
<script src="{{asset('iconbar/assets/js/Plugin/menu.js')}}"></script>

<!-- Config -->
<script src="{{asset('global/js/config/colors.js')}}"></script>
<script src="{{asset('iconbar/assets/js/config/tour.js')}}"></script>
<script>Config.set('assets', '{{asset('iconbar/assets')}}');</script>

<!-- Page -->
<script src="{{asset('iconbar/assets/js/Site.js')}}"></script>
<script src="{{asset('global/js/Plugin/asscrollable.js')}}"></script>
<script src="{{asset('global/js/Plugin/slidepanel.js')}}"></script>
<script src="{{asset('global/js/Plugin/switchery.js')}}"></script>
<script src="{{asset('global/js/Plugin/matchheight.js')}}"></script>
<script src="{{asset('global/js/Plugin/jvectormap.js')}}"></script>
<script src="{{asset('global/js/Plugin/peity.js')}}"></script>

    <script src="{{asset('iconbar/assets/examples/js/advanced/bootbox-sweetalert.js')}}"></script>

    <script src="{{asset('global/js/Plugin/jquery-placeholder.js')}}"></script>
    <script src="{{asset('global/js/Plugin/material.js')}}"></script>

    <script src="{{asset('iconbar/assets/examples/js/dashboard/v1.js')}}"></script>

</body>
</html>
