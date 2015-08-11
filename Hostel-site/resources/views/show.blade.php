
@extends('base')


@section('content')

@foreach($complaints as $complaint)
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="panel-title">
			<b>Subject:  </b> {{ $complaint->subject }}
		</div>
	</div>
	<div class="panel-body">
		<b>Name of the student: </b>{{ $complaint->created_name }}<br/>
		<b>Roll number: </b>{{ $complaint->created_rollnumber }}<br/>
		<b>Building: </b>{{ $complaint->building }}<br/>
		<b>Hostel: </b>{{ $complaint->hostel }}<br/>
		<button class="btn btn-info" data-toggle="modal" data-target="#myModal">
			View description
		</button>
		<div id="myModal"  class="modal fade" role="dialog">
			 <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Description</h4>
			      </div>
			      <div class="modal-body">
			        <p>{{ $complaint->description }}</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
		</div>
	</div>
</div>
@endforeach

{!! $complaints->render() !!}

@stop
