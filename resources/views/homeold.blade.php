@extends('layouts.app')
@section('title')
{{trans('app.home')}}
@stop
@section('content')
@include('includes.slideshow')
<div class="container">
    <section class="margin-bottom">
        <div class="row">
            <div class="col-md-12">
                <h2 class="right-line localefont" style="overflow: visible;">{{ trans('home.welcome') }}</h2>
            </div>
            <div class="col-md-12">
                <div class="text-icon wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-globe"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin localefont">{{ trans('app.tmp') }}{{trans('app.coltd')}}{{ trans('home.welcome.title') }}</h3>
                        <div style="font-size:14px;">
                            <p class="localefont">{{ trans('home.welcome.content')}}</p>
                            <p class="localefont">{{ trans('app.tmp') }}{{trans('app.coltd')}}{{ trans('home.welcome.content2')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-icon wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-envelope"></i></span>
                    <div class="text-icon-content localefont">
                        <h3 class="localefont" class="no-margin">{{ trans('home.message') }}</h3>
                        <h4><p class="localefont" ><b>{{trans('home.message.dear')}}</b></p></h4>
                        <div style="font-size:16px;">
                        <p>{{ trans('app.tmp') }}{{trans('app.coltd')}} {{ trans('home.message.topic') }}</p>
                        <p>{{ trans('home.message.body') }} <b style="color:#0099da;">{{ trans('home.message.body.important')}}</b></p>
                        <p>{{ trans('home.message.regard1') }}</p>
                        <p>{{ trans('home.message.regard2') }}</p>
                        <h5><b><p class="localefont">{{ trans('home.message.md.name') }}</p></b></h5>
                        <h5><b><p class="localefont">{{ trans('home.message.md') }}</p></b></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </section>

    <p class="lead lead-lg text-center primary-color wow fadeIn animation-delay-5 localefont" style="visibility: visible; animation-name: fadeIn;"> {{trans('home.browsemore') }}<strong>{{ trans('home.browsemore.important') }}</strong>
    </p>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h2 class="right-line localefont" style="overflow:visible;">{{ trans('home.maidtrain') }}</h2>
        </div>
        @include('includes.modal')
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <img src="img/DSC_1.jpg" class="img-responsive" alt="Image">
            <div class="caption-ar">
                <div class="caption-content">
                    <!-- Button trigger modal -->
                  <button class="btn btn-primary btn-lg btn-ar localefont" data-toggle="modal" data-target="#myModal">{{ trans('app.viewbtn') }}</button>
                  <h4 class="caption-title localefont">{{ trans('home.maidtrain') }}</h4>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/DSC_2.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal2">{{ trans('app.viewbtn') }}</button>
                        <h4 class="caption-title localefont">{{ trans('home.maidtrain') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/DSC_3.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                   <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal3">{{ trans('app.viewbtn') }}</button>
                        <h4 class="caption-title localefont">{{ trans('home.maidtrain') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/DSC_4.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal4">{{ trans('app.viewbtn') }}</button>
                        <h4 class="caption-title localefont">{{ trans('home.maidtrain') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/DSC_5.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal5">{{ trans('app.viewbtn') }}</button>
                        <h4 class="caption-title localefont">{{ trans('home.maidtrain') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/DSC_6.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal6">{{ trans('app.viewbtn') }}</button>
                        <h4 class="caption-title localefont">{{ trans('home.maidtrain') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection