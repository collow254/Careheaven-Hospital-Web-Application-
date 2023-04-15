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
        <?php echo $__env->make('labtech.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('labtech.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <h4 class="card-title">TESTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Test Id</th>
                          <th>Doctor Id</th>
                          <th >Patient Id</th>
                          <th >Test</th>
                          <th >Date</th>
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center" >
                          <td><?php echo e($tests->id); ?></td>
                          <td><?php echo e($tests->doctorId); ?></td>
                          <td><?php echo e($tests->patientId); ?></td>
                          <td><?php echo e($tests->test); ?></td>
                          <td><?php echo e($tests->created_at); ?></td>
                          <td><a class="btn btn-primary" href="<?php echo e(url('addresults', $tests->id)); ?>">Add Results</a></td>  
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



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/labtech/labtechtests.blade.php ENDPATH**/ ?>