<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

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

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
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
            <a class="navbar-brand" href="/" style="color: cornsilk;">SheCan</a>
        </div>
         <ul class="nav navbar-nav navbar-right">
         @if (Auth::guest())
            <li><a href="{{URL::asset('/login')}}" style="color: floralwhite;">LOGIN</a></li>
            <li><a href="{{URL::asset('/register')}}" style="color: floralwhite;">SIGN UP</a></li>      
       @else
       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span  class="fa fa-btn fa-bell" class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        
                        </li>
                    @endif
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

</body>
</html>
