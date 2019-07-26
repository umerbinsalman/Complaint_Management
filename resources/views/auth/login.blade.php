
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Complaint Management</title>

    <link rel="apple-touch-icon" href="{{asset('iconbar/assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('iconbar/assets/images/favicon.ico')}}">

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
    <link rel="stylesheet" href="{{asset('iconbar/assets/examples/css/pages/login-v3.css')}}">


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
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Page -->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    <img class="brand-img" src="{{asset('iconbar/assets//images/logo-colored.png')}}" alt="...">
                    <h2 class="brand-text font-size-18">Remark</h2>
                </div>
                @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        {!!Session::get('fail') !!}
                    </div>
                @endif
                <form method="post" action="{{ route('login') }}" autocomplete="off">
                    @if ($errors->has('username'))
                        <div class="text-left form-group form-material has-danger" data-plugin="formMaterial">
                            <label class="form-control-label" for="inputError">{{ $errors->first('username') }}</label>
                            <input type="text" class="form-control" id="inputError" placeholder="Username">
                        </div>
                    @else
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="username" />
                            <label class="floating-label">Username</label>
                        </div>
                    @endif
                        @if ($errors->has('password'))
                            <div class="text-left form-group form-material has-danger" data-plugin="formMaterial">
                                <label class="form-control-label" for="inputError">{{ $errors->first('password') }}</label>
                                <input type="password" class="form-control" id="inputError" placeholder="password">
                            </div>
                        @else
                            <div class="form-group form-material floating" data-plugin="formMaterial">
                                <input type="password" class="form-control" name="password" />
                                <label class="floating-label">password</label>
                            </div>
                        @endif
                    <div class="form-group clearfix">
                        <a class="float-right" href="forgot-password.html">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
                    {{@csrf_field()}}
                </form>
                <p>Still no account? Please go to <a href="{{url('/register')}}">Sign up</a></p>
            </div>
        </div>

        <footer class="page-copyright page-copyright-inverse">
            <p>WEBSITE BY Umer Bin Salman</p>
            <p>© 2019. All RIGHT RESERVED.</p>
        </footer>
    </div>
</div>
<!-- End Page -->


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
<script src="{{asset('global/js/Plugin/jquery-placeholder.js')}}"></script>
<script src="{{asset('global/js/Plugin/material.js')}}"></script>

<script>
    (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>
