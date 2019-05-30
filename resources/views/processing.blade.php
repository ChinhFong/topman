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
          <li class="active"><a href="#fth" data-toggle="tab"><img class="flag-img" src="img/icon-flag/thai.png"> {{trans('services.thai')}}</a>
          </li>
          <li><a href="#fbru" data-toggle="tab"><img class="flag-img" src="img/icon-flag/brunei.png">{{trans('license.bru')}}</a></li>
          <li><a href="#fhkm" data-toggle="tab"><img class="flag-img" src="img/icon-flag/hongkong.png">{{trans('services.hk')}} & <img class="flag-img" src="img/icon-flag/macau.png">{{trans('services.ma')}}</a></li>
          <li><a href="#fsin" data-toggle="tab"><img class="flag-img" src="img/icon-flag/singapore.png">{{trans('license.sin')}}</a></li>
          <li><a href="#fja" data-toggle="tab"><img class="flag-img" src="img/icon-flag/japan.png">{{trans('license.ja')}}</a></li>
          <li><a href="#fmal" data-toggle="tab"><img class="flag-img" src="img/icon-flag/malay.png">{{trans('license.mal')}}</a></li>
      </ul>
    <!-- Tab panes -->
     <div class="tab-content tab-margin tab-content-margin">
       <div class="tab-pane active" id="fth">
        {{-- <div class="row">
          <div class="col-xs-12"> --}}
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
          {{-- </div>
          </div> --}}
        </div>
       </div>
      <div class="tab-pane" id="fbru">
        {{-- <div class="row">
          <div class="col-xs-12"> --}}
            <div class="panel-group" id="accordion2">
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo1"><span class="icon-ar"><i class="fa fa-cloud"></i></span>{{ trans('processing.understanding')}}
                  </a>
                </div>
                <div id="collapseTwo1" class="panel-collapse collapse in">
                  <p class="processing">{{trans('processing.th.understanding.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2"><span class="icon-ar"><i class="fa fa-desktop"></i></span>{{ trans('processing.recruitment')}}
                  </a>
                </div>
                <div id="collapseTwo2" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.recruitment.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo8"><span class="icon-ar"><i class="fa fa-list-alt"></i></span>{{ trans('processing.interview')}}
                  </a>
                </div>
                <div id="collapseTwo8" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.interview.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo3">
                  <span class="icon-ar"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <span class="icon-ar"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                  {{ trans('processing.medicalpassport')}}
                  </a>
                </div>
                <div id="collapseTwo3" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.medicalpassport.content')}}</p>
                  <p class="processing">{{trans('processing.th.medicalpassport.content2')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo4">
                  <span class="icon-ar"><i class="fa fa-file-word-o"></i></span>
                  {{ trans('processing.namelist')}}
                  </a>
                </div>
                <div id="collapseTwo4" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.namelist.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo5">
                  <span class="icon-ar"><i class="fa fa-graduation-cap"></i></span>
                  {{ trans('processing.predeparture')}}
                  </a>
                </div>
                <div id="collapseTwo5" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.predeparture.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo6">
                  <span class="icon-ar"><i class="fa fa-commenting"></i></span>
                  {{ trans('processing.feedback')}}
                  </a>
                </div>
                <div id="collapseTwo6" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.feedback.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo7">
                    <span class="icon-ar"><i class="fa fa-list"></i></span>
                    {{ trans('processing.responsibility')}}
                  </a>
                </div>
                <div id="collapseTwo7" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.responsibility.content')}}</p>
                </div>
              </div>
          {{-- </div>
          </div> --}}
        </div>
       </div>
       <div class="tab-pane" id="fhkm">
        {{-- <div class="row">
          <div class="col-xs-12"> --}}
            <div class="panel-group" id="accordion3">
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree1"><span class="icon-ar"><i class="fa fa-cloud"></i></span>{{ trans('processing.understanding')}}
                  </a>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse in">
                  <p class="processing">{{trans('processing.th.understanding.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree2"><span class="icon-ar"><i class="fa fa-desktop"></i></span>{{ trans('processing.recruitment')}}
                  </a>
                </div>
                <div id="collapseThree2" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.recruitment.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree8"><span class="icon-ar"><i class="fa fa-list-alt"></i></span>{{ trans('processing.interview')}}
                  </a>
                </div>
                <div id="collapseThree8" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.interview.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3">
                  <span class="icon-ar"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <span class="icon-ar"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                  {{ trans('processing.medicalpassport')}}
                  </a>
                </div>
                <div id="collapseThree3" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.medicalpassport.content')}}</p>
                  <p class="processing">{{trans('processing.th.medicalpassport.content2')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree4">
                  <span class="icon-ar"><i class="fa fa-file-word-o"></i></span>
                  {{ trans('processing.namelist')}}
                  </a>
                </div>
                <div id="collapseThree4" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.namelist.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree5">
                  <span class="icon-ar"><i class="fa fa-graduation-cap"></i></span>
                  {{ trans('processing.predeparture')}}
                  </a>
                </div>
                <div id="collapseThree5" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.predeparture.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree6">
                  <span class="icon-ar"><i class="fa fa-commenting"></i></span>
                  {{ trans('processing.feedback')}}
                  </a>
                </div>
                <div id="collapseThree6" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.feedback.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree7">
                    <span class="icon-ar"><i class="fa fa-list"></i></span>
                    {{ trans('processing.responsibility')}}
                  </a>
                </div>
                <div id="collapseThree7" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.responsibility.content')}}</p>
                </div>
              </div>
          {{-- </div>
          </div> --}}
        </div>
       </div>
       <div class="tab-pane" id="fsin">
        {{-- <div class="row">
          <div class="col-xs-12"> --}}
            <div class="panel-group" id="accordion6">
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix1"><span class="icon-ar"><i class="fa fa-cloud"></i></span>{{ trans('processing.understanding')}}
                  </a>
                </div>
                <div id="collapseSix1" class="panel-collapse collapse in">
                  <p class="processing">{{trans('processing.th.understanding.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix2"><span class="icon-ar"><i class="fa fa-desktop"></i></span>{{ trans('processing.recruitment')}}
                  </a>
                </div>
                <div id="collapseSix2" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.recruitment.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix8"><span class="icon-ar"><i class="fa fa-list-alt"></i></span>{{ trans('processing.interview')}}
                  </a>
                </div>
                <div id="collapseSix8" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.interview.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix3">
                  <span class="icon-ar"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <span class="icon-ar"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                  {{ trans('processing.medicalpassport')}}
                  </a>
                </div>
                <div id="collapseSix3" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.medicalpassport.content')}}</p>
                  <p class="processing">{{trans('processing.th.medicalpassport.content2')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix4">
                  <span class="icon-ar"><i class="fa fa-file-word-o"></i></span>
                  {{ trans('processing.namelist')}}
                  </a>
                </div>
                <div id="collapseSix4" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.namelist.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix5">
                  <span class="icon-ar"><i class="fa fa-graduation-cap"></i></span>
                  {{ trans('processing.predeparture')}}
                  </a>
                </div>
                <div id="collapseSix5" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.predeparture.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix6">
                  <span class="icon-ar"><i class="fa fa-commenting"></i></span>
                  {{ trans('processing.feedback')}}
                  </a>
                </div>
                <div id="collapseSix6" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.feedback.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion6" href="#collapseSix7">
                    <span class="icon-ar"><i class="fa fa-list"></i></span>
                    {{ trans('processing.responsibility')}}
                  </a>
                </div>
                <div id="collapseSix7" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.responsibility.content')}}</p>
                </div>
              </div>
          {{-- </div>
          </div> --}}
        </div>
       </div>
       <div class="tab-pane" id="fja">
        {{-- <div class="row">
          <div class="col-xs-12"> --}}
            <div class="panel-group" id="accordion4">
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour1"><span class="icon-ar"><i class="fa fa-cloud"></i></span>{{ trans('processing.understanding')}}
                  </a>
                </div>
                <div id="collapseFour1" class="panel-collapse collapse in">
                  <p class="processing">{{trans('processing.jp.understanding.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour2"><span class="icon-ar"><i class="fa fa-list-alt"></i></span>{{ trans('processing.interview')}}
                  </a>
                </div>
                <div id="collapseFour2" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.jp.interview.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour3">
                  <span class="icon-ar"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <span class="icon-ar"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                  {{ trans('processing.medicalpassport')}}
                  </a>
                </div>
                <div id="collapseFour3" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.jp.medicalpassport.content')}}</p>
                  <p class="processing">{{trans('processing.th.medicalpassport.content2')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour4">
                  <span class="icon-ar"><i class="fa fa-pencil-square-o"></i></span>
                  {{ trans('app.training')}}
                  </a>
                </div>
                <div id="collapseFour4" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.jp.training.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour9">
                  <span class="icon-ar"><i class="fa fa-folder-open-o"></i></span>
                  {{ trans('processing.acebi')}}
                  </a>
                </div>
                <div id="collapseFour9" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.acebi.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour5">
                  <span class="icon-ar"><i class="fa fa-file-word-o"></i></span>
                  {{ trans('processing.va')}}
                  </a>
                </div>
                <div id="collapseFour5" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.va.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour6">
                  <span class="icon-ar"><i class="fa fa-graduation-cap"></i></span>
                  {{ trans('processing.dp')}}
                  </a>
                </div>
                <div id="collapseFour6" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.dp.content')}} {{trans('license.ja')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour7">
                    <span class="icon-ar"><i class="fa fa-binoculars"></i></span>
                    {{ trans('processing.fuav')}}
                  </a>
                </div>
                <div id="collapseFour7" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.fuav.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour8">
                    <span class="icon-ar"><i class="fa fa-comment"></i></span>
                    {{ trans('processing.fsar')}}
                  </a>
                </div>
                <div id="collapseFour8" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.fsar.content')}}</p>
                </div>
              </div>
            {{-- </div>
          </div> --}}
        </div>
       </div>
       <div class="tab-pane" id="fmal">
        {{-- <div class="row">
          <div class="col-xs-12"> --}}
            <div class="panel-group" id="accordion5">
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive1"><span class="icon-ar"><i class="fa fa-desktop"></i></span>{{ trans('processing.re')}}
                  </a>
                </div>
                <div id="collapseFive1" class="panel-collapse collapse in">
                  <p class="processing">{{trans('processing.re.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive2"><span class="icon-ar"><i class="fa fa-id-card"></i></span>{{ trans('processing.bd')}}
                  </a>
                </div>
                <div id="collapseFive2" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.bd.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive3">
                  <span class="icon-ar"><i class="fa fa-heart" aria-hidden="true"></i></span>
                  <span class="icon-ar"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                  {{ trans('processing.medicalpassport')}}
                  </a>
                </div>
                <div id="collapseFive3" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.th.medicalpassport.content')}}</p>
                  <p class="processing">{{trans('processing.th.medicalpassport.content2')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive4">
                  <span class="icon-ar"><i class="fa fa-list-alt"></i></span>
                  {{ trans('processing.interview')}}
                  </a>
                </div>
                <div id="collapseFive4" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.mal.interview.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive5">
                  <span class="icon-ar"><i class="fa fa-file-word-o"></i></span>
                  {{ trans('processing.va')}}
                  </a>
                </div>
                <div id="collapseFive5" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.va.content')}}</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive6">
                  <span class="icon-ar"><i class="fa fa-graduation-cap"></i></span>
                  {{ trans('processing.dp')}}
                  </a>
                </div>
                <div id="collapseFive6" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.dp.content')}} {{ trans('license.mal') }}.</p>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading panel-plus-link">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive7">
                    <span class="icon-ar"><i class="fa fa-comments"></i></span>
                    {{ trans('processing.cs')}}
                  </a>
                </div>
                <div id="collapseFive7" class="panel-collapse collapse">
                  <p class="processing">{{trans('processing.cs.content')}}</p>
                </div>
              </div>
          {{-- </div>
          </div> --}}
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
