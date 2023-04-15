<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo $__env->make('user.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>CARE HEAVEN - Your health is our priority</title>


	<style>
		.inscontainer {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			align-items: center;
		}
		
		.image {
			margin: 50px;
		}
	</style>

  
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
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo e(url('homepage')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('diagnose')); ?>">Self Diagnose</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(url('about')); ?>">About Us</a>
            </li>
            <li class="nav-item active">
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

  

 <body>
	<div class="inscontainer">
		<div class="image wow fadeInDown">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInDown">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInDown">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInDown">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInLeft">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInLeft">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInRight">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInRight">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
		<div class="image wow fadeInUp">
			<img src="../assets/img/insurance1.jpg" alt="Image 1">
		</div>
    <div class="image wow fadeInUp">
      <img src="../assets/img/insurance1.jpg" alt="Image 1">
    </div>
    <div class="image wow fadeInUp">
      <img src="../assets/img/insurance1.jpg" alt="Image 1">
    </div>
    <div class="image wow fadeInUp">
      <img src="../assets/img/insurance1.jpg" alt="Image 1">
    </div>
		
	</div>

  <!-- .page-section -->

  <!-- .page-section -->

  

  
 <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php echo $__env->make('user.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/user/insurance.blade.php ENDPATH**/ ?>