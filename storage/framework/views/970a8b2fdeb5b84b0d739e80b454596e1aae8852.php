<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('doctor.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('doctor.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

          <div align="center" style="padding-top: 20px">
            <?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>
          <?php endif; ?>

          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PATIENTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Name</th>
                          <th >Age</th>
                          <th >Gender</th>
                          <th >County</th>
                          <th >Image</th>

                          


                          
                          
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center" >
                          <td><?php echo e($patient->id); ?></td>
                          <td><?php echo e($patient->name); ?></td>
                          <td><?php echo e($patient->age); ?></td>
                          <td><?php echo e($patient->gender); ?></td>
                          <td><?php echo e($patient->county); ?></td>
                          <td><img height="100" width="100" src="patientimage/<?php echo e($patient->image); ?>"></td>
                          <td><a class="btn btn-primary" href="<?php echo e(url('visits', $patient->id)); ?>">VIEW MORE</a>
                         
                          
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html>



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/doctor/mypatients.blade.php ENDPATH**/ ?>