@extends('mess')

@section('sidebar')
<li>
    <a href="../mess">Overview</a>
</li>
@foreach ($messes as $mess)
<li>
    <a href="/mess/{{ $mess->url_name }}"> {{ $mess->name }}</a>
</li>
@endforeach 
<li class="active">
	<a href="/mess/feedback">Feedback</a>
</li>
<li>
<li>
	<a href="/mess/show">Show all</a>
</li>
@stop


@section('content')
<div class="row">
	<div class="col-lg-12">
		<form method="post" class="form-horizontal" action="/mess/feedback">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
   				<label class="control-label col-sm-2" for="mess_id"><center>Mess Name</center></label>
    			<div class="col-sm-6">
      				<select class="form-control" id="mess_id" name="mess_id">
						@foreach ($messes as $mess)
      						<option value="{{ $mess->id }}">{{ $mess->name }}</option>
    					@endforeach 
  					</select>
  				</div>
  			</div>
  			<legend>Mess Feedback:</legend>
  			<div class="form-group">
   				<label class="control-label col-sm-2" for="quality"><center>Quality</center></label>
    			<div class="col-sm-6">
      				<label class="radio-inline">
      					<input type="radio" name="quality" value=1 required>Very Bad
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="quality" value=2>Bad
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="quality" value=3>Average
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="quality" value=4>Good
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="quality" value=5>Very Good
    				</label>
  				</div>
  			</div>
   			<div class="form-group">
   				<label class="control-label col-sm-2" for="quantity"><center>Quantity</center></label>
    			<div class="col-sm-6">
      				<label class="radio-inline">
      					<input type="radio" name="quantity" value=1 required>Very Bad
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="quantity" value=2>Bad
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="quantity" value=3>Average
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="quantity" value=4>Good
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="quantity" value=5>Very Good
    				</label>
  				</div>
  			</div>
  			<div class="form-group">
   				<label class="control-label col-sm-2" for="punctuality"><center>Punctuality</center></label>
    			<div class="col-sm-6">
      				<label class="radio-inline">
      					<input type="radio" name="punctuality" value=1 required>Very Bad
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="punctuality" value=2>Bad
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="punctuality" value=3>Average
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="punctuality" value=4>Good
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="punctuality" value=5>Very Good
    				</label>
  				</div>
  			</div>
  			<div class="form-group">
   				<label class="control-label col-sm-2" for="cleanliness"><center>Cleanliness</center></label>
    			<div class="col-sm-6">
      				<label class="radio-inline">
      					<input type="radio" name="cleanliness" value=1 required>Very Bad
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="cleanliness" value=2>Bad
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="cleanliness" value=3>Average
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="cleanliness" value=4>Good
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="cleanliness" value=5>Very Good
    				</label>
  				</div>
  			</div>
  			<div class="form-group">
   				<label class="control-label col-sm-2" for="overall"><center>Overall</center></label>
    			<div class="col-sm-6">
      				<label class="radio-inline">
      					<input type="radio" name="overall" value=1 required>Very Bad
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="overall" value=2>Bad
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="overall" value=3>Average
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="overall" value=4>Good
    				</label>
    				<label class="radio-inline">
                    	<input type="radio" name="overall" value=5>Very Good
    				</label>
  				</div>
  			</div>
  			<br>
  			<div class="form-group">
    			<div class="col-sm-2 col-sm-offset-3">
      				<input class="btn btn-info form-control" type="submit" name="submit" value="Submit Feedback">	
    			</div>
    		</div>
			<br>
  		</form>
	</div>
</div>
@stop
