@extends('hostels')

@section('sidebar')
<li class="active">
    <a href="#">Overview</a>
</li>
<li>
    <a href="/hostels/zircon-a"> Zircon A</a>
</li>
<li >
    <a href="/hostels/zircon-b">Zircon B</a>
</li>
<li>
    <a href="/hostels/zircon-c">Zircon C</a>
</li>
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

		 <div class="col-xs-6 col-md-4">
    	    <div class="panel panel-default">
        	    <div class="panel-body"><a href="/hostels/{{ $hostel }}"><img class="img-responsive" src="/Hostels/{{ $hostel }}.jpg" alt=""  ></a></div>
        	    <div class="panel-footer clearfix"><center>{{ $hostel }}</center></div>
        	</div>
     	</div>
    @endforeach 

</div>
   
<!-- /.row -->

@stop
