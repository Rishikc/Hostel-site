@extends('hostels')

@section('sidebar')
<li>
    <a href={{ action('HostelController@index') }}>Overview</a>
</li>
@foreach ($hostels as $hostel)
<li
<?php
    if($hostel->url_name == $selected_hostel)
        echo 'class="active"'
?>
>
    <a href={{ action('HostelController@hostelhome',array('hostel_name'=>$hostel->url_name)) }}> {{ $hostel->name }}</a>
</li>
@endforeach 
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           {{$details->name}}
            <small>Home</small>
        </h1>
        
    </div>

</div>

<div class="row">
<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-6">
<img class="img-responsive" src="/Hostels/{{ $details->url_name }}.jpg" alt=""  >
</div>
</div>
<div class="row">
<div class="col-lg-12">
<h3>Description</h3>
<p>
{{$details->description}}
</p>
</div>
</div>

<div class="row">
<div class="col-lg-12">
<h3>Tags</h3>
<p>
{{$details->tags}}
</p>
</div>
</div>

<div class="row">
<div class="col-lg-12">
<h3>Incharge</h3>
<p>
<div class="row">
@foreach($incharge as $hi)
    <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body"><img class="img-responsive" src="/Hostel Incharge/{{ $hi->image_url }}.jpg" alt=""  ></div>
                <div class="panel-footer clearfix">
                    <center>{{ $hi->name }}</center>
                    <center>{{$hi->position}}</center>
                    <center>{{$hi->mail}}</center>
                    @if(Session::has('user_name'))
                        <a class="pull-right" href="{{action('H_InchargeController@index').'/'.$hi->id.'/edit'}}"><button class="btn btn-danger btn-xs">Edit</button></a>
                    @endif
                </div>
            </div>
        </div>
@endforeach
</div>
</p>

</div>
</div>


@if (Session::has('user_name'))
<a href={{ action('HostelController@hosteledit',array('hostel_name'=>$details->url_name)) }} ><button type="button" class="btn btn-danger">edit</button></a>
@endif

@stop