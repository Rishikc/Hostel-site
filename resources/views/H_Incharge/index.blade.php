@extends('h_incharge')

@section('sidebar')

<li class="active">
<a href={{ action('H_InchargeController@index') }}>Show all</a>
</li>

<li >
<a href={{ action('H_InchargeController@create') }}>Create</a>
</li>

@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Hostels Incharge
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
				<th>Name</th>
				<th>Hostel Name</th>
				<th>Position</th>
				<th>Operations</th>
			</tr>
			<?php $i=1;?>
			@foreach($hi as $h)
				<tr>
					<td>{{$i}}</td>
					<td>{{$h->name}}</td>
					<td>{{$h->hname}}</td>
					<td>{{$h->position}}</td>
					<td><a href="{{action('H_InchargeController@index').'/'.$h->id.'/edit'}}"><button class="btn btn-danger btn-xs">Edit</button></a></td>

				</tr>
				<?php $i++;?>
			@endforeach
		</table>


	</div>
</div>


@stop
