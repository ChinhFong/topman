@extends('layouts.app')
@section('title')
{{trans('app.home')}}
@stop
@section('content')
{{-- @include('includes.slideshow') --}}
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <article class="post animated fadeInDown animation-delay-6 acticle-style">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                      {{-- <img src="img/aboutus-home.jpg" class="img-responsive imageborder" alt="Image"> --}}
                      @include('includes.slidehome')
                  </div>
                  <div class="col-md-12">
                    <p class="p-lg p-style"><strong>{{trans('app.tmp')}}</strong> {{ trans('home.welcome.rm')}}  <a href="/profile" class="">{{trans('home.rm')}} &raquo;</a></p>
                </div>
                </div>
              </div>
              {{-- <div class="col-md-4">
                  <div class="panel panel-primary animated fadeInUp animation-delay-12">
                  <div class="panel-heading localefont">{{trans('app.ja')}}</div>
                  <div class="panel-body">
                    <img src="img/others/coming-soon.png" class="img-responsive imageborder">
                      {{-- <section>
                        <ul>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                          <li></li>
                        </ul>
                      </section> --}}
                  {{-- </div>
                  </div>
              </div>       --}}
            </div>
          </div>
          <div class="panel-footer">
              <div class="row">
              </div>
          </div>
          <div class="panel-body">
            <h3 class="post-title">{{trans('home.message')}} {{ trans('home.message.md') }}</h3>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-5">
                    <!-- <img src="img/management/b_bath_home.jpg" class="imageborder img-responsive"> -->
                  </div>
                <div class="col-md-7">
                    <p style="font-size:16px">{{trans('home.message.dear')}}</p>
                    <p class="just-style">{{ trans('app.tmp') }} {{ trans('home.message.topic') }}</p>
                </div>
                <div class="col-md-12 just-style">
                    <p>{{ trans('home.message.body') }} <b> {{ trans('home.message.body.important') }}</b></p>
                    <p class="md-style-home">{{ trans('home.message.regard1') }}</p>
                    <p class="md-style-home">{{ trans('home.message.md.name') }}</p>
                    <p>{{ trans('home.message.md') }}</p>
                </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-primary animated fadeInUp animation-delay-12">
                  <div class="panel-heading localefont">{{trans('app.itc')}}</div>
                  <div class="panel-body">
                    {{-- <img src="img/others/cmb-map.jpg" class="img-responsive"> --}}
                    <div class="col-md-12">
                      <div id="carousel-example-captions" class="carousel carousel-images slide" data-ride="carousel"  data-interval="5000">
                                <section class="animated fadeInDown animation-delay-4">
                                   {{-- <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                                    </ol> --}}
                                    <div class="carousel-inner">
                                        <div class="item active">
                                        <img src="img/others/ak.jpg" alt="First slide image">
                                        </div>
                                        <div class="item ">
                                        <img src="img/others/cambodia.jpg" alt="Second slide image">
                                        </div>
                                        <div class="item">
                                        <img src="img/others/im.jpg" alt="Third slide image">
                                        </div>
                                    </div>
                                    {{-- <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a> --}}
                                </section>
                      </div>
                    </div>
                    <p class="p-style">{{trans('app.itc.content')}}</p>
                    <p>{{trans('training.cmb.header2')}}</p>
                    <ul class="li-style">
                      <li><b>{{trans('training.cmb.header4')}}</b>{{trans('training.cmb.content1')}}</li>
                      <li><b>{{trans('training.cmb.header5')}}</b>{{trans('training.cmb.content2')}}</li>
                      <li><b>{{trans('training.cmb.header3')}}</b>{{trans('training.cmb.content3')}}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article> <!-- post -->
    </div>
</div>
</div>
@endsection
