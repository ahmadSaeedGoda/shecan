<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<<<<<<< HEAD

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <title>She Can</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/jasny-bootstrap.min.css')}}" rel="stylesheet" media="screen">

    <!-- Custom Google Web Font -->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="{{URL::asset('css/general.css')}}" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">

=======
>>>>>>> 0b684794c3b1e9437d55bf1e269ad411940b4a7e
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
<<<<<<< HEAD
    <!-- jquery -->
    <link href="{{ URL::asset('js/jquery-1.9.1.min.js')}}">

    <!-- Fonts -->
    <link href="{{ URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/clean-blog.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/clean-blog.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/fontawesomecss/font-awesome.min.css')}}" rel="stylesheet">

    @yield('head')

</head>
<body>

<nav class="navigation navigation-header" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color: cornsilk;">SheCan</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: floralwhite;">LOGIN</a></li>
            <li><a href="#" style="color: floralwhite;">SIGN UP</a></li>
        </ul>
    </div>
</nav>


@yield('content')


        <!-- JavaScript -->
<script src="{{URL::asset('js/jquery-1.10.2.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/owl.carousel.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>

<!-- StikyMenu -->
<script src="{{URL::asset('js/stickUp.min.js')}}"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $(document).ready(function () {
            $('.navbar-default').stickUp();

        });
    });

</script>

<!-- Smoothscroll -->
<script type="text/javascript" src="{{URL::asset('js/jquery.corner.js')}}"></script>
<script src="{{URL::asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>

<script src="{{URL::asset('js/classie.js')}}"></script>
<script src="{{URL::asset('js/uiMorphingButton_inflow.js')}}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{URL::asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{URL::asset('js/jasny-bootstrap.min.js')}}"></script>

@yield('script')

=======

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
>>>>>>> 0b684794c3b1e9437d55bf1e269ad411940b4a7e
</body>
</html>
