@extends('layouts.app')
@section('title')
{{trans('app.strategy')}}
@stop
@section('content')
<header class="main-header">
<div class="container">
    <h1 class="page-title">&nbsp;</h1>
    <ol class="breadcrumb pull-right localefont">
        <li><a href="#">{{ trans('app.pages')}}</a></li>
        <li  class="active">{{ trans('app.aboutus')}}</li>
        <li class="active">{{ trans('app.strategy')}}</li>
    </ol>
</div>
</header>
<div class="container">
<div class="row">
  <div class="col-xs-12">
      <h1 class="right-line no-margin-top" style="overflow: visible;" >{{ trans('app.strategy')}}</h1>
      <h2 class="slogan animated bounceInLeft animation-delay-12​​ localefont">{{ trans('strategy.header')}}
      </h2>
  </div>
  <div class="col-xs-12">
      <article class="acticle-style">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 class="post-title post-title-strategy"><i class="fa fa-star" style="margin-right: 5px;"></i>{{trans('home.sustainability')}}</h3>
            <div class="row">
                <div class="col-md-12">
                <section class="animated wow fadeInUp">
                  <div class="strate">
                    <p class="p-lg">{{ trans('strategy.sus.content')}}</p>
                    </div>
                </section>
                </div>
            </div>
          </div>
          <div class="panel-body">
            <h3 class="post-title post-title-strategy"><i class="fa fa-star" style="margin-right: 5px;"></i>{{trans('app.services')}}</h3>
            <div class="row">
                <div class="col-md-12">
                <section class="animated wow fadeInUp localefont" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="strate">
                     <p class="p-lg">{{ trans('strategy.service.content')}}</p>
                  </div>
                </section>
                </div>
            </div>
          </div>
          <div class="panel-body">
            <h3 class="post-title post-title-strategy"><i class="fa fa-star" style="margin-right: 5px;"></i>{{trans('home.socialresponsibility')}}</h3>
            <div class="row">
                <div class="col-md-12">
                <section class="animated wow fadeInUp localefont" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="strate">
                    <p class="p-lg">{{ trans('strategy.sr.content')}}</p>
                  </div>
                </section>
                </div>
            </div>
          </div>
  </div>
  {{-- <div class="col-md-4">
  <div class="panel panel-primary">
    <div class="panel-heading localefont">{{trans('strategy.detail')}} {{trans('strategy.ej')}}</div>
    <div class="panel-body">
    <section class="css-section">
      <div class="row localefont">          
        <div class="col-sm-6 col-md-6">
        <h5 class="text-center localefont">{{trans('strategy.detail')}} {{trans('strategy.worker')}}</h5>
          <div class="text-center">
            <div class="circle" id="my-circles-1"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
        <h5 class="text-center localefont">{{trans('strategy.detail')}} {{trans('strategy.trainee')}}</h5>
          <div class="text-center">
            <div class="circle" id="my-circles-2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
         <h5 class="text-center localefont">{{trans('strategy.detail')}} {{trans('strategy.maid')}}</h5>
          <div class="text-center">
            <div class="circle" id="my-circles-3"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
        <h5 class="text-center localefont">{{trans('strategy.detail')}} {{trans('strategy.other')}}</h5>
          <div class="text-center">
            <div class="circle" id="my-circles-4"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div> --}}
  </div>
  </div>
</div>
</div>

@stop