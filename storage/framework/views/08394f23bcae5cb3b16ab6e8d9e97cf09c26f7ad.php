<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('user.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <a class="navbar-brand" href="<?php echo e(url('homepage')); ?>"><span class="text-primary">CARE-HEAVEN</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
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


            <li class="nav-item active">
              <a class="nav-link"  href="<?php echo e(url('myhistory')); ?>">Medical History</a>
            </li>



            <?php else: ?>


            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Register</a>
            </li>

            <?php endif; ?>

            <?php endif; ?>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

<div align="Center" style="padding: 70px;">



<table class="table" style="background-color: white; border-radius: 10px">
  <h1>MY VISITS</h1>
    <thead>
      <tr>
      	<th>Id</th>
      <th >Doctor Id</th>
      <th >Date</th>
      
      

    </tr>
</thead>
 <tbody>
                          
                          
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visits): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td ><?php echo e($visits->id); ?></td>
      <td ><?php echo e($visits->doctorId); ?></td>
      <td><?php echo e($visits->created_at); ?></td>
      
      <td ><a class="btn btn-primary" href="<?php echo e(url('medicalhistory', $visits->id)); ?>"> View History</a>
      <a class="btn btn-success" href="<?php echo e(url('patientbill', $visits->id)); ?>"> View Bill</a></td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>




	
</div>
   
<?php echo $__env->make('user.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
</body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/user/myhistory.blade.php ENDPATH**/ ?>