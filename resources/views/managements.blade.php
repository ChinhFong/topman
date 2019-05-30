@extends('layouts.app')
@section('title')
	{{ trans('app.management') }}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.aboutus')}}</li>
            <li class="active">{{ trans('app.management')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
    <div class="">
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.management')}}</h1>
    </div>
    <div class="container">
    <div class="row">
        <section class="animated text-icon wow fadeInDown animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-sm-6 col-md-2 col-md-offset-1">
                <img class="management-profile-style" src="img/management/bbath.jpg">
                <h4 class="panel-header localefont management-style">{{trans('management.md')}}</h4>
            </div>
        <div class="col-sm-6 col-md-8">
            <h3 class="localefont">{{trans('management.md.name')}}</h3>
            <!-- Nav tabs -->
            {{-- <ul class="nav nav-tabs nav-tabs-round">
            <li class="active"><a href="#profile5" data-toggle="tab">{{trans('management.profile')}}</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
            <div class="tab-pane active" id="profile5"><p class="no-margin-top">
                <p class="no-margin-top">{{trans('management.md.background')}}</p>
                <div class="clearfix"></div>
            </div>
            </div> --}}
						<p>{{trans('management.md.background')}}</p>
        </div>
        </section>
				<hr style="width: 60%; text-align: center; margin: 0 auto;">
        <section class="animated text-icon wow fadeInDown animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-sm-6 col-md-2 col-md-offset-1">
                <img class="management-profile-style" src="img/management/bkhemera.jpg">
                <h4 class="panel-header localefont management-style">{{trans('management.ad')}}</h4>
            </div>
            <div class="col-sm-6 col-md-8">
                <h3 class="localefont">{{trans('management.ad.name')}}</h3>
                <!-- Nav tabs -->
                {{-- <ul class="nav nav-tabs nav-tabs-round">
                <li class="active"><a href="#profile7" data-toggle="tab">{{trans('management.profile')}}</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                <div class="tab-pane active" id="profile7"><p class="no-margin-top">
                    {{trans('management.ad.background')}}</p>
                </div> --}}
								<p>{{trans('management.ad.background')}}</p>
            </div>
        </section>
				<hr style="width: 60%; text-align: center; margin: 0 auto;">
        <section class="animated text-icon wow fadeInDown animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-sm-6 col-md-2 col-md-offset-1">
                <img class="management-profile-style img-responsive " src="img/management/bdara.jpg">
                <h4 class="panel-header localefont management-style" >{{trans('management.hrm')}}</h4>
            </div>
            <div class="col-sm-6 col-md-8">
                <h3 class="localefont">{{trans('management.hrm.name')}}</h3>
                {{-- <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-round">
                <li class="active"><a href="#profile7" data-toggle="tab">{{trans('management.profile')}}</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                <div class="tab-pane active" id="profile7"><p class="no-margin-top">{{trans('management.hrm.background')}}</p>
                </div> --}}
								<p>{{trans('management.hrm.background')}}</p>
            </div>
        </section>
				<hr style="width: 60%; text-align: center; margin: 0 auto;">
        <section class="animated text-icon wow fadeInDown animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-sm-6 col-md-2 col-md-offset-1">
                <img class="management-profile-style" src="img/management/bya.jpg">
                <h4 class="panel-header localefont management-style" >{{trans('management.fd')}}</h4>
            </div>
        <div class="col-sm-6 col-md-8">
            <h3 class="localefont">{{trans('management.fd.name')}}</h3>
            {{-- <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-round">
            <li class="active"><a href="#profile5" data-toggle="tab">{{trans('management.profile')}}</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
            <div class="tab-pane active" id="profile5"><p class="no-margin-top">
                <p class="no-margin-top">{{trans('management.fd.background')}}</p>
                <div class="clearfix"></div>
            </div> --}}
						<p>{{trans('management.fd.background')}}</p>
            </div>
        </div>
        </section>
				<hr style="width: 60%; text-align: center; margin: 0 auto;">
        <section class="animated text-icon wow fadeInDown animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-sm-6 col-md-2 col-md-offset-1">
                <img class="management-profile-style" src="img/management/bdarady.jpg">
                <h4 class="panel-header localefont management-style">{{trans('management.mkd')}} </h4>
            </div>
            <div class="col-sm-6 col-md-8">
                <h3 class="localefont">{{trans('management.mkd.name')}}</h3>
                <!-- Nav tabs -->
                {{-- <ul class="nav nav-tabs nav-tabs-round"> --}}
                {{-- <li class="active"><a href="#home5" data-toggle="tab">Home</a></li> --}}
                {{-- <li class="active"><a href="#profile6" data-toggle="tab">{{trans('management.profile')}}</a></li> --}}
                {{-- </ul> --}}
                {{-- <!-- Tab panes -->
                <div class="tab-content">
                <div class="tab-pane active" id="profile6">
                <p class="no-margin-top">{{trans('management.mkd.background')}}</p>
                </div> --}}
								<p>{{trans('management.mkd.background')}}</p>
            </div>
        </section>
				<hr style="width: 60%; text-align: center; margin: 0 auto;">
        <section class="animated text-icon wow fadeInDown animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInDown;">
            <div class="col-sm-6 col-md-2 col-md-offset-1">
                <img class="management-profile-style" src="img/management/bpheap.jpg">
                <h4 class="panel-header localefont  management-style">{{trans('management.td')}}</h4>
            </div>
            <div class="col-sm-6 col-md-8">
                <h3 class="localefont">{{trans('management.td.name')}}</h3>
                {{-- <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-round">
                <li class="active"><a href="#profile7" data-toggle="tab">{{trans('management.profile')}}</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                <div class="tab-pane active" id="profile7"><p class="no-margin-top">
                    {{trans('management.td.background')}}</p>
                </div> --}}
								<p>{{trans('management.td.background')}}</p>
            </div>
        </section>
    </div>
</div>
    </div>
</div>
@stop
@section('script')
@stop
