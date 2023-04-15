<!DOCTYPE html>
<html lang="en">
<head>
   @include('user.css')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>CARE HEAVEN - Your health is our priority</title>

  
</head>
 <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +254700123123</a>
              <span class="divider">|</span>
              <a href="{{url('messagesindex')}}"><span class="mai-mail text-primary"></span> info@careheaven.co.ke</a>
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
        <a class="navbar-brand" href="#"><span class="text-primary">CARE-HEAVEN</span></a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('homepage')}}">Home</a>
            </li>
            <li class="nav-item active">
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

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color: blue; color: white" href="{{url('myhistory')}}">Medical History</a>
            </li>



            @else


            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
	
	<br>
	<br>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              
              <li><a href="#symptoms">Symptoms</a></li>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              
              <li><a href="#diagnosis">Diagnosis</a></li>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              
              <li><a href="#treatment">Treatment</a></li>
            </div>
          </div>
          
        </div>
      </div>
    </div> <!-- .page-section -->

    
  </div> <!-- .bg-light -->
	

	<section id="symptoms" style="background-color: skyblue">

		 <form class="main-form" >
		 	<center><h2>Symptoms</h2></center>

        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required="">
          </div>  
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="number" name="age" class="form-control" placeholder="Patient Age" required="">
          </div>        
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter Symptoms.." required=""></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: blue; color: white">Diagnose</button>
      </form>






		
		
	</section>

	<center><section id="diagnosis" style="background-color: white">
		<h2>Diagnosis</h2>
		<!-- Display diagnosis based on patient information and symptoms -->
		<p>The patient may have the following condition:</p>
		<ul>
			<li>Condition 1</li>
			<li>Condition 2</li>
			<li>Condition 3</li>
		</ul>
		<p>Please consult a doctor for confirmation and treatment.</p>
	</section>
	<br>

	<section id="treatment" style="background-color: skyblue">
		<h2>Treatment</h2>
		<!-- Provide information on the recommended treatment for the diagnosed condition -->
		<p>The recommended treatment for the diagnosed condition may include:</p>
		<ul>
			<li>Treatment 1</li>
			<li>Treatment 2</li>
			<li>Treatment 3</li>
		</ul>
		<p>Please consult a doctor for further information and treatment.</p>
	</section>
	</center>

	@include('user.footer')

 @include('user.scripts')
</body>
</html>
