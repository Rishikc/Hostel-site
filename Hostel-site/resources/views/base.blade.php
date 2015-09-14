<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    
    <title>@yield('title')</title>

    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sb-admin.css')}}" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="{{asset('/font-awesome/css/font-awesome.min.css')}}font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
.navbar-brand,.navbar-nav li a{
    line-height: 80px;
    height: 80px;
    padding-top: 0;
}
.side-nav
{
    margin-top:30px;
}
.side-nav li a{
    line-height: 50px;
    height: 50px;
    padding-top: 0;
}
html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 60px;
  background-color:white;
  overflow-x:hidden;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 115%;
  height: 60px;
  background-color:#222222;
  color:white;
}
#quicklinks::-webkit-scrollbar{
width:0.5em;
background-color:#222222;
} 
/* Track */
#quicklinks::-webkit-scrollbar-thumb{
background-color:#555555;
border-radius:10px;
}
#quicklinks::-webkit-scrollbar-thumb:hover{
background-color:#555555;
border:1px solid #333333;
}
#quicklinks::-webkit-scrollbar-thumb:active{
background-color:#555555;
border:1px solid #333333;
} 
#ex3::-webkit-scrollbar-track{
border:1px #333333 solid;
border-radius:10px;
-webkit-box-shadow:0 0 6px #333333 inset;
}
</style>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="logo img-responsive" src="{{asset('NITT.png')}}"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
                @yield('topbar')
          </ul>
          
          @if(Session::has('user_name'))
          <ul class="nav navbar-nav navbar-right">
             <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, {{ Session::get('user_name') }}</a></li>
          </ul>
          @else
          <ul class="nav navbar-nav navbar-right">
             <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, {{ Session::get('roll_number') }}</a></li>
          </ul>
          @endif
        
        </div><!--/.nav-collapse -->
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    @yield('sidebar')                    
                </ul>

            </div> 
    </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                        @yield('content')
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <footer class="footer">
            <br>
            <center><p>&copy Delta Force</p></center>
    </footer>
    <!-- jQuery -->
    <script src="{{asset('/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>

</body>

</html>
