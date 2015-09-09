@extends('base')

@section('title')
    Hostel Site
@stop

@section('topbar')
<li class="active">
    <a href="/"> Home</a>
</li>

<li>
    <a href="/hostels">Hostels</a>
</li>
<li>
    <a href="/mess">Messes</a>
</li>
<li>
    <a href="/complaints">Complaints</a>
</li>
<li>
    <a href="/contacts" >Contacts</a>
</li>
@if (Session::has('user_name'))
	<li>
    <a href="/logout" >Logout</a>
</li>

@endif
@stop

@section('content')
<br>
<br>
<center>
<h2>Hostel Office</h2>
<img class="img-responsive thumbnail" src="NITT_clock_tower.jpg" width="500">
</center>
<div>
<p>
The National Institute of Technology (formerly known as Regional Engineering College) Tiruchirappalli, situated in the heart of Tamil Nadu on the banks of river Cauvery, was started as a joint and co-operative venture of the Government of India and the Government of Tamil Nadu in 1964 with a view to catering to the needs of man-power in technology for the country. The college has been conferred with autonomy in financial and administrative matters to achieve rapid development.
The Student Association is the voice of the students in the campus and looks into all matters of interest of the students. It is a medium of communication between the students and the management of the college.
Students' council in association with Hostel office has come up with this new initiative for submitting students complaints and feedback online. Also information about each and every hostel is available on this site.
</p>
</div>
<br>
<br>
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