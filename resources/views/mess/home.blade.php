@extends('mess')

@section('sidebar')
<li>
    <a href={{ action('MessController@index') }}>Overview</a>
</li>
@foreach ($messes as $mess)
<li
<?php
    if($mess->url_name == $selected_mess)
        echo 'class="active"'
?>
>
    <a href={{ action('MessController@messhome',array('mess_name'=>$mess->url_name)) }} > {{ $mess->name }}</a>
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
<img class="img-responsive" src="/Mess/{{ $details->url_name }}.jpg" alt=""  >
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
@foreach($incharge as $mi)
    <div class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body"><img class="img-responsive" src="/Mess Incharge/{{ $mi->image_url }}.jpg" alt=""  ></div>
                <div class="panel-footer clearfix">
                    <center>{{ $mi->name }}</center>
                    <center>{{$mi->position}}</center>
                    <center>{{$mi->mail}}</center>
                    @if(Session::has('user_name'))
                        <a class="pull-right" href="{{action('M_InchargeController@index').'/'.$mi->id.'/edit'}}"><button class="btn btn-danger btn-xs">Edit</button></a>
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
<a href={{ action('MessController@messedit',array('mess_name'=>$details->url_name)) }}><button type="button" class="btn btn-danger">edit</button></a>
@endif

@stop