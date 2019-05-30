@extends('layouts.app')
@section('title')
    {{trans("app.vision")}}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li  class="active">{{ trans('app.company')}}</li>
            <li class="active">{{ trans('app.vision')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.vision')}}</h1>
        </div>
        <div class="col-xs-12">
			<h3 class="localefont">{{trans('vision.content')}}</h3>
        </div>
    </div>
</div>

@stop