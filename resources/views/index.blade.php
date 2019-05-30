@extends('layouts.app')
@section('title','news')
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.news')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
          <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.news')}}</h1>
        </div>
        <div class="col-xs-12">
          <form class="showmore" action="/readmore" method="get">
            <input type="hidden" id="id" name="id" value="">
          </form>
          @foreach ($newses as $news)
          <article class="post animated fadeInDown animation-delay-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                      @if(App::getLocale()=='kh')
                      <h3 class="post-title"><a href="#" class="transicion readmore" id="{{$news->id}}">{{$news->headerkh}}</a></h3>
                      @php
                        $path = $news->photos;
                      @endphp
                      <div class="row">
                          <div class="col-md-4">
                              <img src="{{asset('/storage/uploads/'.$path[0]->path)}}" class="img-responsive imageborder" alt="Image" style="width:300px;height:200px;">
                          </div>
                          <div class="col-md-8">
                              <p>
                                {{$news->desckh}}
                              </p>
                          </div>
                      </div>
                      @elseif(App::getLocale()=='jp')
                        <h3 class="post-title"><a href="#" class="transicion readmore" id="{{$news->id}}">{{$news->headerjp}}</a></h3>
                        @php
                          $path = $news->photos;
                        @endphp
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('/storage/uploads/'.$path[0]->path)}}" class="img-responsive imageborder" alt="Image" style="width:300px;height:200px;">
                            </div>
                            <div class="col-md-8">
                                <p>
                                  {{$news->descjp}}
                                </p>
                            </div>
                        </div>
                      @else
                        <h3 class="post-title"><a href="#" class="transicion readmore" id="{{$news->id}}">{{$news->headeren}}</a></h3>
                        @php
                          $path = $news->photos;
                        @endphp
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('/storage/uploads/'.$path[0]->path)}}" class="img-responsive imageborder" alt="Image" style="width:300px;height:200px;">
                            </div>
                            <div class="col-md-8">
                                <p>
                                  {{$news->descen}}
                                </p>
                            </div>
                        </div>
                      @endif
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-lg-10 col-md-9 col-sm-4">
                                <i class="fa fa-clock-o"></i> {{$news->created_at}}.
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4">
                                <a class="btn btn-primary readmore" id="{{$news->id}}" style="color:white;"><i class="glyphicon glyphicon-eye-open"></i>Read more</a>
                                {{-- <button type="button" class="readmore" name="button" value="{{$news->id}}"> Read more &raquo;</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </article> <!-- post -->
            @endforeach
            {{$newses->links()}}
        </div>
    </div>
</div>
@stop
@section('script')
<script>
  $(document).ready(function() {
    $('.readmore').on('click',function(){
      $('#id').val($(this).attr('id'));
      $('.showmore').submit();
    });
  });
</script>
@endsection
