@extends('layouts.app')

@section('head')

    <link href="{{URL::asset('css/navmenu-reveal.css')}}" rel="stylesheet">
    <style>
        .navmenu-default .navmenu-brand, .navbar-default .navbar-offcanvas .navmenu-brand {
            color: #ecf0f1;
        }

        .navmenu-brand {
            padding: 0px 15px;
        }

        .uneditable-input {
            display: block;
            padding: 10px;
            margin: 0 0 10.5px;
            font-size: 14px;
            line-height: 1.42857143;
            word-break: break-all;
            word-wrap: break-word;
            color: #ecf0f1;
            background-color: rgba(63, 81, 181, 0.75);
            border: 1px solid #2C3E50;
            border-radius: 1px;
        }

        .canvas {
            /*background-color: #2C3E50;*/
            background: url('{{URL::asset("img/intro/intro-bg.jpg")}}');
        }

        .A4 {
            width: 21cm;
            background-color: #FFFFFF;
            margin: auto;
            margin-bottom: 30px;
        }

        #edit {
            background: url('{{URL::asset("img/intro/intro4.jpg")}}');
        }
    </style>
    <link type="text/css" rel="stylesheet" href={{URL::asset("css/cv/print.css")}} media="print"/>

@endsection

@section('content')
    <div id='edit' class="navmenu navmenu-default navmenu-fixed-left">
        <ul id='sidebar' class="nav navmenu-nav">
            <div class="container-fluid">
                <div class="row">
                    @yield('side')
                </div>
            </div>
        </ul>
    </div>

    <div class="canvas" style="">
        <div class="navbar navbar-default navbar-fixed-top" style="">
            <button class="btn btn-primary" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body"
                    data-autohide="false" style="background-color: #3498DB;">Edit CV
            </button>
        </div>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

        <div class="container">
            <div class="A4">
                <!-- Begin Wrapper -->
                <div id="wrapper">
                    <div class="wrapper-top"></div>
                    <div class="wrapper-mid">
                        <!-- Begin Paper -->
                        <div id="paper">
                            <div id="paper-mid">
                                <div class="entry">
                                    <!-- Begin Image -->
                                    @if(isset($content))
                                        <img class="portrait" src={{URL::asset("img/image.jpg")}} />
                                        <!-- End Image -->
                                        <!-- Begin Persona
                                        l Information -->
                                        <div class="self">
                                            <h1 class="name"
                                                style="width: 139%;">{{$content['data']['personal_info']['Name']}} <br/>
                                                <span>{{$content['data']['personal_info']['Job']}}</span></h1>
                                            <ul>
                                                <li class="ad">{{$content['data']['personal_info']['Address']}}</li>
                                                <li class="mail">{{$content['data']['personal_info']['Email']}}</li>
                                                <li class="tel">{{$content['data']['personal_info']['Mobile']}}</li>
                                                <li class="web">{{$content['data']['personal_info']['WebSite']}}</li>
                                                <li class="web">{{$content['data']['personal_info']['Linkedin']}}</li>
                                            </ul>
                                        </div>
                                </div>
                                <!-- Begin 1st Row -->
                                <div class="entry">
                                    <h2>SUMMARY</h2>
                                    @if(isset($content['data']['summary']))
                                        <div>{!!$content['data']['summary']['Description']!!}</div>
                                        @endif
                                                <!-- End 1st Row -->
                                        <!-- Begin 2nd Row -->
                                        @if(isset($content['data']['education']))
                                            <div class="entry">
                                                <h2>EDUCATION</h2>
                                                @foreach($content['data']['education'] as $x)
                                                    <div class="content">
                                                        <h3>{{$x['Start_date']}}- {{$x['End_date']}}</h3>
                                                        <p>{{$x['School_name']}}</p>
                                                        <p>{{$x['Degree_name']}}</p>
                                                        <ul>{!! $x['Description'] !!}}</ul>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                            <!-- End 2nd Row -->
                                                    <!-- Begin 3rd Row -->
                                                    @if(isset($content['data']['work']))
                                                        <div class="entry">
                                                            <h2>EXPERIENCE</h2>
                                                            @foreach($content['data']['work'] as $x)
                                                                <div class="content">
                                                                    <h3> {{$x['Start_date']}}- {{$x['End_date']}}</h3>
                                                                    <p>{{$x['Organization']}} <br/>
                                                                        <em>{{$x['Job_title']}}</em></p>
                                                                    <ul class="info">
                                                                        {!! $x['Description'] !!}
                                                                    </ul>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        @endif
                                                                <!-- End 3rd Row -->
                                                        <!-- Begin 4th Row -->
                                                        @if(isset($content['data']['skills']))
                                                            <div class="entry">
                                                                <h2>SKILLS</h2>
                                                                @foreach($content['data']['skills'] as $x)
                                                                    <div class="content">
                                                                        <h3>{{ $x['Name'] }}</h3>
                                                                        <ul>{!! $x['Description'] !!}}</ul>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <div class="clear"></div>
                                                        <div class="paper-bottom"></div>
                                            </div>
                                            <!-- End Paper -->
                                </div>
                                <div class="wrapper-bottom"></div>
                            </div>
                            <!-- End Wrapper -->
                        </div>
                    </div>
                    @endif
                            <!-- end of container -->
                </div>
@endsection