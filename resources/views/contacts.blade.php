@extends('base')
@section('title')
Contacts
@stop
@section('topbar')
 <li>
    <a href="/  "> Home</a>
</li>

<li>
    <a href="/hostels">Hostels</a>
</li>
<li>
    <a href="/mess">Messes</a>
</li>
<li>
    <a href="/complaints">Complaints</a>
</li>
<li  class="active">
    <a href="/contacts" >Contacts</a>
</li>
@if (Session::has('user_name')||Session::has('roll_number'))
    <li>
        <a href="/logout" >Logout</a>
    </li>

@else
    <li>
        <a href="/login" >Login</a>
    </li>

@endif
@stop

@section('content')
<br><br><br>
<h3><center>NATIONAL INSTITUTE OF TECHNOLOGY : TIRUCHIRAPPALLI – 620015</center></h3>
<h3><center><u>STUDENTS’ COUNCIL 2015-2016</u></center></h3>
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
<div class="table-responsive">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Post</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Dept(Year)</th>
        <th>Contact No</th>
        <th>Hostel,Room No</th>
        <th>Email-Id</th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>PRESIDENT</td>
        <td>RAJAT SANKLECHA</td>
        <td>114112069</td>
        <td>PROD(4)</td>
        <td>9486001186</td>
        <td>Garnet B,79</td>
        <td>studentpresident@nitt.edu</td>
      </tr>
    </tbody>
    <tbody>
        <tr>
        <td>VICE PRESIDENT</td>
        <td>HEMAPRIYA.J</td>
        <td>106112038</td>
        <td>CSE(4)</td>
        <td>9489066201</td>
        <td>Opal A,95</td>
        <td>studvp@nitt.edu</td>
      </tr>
    </tbody>
    <tbody>
        <tr>
        <td>GENERAL SECRETARY</td>
        <td>RAJESH KUMAR KARNENA</td>
        <td>106113076</td>
        <td>CSE(3)</td>
        <td>9486001171</td>
        <td>Zircon A,80</td>
        <td>studentgensec@nitt.edu</td>
      </tr>
    </tbody>
    <tbody>
        <tr>
        <td>JOINT SECRETARY</td>
        <td>MANI PRAKASH.R</td>
        <td>107114060</td>
        <td>EEE(2)</td>
        <td>9487537395</td>
        <td>Amber B,102</td>
        <td>107114060@nitt.edu</td>
      </tr>
    </tbody>
  </table>
</div>
@stop