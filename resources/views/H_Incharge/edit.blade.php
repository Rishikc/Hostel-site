@extends('h_incharge')

@section('sidebar')

<li>
<a href={{ action('H_InchargeController@index') }}>Show all</a>
</li>

<li>
<a href={{ action('H_InchargeController@create') }}>Create</a>
</li>

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Hostels Incharge
            <small>Edit</small>
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
{!! Form::open(array("url"=>action('H_InchargeController@index')."/".$h_incharge->id,"method"=>"put","class"=>"form-horizontal",'files' => true))!!}

	<div class="form-group">
    	<label class="control-label col-sm-2" for="name"><center>Name of Incharge</center></label>
    	<div class="col-sm-6">
      		<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$h_incharge->name}}" required>
    	</div>
    </div>
    <br>
    <div class="form-group">
    	<label class="control-label col-sm-2" for="hostel_id"><center>Hostel</center></label>
    	<div class="col-sm-6">
      		<select class="form-control" name="hostel_id" required>
			@foreach ($hostels as $hostel)
				<option value="{{$hostel->id}}" 
                    @if($h_incharge->hostel_id == $hostel->id)
                        selected
                    @endif
                >{{$hostel->name}}</option>
			@endforeach
			</select>
    	</div>
    </div>
    <br>
    <div class="form-group">
    	<label class="control-label col-sm-2" for="position"><center>Position</center></label>
    	<div class="col-sm-6">
      		<input type="text" class="form-control" id="position" name="position" placeholder="Enter position" value="{{$h_incharge->position}}" required >
    	</div>
    </div>
    <br>
        <div class="form-group">
        <label class="control-label col-sm-2" for="mail"><center>E-Mail</center></label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter E-mail" value="{{$h_incharge->mail}}" required>
        </div>
    </div>
	<br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="image_url"><center>Image Url</center></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Enter Image Url" value="{{$h_incharge->image_url}}" required readonly>
        </div>
    </div>
    <br>
	<div class="form-group">
    	<label class="control-label col-sm-2" for="image"><center>Image</center></label>
    	<img id="preview" class="col-sm-4" src="{{asset('Hostel Incharge/').'/'.$h_incharge->image_url.'.jpg'}}">
        <div class="col-sm-6">
      		<input type="file" name="image" id="image" onchange="image_preview(this);">
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
<script type="text/javascript">
    function image_preview(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@stop