@extends('layout.master')
@section('html')
@section('head')
@section('title','Student List')
@section('body')
 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="{{ url('dashboard') }}"><img src="images/logo.jpg" height="40px" width="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('dashboard') }}" data-toggle="tooltip" data-placement="bottom" title="Manage Student Attendance">Record Attendance </a>
            </li>
  <li class="nav-item">
              <a class="nav-link active" href="{{ url('#') }}" data-toggle="tooltip" data-placement="bottom" title="Manage Student List">Student List<span class="sr-only">(current)</span></a>
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

 <main role="main" class="container" >
      <div class="mt-5">
        <span class="d-flex">
      	<h1><i>Student List</i></h1>
        <input type="button" class="btn btn-primary " style="margin-left:70%;" value="Add a Student"> 
      </span>
      </div>
      <br>
      <form>

                                <div class="table-responsive table--no-card ">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Student ID</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($user as $studentstatus)
                                              <tr>
                                            <td > {{$studentstatus ->studdate}} </td>
                                            <td > {{$studentstatus ->Student_ID}} </td>
                                             <td > {{$studentstatus ->Name}} </td>
                                                <td>Umingan Pangasinan</td>
                                                <td> {{$studentstatus ->Status}}</td>

                                                <td><button type="reset" class="btn btn-danger btn-sm"><a href="/studentlist/{{$studentstatus ->Student_ID}}" style="color: white;text-decoration: none;">Delete </a>
                                        </button>
                                          <button type="reset" class="btn btn-success btn-sm">Edit
                                        </button></td>
                                               @endforeach
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
   
</form>
<!--End of Body -->
</p>
    </main>

@endsection('body')

















@yield('footer')