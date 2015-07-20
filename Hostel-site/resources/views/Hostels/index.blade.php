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
<li class="active">
	<a href="/hostels/show">Show all</a>
</li>
<li>
<a href="/hostels/create">Create</a>
</li>
@stop


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Hostels
            <small>Index</small>
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
		<table class="table table-bordered table-hover  table-striped">
			<tr>
				<th>#</th>
				
				<th>Hostel Name</th>
				<th>Tags</th>
				<th>Operations</th>
			</tr>
			<?php $i=1;?>
			@foreach($hostels as $h)
				<tr>
					<td>{{$i}}</td>
					<td>{{$h->name}}</td>
					<td>{{$h->tags}}</td>
					<td></td>

				</tr>
				<?php $i++;?>
			@endforeach
		</table>


	</div>
</div>


@stop
