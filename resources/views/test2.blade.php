@extends('layouts.app')
@section('title')
	{{ trans('app.processing') }}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.processing')}}</li>
        </ol>
    </div>
</header>
<div class="container">
  <section class="margin-bottom">
    <div class="row">
      <div class="col-md-12">
        <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.processing')}}</h1>
      </div>
      <div class="col-md-12">
      <ul class="nav nav-tabs nav-tabs-round">
          <li class="active"><a href="#fth" data-toggle="tab"><img class="flag-img" src="img/icon-flag/thai.png"> {{trans('services.thai')}}</a></li>
          <li><a href="#fja" data-toggle="tab"><img class="flag-img" src="img/icon-flag/japan.png">{{trans('license.ja')}}</a></li>
          <li><a href="#fmal" data-toggle="tab"><img class="flag-img" src="img/icon-flag/malay.png">{{trans('license.mal')}}</a></li>
          <li><a href="#fbru" data-toggle="tab"><img class="flag-img" src="img/icon-flag/brunei.png">{{trans('license.bru')}}</a></li>
          <li><a href="#fsin" data-toggle="tab"><img class="flag-img" src="img/icon-flag/singapore.png">{{trans('license.sin')}}</a></li>
          <li><a href="#fhkm" data-toggle="tab"><img class="flag-img" src="img/icon-flag/hongkong.png">{{trans('services.hk')}}</a></li>
      </ul>
    <!-- Tab panes -->
     <div class="tab-content tab-margin tab-content-margin">
       <div class="tab-pane active" id="fth">
          <div class="panel-group" id="accordion1">
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"><span class="icon-ar"><i class="fa fa-cloud"></i></span>{{ trans('processing.understanding')}}
                </a>
              </div>
              <div id="collapseOne1" class="panel-collapse collapse in">
                <p class="processing">{{trans('processing.th.understanding.content')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne2"><span class="icon-ar"><i class="fa fa-desktop"></i></span>{{ trans('processing.recruitment')}}
                </a>
              </div>
              <div id="collapseOne2" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.recruitment.content')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne8"><span class="icon-ar"><i class="fa fa-list-alt"></i></span>{{ trans('processing.interview')}}
                </a>
              </div>
              <div id="collapseOne8" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.interview.content')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne3">
                <span class="icon-ar"><i class="fa fa-heart" aria-hidden="true"></i></span>
                <span class="icon-ar"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                {{ trans('processing.medicalpassport')}}
                </a>
              </div>
              <div id="collapseOne3" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.medicalpassport.content')}}</p>
                <p class="processing">{{trans('processing.th.medicalpassport.content2')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne4">
                <span class="icon-ar"><i class="fa fa-file-word-o"></i></span>
                {{ trans('processing.namelist')}}
                </a>
              </div>
              <div id="collapseOne4" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.namelist.content')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne5">
                <span class="icon-ar"><i class="fa fa-graduation-cap"></i></span>
                {{ trans('processing.predeparture')}}
                </a>
              </div>
              <div id="collapseOne5" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.predeparture.content')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne6">
                <span class="icon-ar"><i class="fa fa-commenting"></i></span>
                {{ trans('processing.feedback')}}
                </a>
              </div>
              <div id="collapseOne6" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.feedback.content')}}</p>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading panel-plus-link">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne7">
                  <span class="icon-ar"><i class="fa fa-list"></i></span>
                  {{ trans('processing.responsibility')}}
                </a>
              </div>
              <div id="collapseOne7" class="panel-collapse collapse">
                <p class="processing">{{trans('processing.th.responsibility.content')}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div> <!-- row -->
  </section>
</div>
@stop
@section('script')
@stop
