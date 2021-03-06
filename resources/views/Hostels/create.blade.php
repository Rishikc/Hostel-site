@extends('hostels')

@section('sidebar')
<li>
    <a href={{ action('HostelController@index') }}>Overview</a>
</li>
@foreach ($hostels as $hostel)
<li>

    <a href={{ action('HostelController@hostelhome',array('hostel_name'=>$hostel->name)) }}> {{ $hostel->name }}</a>
</li>
@endforeach 
<li>
	<a href={{ action('HostelController@show') }}>Show all</a>
</li>
<li class="active">
<a href={{ action('HostelController@create') }}>Create</a>
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
<form method="post" class="form-horizontal" action={{ action('HostelController@store') }} enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
    			<label class="control-label col-sm-2" for="name"><center>Name of Hostel</center></label>
    			<div class="col-sm-6">
      				<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
    			</div>
    		</div>
			<br>
			<div class="form-group">
    			<label class="control-label col-sm-2" for="url-name"><center>URL of Hostel</center></label>
    			<div class="col-sm-6">
      				<input type="text" class="form-control" id="url_name" name="url_name" placeholder="Enter URL" required>
    			</div>
    		</div>
			<br>
			<div class="form-group">
    			<label class="control-label col-sm-2" for="description"><center>Description</center></label>
    			<div class="col-sm-6">
      				<textarea rows="3" class="form-control" id="description" name="description" placeholder="Desription" required></textarea> 
    			</div>
    		</div>
			<br>
			<div class="form-group">
    			<label class="control-label col-sm-2" for="tags"><center>Tags</center></label>
    			<div class="col-sm-6">
      				<input type="text" class="form-control" id="tags" name="tags" placeholder="Tags" required>
    			</div>
    		</div>
			<br>
			<div class="form-group">
    			<label class="control-label col-sm-2" for="image"><center>Image</center></label>
    			<div class="col-sm-6">
      				<input type="file" name="image" id="image" required>
    			</div>
    		</div>
			<br>
			<div class="form-group">
    			<div class="col-sm-2 col-sm-offset-3">
      				<input class="btn btn-success form-control" type="submit" name="submit">	
    			</div>
    		</div>
			<br>


</form>
</div>

</div>

@stop
