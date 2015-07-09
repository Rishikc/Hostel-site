@extends('base')

@section('title')
    Mess
@stop

@section('topbar')
    <li>
    <a href="/index"> Home</a>
</li>
<li >
    <a href="/about">About</a>
</li>
<li>
    <a href="/hostels">Hostels</a>
</li>
<li class="active">
    <a href="/mess">Messes</a>
</li>
<li>
    <a href="/complaints">Complaints</a>
</li>
<li>
    <a href="/contacts" >Contacts</a>
</li>
@if (Session::has('user_name'))
	<li>
    <a href="/logout" >Logout</a>
</li>


@endif
@stop
