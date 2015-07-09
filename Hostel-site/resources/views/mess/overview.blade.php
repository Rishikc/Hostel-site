@extends('mess')

@section('sidebar')
<li class="active">
    <a href="#">Overview</a>
</li>
@foreach ($messes as $mess)
<li >
    <a href="/mess/{{ $mess->url_name}}"> {{ $mess->name }}</a>
</li>
@endforeach 

@stop

@section('content')



                <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Mess
            <small>Overview</small>
        </h1>
        
    </div>

</div>

<div class="row">
    
@foreach ($messes as $mess)

		 <div class="col-xs-6 col-md-4">
    	    <div class="panel panel-default">
        	    <div class="panel-body"><a href="/mess/{{ $mess->url_name }}"><img class="img-responsive" src="/Mess/{{ $mess }}.jpg" alt=""  ></a></div>
        	    <div class="panel-footer clearfix"><center>{{ $mess->name }}</center></div>
        	</div>
     	</div>
    @endforeach 

</div>
   
<!-- /.row -->

@stop
