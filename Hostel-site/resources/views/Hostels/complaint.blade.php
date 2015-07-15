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

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           {{$details->name}}
            <small>Complaint form</small>
        </h1>
        
    </div>

</div>

<div class="row">
<div class="col-lg-12">
<h3>Description</h3>
<p>
blah blah blah blah blah.
</p>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-lg-12">
<form class="form-horizontal" method="POST" action="/hostels/{{$details->url_name}}/complaint/submit">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name"><center>Name</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"><center>Rollnumber</center></label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="roll" name="roll" placeholder="Enter rollnumber">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="name"><center>Complaint subject</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd"><center>Complaint details</center></label>
    <div class="col-sm-6">
      <input type="textarea" class="form-control" id="details" name="details" placeholder="Enter details">
    </div>
  </div>
<br>
  <div class="form-group">
    <div class="col-sm-offset-0 col-sm-8">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

</div>
</div>


@stop