@extends('hostels')

@section('sidebar')
<li>
    <a href="#">Overview</a>
</li>
@foreach ($hostels as $hostel)
<li>

    <a href="/hostels/{{ $hostel->url_name }}"> {{ $hostel->name }}</a>
</li>
@endforeach 

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Hostels
            <small>Create new</small>
        </h1>
        
    </div>

</div>
<div class="row">

	<div class="col-lg-12">
	<?php
		$message = Session::get('message');
		if(isset($message))
			echo $message;
	?>
	</div>
</div>
<div class="row">
<div class="col-lg-12">
{!! Form::open()!!}

	<label>Name of Hostel</label>
	<input type="text" name="name">
	<br>
	<label>Url of hostel</label>
	<input type="text" name="url_name">
	<br>
	<label>Description</label>
	<textarea rows="3" name="description"></textarea>
	<br>
	<label>Tags</label>
	<input type="text" name="tags">
	<br>
	<label>Image</label>
	<br>

	<input type="submit" name="submit">


{!! Form::close() !!}
</div>

</div>

@stop
