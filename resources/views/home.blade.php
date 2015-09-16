@extends('base')

@section('title')
    Hostel Site
@stop

@section('topbar')
<li class="active">
    <a href="/"> Home</a>
</li>

<li>
    <a href="/hostels">Hostels</a>
</li>
<li>
    <a href="/mess">Messes</a>
</li>
<li>
    <a href="/complaints">Complaints</a>
</li>
<li>
    <a href="/contacts" >Contacts</a>
</li>
@if (Session::has('user_name')||Session::has('roll_number'))
	<li>
    	<a href="/logout" >Logout</a>
	</li>

@else
	<li>
    	<a href="/login" >Login</a>
	</li>

@endif
@stop