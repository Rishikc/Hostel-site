@extends('mess')

@section('sidebar')
<li>
    <a href={{ action('MessController@index') }}>Overview</a>
</li>
@foreach ($messes as $mess)
<li>
    <a href={{ action('MessController@messhome',array('mess_name'=>$mess->name)) }} > {{ $mess->name }}</a>
</li>
@endforeach 
<li class="active">
	<a href={{ action('MessController@show') }}>Show all</a>
</li>
<li >
<a href={{ action('MessController@create') }}>Create</a>
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
				
				<th>Mess Name</th>
				<th>Tags</th>
				<th>Operations</th>
			</tr>
			<?php $i=1;?>
			@foreach($messes as $m)
				<tr>
					<td>{{$i}}</td>
					<td>{{$m->name}}</td>
					<td>{{$m->tags}}</td>
					<td></td>

				</tr>
				<?php $i++;?>
			@endforeach
		</table>


	</div>
</div>


@stop
