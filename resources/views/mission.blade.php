@extends('layouts.app')
@section('title')
{{trans('app.mission')}}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li  class="active">{{ trans('app.company')}}</li>
            <li class="active">{{ trans('app.mission')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
{{--             <p class="slogan text-center animated bounceInLeft animation-delay-12​​ localefont">{{ trans('app.marquee')}}<span>{{ trans('app.marquee.important')}}</span>. <br> {{ trans('app.marquee2')}} <span>{{ trans('app.marquee2.important')}}</span>.</p> --}}
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.mission')}}</h1>
        </div>
        <div class="col-xs-12">
			<h3 class="localefont">{{trans('mission.content')}}</h3>
        </div>
    </div>
</div>

@stop