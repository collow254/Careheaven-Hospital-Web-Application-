<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo $__env->make('user.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>CARE HEAVEN - Your health is our priority</title>

  
</head>
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
              <a href="<?php echo e(url('messagesindex')); ?>"><span class="mai-mail text-primary"></span> info@careheaven.co.ke</a>
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
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(url('homepage')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('diagnose')); ?>">Self Diagnose</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('about')); ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('insurance')); ?>">Insurance Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('doctors')); ?>">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('posts')); ?>">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('contact')); ?>">Contact</a>
            </li>



            <?php if(Route::has('login')): ?>

            <?php if(auth()->guard()->check()): ?>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color: blue; color: white" href="<?php echo e(url('myappointment')); ?>">My Appointments</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" style="background-color: blue; color: white" href="<?php echo e(url('myhistory')); ?>">Medical History</a>
            </li>

            

             





            <?php else: ?>


            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('register')); ?>">Register</a>
            </li>
            <?php endif; ?>

            <?php endif; ?>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/hos2.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Your Health is our priority</span>
        <h1 class="display-4">CARE HEAVEN</h1>
        <a href="<?php echo e(url('contact')); ?>" class="btn btn-primary" style="background-color: blue; color: white">Consult Us</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctor</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Pay</span> Bills Online</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Refill</span> Medicine Online</p>
            </div>
          </div>
          
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="about.html" class="btn btn-primary" style="background-color: blue; color: white">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <?php echo $__env->make('user.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->make('user.career', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



  <?php echo $__env->make('user.latest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  

  

   <?php echo $__env->make('user.appointment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- .page-section -->

  <!-- .page-section -->

  

  
 <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('user.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/user/home.blade.php ENDPATH**/ ?>