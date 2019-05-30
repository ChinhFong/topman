@extends('layouts.app')
@section('title')
{{trans('app.faq')}}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.faq')}}</li>
        </ol>
    </div>
</header>
<div class="container">
    <div class="row">
        <section>
           <div class="col-xs-12">
{{--             <p class="slogan text-center animated bounceInLeft animation-delay-12​​ localefont">{{ trans('app.marquee')}}<span>{{ trans('app.marquee.important')}}</span>. <br> {{ trans('app.marquee2')}} <span>{{ trans('app.marquee2.important')}}</span>.</p> --}}
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.faq')}}</h1>
           </div>
        </section>
        <div class="col-md-8">
            <div class="panel-group" id="accordion1">
                <div class="panel panel-primary">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                {{trans('faq.faq')}}
                            </a>
                    </div>
                    <div id="collapseOne1" class="panel-collapse collapse">
                            <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans2')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans3')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans4')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans5')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans6')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq.ans7')}}</li>
                            </ul>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                {{trans('faq.faq2')}}
                            </a>
                    </div>
                    <div id="collapseTwo1" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{trans('faq.faq2.ans')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                {{trans('faq.faq3')}}
                            </a>
                    </div>
                    <div id="collapseThree1" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{trans('faq.faq3.ans')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                               {{trans('faq.faq4')}}
                            </a>
                    </div>
                    <div id="collapseFour1" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{trans('faq.faq4.ans')}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                {{trans('faq.faq5')}}
                            </a>
                    </div>
                    <div id="collapseFive1" class="panel-collapse collapse">
                            <h6 class="localefont faq">{{trans('faq.faq5.1')}}</h6>
                            <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans2')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans3')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans4')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans5')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans6')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq5.ans7')}}</li>
                            </ul>
                            <h6 class="localefont faq">{{trans('faq.faq5.2')}}</h6>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">
                                 {{trans('faq.faq6')}}
                            </a>
                    </div>
                    <div id="collapseSix1" class="panel-collapse collapse">
                            <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq6.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq6.ans2')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq6.ans3')}}</li>
                            </ul>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1">
                                {{trans('faq.faq7')}}
                            </a>
                    </div>
                    <div id="collapseSeven1" class="panel-collapse collapse">
                        <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq7.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq7.ans2')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq7.ans3')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq7.ans4')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq7.ans5')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight1">
                                {{trans('faq.faq8')}}
                            </a>
                    </div>
                    <div id="collapseEight1" class="panel-collapse collapse">
                        <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq8.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq8.ans2')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq8.ans3')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-primary localefont ">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine1">
                                {{trans('faq.faq9')}}
                            </a>
                    </div>
                    <div id="collapseNine1" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{trans('faq.faq9.ans')}}
                        </div>
                    </div>
                </div>
                 <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseTen1">
                                {{trans('faq.faq10')}}
                            </a>
                    </div>
                    <div id="collapseTen1" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{trans('faq.faq10.ans')}}
                        </div>
                    </div>
                </div>
                 <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseEleven1">
                                {{trans('faq.faq11')}}
                            </a>
                    </div>
                    <div id="collapseEleven1" class="panel-collapse collapse">
                            <h6 class="localefont faq">{{trans('faq.faq11.1')}}</h6>
                             <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq11.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq11.ans2')}}</li>
                        	</ul>
                    </div>
                </div>
                <div class="panel panel-primary localefont">
                    <div class="panel-heading panel-plus-link">
                            <a class="accordion-toggle collapsed localefont" data-toggle="collapse" data-parent="#accordion1" href="#collapseTweleve1">
                                {{trans('faq.faq12')}}
                            </a>
                    </div>
                    <div id="collapseTweleve1" class="panel-collapse collapse">
                             <ul class="fa-ul" style="margin-left: 100px;">
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq12.ans1')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq12.ans2')}}</li>
                            	<li><h5><i class="fa-li fa fa-check-square"></i></h5>{{trans('faq.faq12.ans3')}}</li>
                        	</ul>
                    </div>
                </div>

            </div> <!-- panel-group -->
        </div> <!-- col-md-8 -->
        <div class="col-md-4 localefont text-icon wow animated fadeInDown animation-delay-5" >
            <h3 class="localefont">{{trans('app.morequestion')}}</h3>

           {!! Form::open(['action'=>'SendmailController@store','method'=>'POST','files'=>true]) !!}
                {{ csrf_field() }}
                @if(Session::has('message'))
                    <h2 style="color: green"><i class="fa fa-star"></i>{{Session::get('message')}}</h2>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="InputName">{{trans('app.name')}}</label>
                    <input type="text" class="form-control" id="InputName" name="name" id='name' value="{{ old('name',$user->name) }}">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">{{trans('management.email')}}</label>
                    <input type="email" class="form-control" id="InputEmail1" name="email" id='email' value="{{ old('email',$user->email)}}">
                </div>
                <div class="form-group">
                    <label for="InputMessage">{{trans('app.message')}}</label>
                    <textarea class="form-control" id="InputMessage" rows="8" name="content" id='content' value="{{old('content') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-ar btn-success btn-lg btn-block">{{trans('app.send')}}</button>
            </form>
            <div class="contact-info">
                <h3 class="localefont">{{trans('app.contact')}}</h3>
                <h5 class="localefont">{{trans('app.ho')}}</h5>
                <address>
                    <strong>{{trans('app.tmp')}}</strong><br>
                    {{trans('app.address1')}}<br>
                    {{trans('app.address2')}}<br>
                    <abbr title="Phone"></abbr> {{trans('app.number')}}<br/>
                    {{trans('management.email')}} <a href="mailto:{{trans('app.tmp.email')}}">{{trans('app.tmp.email')}}</a>
                </address>
                 <h5 class="localefont">{{trans('app.cothai')}}</h5>
                        <address>
                            <strong>{{trans('app.tmp')}}</strong><br>
                            {{trans('app.address3')}}<br>
                            {{trans('app.address4')}}<br>
                            <abbr title="Phone"></abbr>{{trans('app.number2')}}<br/>
                            {{trans('management.email')}} <a href="mailto:{{trans('app.tmp.email')}}">{{trans('app.tmp.email')}}</a>
                        </address>
                
                <!-- Business Hours -->
                {{-- <h3 class="localefont">{{trans('app.businesshour')}}</h3>
                <ul class="list-unstyled">
                    <li><strong>{{trans('app.montofri')}}</strong> {{trans('app.businesshour1')}}</li>
                    <li><strong>{{trans('app.sat')}}</strong> {{trans('app.businesshour2')}}</li>
                    <li><strong>{{trans('app.sun')}}</strong> {{trans('app.closed')}}</li>
                </ul> --}}
            </div>
        </div>
    </div> <!-- row -->
</div>
@stop
@section('script')
@stop