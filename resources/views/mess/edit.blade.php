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
@stop

@section('content')
<form class="form-horizontal" method="POST" action="/mess/{{$details->url_name}}/update">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-lg-4">
        <h1 class="page-header">
            {{ $details->name }}
            <small>Home</small>
        </h1>
        
    </div>

</div>
        
<div class="row">
<div class="col-lg-4">
<h3>Description</h3>
<p>
    <div class="form-group">
    <input type="textarea" class="form-control" id="description" name="description" value="{{$details->description}}" />
    </div>

</p>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<h3>Tags</h3>
<p>
    <div class="form-group">
    <input type="text" class="form-control" id="tags" name="tags" value="{{$details->tags}}" />
    </div>

</p>
</div>
</div>
<div class="row">
<div class="col-lg-2">
  <button type="submit" class="btn btn-success">Update</button>
</div>
</div>        
</form>  
    
@stop