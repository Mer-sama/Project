extends('layout.master')
@section('html')
@section('head')
@section('title','Attendance')
@section('body')
 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="{{ url('#') }}"><img src="images/logo.jpg" height="40px" width="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('#') }}" data-toggle="tooltip" data-placement="bottom" title="Manage Student Attendamce">Record Attendance <span class="sr-only">(current)</span></a>
            </li>
  <li class="nav-item">
              <a class="nav-link" href="{{ url('studentlist') }}" data-toggle="tooltip" data-placement="bottom" title="Manage Student List">Student List</a>
            </li>
  <li class="nav-item">
              <a class="nav-link" href="{{ url('studrecords') }}" data-toggle="tooltip" data-placement="bottom" title="Manage Student Records">Student Records</a>
            </li>
 
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            <div class="text-light"><a class="nav-link"><h5>Logout</h5></a></div>
          </form>
        </div>
      </nav>
    </header>

<!--Content of Body -->

 <main role="main" class="container" style="margin-left:30%;">
      <div class="mt-5">
      	<h1><i>Add Attendance</i></h1>
      </div>

      <form method="POST" action="{{ url('/dashboard') }}">

    <div class="row">
{{csrf_field()}}
  <div class="col-lg-7">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-info" type="button">Student ID</button>
      </span>
      <input type="text" class="form-control" placeholder="Please Enter ID no." name="studID" aria-label="Please Enter ID no.">
   </div></div>
   <br><br>
    <div class="col-lg-7">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-info" type="button">Student Name:</button>
      </span>
      <input type="text" class="form-control" placeholder="Please Enter Name" name="studname" aria-label="Please Enter Name">
   </div></div>
   <br><br>
    <div class="col-lg-7">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-info" type="button">Date:</button>
      </span>
      <input type="date" class="form-control" name="studdate">
   </div></div>
<br><br>
    <div class="col-lg-7">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-info" type="button">Status</button>
      </span>
      <select class="form-control" name="Status">
      	<option value="Present">Present</option>
      	<option value="Absent">Absent</option>
      	<option value="Excuse">Excuse</option>

      </select>
   </div></div>
 <br><br>
    <div class="col-lg-7 ">
    <div class="input-group justify-content-center" >
      <span class="input-group-btn">
      	<input type="Submit" class="btn btn-primary " value=" Signin">
      </span>
   </div></div>

</div>
</form>
<!--End of Body -->
</p>
    </main>

@endsection('body')

















@yield('footer')