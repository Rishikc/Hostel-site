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
<li>
	<a href="/hostels/show">Show all</a>
</li>
<li class="active">
<a href="/hostels/create">Create</a>
</li>
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
<form method="post" action="/hostels/create" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>Name of Hostel</label>
	<input type="text" name="name" required/>
	<br>
	<label>Url of hostel</label>
	<input type="text" name="url_name" required/>
	<br>
	<label>Description</label>
	<textarea rows="3" name="description" required></textarea>
	<br>
	<label>Tags</label>
	<input type="text" name="tags" required>
	<br>
	<label>Image</label>
	<input type="file" name="image" id="image" required>
	<br>

	<input type="submit" name="submit">


</form>
</div>

</div>

@stop
