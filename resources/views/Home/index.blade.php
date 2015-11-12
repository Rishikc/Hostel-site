@extends('base')

@section('title')
    NITT HOSTELS
@stop

@section('topbar')
<li class="active">
    <a href={{ action('HomeController@index') }}> Home</a>
</li>

<li>
    <a href={{ action('HostelController@index') }}>Hostels</a>
</li>
<li>
    <a href={{ action('MessController@index') }}>Messes</a>
</li>
<li>
    <a href={{ action('HomeController@show') }}>Complaints</a>
</li>
<li>
    <a href={{ action('HomeController@contacts_info') }}>Contacts</a>
</li>
@if (Session::has('user_name')||Session::has('roll_number'))
	<li>
    	<a href={{ action('HomeController@logout') }} >Logout</a>
	</li>

@else
	<li>
    	<a href={{ action('HomeController@login') }} >Login</a>
	</li>

@endif
@stop

@section('content')
<br>
<br>
<div class="page-header">
<center>
<h1>Hostels Complaint Portal</h1>
<h3>Hostels Office</h3>
</center>
</div>
<div class="row">
	<div class="panel panel-default col-sm-8 col-lg-offset-1">
	  <div class="panel-body">Click <a href="complaints/make">here</a> to login and make a complaint</div>
	</div>
</div>

<div class="row">

	<div class="panel panel-default col-sm-8 col-lg-offset-1">
	  <div class="panel-body">Click <a href="complaints">here</a> to view all complaints</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12 col-lg-4 col-lg-offset-1" style="background-color:#222222;color:white;border-radius:20px;">
		<center><h5>Quick Links
		@if(Session::has('user_name'))
			<button class="btn btn-xs btn-success center add_button pull-right" id="quick link">ADD</button>
			@endif</h5></center>
	<div id ="quicklinks" class="col-sm-12" style="height:200px;overflow-y:scroll;margin-bottom:20px;">
		<ul class="list-group">
			@foreach($quick_links as $quick_link)
				@if(strcmp($quick_link->type,"quick link")==0)
					<li class="list-group-item" style="background-color:#222222;border:1px solid #222222">
						<a style="color:white;text-decoration:none;" href="{{$quick_link->link}}" target="_blank">
							{{$quick_link->title}}
						</a>
						@if(Session::has('user_name'))
						<button class="btn btn-xs btn-danger pull-right edit_button" id="{{$quick_link->id}}">EDIT</button>
						@endif
					</li>	
				@endif
			@endforeach
		</ul>
	</div>
	</div>
	<div class="col-sm-12 col-lg-4 col-lg-offset-1" style="background-color:#222222;color:white;border-radius:20px;">
	<center><h5>Notices @if(Session::has('user_name'))
				<button class="btn btn-xs btn-success pull-right add_button" id="notice">ADD</button>
			@endif</h5></center>
	<div id ="quicklinks" class="col-sm-12" style="height:200px;overflow-y:scroll;margin-bottom:20px;">
		<ul class="list-group">
			@foreach($quick_links as $quick_link)
				@if(strcmp($quick_link->type,"notice")==0)
					<li class="list-group-item" style="background-color:#222222;border:1px solid #222222">
						<a style="color:white;text-decoration:none;" href="{{$quick_link->link}}" target="_blank">
							{{$quick_link->title}}
						</a>
						@if(Session::has('user_name'))
						<button class="btn btn-xs btn-danger pull-right edit_button" id="{{$quick_link->id}}">EDIT</button>
						@endif
					</li>
				@endif
			@endforeach
		</ul>
	</div>
	</div>
</div>
@if(Session::has('user_name'))
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalLabel"></h4>
      </div>
      <div class="modal-body">
      <form action="{{url('quicklink')}}" method="post" role="form" class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<div class="form-group">
    		<label class="control-label col-sm-2" for="title">Title:</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
    		</div>
  		</div>
  		<div class="form-group">
    		<label class="control-label col-sm-2" for="link">link:</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" required>
    		</div>
  		</div>
  		<input type="hidden" class="form-control" id="id" value="0" name="id">
  		<input type="hidden" class="form-control" id="type" name="type">
  		<div class="form-group"> 
    		<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-success">Submit</button>
    		</div>
  </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>var base_url = "{{ url('/') }}";</script>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{ asset('js/quick_link.js') }}"></script>
@endif
@stop