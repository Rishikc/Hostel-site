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
            <small>Gallery</small>
        </h1>
        
    </div>

</div>

<div class="row">
<div class="col-lg-12">
<p>
<h2>Coming Soon :)</h2>
</p>
</div>
</div>


@if (Session::has('user_name'))
<a href="/hostels/{{ $details->name }}/upload"><button type="button" class="btn btn-danger">upload pic</button></a>
@endif

@stop