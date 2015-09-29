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
				<th>Mess Name</th>
				<th>Position</th>
				<th>Operations</th>
			</tr>
			<?php $i=1;?>
			@foreach($mi as $m)
				<tr>
					<td>{{$i}}</td>
					<td>{{$m->name}}</td>
					<td>{{$m->mname}}</td>
					<td>{{$m->position}}</td>
					<td></td>

				</tr>
				<?php $i++;?>
			@endforeach
		</table>


	</div>
</div>


@stop
