@extends('layouts.app')
@section('title','training')
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.training')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.training')}}</h1>
        </div>
        <div class="col-md-12" style="padding: 5px 0px;">
        <div id="carousel-example-captions" class="carousel carousel-images slide" data-ride="carousel"  data-interval="5000">
                  <section class="animated fadeInDown animation-delay-4">
                     {{-- <ol class="carousel-indicators">
                          <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                          <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                      </ol> --}}
                      <div class="carousel-inner slide-style" >
                          <div class="item active">
                          <img src="img/others/train_use_1.jpg" alt="First slide image">
                          </div>
                          <div class="item ">
                          <img src="img/others/train_use_2.jpg" alt="Second slide image">
                          </div>
                          <div class="item">
                          <img src="img/others/train_use_3.jpg" alt="Third slide image">
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
        {{-- <div class="col-md-4"><img src="img/others/train_1.jpg" alt="" class="img-responsive imageborder"></div>
        <div class="col-md-4"> <img src="img/others/train_2.jpg" alt="" class="img-responsive imageborder"></div>
        <div class="col-md-4"> <img src="img/others/train_3.jpg" alt="" class="img-responsive imageborder"></div> --}}
        <div class="col-md-12">
          <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <p class="p-style">{{trans('training.header')}}</p>
          </section>
        </div>
        <div class="col-md-12">
          <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h4>{{trans('training.infra')}}</h4>
            <p>{{trans('training.infra.content')}}</p>
          </section>
        </div>
        <div class="col-md-12">
          <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h4>{{trans('training.dura')}}</h4>
            <ul class="train">
                <li>{{trans('training.dura.content1')}}</li>
                <li>{{trans('training.dura.content2')}}</li>
                <li>{{trans('training.dura.content3')}}</li>
            </ul>
          </section>
        </div>
        <div class="col-md-12">
          <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h4>{{trans('training.cir')}}</h4>
            <p>{{trans('training.cir.header')}}</p>
            <ul class="train">
                <li>{{trans('training.cir.content1')}}</li>
                <li>{{trans('training.cir.content2')}}</li>
                <li>{{trans('training.cir.content3')}}</li>
                <li>{{trans('training.cir.content4')}}</li>
                <li>{{trans('training.cir.content5')}}</li>
            </ul>
          </section>
        </div>
        {{-- <div class="col-md-12 last-content">
          <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h4>{{trans('training.cmb')}}</h4>
            <p>{{trans('training.cmb.header')}}</p>
            <p>{{trans('training.cmb.header2')}}</p>
            <ul class="train">
                <li>{{trans('training.cmb.content1')}}</li>
                <li>{{trans('training.cmb.content2')}}</li>
            </ul>
            <h4>{{trans('training.cmb.header3')}}</h4>
            <p>{{trans('training.cmb.content3')}}</p>
          </section>
        </div> --}}
    </div>
</div>
@stop
