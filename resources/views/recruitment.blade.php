@extends('layouts.app')
@section('title')
	{{ trans('app.recruitment') }}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.recruitment')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
{{--             <p class="slogan text-center animated bounceInLeft animation-delay-12​​ localefont">{{ trans('app.marquee')}}<span>{{ trans('app.marquee.important')}}</span>. <br> {{ trans('app.marquee2')}} <span>{{ trans('app.marquee2.important')}}</span>.</p> --}}
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.recruitment')}}</h1>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-offset-1 col-md-10 localefont">
  <section class="animated fadeInDown animation-delay-8 localefont">
	<h5 class="localefont">{{trans('app.tmp')}}</h5> <p>{{trans('jobs.topcontent')}}</p>
  </section>
  <section class="animated fadeInLeft animation-delay-8 localefont">
	<h2 class="localefont"><p>{{trans('jobs.fcompanyname')}}</p></h2>
  </section>
	<div class="row">
    <section class="text-icon wow animated fadeInLeft animation-delay-8 localefont" style="visibility: visible; animation-name: fadeInLeft;">
		<div class="col-md-3 ">
				<div class="col-md-12 hidden-sm thumbnail thumbnail-round"><img src="assets/img/demo/w4.jpg" alt="" ></div>
				<div class="col-md-12 hidden-sm thumbnail thumbnail-round"><img src="assets/img/demo/w1.jpg" alt="" ></div>
		</div>
		<div class="col-md-9 col-sm-9 col-md-xs-9">
  		<table class="table">
        <tbody>
                <tr>
                  <td>{{trans('jobs.vac.no')}}</td>
                  <td class="withcolor">{{trans('jobs.vac.position1')}} , {{trans('jobs.vac.position2')}} </td>
                  <td class="withcolor"> </td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.wage.probation') }}</td>
                  <td class="withcolor"> {{trans('jobs.wp.perday')}}</td>
                  <td></td>
                </tr>
                </tr>
                <tr>
                  <td>{{ trans('jobs.other.benefite') }}</td>
                  <td class="withcolor"> {{trans('jobs.ob.permonth')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.freeuniform') }}</td>
                  <td class="withcolor"> {{trans('jobs.fu.afterpass')}}</td>
                  <td></td>
                </tr>
                <tr>
                	<td>{{trans('jobs.condition')}}</td>
                	<td class="withcolor">
                		<ul>
                			<li>{{trans('jobs.period')}}</li>
                			<li>{{trans('jobs.workhour')}}</li>
                			<li>{{trans('jobs.probation.period')}}</li>
                		</ul>
                	</td>
                	<td class=""></td>
                </tr>
                <tr>
                	<td>{{trans('jobs.aaff')}}</td>
                	<td>{{trans('jobs.aaff.content1')}} <span style="color:#0099da;;">{{trans('jobs.aaff.content1.impoartant')}}</span>{{trans('jobs.aaff.content2')}} <span style="color:#0099da;;">{{trans('jobs.aaff.content2.impoartant')}}</span></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.pf') }}</td>
                  <td class="withcolor"> {{trans('jobs.pf.content')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.otc') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.al') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.ic') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.incometax') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.remark') }}</td>
                  <td class="withcolor"> <ul>
                			<li>{{trans('jobs.remark1')}}</li>
                			<li>{{trans('jobs.remark2')}}</li>
                			<li>{{trans('jobs.remark3')}}</li>
                		</ul></td>
                  <td></td>
                </tr>
              </tbody>
			</table>
		</div>
    </section>
	</div>
  <section class="text-icon wow animated fadeInLeft animation-delay-2 localefont" style="visibility: visible; animation-name: fadeInLeft;">
	<h2 class="localefont"><p>{{trans('jobs.scompanyname')}}</p></h2>
  </section>
  <section class="text-icon wow animated fadeInLeft animation-delay-4 localefont" style="visibility: visible; animation-name: fadeInLeft;">
	<div class="row">
		<div class="col-md-3 ">
				<div class="col-md-12 hidden-sm thumbnail thumbnail-round"><img src="assets/img/demo/w4.jpg" alt="" ></div>
				<div class="col-md-12 hidden-sm thumbnail thumbnail-round"><img src="assets/img/demo/w1.jpg" alt="" ></div>
		</div>
		<div class="col-md-9 col-sm-9 col-md-xs-9">
  		<table class="table">
        <tbody>
                <tr>
                  <td>{{trans('jobs.vac.no')}}</td>
                  <td class="withcolor">{{trans('jobs.vac.position3')}} , {{trans('jobs.vac.position4')}} </td>
                  <td class="withcolor"> </td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.wage.probation') }}</td>
                  <td class="withcolor"> {{trans('jobs.wp.perday2')}}</td>
                  <td></td>
                </tr>
                </tr>
                <tr>
                  <td>{{ trans('jobs.other.benefite') }}</td>
                  <td class="withcolor"> {{trans('jobs.ob.permonth')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.freeuniform') }}</td>
                  <td class="withcolor"> {{trans('jobs.fu.afterpass2')}}</td>
                  <td></td>
                </tr>
                <tr>
                	<td>{{trans('jobs.condition')}}</td>
                	<td class="withcolor">
                		<ul>
                			<li>{{trans('jobs.period')}}</li>
                			<li>{{trans('jobs.workhour')}}</li>
                			<li>{{trans('jobs.probation.period')}}</li>
                		</ul>
                	</td>
                	<td class=""></td>
                </tr>
                <tr>
                	<td>{{trans('jobs.aaff')}}</td>
                	<td>
                		{{trans('jobs.aaff.content3')}} <span style="color:#0099da;;">{{trans('jobs.aaff.content3.important')}}</span>
                		{{trans('jobs.aaff.content4')}} <span style="color:#0099da;;">{{trans('jobs.aaff.content4.important')}}</span>
                		{{trans('jobs.aaff.content5')}} <span style="color:#0099da;;">{{trans('jobs.aaff.content5.important')}}</span>
                	</td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.pf') }}</td>
                  <td class="withcolor"> {{trans('jobs.pf.content')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.otc') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.al') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.ic') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.incometax') }}</td>
                  <td class="withcolor"> {{trans('jobs.bylaborlaw')}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>{{ trans('jobs.remark') }}</td>
                  <td class="withcolor"> <ul>
                			<li>{{trans('jobs.remark1')}}</li>
                			<li>{{trans('jobs.remark2')}}</li>
                			<li>{{trans('jobs.remark3')}}</li>
                		</ul></td>
                  <td></td>
                </tr>
              </tbody>
			</table>
		</div>
	</div>
  </section>
</div>
    </div>{{-- div row --}}
</div>{{-- div container --}}
@stop 
@section('script')
@stop