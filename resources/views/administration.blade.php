@extends('base')
@section('title')
Hostel Administration
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
<li>
    <a href={{ action('HomeController@contacts_info') }}>Contacts</a>
</li>
<li class="active">
    <a href={{ action('HomeController@administration') }}>Administration</a>
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
<br>
<br>
<h1>Hostel Administration</h1>
<hr>
<br>
<h4 style="text-align: center;"><img alt="Hostel Office" src="{{asset('hostel-office.jpg')}}" style="height:213px; width:400px" /><br/><br>
Hostel Office</h4>
<hr>
<h2 style="text-align: center;">HOSTEL EXECUTIVE COMMITTEE</h2>

<div style="text-align: center;">
<table class = "table table-striped table-bordered">
    <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Designation</th>
            <th>Name</th>
            <th>Department</th>
            <th>Email add (@nitt.edu)</th>
            <th>Cell Number CUG</th>
            <th>Phone Number add 91-431-</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01</td>
            <td>Chief Warden</td>
            <td>Dr.B.Ramadoss</td>
            <td>Professor/CA</td>
            <td>brama</td>
            <td>9486001194</td>
            <td>2503735</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Dean (Students Welfare)</td>
            <td>Dr.A.Venkataswamy Reddy</td>
            <td>Professor, CA</td>
            <td>reddy</td>
            <td>9486001163</td>
            <td>2503031</td>
        </tr>
        <tr>
            <td>03</td>
            <td>Hostel Convener</td>
            <td>Dr.A.Sreekanth</td>
            <td>Asst. Professor,Chemistry</td>
            <td>sreekanth</td>
            <td>9486001179</td>
            <td>2503642</td>
        </tr>
        <tr>
            <td>04</td>
            <td>Deputy Registrar (Hostels)</td>
            <td>Mr. K. Duraisamy</td>
            <td>Retired SAO(O/o The PAG (G&amp;SSA)Chennai)</td>
            <td>duraisamy</td>
            <td>9486191100</td>
            <td>2504136</td>
        </tr>
    </tbody>
</table>
</div>
<hr>
<h2 style="text-align: center;">HOSTEL ADMINISTRATION COMMITTEE</h2>

<h4>HAC Email: hac@nitt.edu</h4>

<div style="text-align: center;">
<table class = "table table-striped table-bordered">
    <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Designation</th>
            <th>Name</th>
            <th>Department</th>
            <th>Email add (@nitt.edu)</th>
            <th>Cell Number CUG</th>
            <th>Phone Number add 91-431-</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01</td>
            <td>Chief Warden</td>
            <td>Dr.B.Ramadoss</td>
            <td>Professor/CA</td>
            <td>brama</td>
            <td>9486001194</td>
            <td>2503735</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Additional Chief Warden</td>
            <td>Dr.N.Ramasubramanian</td>
            <td>Asso. Professor/CSE</td>
            <td>nrs</td>
            <td>9486001184</td>
            <td>2503204</td>
        </tr>
        <tr>
            <td>03</td>
            <td>Additional Chief Warden</td>
            <td>Dr.V.Senthilkumar</td>
            <td>Asst. Professor/Production</td>
            <td>vskumar</td>
            <td>9486001113</td>
            <td>2503667</td>
        </tr>
        <tr>
            <td>04</td>
            <td>Member, Deputy Registrar (Hostels)</td>
            <td>Mr. K. Duraisamy</td>
            <td>Retired SAO(O/o The PAG (G&amp;SSA)Chennai)</td>
            <td>duraisamy</td>
            <td>9486191100</td>
            <td>2504136</td>
        </tr>
        <tr>
            <td>05</td>
            <td>Member Secretary, Hostel Convener</td>
            <td>Dr.A.Sreekanth</td>
            <td>Asst. Professor,Chemistry</td>
            <td>sreekanth</td>
            <td>9486001179</td>
            <td>2503642</td>
        </tr>
    </tbody>
</table>
</div>
<h4>Hostel Office: Mr. Kalaigovan : 9486001187</h4>
<hr>

<center><h2>List of Wardens</h2></center>

<h4>Wardens Email: wardens@nitt.edu</h4>

<table align="left" class = "table table-striped table-bordered">
    <thead>
        <tr>
            <th>S. No</th>
            <th>Name of the Faculty</th>
            <th>Department</th>
            <th>Warden for Hostel</th>
            <th>Email id<br>
            add @nitt.edu</th>
            <th>Cell Number CUG</th>
            <th>Phone No<br>
            add 91-431-</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Dr.R.Ravindran</td>
            <td>Mathematics</td>
            <td>Agate, Coral, Diamond, Jade A&amp;B Messes and Veg Mess</td>
            <td>ravir</td>
            <td>9486001192</td>
            <td>2503674</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Dr.S.Suresh</td>
            <td>Mechanical</td>
            <td>Garnet A,B,C and Amber A&amp;B Megamess II</td>
            <td>ssuresh</td>
            <td>9489066246</td>
            <td>2503422</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Dr.T.Ramesh</td>
            <td>Mechanical</td>
            <td>Emerald, Pearl, Lapis, Sapphire, Ruby, Topaz, Jasper<br />
            Megamess I</td>
            <td>tramesh</td>
            <td>9486001185</td>
            <td>2503418</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Dr.V.Mariappan</td>
            <td>Mechanical</td>
            <td>Zircon A,B,C, Aquamarine A&amp;B, Amber Mess + Aquamarine Mess</td>
            <td>vmari</td>
            <td>9489066250</td>
            <td>2503420</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Dr.R.Gandhimathi</td>
            <td>Civil</td>
            <td>Opal A,B,C (west) Opal Mess</td>
            <td>rgmathii</td>
            <td>9486001196</td>
            <td>2503171</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Dr.P.Sridevi</td>
            <td>DOMS</td>
            <td>Opal C (east), D &amp; E Opal Mess</td>
            <td>psridevi</td>
            <td>9486001176</td>
            <td>2503711</td>
        </tr>
    </tbody>
</table>

@stop