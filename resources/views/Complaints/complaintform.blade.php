@extends('complaints')

@section('sidebar')
<li  class="active">
    <a href={{ action('HomeController@complaint')}}>Make a Complaint</a>
</li>
<li>
    <a href={{ action('HomeController@show')}}>View Complaints</a>
</li>
@if(Session::has('user_name'))
  @foreach ($categories as $cat)
    <li>
    <a href={{ action('HomeController@show_filter', array('filter' => $cat->url_name))}} >{{$cat->name}}</a>
    </li>
     
  @endforeach
@endif
@stop


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Complaint form
            
        </h1>
        
    </div>

</div>
@if (Session::has('message'))
                        <div class="alert alert-info">
                            <ul>
                                    <li>{{ Session::get('message') }}</li>
                            </ul>
                        </div>
                    @endif
<div class="row">
<div class="col-lg-12">
<h3>Description</h3>
<p>
Post your complaints here. Come back and track the status of your complaint
</p>
<h3>Instructions</h3>
<p>
<li>Choose appropriate category for the complaint</li>
<li>Mention location of problem (Room no, Hostel name, etc.) and all other necessary information in the description</li>
<li>Restrain from giving complaints about mess food quality, quantity, etc. This can be given in the monthly feedback form for messes</li>
</p>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-lg-12">
<form class="form-horizontal" method="POST" action={{ action('HomeController@complaint_submit')}}>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label class="control-label col-sm-2" for="option"><center>Problem Location</center></label>
    <div class="col-sm-6">
        <div class="radio" required>
            <label><input type="radio" name="option" value="hostel" required>Hostel</label>
            <label><input type="radio" name="option" value="mess">Mess</label>
            <label><input type="radio" name="option" value="other">other</label>
        </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="hostel_name"><center>Hostel/Mess Name</center></label>
    <div class="col-sm-6">
      <select class="form-control" id="hostel_name" name="hostel_name" required>
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
    <label class="control-label col-sm-2" for="subject"><center>Phone number</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="subject" name="phoneno" placeholder="Phone number" pattern=[0-9]{10} title="10 digit mobile no. required" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="subject"><center>Complaint category</center></label>
    <div class="col-sm-6">
      @foreach ($categories as $cat)
      <div class="radio">
        <label><input type="radio" name="subject" value="{{$cat->url_name}}">{{ $cat -> name}}</label>
        <h6>{{$cat->description}}</h6>
      </div>

      @endforeach
      
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="complaint"><center>Complaint description</center></label>
    <div class="col-sm-6">
      <textarea class="form-control" id="details" name="details" placeholder="Enter details about your complaint" rows="5" required></textarea>
    </div>
  </div>
<br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

</div>
</div>


@stop