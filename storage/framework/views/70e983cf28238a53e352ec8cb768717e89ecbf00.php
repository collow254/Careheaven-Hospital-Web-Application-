<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
    
      
      <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('receptionist.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('receptionist.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">



          <div class="container" align="center" style="padding-top: 10px">

            <?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>
            <?php endif; ?>

            <form class="main-form" action="<?php echo e(url('uploadvisit')); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <div class="row mt-5 ">
          
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="patient" id="departement" class="custom-select">

              <option>---select patient---</option>

              <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patients): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <option value="<?php echo e($patients->id); ?>"><?php echo e($patients->id); ?>---<?php echo e($patients->name); ?>       </option>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </select>
          </div>

          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

              <option>---select doctor---</option>

              <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <option value="<?php echo e($doctors->id); ?>"><?php echo e($doctors->name); ?>---<?php echo e($doctors->speciality); ?>---<?php echo e($doctors->branch); ?>      </option>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </select>
          </div>
          
                  </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn " style="background-color: blue">Add Visit</button>
      </form>




        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->

  </div>
  </body>
</html>



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/receptionist/addvisit.blade.php ENDPATH**/ ?>