@extends('complaints')

@section('sidebar')
<li>
    <a href="/complaints/make">Make a Complaint</a>
</li>
<li class="active">
    <a href="/complaints">View Complaints</a>
</li>
@stop


@section('content')
<meta name="_token" content="{{ csrf_token() }}"/>
<br>
<br>
<ul class="list-group">
<li class="list-group-item active col-sm-12">
	<div class="col-sm-2"><center><h4>Complainant</h4></center></div>
	<div class="col-sm-8"><center><h4>Complaint Subject</h4></center></div>
	<div class="col-sm-2"><center><h4>Status</center></h4></div>
</li>
@foreach($complaints as $complaint)
<li class="list-group-item col-sm-12 clickable" id="{{ $complaint->id }}">
	<div class="col-sm-2"><center>{{$complaint->created_rollnumber}}</center></div>
	<div class="col-sm-8"><center>{{$complaint->subject}}</center></div>
	<div class="col-sm-2" id="complaint_status"><center>{{$complaint->status}}</center></div>
</li>
@endforeach
</ul>
{!! $complaints->render() !!}
<div class="modal fade" id="complaintmodal" tabindex="-1" role="dialog" aria-labelledby="ComplaintModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ComplaintModalLabel">Complaint Details</h4>
      </div>
      <div class="modal-body">
   		<ul class="list-group">
   			<li class="list-group-item col-sm-12" id="name"></li>
   			<br><br>
   			<li class="list-group-item col-sm-12" id="roll"></li>
   			<br><br>
   			<li class="list-group-item col-sm-12" id="hostel"></li>
   			<br><br>
   			<li class="list-group-item col-sm-12" id="subject"></li>
   			<br><br>
   			<li class="list-group-item col-sm-12" id="description"></li>
   			<br><br>
   			<li class="list-group-item col-sm-12" id="status"></li>
   			<br><br>
   		</ul>
      </div>
      <div class="modal-footer">
      	@if (Session::has('user_name'))
      		<button type="button" id="process" class="btn btn-warning">Add to Processing</button>
      		<button type="button" id="done" class="btn btn-success">Add to Done</button>
      	@endif
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>var base_url = "{{ url('/') }}";</script>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{ asset('js/complaint.js') }}"></script>
@if (Session::has('user_name'))
 <div class="modal fade" id="quicklink" tabindex="-1" role="dialog" aria-labelledby="ComplaintModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ComplaintModalLabel">Complaint Details</h4>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        @if (Session::has('user_name'))
          <button type="button" id="process" class="btn btn-warning">Add to Processing</button>
          <button type="button" id="done" class="btn btn-success">Add to Done</button>
        @endif
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <script src="{{ asset('js/modify_status.js') }}"></script>
@endif
@stop
