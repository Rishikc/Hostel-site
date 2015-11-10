@extends('base')
@section('title')
Contacts
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

@section('content')
<br><br><br>
<div class="row">
    <img class="col-xs-2 col-xs-offset-5 col-md-2 col-md-offset-3 col-lg-1 col-lg-offset-3" style="display:inline-block;vertical-align:middle;float:none;" src="{{asset('Student-council-logo.png')}}">
    <div class="col-xs-8 col-xs-offset-2 col-md-5 col-md-offset-0" style="display:inline-block;vertical-align:middle;float:none;">
        <center><h2>Students' Council 2015 - 16</h2></center>
    </div>
</div>
<br>
<p >The Student Association is the voice of the students in the campus and looks into all matters of 
interest of the students. It is a medium of communication between the students and the management 
of the college.</p>
<br>
<p >The hierarchy of the association includes a President from final year, Vice-President from final 
year girls, a General Secretary from third year and a Joint Secretary from second year -who are 
elected by the students to represent them for a period of one year. They are responsible for 
coordinating the various cultural and social activities conducted in the college.</p>
<br>
<style type="text/css">
    @media only screen and (min-width : 1200px) {
        .for_margin
        {
            margin-left:11.11%;
            margin-right:11.11%;
        }

    }
</style>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-4  for_margin">
        <div class="panel panel-info">
            <div class="panel-heading">
                <center><h3 class="panel-title">President</h3></center>
            </div>
            <div class="panel-body">
                <p><b>Name</b> : RAJAT SANKLECHA</p>
                <p><b>Roll No</b> : 114112069</p>
                <p><b>Dept. & Year</b> : PROD(4)</p>
                <p><b>Contanct No.</b> : 9486001186</p>
                <p><b>Room No. </b> : Garnet B,79</p>
                <p><b>Email ID</b> : studentpresident@nitt.edu</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <center><h3 class="panel-title">Vice President</h3></center>
            </div>
            <div class="panel-body">
                <p><b>Name</b> : HEMAPRIYA.J</p>
                <p><b>Roll No</b> : 106112038</p>
                <p><b>Dept. & Year</b> : CSE(4)</p>
                <p><b>Contact No.</b> : 9489066201</p>
                <p><b>Room No. </b> : Opal A,95</p>
                <p><b>Email ID</b> : studvp@nitt.edu</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4  for_margin">
        <div class="panel panel-info">
            <div class="panel-heading">
                <center><h3 class="panel-title">General Secretary</h3></center>
            </div>
            <div class="panel-body">
                <p><b>Name</b> : RAJESH KUMAR KARNENA</p>
                <p><b>Roll No</b> : 106113076</p>
                <p><b>Dept. & Year</b> : CSE(3)</p>
                <p><b>Contact No.</b> : 9486001171</p>
                <p><b>Room No. </b> : Zircon A,80</p>
                <p><b>Email ID</b> : studentgensec@nitt.edu</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <center><h3 class="panel-title">Joint Secretary</h3></center>
            </div>
            <div class="panel-body">
                <p><b>Name</b> : MANI PRAKASH.R</p>
                <p><b>Roll No</b> : 107114060</p>
                <p><b>Dept. & Year</b> : EEE(2)</p>
                <p><b>Contact No.</b> : 9487537395</p>
                <p><b>Room No. </b> : Amber B,102</p>
                <p><b>Email ID</b> : 107114060@nitt.edu</p>
            </div>
        </div>
    </div>
</div>
@stop