@extends('layouts.app')
@section('title')
{{trans('app.contact')}}
@stop
@section('content')
<header class="main-header">
    <div class="container">
        <h1 class="page-title">&nbsp;</h1>
        <ol class="breadcrumb pull-right localefont">
            <li><a href="#">{{ trans('app.pages')}}</a></li>
            <li class="active">{{ trans('app.contact')}}</li>
        </ol>
    </div>
</header>
<section>
           <div class="col-xs-12">
{{--             <p class="slogan text-center animated bounceInLeft animation-delay-12​​ localefont">{{ trans('app.marquee')}}<span>{{ trans('app.marquee.important')}}</span>. <br> {{ trans('app.marquee2')}} <span>{{ trans('app.marquee2.important')}}</span>.</p> --}}
            <h1 class="right-line no-margin-top localefont" style="overflow: visible;" >{{ trans('app.contact')}}</h1>
           </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.2776314428284!2d104.88323731435842!3d11.531930991811569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095059f617973b%3A0x13c0b91b204651bd!2sTOP+Manpower+Co.%2C+Ltd.!5e0!3m2!1sen!2skh!4v1482879536513" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="container">
    <div class="row localefont text-icon wow animated fadeInDown animation-delay-4 localefont" style="visibility: visible; animation-name: fadeInDown;">
        <div class="col-md-12">
            <h2 class="localefont">{{trans('app.morequestion')}}</h2>
        </div>
        <div class="col-md-8">
            <section>
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
                    <button type="submit" class="btn btn-ar btn-primary">{{trans('app.send')}}</button>
                    <div class="clearfix"></div>
                {!! Form::close() !!}
            </section>
        </div>
        <div class="col-md-4">
            <section>
                <div class="panel panel-primary">
                    <div class="panel-heading localefont"><i class="fa fa-envelope-o"></i>{{trans('contact.additional')}}</div>
                    <div class="panel-body">
                        <h4 class="localefont">{{trans('app.contact')}}</h4>
                        <h5 class="localefont">{{trans('app.ho')}}</h5>
                        <address>
                            <strong>{{trans('app.tmp')}}</strong><br>
                            {{trans('app.address1')}}<br>
                            {{trans('app.address2')}}<br>
                            <abbr title="Phone"></abbr>{{trans('app.number')}}<br>
                            {{trans('management.email')}} <a href="mailto:{{trans('app.tmp.email')}}">{{trans('app.tmp.email')}}</a>
                        </address>
                        <h5 class="localefont">{{trans('app.cothai')}}</h5>
                        <address>
                            <strong>{{trans('app.tmp')}}</strong><br>
                            {{trans('app.address3')}}<br>
                            {{trans('app.address4')}}<br>
                            <abbr title="Phone"></abbr>{{trans('app.number2')}}<br>
                            {{trans('management.email')}} <a href="mailto:{{trans('app.tmp.email')}}">{{trans('app.tmp.email')}}</a>
                        </address>
					</div>
					{{-- <div style="margin:15px;">
                        <!-- Business Hours -->
                        <h4 class="localefont">{{trans('app.businesshour')}}</h4>
                        <ul class="list-unstyled" style="margin:0px;">
                            <li><strong>{{trans('app.montofri')}}</strong> {{trans('app.businesshour1')}}</li>
                            <li><strong>{{trans('app.sat')}}</strong> {{trans('app.businesshour2')}}</li>
                            <li><strong>{{trans('app.sun')}}</strong> {{trans('app.closed')}}</li>
                        </ul>
                    </div> --}}
                </div>
            </section>
        </div>
    </div>
</div>

@stop