<html>
<head>
  <title>@yield('title')</title>
  <<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Hostel Site">
  <meta name="author" content="Rishi KC and Kousik S">

  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/sb-admin-2.css')}}" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

          <a class="navbar-brand" href="index.php">NITT Hostels</a>

      </div>
     <!--  <div class="nav navbar-right">
      Results are scrapped from nitt.edu, there may be some errors...<br>
      <a href="javascript:call()"id="issue">Click here</a> to notify such errors
          <! <a href="#" class="btn btn-primary" id="issues">Any issues? </a>
      </div>
 -->
 <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">


                @yield('sidebar')
            </ul>
        </div>
          <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
        <center>
        
        </center>
        <div id="container">
            @yield('content')
         </div>


    </div>
    </div>
  </body>

  <!-- {!! HTML::script('js/jquery-1.11.0.js') }} -->


</html>

