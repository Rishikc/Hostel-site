@extends('hostels')

@section('sidebar')
<li>
    <a href="/hostels">Overview</a>
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
<div class="form-group">
<form action="/hostels/{{ $details->name }}/update" method="post">
<div class="row">
    <div class="col-lg-4">
        <h1 class="page-header">
           <input type="text" class="form-control" id="name" value="{{$details->name}}" />
            <small>Home</small>
        </h1>
        
    </div>

</div>

<div class="row">
<div class="col-lg-4">
<h3>Description</h3>
<p>
<input type="textarea" class="form-control" id="description" value="{{$details->description}}" />
</p>
</div>
</div>

<div class="row">
<div class="col-lg-4">
<h3>Tags</h3>
<p>
<input type="text" class="form-control" id="tags" value="{{$details->tags}}" />
</p>
</div>
</div>
<div class="row">
<div class="col-lg-2">
<button type="button" class="form-control" class="btn btn-success" >update</button>
</div>
</div>
</form>
</div>
@stop