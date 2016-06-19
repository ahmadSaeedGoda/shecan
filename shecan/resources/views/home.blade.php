@extends('layouts.app')
@section('content')
    <body id="home">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- FullScreen -->
    <div class="intro-header">
        <div class="col-xs-12 text-center abcen1">
            <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">SheCan</h1>
            <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Create a standout resume in minutes.
                Easily create professional resumes, online portfolios and personal landing pages</h3>
            <ul class="list-inline intro-social-buttons">
                <li><a href="#" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s">START CV</a>
                </li>
            </ul>
        </div>
        <!-- /.container -->
        {{--<div class="col-xs-12 text-center abcen wow fadeIn">--}}
            {{--<div class="button_down ">--}}
                {{--<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s" href="#whatis">--}}
                    {{--<img class="img_scroll" src="img/icon/circle.png" alt=""> </a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

    <!-- NavBar-->
    <nav class="navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">Make Your CV NOW</a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">

                    <li class="menuItem"><a href="#whatis">Industries</a></li>
                    <li class="menuItem"><a href="#useit">Use It</a></li>
                    <li class="menuItem"><a href="#screen">Screenshot</a></li>
                    <li class="menuItem"><a href="#credits">Credits</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- What is -->
    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Industries</h2>
                <p class="lead" style="margin-top:0">FOllow differient industry.</p>

            </div>

            <div class="row">
                <?php $industries=DB::table('industries')->get(); ?>
                @foreach($industries as $industry)
                <div class="col-sm-4 wow fadeInDown text-center">
                    <img class="rotate" src="img/icon/tweet.svg" alt="Generic placeholder image">
                    <h3><a href ="{{ url('/industries') }}"> {{$industry->name}}</a></h3>
                    <!-- <button type="submit" class="btn btn-xm  btn-primary" data-text-swap="un follow" id="follow" data-rowtok="{{ csrf_token() }}" data-rowid="{{ $industry->id }}" ><i class=" fa fa-btn star "></i>follow</button> -->

                    <p class="lead"><form action="{{ route('follow.store') }}" method="POST" style="display: inline;" >
                                        <input type="hidden" name="_method" value="POST">
                                        <input type="hidden" name="industry_id" value="{{$industry->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xm  btn-primary" data-text-swap="un follow" id="follow"><i class=" fa fa-btn star "></i>follow</button>
                                    </form></p>

                    <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
                 @endforeach
                
            </div><!-- /.row -->

            <!-- <div class="row tworow">

                

                
            </div><!-- /.row --> 
        </div>
    </div>

    <!-- Use it -->
    <div id="useit" class="content-section-a">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/ipad.png" alt="">
                </div>

                <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                    <h3 class="section-heading">Choose a Professional Design</h3>
                    <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet
                        sit dolor greand fdanrh sdfs
                    </div>
                    <p class="lead">
                        Always have the right resume for the job.

                        Whether it’s a mind-blowing web portfolio or a professional PDF resume, VisualCV has the right
                        design for the job.

                        Every VisualCV template is carefully crafted to beat the 6 second test - helping you get from
                        application to interview.
                    </p>

                    <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                        <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                    <div id="owl-demo-1" class="owl-carousel">
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img class="img-responsive img-rounded" src="img/iphone.png" alt="">
                            </div>
                        </a>
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img class="img-responsive img-rounded" src="img/iphone.png" alt="">
                            </div>
                        </a>
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img class="img-responsive img-rounded" src="img/iphone.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRightBig" data-animation-delay="200">
                    <h3 class="section-heading">Publish as an Online CV or PDF</h3>
                    <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet
                        sit dolor greand fdanrh sdfs
                    </div>
                    <p class="lead">
                        In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
                        Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
                        uam non erat mirum sapientiae lorem cupido
                        patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                    </p>

                    <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                        <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doge.png" alt="">
                </div>

                <div class="col-sm-6 wow fadeInLeftBig" data-animation-delay="200">
                    <h3 class="section-heading">Send and track your Resume</h3>
                    <p class="lead">A special thanks to Death to the Stock Photo for
                        providing the photographs that you see in this template.
                    </p>

                    <ul class="descp lead2">
                        <li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
                        <li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future
                        </li>
                        <li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Screenshot -->
    <div id="screen" class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
                    <h2>Screen App</h2>
                    <p class="lead" style="margin-top:0">A special thanks to Death.</p>
                </div>
            </div>
            <div class="row wow bounceInUp">
                <div id="owl-demo" class="owl-carousel">

                    <a href="img/slide/1.png" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
                        </div>
                    </a>

                    <a href="img/slide/2.png" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
                        </div>
                    </a>

                    <a href="img/slide/3.png" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
                        </div>
                    </a>

                    <a href="img/slide/1.png" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
                        </div>
                    </a>

                    <a href="img/slide/2.png" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
                        </div>
                    </a>

                    <a href="img/slide/3.png" class="image-link">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </div>

    <div class="content-section-c ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center white">
                    <h2>Get Live Updates</h2>
                    <p class="lead" style="margin-top:0">Get Newly added updates</p>
                </div>
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="mockup-content">
                        <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                            <button type="button "><span>Subscribe to our Newsletter</span></button>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-4 ">
                                        <h2 class="morph-clone">Subscribe to our Newsletter</h2>
                                        <form>
                                            <p><label>Your Email Address</label><input type="text"/></p>
                                            <p>
                                                <button>Subscribe me</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            >
        </div>
    </div>

    <!-- Banner Download -->
    <div id="downloadlink" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                    <h2>Download Free</h2>
                    <p class="lead" style="margin-top:0">Use our IOS App</p>
                    <p><a class="btn btn-embossed btn-primary view" role="button">Apple Store</a></p>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="footer-title">Follow Us!</h3>
                    <p>Vuoi ricevere news su altri template?<br/>
                        Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br/>
                        Go to: <a href="#" target="_blank">andreagalanti.it</a>
                    </p>

                    <!-- LICENSE -->
                    <a rel="cc:attributionURL" href="#"
                       property="dc:title">Footer </a> by
                    <a rel="dc:creator" href="#"
                       property="cc:attributionName">Andrea Galanti</a>
                    is licensed to the public under
                    <BR>the <a rel="license"
                               href="#">Creative
                        Commons Attribution 3.0 License - NOT COMMERCIAL</a>.


                </div> <!-- /col-xs-7 -->

                <div class="col-md-5">
                    <div class="footer-banner">
                        <h3 class="footer-title">SheCan</h3>
                        <ul>
                            <li>12 Column Grid Bootstrap</li>
                            <li>Form Contact</li>
                            <li>Drag Gallery</li>
                            <li>Full Responsive</li>
                            <li>Lorem Ipsum</li>
                        </ul>
                        Go to: <a href="#" target="_blank">ITI 36</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
