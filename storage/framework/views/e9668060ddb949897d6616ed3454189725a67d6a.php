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
        <?php echo $__env->make('cashier.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('cashier.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                          <th >Bill Id</th>
                          <th>Patient Id</th>
                          <th >Visit Id</th>
                          <th >Consultation Fee</th>
                          <th>Lab Fee</th>
                          <th >Medicine Fee</th>
                          <th >Payment Status</th>
                          <th >Payment mode</th>
                          <th >Last Updated at</th>
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bills): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center" >
                          <td><?php echo e($bills->id); ?></td>
                          <td><?php echo e($bills->patientId); ?></td>
                          <td><?php echo e($bills->visitId); ?></td>
                          <td><?php echo e($bills->consultationfee); ?></td>
                          <td><?php echo e($bills->labfee); ?></td>
                          <td><?php echo e($bills->medicinefee); ?></td>
                          <td><?php echo e($bills->paymentstatus); ?></td>
                          <td><?php echo e($bills->paymentmode); ?></td>
                          <td><?php echo e($bills->updated_at); ?></td>

                          <td><a class="btn btn-primary" href="<?php echo e(url('individualpatient', $bills->id)); ?>">View More</a></td>  
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



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/cashier/cashierreceipts.blade.php ENDPATH**/ ?>