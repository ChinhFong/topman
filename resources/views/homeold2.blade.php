@extends('layouts.home')
@section('title')
{{trans('app.home')}}
@stop
@section('content')
{{-- @include('includes.slideshow') --}}
<header id="header-full" style="margin:0 auto;">
    <div class="wrap-primary" style="height:500px;" >
        <div class="container localefont">
            <h1 class="head-title animated bounceInDown animation-delay-8 localefont">{{trans('home.welcome')}}</h1>
            <img src="assets/img/logo_raw_white.png" alt="" class="aligncenter head-full-logo animated bounceIn animation-delay-5">
            <h2 class="secondary-color text-center head-subtitle animated fadeInUp animation-delay-14"></h2>
            <p class="lead text-center animated fadeInUp animation-delay-14 localefont">{{trans('home.browsemore')}}</p>
            <div class="row header-full-icons text-center">
                <div class="col-sm-3 animated fadeInDown animation-delay-19  centers">
                    <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-globe"></i></span>
                    <h3 class="localefont">{{trans('app.tmp')}}</h3>
                    <p>{{trans('home.rm1')}}</p>
                    <!-- Button trigger modal -->
                    <a href="#" class="btn btn-primary btn-lg btn-ar" data-toggle="modal" data-target="#myModal1">{{trans('home.rm')}}</a>
                </div>
                <div class="col-sm-3 animated fadeInDown animation-delay-21 centers">
                    <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-envelope-o"></i></span>
                    <h3 class="localefont">{{trans('home.msg')}}</h3>
                    <p class="text-center">{{trans('home.message')}}....</p>
                    <a href="#" class="btn btn-primary btn-lg btn-ar" data-toggle="modal" data-target="#myModal2">{{trans('home.rm')}}</a>
                </div>
                <div class="col-sm-3 animated fadeInDown animation-delay-22 centers">
                    <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-eye"></i></span>
                    <h3 class="localefont">{{trans('app.vision')}}</h3>
                    <p class="text-center">{{trans('vision.rm1')}}....</p>
                    <a href="#" class="btn btn-primary btn-lg btn-ar" data-toggle="modal" data-target="#myModal3">{{trans('home.rm')}}</a>
                </div>
                <div class="col-sm-3 animated fadeInDown animation-delay-20 centers">
                    <span class="icon-ar icon-ar-circle icon-ar-xl-lg icon-ar-white icon-ar-inverse"><i class="fa fa-bars"></i></span>
                    <h3 class="localefont">{{trans('app.mission')}}</h3>
                    <p class="text-center">{{trans('mission.rm1')}}....</p>
                    <a href="#" class="btn btn-primary btn-lg btn-ar" data-toggle="modal" data-target="#myModal4">{{trans('home.rm')}}</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Modal -->
<div class="modal fade localefont" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title localefont" id="myModalLabel"> {{trans('home.alabout')}} {{trans('app.tmp')}} </h3>
            </div>
            <div class="modal-body" style="text-align: left;">
            <p><img src="../img/modalhome.png" alt="" class="img-responsive aligncenter" style="padding-top:5px;"></p>
                <h4 class="modal-title localefont" id="myModalLabel" style="padding:5px 0px;"> {{trans('app.tmp')}} </h4>
                <p>{{trans('home.welcome.content')}}</p>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title localefont" id="myModalLabel"> {{trans('home.message')}}</h3>
            </div>
            <div class="modal-body">
              <div class="localefont">
                        <div class="body-modal">
                        <p><img src="img/modalhome2.png" alt="" class="img-responsive aligncenter"></p>
                        <h4 class="modal-title adjust-margin" id="myModalLabel"> {{trans('home.message.dear')}}</h4> 
                        <p>{{ trans('app.tmp') }}{{trans('app.coltd')}} {{ trans('home.message.topic') }}</p>
                        <p>{{ trans('home.message.body') }} <b style="color:#0099da;">{{ trans('home.message.body.important')}}</b></p>
                        <p>{{ trans('home.message.regard1') }}</p>
                        <p>{{ trans('home.message.regard2') }}</p>
                        <h4><p class="localefont">{{ trans('app.mboc') }}</p></h4>
                        </div>
                    </div>
            </div>
            <div class="footer-modal">
                        
            </div>
    </div>
  </div>
  <div class="modal fade localefont" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden ="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title localefont" id="myModalLabel"> {{trans('app.vision')}} </h3>
            </div>
            <div class="modal-body" style="text-align: justify;">
                <p><img src="img/vision.png" alt="" class="img-responsive imageborder aligncenter"></p>
                {{trans('vision.content')}}
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
  </div>
  <div class="modal fade localefont" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title localefont" id="myModalLabel"> {{trans('app.mission')}} </h3>
            </div>
            <div class="modal-body" style="text-align: justify;">
              <p><img src="img/mission.png" alt="" class="img-responsive imageborder aligncenter"></p>
              {{trans('mission.content')}}
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
  </div>

@endsection