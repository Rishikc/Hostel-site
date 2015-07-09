@extends('mess')

@section('sidebar')
<li>
    <a href="/mess">Overview</a>
</li>
@foreach ($messes as $mess)
<li
<?php
    if($mess->url_name == $selected_mess)
        echo 'class="active"'
?>
>
    <a href="/mess/{{ $mess->url_name }}"> {{ $mess->name }}</a>
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

@if (Session::has('user_name'))
<a href="/mess/{{ $details->url_name }}/edit"><button type="button" class="btn btn-danger">edit</button></a>
@endif

@stop