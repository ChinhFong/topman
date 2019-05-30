@extends('layouts.app')
@section('title')
	{{ trans('app.license') }}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.aboutus')}}</li>
            <li class="active">{{ trans('app.license')}}</li>
        </ol>
    </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
        <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.license')}}</h1>
    </div>
  	<div class="col-md-12">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-tabs-round">
    <li class="active"><a href="#coi" data-toggle="tab">{{trans('license.coi')}}</a></li>
    <li><a href="#fbru" data-toggle="tab"> <img class="flag-img" src="img/icon-flag/brunei.png"> {{trans('license.bru')}}</a></li>
    <li><a href="#fth" data-toggle="tab"><img class="flag-img" src="img/icon-flag/thai.png">{{trans('license.th')}}</a></li>
    <li><a href="#fhkm" data-toggle="tab"><img class="flag-img" src="img/icon-flag/hongkong.png"><img class="flag-img" src="img/icon-flag/macau.png">{{trans('license.hkm')}}</a></li>
    <li><a href="#fja" data-toggle="tab"><img class="flag-img" src="img/icon-flag/japan.png">{{trans('license.ja')}}</a></li>
    <li><a href="#fmal" data-toggle="tab"><img class="flag-img" src="img/icon-flag/malay.png">{{trans('license.mal')}}</a></li>
    <li><a href="#fsin" data-toggle="tab"><img class="flag-img" src="img/icon-flag/singapore.png">{{trans('license.sin')}}</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content tab-margin tab-content-margin">
      <div class="tab-pane active" id="coi">
        <img src="img/license_images/coi.jpg" class="img-responsive imageborder img-center">
      </div>
      <div class="tab-pane" id="fbru">
         <img src="img/license_images/brunei.jpg" class="img-responsive img-center">
      </div>
      <div class="tab-pane" id="fth">
         <img src="img/license_images/thai.jpg" class="img-responsive img-center">
      </div>
       <div class="tab-pane" id="fhkm">
         <img src="img/license_images/hkm.jpg" class="img-responsive img-center">
      </div>
      <div class="tab-pane" id="fja">
         <img src="img/license_images/japan.jpg" class="img-responsive img-center">
      </div>
      <div class="tab-pane" id="fmal">
         <img src="img/license_images/malaysia.jpg" class="img-responsive img-center">
      </div>
      <div class="tab-pane" id="fsin">
         <img src="img/license_images/singapore.jpg" class="img-responsive img-center">
      </div>
    </div>
    </div>
{{--   		<ul>
  			<li><a href="https://drive.google.com/open?id=0B-JocipNT2o7UXNrTmotcUp5ZlE">Certificate Of Incorporation</a> 
	  		<li><a href="https://drive.google.com/file/d/0B-JocipNT2o7OHA2VXlQeHJoUUU/view?usp=sharing">For Brunei</a></li>
  			<li><a href="https://drive.google.com/file/d/0B-JocipNT2o7c2htVnQ4REk0RWs/view?usp=sharing">For Thailand</a></li>
  			<li><a href="https://drive.google.com/file/d/0B-JocipNT2o7TkRNYW5lNFFTT3M/view?usp=sharing">For Hong Kong & Macau</a></li>
  			<li><a href="https://drive.google.com/file/d/0B-JocipNT2o7RFJXdmgybDlvaDg/view?usp=sharing">For Japan</a></li>
  			<li><a href="https://drive.google.com/file/d/0B-JocipNT2o7c2htVnQ4REk0RWs/view?usp=sharing">For Malaysia</a></li>
  			<li><a href="https://drive.google.com/open?id=0B-JocipNT2o7UFZjQ3pmQ0lxSkU">For Singapore</a></li>
  		</ul>
  	</div>
  	<div class="col-md-12">
  		<section class="certificate">
  			
  		</section>
  		
  	</div> --}}
	</div>
</div>
@stop