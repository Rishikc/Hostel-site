@extends('m_incharge')

@section('sidebar')

<li>
<a href="/m_incharge">Show all</a>
</li>

<li class="active">
<a href="/m_incharge/create">Create</a>
</li>

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Mess Incharge
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
{!! Form::open(array("url"=>"/m_incharge","class"=>"form-horizontal"))!!}

	<div class="form-group">
    	<label class="control-label col-sm-2" for="name"><center>Name of Incharge</center></label>
    	<div class="col-sm-6">
      		<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
    	</div>
    </div>
    <br>
    <div class="form-group">
    	<label class="control-label col-sm-2" for="mess_id"><center>Mess</center></label>
    	<div class="col-sm-6">
      		<select class="form-control" name="mess_id" required>
			@foreach ($messes as $mess)
				<option value="{{$mess->id}}">{{$mess->name}}</option>
			@endforeach
			</select>
    	</div>
    </div>
    <br>
    <div class="form-group">
    	<label class="control-label col-sm-2" for="position"><center>Position</center></label>
    	<div class="col-sm-6">
      		<input type="text" class="form-control" id="position" name="position" placeholder="Enter position" required>
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




{!! Form::close() !!}
</div>

</div>

@stop
