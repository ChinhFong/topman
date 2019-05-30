@extends('layouts.app')
@section('title','news')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ $news->headeren }}</h1>
      <div class="col-md-12">
        <p>{{$news->descen}}</p>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <img src="img\DSC_16.jpg" alt="" class="img-responsive" style="border: 1px solid #ddd;padding:5px;margin:5px 0;">
      </div>
    </div>
  </div>
</div>
@stop
