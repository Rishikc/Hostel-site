     @extends('hostels')

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
        <li class="active">
           Home
        </li>
        <li>
             <a href="/hostels/zircon-c/council">Council</a>
        </li>
        <li>
            <a href="/hostels/zircon-c/gallery">Gallery</a>
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
                            Zircon-C 
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @stop       
