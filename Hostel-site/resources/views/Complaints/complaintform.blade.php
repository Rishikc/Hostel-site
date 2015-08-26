@extends('complaints')

@section('sidebar')
<li  class="active">
    <a href="/complaints">Make a Complaint</a>
</li>
<li>
    <a href="/complaints/view">View Complaints</a>
</li>
@stop


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Complaint form
            
        </h1>
        
    </div>

</div>

<div class="row">
<div class="col-lg-12">
<h3>Description</h3>
<p>
Post your complaints here. Come back and track the status of your complaint
</p>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-lg-12">
<form class="form-horizontal" method="POST" action="/complaints/submit">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name"><center>Name</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="roll"><center>Rollnumber</center></label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="roll" name="roll" placeholder="Enter rollnumber">
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="name"><center>Name</center></label>
    <div class="col-sm-6">
        <div class="radio">
            <label><input type="radio" name="option" value="hostel">Hostel</label>
            <label><input type="radio" name="option" value="mess">Mess</label>
            <label><input type="radio" name="option" value="other">other</label>
        </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="hostel_name"><center>Hostel/Mess Name</center></label>
    <div class="col-sm-6">
      <select class="form-control" id="hostel_name" name="hostel_name">
    @foreach ($hostels as $hostel)
      <option value="{{ $hostel->name }}">{{ $hostel->name }}</option>
    @endforeach 
    @foreach ($mess as $mess)
      <option value="{{ $mess->name }}">{{ $mess->name }}</option>
    @endforeach 
  </select>
    </div>
  </div>
    

<div class="form-group">
    <label class="control-label col-sm-2" for="subject"><center>Complaint subject</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="complaint"><center>Complaint details</center></label>
    <div class="col-sm-6">
      <textarea class="form-control" id="details" name="details" placeholder="Enter details" rows="5"></textarea>
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