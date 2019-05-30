<div class="sb-site-container">
<div class="boxed">
<header id="header-full-top" class="hidden-xs header-full">
    <div class="container">
        <div class="header-full-title">
            <a href="/" style="text-decoration:none;">
            <img class="logo-style" src="img/icon-flag/topuse.png"></a>
        </div>
        <nav class="top-nav lang-z">
            <ul class="top-nav-social hidden-sm animated fadeInDown animation-delay-12" style="width:250px;">
                {!! Form::open(['url'=>'/SwitchLan','method'=>'post','class'=>'lang'])!!}
                <p class="animated fadeIn animation-delay-6 localefont lang-style">{{ trans('app.language') }}:</p>
                  <?php
                    $lo="";
                    if(App::getLocale() == 'en'){$lo="en";}else if(App::getLocale() == 'th'){$lo="th";}
                    else if(App::getLocale()=="ch"){$lo="ch";}else{ $lo="kh";}
                  ?>
                  <button id="dLabel" class="languages" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="image-font">
                  {{trans('app.'.$lo)}}
                  <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-hover" style="left:105px;" aria-labelledby="dLabel">
                    <li class="kh" ><img src="img/icon-flag/khmer.png">{{ trans('app.kh') }} </li>
                    <li class="en"><img src="img/icon-flag/english.png">{{ trans('app.en') }}</li>
                    <li class="th"><img src="img/icon-flag/thai_flag.png">{{ trans('app.th') }}</li>
                    <li class="ch"><img src="img/icon-flag/chinese.png">{{ trans('app.ch') }}</li>
                  </ul>
                {{-- <select class="form-control selectpicker animated fadeIn animation-delay-6 localefont" name='locale' id='locale' onchange="this.form.submit()" style="border-radius: 5px;;">
                <option class="en" value="en">{{ trans('app.en') }}</option>
                <option class="kh" value="kh">{{ trans('app.kh') }}</option>
                </select> --}}
                  {{ csrf_field()}}

                {!! Form::hidden('locale',$lo,['id'=>'locale']) !!}
                {!! Form::close()!!}
            </ul>
            <div class="dropdown animated fadeInDown animation-delay-16 localefont">
                <a href="https://www.facebook.com/manpower.com.kh/" target="_blank" class="animated fadeIn animation-delay-7 facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-search-box animated fadeInUp">
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-ar btn-primary" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>

            {{-- </div> dropdown --}}

           <!-- dropdown -->
        </nav>
        <nav class="top-nav top-nav-padding">
          <div class="dropdown animated fadeInDown animation-delay-13">
                @if (Auth::guest())
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{-- <a href="#" class="dropdown-toggle localefont" data-toggle="dropdown"> --}}

{{--                 <button type="button" class="btn btn-ar btn-primary pull-left margin-login">
                  <i class="fa fa-sign-in"></i>
                  {{ trans('app.login.employer') }}
                </button>
                <button type="button" class="btn btn-ar btn-primary pull-right">
                  <i class="fa fa-sign-in"></i>
                  {{ trans('app.login.employee') }} --}}
                </button>
                </form>
                {{-- <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated flipCenter">

                        {{ csrf_field() }}
                         @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                        <div class="input-group login-input {{ $errors->has('email') ? ' has-error' : '' }}">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input id="email" type="email" class="form-control" placeholder="Username" name="email">
                        </div>
                        <br>
                          @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                          @endif
                        <div class="input-group login-input {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="checkbox pull-left">
                                  <input type="checkbox" id="remember" name="remember">
                                  <label for="remember">
                                     Remember me
                                  </label>
                        </div>
                         <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                          <button type="submit" class="btn btn-ar btn-primary pull-right">
                                      {{ trans('app.register') }}
                          </button>
                        </form>
                        <button type="submit" class="btn btn-ar btn-primary pull-right">
                                    Login
                        </button> --}}

{{--                         <a href="/register" ><i class="fa fa-user "></i> {{ trans('app.register') }}</a> --}}

{{--                         <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                        </a>
                    </form> --}}

                @else
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li>
                            <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out "></i> {{ trans('app.signout') }}</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                          </li>
                        </ul>
                      </li>
                    </ul>
                @endif
            </div>

    </nav>
    </div> <!-- container -->
</header> <!-- header-full -->
<nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm localefont" href="/">{{trans('app.tmp')}}</a>
        </div> <!-- navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="pull-right hidden-lg hidden-md">
            <a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="home"><a class="localefont"  href="/">{{trans('app.home')}}</a></li>
                <li id="aboutus" class="dropdown">
                    <a  href="javascript:void(0);" class="dropdown-toggle localefont" data-toggle="dropdown" data-hover="dropdown">{{trans('app.aboutus')}}</a>
                     <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                        <li ><a class="localefont" href="/profile">{{ trans('app.profile') }}</a></li>
                        <li><a class="localefont" href="/management">{{trans('app.management')}}</a></li>
                        <li><a class="localefont" href="/strategy">{{trans('app.strategy')}}</a></li>
                        <li><a class="localefont" href="/license">{{trans('app.license')}}</a></li>
                    </ul>
                </li>
                <li id="services"><a class="localefont" href="/services">{{ trans('app.services') }}</a></li>
                {{-- <li id="jobs"><a class="localefont" href="/recruitment">{{ trans('app.recruitment') }}</a></li> --}}
                <li id="training"><a class="localefont" href="/training">{{ trans('app.training') }}</a></li>
                <li id="progress"><a class="localefont" href="/processing">{{ trans('app.processing') }}</a></li>
                {{-- <li id="news"><a  href="/news">{{ trans('app.news') }}</a></li> --}}
                <li id="faq"><a class="localefont" href="/faq">{{ trans('app.faq') }}</a></li>
                <li id="photo"><a class="localefont" href="/gallery">{{ trans('app.gallery') }}</a></li>
                <li id="contact"><a class="localefont" href="/contact">{{ trans('app.contact') }}</a></li>
             </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container -->
</nav>
@yield('content')
</div>
</div>
