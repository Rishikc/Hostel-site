@extends('hostels')

@section('sidebar')
<li class="active">
    <a href="#">Overview</a>
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth   ') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
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
