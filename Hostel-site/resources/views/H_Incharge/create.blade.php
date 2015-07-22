@extends('h_incharge')

@section('sidebar')

<li>
<a href="/h_incharge">Show all</a>
</li>

<li class="active">
<a href="/h_incharge/screate">Create</a>
</li>

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Hostels Incharge
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
{!! Form::open(array("url"=>"/h_incharge"))!!}

	<label>Name of Incharge</label>
	<input type="text" name="name" required>
	<br>
	<label>Hostel</label>
	<select name="hostel_id" required>
	@foreach ($hostels as $hostel)
		<option value="{{$hostel->id}}">{{$hostel->name}}</option>
	@endforeach
	</select>
	<br>
	<label>Position</label>
	<input type="text" name="position" required>
	<br>
	<label>Description</label>
	<textarea rows="3" name="description" required></textarea>
	<br>
	<label>Image</label>
	<input type="file" name="image" id="image" required>
	<br>

	<input type="submit" name="submit">


{!! Form::close() !!}
</div>

</div>

@stop
