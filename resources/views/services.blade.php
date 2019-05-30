@extends('layouts.app')
@section('title')
	{{ trans('app.services') }}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.services')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.services')}}</h1>
        </div>
        <div class="col-md-8 localefont">
          <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h4 class="localefont">{{trans('services.content')}}</h4>
          </section>
          {{-- </div class="col-md-offset-2 col-md-10 localefont">
              <h3 class="localefont"><i class="fa fa-flag"> </i> {{trans('services.thai')}}</h3>
          <div> --}}
          <ul class="fa-ul">
           <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <li><h4 class="localefont"><img class="flag-img" src="img/icon-flag/thai.png"></i> {{trans('services.thai')}}</h4>
              <ul class="style">
                <li>{{trans('services.thai1')}}</li>
                <li>{{trans('services.thai2')}}</li>
                <li>{{trans('services.thai3')}}</li>
                <li>{{trans('services.thai4')}}</li>
              </ul>
            </li>
            </section>
            <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
               <li><h4 class="localefont"><img class="flag-img" src="img/icon-flag/japan.png">{{trans('services.japan')}}</h4>
                 <ul class="style">
                  <li>{{trans('services.japan1')}}</li>
									<li>{{trans('services.japan2')}}</li>
                </ul>
              </li>
            </section>
            <section class="animated wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
               <li style="overflow:visible;"><h4 class="localefont font-khmer" > <img class="flag-img" src="img/icon-flag/malay.png">{{trans('services.malay')}} <img class="flag-img" src="img/icon-flag/brunei.png">{{trans('services.brunei')}} <img class="flag-img" src="img/icon-flag/hongkong.png"> {{trans('services.hk')}} <img class="flag-img" src="img/icon-flag/macau.png"> {{trans('services.ma')}} <img class="flag-img" src="img/icon-flag/singapore.png"> {{trans('services.sing')}}</h4>
                 <ul class="style">
                  <li>{{trans('services.mbshm1')}}</li>
                  <li>{{trans('services.mbshm2')}}</li>
                </ul>
              </li>
            </section>
          </ul>
        </div>
        <div class="col-md-4">
          <div class="row">
              {{-- <div class="col-md-12" style="padding: 5px 0px;">
              <div id="carousel-example-captions" class="carousel carousel-images slide" data-ride="carousel"  data-interval="5000">
                        <section class="animated fadeInDown animation-delay-4">
                           <ol class="carousel-indicators">
                                <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-captions" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                <img src="img/service2.png" alt="First slide image">
                                <div class="carousel-caption animated fadeInUpBig">
                                    <h3 class="">{{trans('services.learn')}}</h3>
                                    <p>{{trans('services.learn.language')}}</p>
                                </div>
                                </div>
                                <div class="item ">
                                <img src="img/service3.jpg" alt="Second slide image">
                                <div class="carousel-caption animated fadeInUpBig">
                                    <h3>{{trans('services.worker')}}</h3>
                                    <p>{{trans('services.worker.activities')}}</p>
                                </div>
                                </div>
                                <div class="item">
                                <img src="img/service5.jpg" alt="Third slide image">
                                <div class="carousel-caption animated fadeInUpBig">
                                    <h3>{{trans('services.worker')}}</h3>
                                    <p>{{trans('services.worker.activities')}}</p>
                                </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </section>
              </div>
            </div> --}}
						<br>
            <div class="col-md-12" style="padding: 5px 0px;">
              <div id="carousel-example-captions2" class="carousel carousel-images slide" data-ride="carousel" data-interval="6000">
                        <section class="animated fadeInDown animation-delay-7">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-captions2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-captions2" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-captions2" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner localefont">
                                <div class="item active">
                                <img src="img/DSC_3.jpg" alt="First slide image">
                                <div class="carousel-caption animated fadeInUpBig ">
                                    <h3 class="localefont">{{trans('services.maid')}}</h3>
                                    <p style="text-align: center;">{{trans('services.maidtrain')}}</p>
                                </div>
                                </div>
                                <div class="item ">
                                <img src="img/DSC_2.jpg" alt="Second slide image">
                                <div class="carousel-caption animated fadeInUpBig">
                                    <h3 class="localefont">{{trans('services.maid')}}</h3>
                                    <p style="text-align: center;">{{trans('services.maidtrain')}}</p>
                                </div>
                                </div>
                                <div class="item">
                                <img src="img/DSC_1.jpg" alt="Third slide image">
                                <div class="carousel-caption animated fadeInUpBig">
                                    <h3 class="localefont">{{trans('services.maid')}}</h3>
                                    <p style="text-align: center;">{{trans('services.maidtrain')}}</p>
                                </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-captions2" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-captions2" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </section>
              </div>
            </div>
          </div>
        </div>
	</div>
</div>
@stop
@section('script')
@stop
