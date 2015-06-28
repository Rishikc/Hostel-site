     @extends('base')

@section('title')
    Hostels
@stop

@section('sidebar')
<br>
<li>
    <a href="/index"> Home</a>
</li>
<li >
    <a href="/about">About</a>
</li>
<li class="active">
    <a href="/hostels">Hostels</a>
</li>
<li>
    <a href="/messes">Messes</a>
</li>
<li>
    <a href="/complaints">Complaints</a>
</li>
<li>
    <a href="/contacts" >Contacts</a>
</li>
<li>
  @stop


@section('content')


    <ol class="breadcrumb">
        <li>
            <a href="/hostels/zircon-b/">Home</a>
        </li>
        <li class="active">
            Council
        </li>
        <li>
            <a href="/hostels/zircon-b/gallery">Gallery</a>
        </li>
        <li>
            <a href="#">Complaint Management</a>
        </li>
    </ol>
<!--
 /.navbar-collapse 
-->
        <div id="page-wrapper">

            <div class="container-fluid">
                 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Zircon-B Council
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                 <div class="row">
                 <h2>Something</h2>
                 <br>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center><h3>WARDEN</h3>
                            <img src="/ZB.jpg" >
                                <h3>Dr.S.Moorthi</h3>
                                <p>Department:EEE</p>
                                <p>Contact No:9486001176</p>
                                <p>Email-id:srimoorthi@nitt.edu</p>
                                </center>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center><h3>RSC</h3>
                            <img src="/ZB.jpg" >
                                <h3>Mr.K.Venkatraman</h3>
                                <p>Department:EEE</p>
                                <p>Contact No:7200365322</p>
                                <p>Email-id:407112002@nitt.edu</p>
                                </center>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                            <center><h3>STEWARD</h3>
                            <img src="/ZB.jpg" >
                                <h3>E.Simonraj</h3>
                                <p>Department:unknown
                                <p>Contact No:9789166631</p>
                                <p>Email-id:esimon@nitt.edu</p>
                                </center>
                                
                            </div>
                        </div>
                    </div>

                </div>
            <!-- /.container-fluid -->

                
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @stop       
