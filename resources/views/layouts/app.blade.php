<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link href="https://fonts.googleapis.com/css?family=Khmer" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="shortcut icon" href="img/small_top_logo.jpg" />

  <meta name="description" content="">

  <!-- CSS -->
  <link href="assets/css/preload.css" rel="stylesheet">

  <!-- Compiled in vendors.js -->
  <!--
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-switch.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link href="assets/css/slidebars.min.css" rel="stylesheet">
  <link href="assets/css/lightbox.css" rel="stylesheet">
  <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
  <link href="assets/css/buttons.css" rel="stylesheet">
  -->

  <link href="assets/css/vendors.css" rel="stylesheet">
  <link href="assets/css/syntaxhighlighter/shCore.css" rel="stylesheet" >

  <!-- RS5.0 Stylesheet -->
  <!--<link rel="stylesheet" type="text/css" href="assets/css/settings.css">
  <link rel="stylesheet" type="text/css" href="assets/css/layers.css">
  <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">-->

  <link href="assets/css/style-blue.css" rel="stylesheet" title="default">
  <link href="assets/css/width-full.css" rel="stylesheet" title="default">



  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  <style>

            html, body {
                /*font-family: 'Lato', 'Sans', 'Arial';*/
                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            @font-face{
              font-family:khmermuol;
              src:url(fonts/khmermuol.ttf);
              font-family:khmeroscontent;
              src:url(fonts/KhmerOSContent-Regular.ttf);
            }
        </style>
    <!-- Styles -->
    {{-- <link href="/css/app.css" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<body>
    @include('includes.nav')
    <div class="sb-slidebar sb-right sb-style-overlay">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div><!-- /input-group -->
    <h2 class="slidebar-header no-margin-bottom localefont">{{trans('app.navigate')}}</h2>
    <ul class="slidebar-menu">
        <li id="home"><a class="localefont" href="/">{{trans('app.home')}}</a></li>
        <li id="services"><a class="localefont" href="/services">{{ trans('app.services') }}</a></li>
        <li id="jobs"><a class="localefont" href="/recruitment">{{ trans('app.recruitment') }}</a></li>
        <li id="progress"><a class="localefont" href="/processing">{{ trans('app.processing') }}</a></li>
        <li id="news"><a class="localefont" href="/news">{{ trans('app.news') }}</a></li>
        <li id="faq"><a class="localefont" href="/faq">{{ trans('app.faq') }}</a></li>
        <li id="photo"><a class="localefont" href="/gallery">{{ trans('app.gallery') }}</a></li>
        <li id="contact"><a class="localefont" href="/contact">{{ trans('app.contact') }}</a></li>
        <li id="aboutus"><a class="localefont" href="/aboutus">{{ trans('app.aboutus') }}</a></li>
    </ul>
    <h3 class="slidebar-header localefont">{{trans('app.language')}}</h3>
    {!! Form::open(['url'=>'/SwitchLan','method'=>'post'])!!}
{{--         <select class="form-control localefont" name='locale' id='locale2' onchange="this.form.submit()" style="color: #ddd; background-color:#333; border:none;" >
        <option class="en" value="en">{{ trans('app.en') }}</option>
        <option class="kh" value="kh">{{ trans('app.kh') }}</option>
        </select> --}}
        <?php
          $lo="";
          if(App::getLocale() == 'en'){$lo="en";}else{ $lo="kh";}
        ?>
        <button id="dLabel2" class="languages" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="image-font">{{trans('app.'.$lo)}}<span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-hover lang-z-style" aria-labelledby="dLabel">
          <li class="kh language-color first-lang" ><img src="img/icon-flag/khmer.png">{{ trans('app.kh') }} </li>
          <li class="en language-color"><img src="img/icon-flag/english.png">{{ trans('app.en') }}</li>
          <li class="th language-color"><img src="img/icon-flag/thai_flag.png"> {{ trans('app.th') }}</li>
          <li class="ch language-color"><img src="img/icon-flag/chinese.png">{{ trans('app.ch') }}</li>
        </ul>
        {{ csrf_field()}}
    {!! Form::close()!!}
    <h2 class="slidebar-header"></h2>
    <div class="slidebar-social-icons social-style">
        <a href="https://www.facebook.com/manpower.com.kh/" target="_blank" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>
    </div>
  </div> <!-- sb-slidebar sb-right -->
<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>
<aside id="footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-widget-title localefont">{{trans('app.sitemap')}}</h3>
                <ul class="list-unstyled three_cols">
                <li id="home"><a class="localefont" href="/">{{trans('app.home')}}</a></li>
                <li id="aboutus"><a class="localefont" href="/profile">{{ trans('app.profile') }}</a></li>
                <li id="services"><a class="localefont" href="/services">{{ trans('app.services') }}</a></li>
                <li id="jobs"><a class="localefont" href="/recruitment">{{ trans('app.recruitment') }}</a></li>
                <li id="training"><a class="localefont" href="/training">{{ trans('app.training') }}</a></li>
                <li id="progress"><a class="localefont" href="/processing">{{ trans('app.processing') }}</a></li>
                <li id="manage"><a class="localefont" href="/management">{{ trans('app.management') }}</a></li>
                <li id="faq"><a class="localefont" href="/faq">{{ trans('app.faq') }}</a></li>
                <li id="photo"><a class="localefont" href="/gallery">{{ trans('app.gallery') }}</a></li>
                <li id="contact"><a class="localefont" href="/contact">{{ trans('app.contact') }}</a></li>
                </ul>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</aside>
<footer id="footer" class="localefont">
    <p>© 2016 {{trans('app.alrightreserve')}} <a href="/">{{trans('app.tmp')}} {{trans('app.coltd')}}</a></p>
</footer>
    {{-- <div id="app">
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
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
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
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> --}}

    {{-- </div> --}}

    <!-- Scripts -->

<!-- Scripts -->
<!-- Compiled in vendors.js -->
<!--
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-switch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/slidebars.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/holder.js"></script>
<script src="assets/js/buttons.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/circles.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
-->

<script src="assets/js/vendors.js"></script>

<!--<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>-->


<!-- Syntaxhighlighter -->
<script src="assets/js/syntaxhighlighter/shCore.js"></script>
<script src="assets/js/syntaxhighlighter/shBrushXml.js"></script>
<script src="assets/js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="assets/js/DropdownHover.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/holder.js"></script>
<script src="assets/js/home_info.js"></script>
<script src="assets/js/commerce.js"></script>
<script src="js/active.js"></script>
<script src="js/mycircle.js"></script>
</body>
@yield('script')
</html>
