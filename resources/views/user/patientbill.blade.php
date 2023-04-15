<!DOCTYPE html>
<html lang="en">
@include('user.css')
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +254700123123</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> info@careheaven.co.ke</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('homepage')}}"><span class="text-primary">CARE-HEAVEN</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('diagnose')}}">Self Diagnose</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('insurance')}}">Insurance Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('posts')}}">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color: blue; color: white" href="{{url('myappointment')}}">My Appointments</a>
            </li>


            <li class="nav-item active">
              <a class="nav-link"  href="{{url('myhistory')}}">Medical History</a>
            </li>



            @else


            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

<div align="Center" style="padding: 70px;">



<table class="table" style="background-color: white; border-radius: 10px">
  <h1>MY BILLS</h1>
    <thead>
      <tr>
                          <th >Bill Id</th>
                          <th>Patient Id</th>
                          <th >Visit Id</th>
                          <th >Consultation Fee</th>
                          <th>Lab Fee</th>
                          <th >Medicine Fee</th>
                          <th >Payment Status</th>
                          <th >Last Updated at</th>
                        </tr>
</thead>
 <tbody>
                          
                          
@foreach($data as $bills)
                        <tr align="center" >
                          <td>{{$bills->id}}</td>
                          <td>{{$bills->patientId}}</td>
                          <td>{{$bills->visitId}}</td>
                          <td>{{$bills->consultationfee}}</td>
                          <td>{{$bills->labfee}}</td>
                          <td>{{$bills->medicinefee}}</td>
                          <td>{{$bills->paymentstatus}}</td>
                          <td>{{$bills->updated_at}}</td>

                          <td><a class="btn btn-primary" href="{{url('daraja')}}">Innitiate Payment</a></td>  
                        </tr>
                        @endforeach
  </table>




	
</div>
   
@include('user.script')

  
</body>
</html>