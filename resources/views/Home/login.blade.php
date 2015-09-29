@extends('base')
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
<li>
    <a href={{ action('HomeController@contacts_info') }}>Contacts</a>
</li>
@if (Session::has('user_name')||Session::has('roll_number'))
    <li>
        <a href={{ action('HomeController@logout') }} >Logout</a>
    </li>

@else
    <li class="active">
        <a href={{ action('HomeController@login') }} >Login</a>
    </li>

@endif
@stop

@section('sidebar')

@stop

@section('content')



                <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           LOGIN
            <small>Admin</small>
        </h1>
        
    </div>

</div>

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('HomeController@auth') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Webmail</label>
                            <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" value="{{ old('email') }}" placeholder="Roll Number">
                                <div class="input-group-addon">@nitt.edu</div>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <ul>
                                    <li>{{ Session::get('message') }}</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
   
<!-- /.row -->

@stop
