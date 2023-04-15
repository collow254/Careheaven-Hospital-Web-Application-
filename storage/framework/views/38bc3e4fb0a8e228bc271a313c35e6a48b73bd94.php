

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </head>
  <body>
    <div class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      	<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
		<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >

        	<div align="center" style="padding-top:100px;">
                <h1>ALL APPOINTMENTS</h1>

                <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">APPOINTMENTS</h4>
                    <div class="table-responsive">
                      <table class="table-bordered">
                        <thead>
                          <tr>
                            
                            <th> Customer Name </th>
                            <th> Email </th>
                            <th> Phone Number </th>
                            <th> Doctor Name </th>
                            <th> Date </th>
                            <th> Message </th>
                            <th> Status </th>
                            <th> Approve </th>
                            <th> Cancel </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          
                          
                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            
                            
                        <td><?php echo e($appoint->name); ?></td>
                        <td><?php echo e($appoint->email); ?></td>
                        <td><?php echo e($appoint->phone); ?></td>
                        <td><?php echo e($appoint->doctor); ?></td>
                        <td><?php echo e($appoint->date); ?></td>
                        <td><?php echo e($appoint->message); ?></td>
                        <td><?php echo e($appoint->status); ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(url('approved', $appoint->id)); ?>">Approve</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="<?php echo e(url('cancelled', $appoint->id)); ?>">Cancel</a>
                        </td>
                              
                           
                          </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
</div>
    </div>
</div>
</div>
  </body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/showappointment.blade.php ENDPATH**/ ?>