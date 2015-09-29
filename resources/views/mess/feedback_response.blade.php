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
<li class="active">
	<a href={{ action('MessController@feedback') }}>Feedback</a>
</li>
<li>
<li>
	<a href={{ action('MessController@show') }}>Show all</a>
</li>
@stop


@section('content')
<h5>Your feedback has been recorded successfully</h5>
@stop
