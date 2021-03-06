@extends('m_incharge')

@section('sidebar')

<li>
<a href={{ action('M_InchargeController@index') }}>Show all</a>
</li>

<li class="active">
<a href={{ action('M_InchargeController@create') }}>Create</a>
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
{!! Form::open(array("url"=>action('M_InchargeController@store'),"class"=>"form-horizontal",'files' => true))!!}

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
        <label class="control-label col-sm-2" for="mail"><center>E-Mail</center></label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter E-mail" required>
        </div>
    </div>
	<br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="image_url"><center>Image Url</center></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Enter Image Url" required>
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
