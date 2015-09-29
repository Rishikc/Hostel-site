@extends('base')

@section('title')
    Hostels Incharge
@stop

@section('topbar')
<li >
    <a href={{ action('HomeController@index') }}> Home</a>
</li>

<li>
    <a href={{ action('HostelController@index') }}>Hostels</a>
</li>
<li>
    <a href={{ action('MessController@index') }}>Messes</a>
</li>
<li>
    <a href={{ action('HomeController@show') }}>Complaints</a>
</li>
<li class="active">
    <a href={{ action('HomeController@contacts_info') }}>Contacts</a>
</li>
<li class="active">
<a href={{ action('H_InchargeController@index') }}>Hostels Incharge</a>
</li>
@if (Session::has('user_name')||Session::has('roll_number'))
    <li>
        <a href={{ action('HomeController@logout') }} >Logout</a>
    </li>

@else
    <li>
        <a href={{ action('HomeController@login') }} >Login</a>
    </li>

@endif
@stop

