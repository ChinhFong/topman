@extends('layouts.app')
@section('title')
	{{ trans('app.aboutus') }}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.aboutus')}}</li>
            <li class="active">{{ trans('app.profile')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
{{--             <p class="slogan text-center animated bounceInLeft animation-delay-12​​ localefont">{{ trans('app.marquee')}}<span>{{ trans('app.marquee.important')}}</span>. <br> {{ trans('app.marquee2')}} <span>{{ trans('app.marquee2.important')}}</span>.</p> --}}
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.profile')}}</h1>
        </div>
        <div class="col-md-8 localefont">
            <section class="animated fadeInDown animation-delay-8">
                <img src="img/aboutus.jpg" class="img-responsive imageborder" alt="Image">
                <p class="p-lg"><strong>{{ trans('app.tmp')}}</strong>{{ trans('aboutus.content')}}</p>
                <p class="p-lg">{{ trans('aboutus.content2')}}</p>
                <p class="p-lg">{{ trans('aboutus.content3')}}</p>
                <img src="img/aboutus2.jpg" class="img-responsive imageborder" alt="Image">
            </section>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary animated fadeInUp animation-delay-12">
                <div class="panel-heading localefont">{{trans('app.aboutus')}}</div>
                <div class="panel-body">
                    <section>
                        <h4 class="copy-second-title localefont">{{trans('app.vision')}}</h4>
                        <img src="img/vision.jpg">
                        <p class="p-lg p-style"><strong>{{trans('app.tmp')}}</strong> {{ trans('home.vision')}}</p>
                    </section>
                    <section>
                        <h4 class="copy-second-title localefont">{{trans('app.mission')}}</h4>
                        <img src="img/mission.jpg" class="">
                        <p class="p-lg p-style"><strong>{{trans('app.tmp')}}</strong> {{ trans('home.mission')}}</p>

                    {{-- <h5 class="no-margin localefont">{{trans('app.kh')}}</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                    <h5 class="no-margin localefont">{{trans('app.en')}}</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span class="sr-only">100% Complete</span>
                        </div>
                    </div>
                    <h5 class="no-margin localefont">{{trans('aboutus.thai')}}</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span class="sr-only">30% Complete</span>
                        </div>
                    </div>
                    <h5 class="no-margin localefont">{{trans('aboutus.japanese')}}</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            <span class="sr-only">10% Complete</span>
                        </div>
                    </div>
                    <h5 class="no-margin localefont">{{trans('aboutus.malay')}}</h5>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                            <span class="sr-only">10% Complete</span>
                        </div>
                    </div> --}}
                    </section>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container -->

    </div> {{--div row--}}
</div> {{--div container--}}
@stop
@section('script')
@stop
