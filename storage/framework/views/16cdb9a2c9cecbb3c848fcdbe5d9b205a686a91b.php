<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <base href="/public">
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div align="center" style="padding-top: 20px">
            <?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>
          <?php endif; ?>

          <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1><?php echo e($data->title); ?></h1>
            <p class="text-grey mb-4"><?php echo e($data->content); ?></p>
            <p>Author: <?php echo e($data->author); ?></p>
            <p>Posted at: <?php echo e($data->created_at); ?></p>
            <a href="<?php echo e(url('publish', $data->id)); ?>" onclick="return confirm('Are you sure you want to publish this post?')" class="btn btn-primary">Post</a>
            
             <a class="btn btn-danger" href="<?php echo e(url('decline', $data->id)); ?>" onclick="return confirm('Are you sure you want to decline this post?')">Decline</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">

                <img  src="postimage/<?php echo e($data->image); ?>" alt="">
              
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
          
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html>


























  


<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/individualpost.blade.php ENDPATH**/ ?>