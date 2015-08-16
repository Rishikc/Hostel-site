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
<h5>Your feedback has been recorded successfully</h5>
@stop
