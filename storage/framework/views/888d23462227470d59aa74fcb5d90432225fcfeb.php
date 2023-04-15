<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php echo $__env->make('user.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <a class="navbar-brand" href="#"><span class="text-primary">CARE-HEAVEN</span></a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
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
            <li class="nav-item active">
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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/hos2.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form class="contact-form mt-5" action="<?php echo e(url('contactus')); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <div class="row mb-3 ">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required="">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address.." required="">
          </div>

          <div class="col-12 py-2 wow fadeInUp">
            <input type="text" name="subject" class="form-control" placeholder="Subject.." required="">
          </div>
          
          
          <div class="col-12 py-2 wow fadeInUp">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." required=""></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: blue; color: white">Send Message</button>
      </form>
    </div>
  </div> 

 

 

<?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('user.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/user/contact.blade.php ENDPATH**/ ?>