@extends('layouts.app')
@section('title')
{{trans('app.gallery')}}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.gallery')}}</li>
        </ol>
    </div>
</header>

<div class="container">
    <div class="row">
                <div class="col-md-12">
            <h2 class="right-line localefont" style="overflow:visible;">{{ trans('app.activities') }}</h2>
        </div>
        @include('includes.activities')
        <div class="col-md-3">
            <div class="ec-filters-menu">
                <h4>{{trans('gallery.sc')}}</h4>
                <ul>
                    <li><a href="javascript:void(0);" class="filter" data-filter="all">{{trans('gallery.all')}}</a></li>
                    <li><a href="javascript:void(0);" class="filter" data-filter=".category-tc">{{trans('gallery.tc')}}</a></li>
                    <li><a href="javascript:void(0);" class="filter" data-filter=".category-dw">{{trans('gallery.dw')}}</a></li>
                    <li><a href="javascript:void(0);" class="filter" data-filter=".category-gw">{{trans('gallery.gw')}}</a></li>
                    <li><a href="javascript:void(0);" class="filter" data-filter=".category-tw">{{trans('gallery.tw')}}</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row" id="Container">
                {{-- <div class="col-md-4 col-sm-4 mix category-tw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.tw')}}</div>
                       <img src="img/DSC_4.jpg" class="img-responsive" alt="Image" width="261" height="197">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal14">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div> --}}
                <div class="col-sm-4 mix category-tw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.tw')}}</a></div>
                        <img src="img/thumbnail16.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal13">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail15.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal12">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail29.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal21">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4 mix category-dw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.dw')}}</div>
                        <img src="img/thumbnail20.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal18">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail13.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal10">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail28.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal15">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4 mix category-dw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.dw')}}</div>
                        <img src="img/thumbnail24.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal19">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail14.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal11">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail19.jpg" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal17">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail12.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal22">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail25.JPG" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal20">{{ trans('app.viewbtn') }}</button>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail10.jpg" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal8">{{ trans('app.viewbtn') }}</button>
                                <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-tc">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.tc')}}</div>
                        <img src="img/thumbnail-modal-24.jpg" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal23">{{ trans('app.viewbtn') }}</button>
                                <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-gw">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.gw')}}</div>
                        <img src="img/thumbnail11.jpg" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                           <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal9">{{ trans('app.viewbtn') }}</button>
                                <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 mix category-tc">
                    <div class="ec-box">
                        <div class="ec-box-header">{{trans('gallery.tc')}}</div>
                        <img src="img/thumbnail-modal-23.jpg" class="img-responsive" alt="Image">
                        <div class="caption-ar">
                            <div class="caption-content localefont">
                                <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal24">{{ trans('app.viewbtn') }}</button>
                                <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                            </div>
                        </div>
                        <div class="ec-box-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- container -->
{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="right-line localefont" style="overflow:visible;">{{ trans('app.activities') }}</h2>
        </div>
        @include('includes.activities')
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <img src="img/thumbnail9.jpg" class="img-responsive" alt="Image">
            <div class="caption-ar">
                <div class="caption-content">
                  <button class="btn btn-primary btn-lg btn-ar localefont" data-toggle="modal" data-target="#myModal7">{{ trans('app.viewbtn') }}</button>1
                  <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail10.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal8">{{ trans('app.viewbtn') }}</button>2
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail11.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                   <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal9">{{ trans('app.viewbtn') }}</button>3
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail13.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal10">{{ trans('app.viewbtn') }}</button>4
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail14.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal11">{{ trans('app.viewbtn') }}</button>5
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail15.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal12">{{ trans('app.viewbtn') }}</button>6
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail16.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal13">{{ trans('app.viewbtn') }}</button>7
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail17.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal14">{{ trans('app.viewbtn') }}</button>8
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail28.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal15">{{ trans('app.viewbtn') }}</button>9
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail25.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal20">{{ trans('app.viewbtn') }}</button>10
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail19.jpg" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal17">{{ trans('app.viewbtn') }}</button>11
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail20.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal18">{{ trans('app.viewbtn') }}</button>12
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail24.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal19">{{ trans('app.viewbtn') }}</button>13
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail29.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal21">{{ trans('app.viewbtn') }}</button>14
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="img-caption-ar wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <img src="img/thumbnail12.JPG" class="img-responsive" alt="Image">
                <div class="caption-ar">
                    <div class="caption-content localefont">
                        <button class="btn btn-primary btn-lg btn-ar " data-toggle="modal" data-target="#myModal22">{{ trans('app.viewbtn') }}</button>15
                        <h4 class="caption-title localefont">{{ trans('app.activities') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@stop
@section('script')
@stop
