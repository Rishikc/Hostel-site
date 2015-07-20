@extends('h_incharge')

@section('sidebar')
<li class="active">
<a href="/h_incharge">Show all</a>
</li>

<li>
<a href="/h_incharge/create">Create</a>
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


@stop
