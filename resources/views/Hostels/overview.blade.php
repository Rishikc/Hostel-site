@extends('hostels')

@section('sidebar')
<li class="active">
    <a href={{ action('HostelController@index') }}>Overview</a>
</li>
@foreach ($hostels as $hostel)
<li>

    <a href={{ action('HostelController@hostelhome',array('hostel_name'=>$hostel->url_name)) }}> {{ $hostel->name }}</a>
</li>
@endforeach 
@stop


@section('content')



                <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Hostels
            <small>Overview</small>
        </h1>
        
    </div>

</div>

		<div class="row">

    
@foreach ($hostels as $hostel)
		 <div class="col-xs-6 col-md-3">
    	    <div class="panel panel-default">
        	    <div class="panel-body"><a href={{ action('HostelController@hostelhome',array('hostel_name'=>$hostel->url_name)) }}><img class="img-responsive" src="/Hostels/{{ $hostel->url_name }}.jpg" alt=""  ></a></div>
        	    <div class="panel-footer clearfix"><center>{{ $hostel->name }}</center></div>
        	</div>
     	</div>
@endforeach 
</div>

   
<!-- /.row -->

@stop
