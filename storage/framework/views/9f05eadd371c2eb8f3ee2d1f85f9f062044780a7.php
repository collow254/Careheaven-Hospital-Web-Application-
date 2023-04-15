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
                      <table class="table" style="background-color: white; border-radius: 50px">
                          <h1>MY APPOINTMENTS</h1>
                            <thead>
                              <tr>
                                <th >Appointment Id</th>
                              <th >Patient Name</th>
                              <th >Date</th>
                              <th >Message</th>
                              <th >Status</th>
                              

                            </tr>
                        </thead>
                         <tbody>
                                                  
                                                  
                        <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoints): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td ><?php echo e($appoints->id); ?></td>
                              <td ><?php echo e($appoints->name); ?></td>
                              <td><?php echo e($appoints->date); ?></td>
                              <td><?php echo e($appoints->message); ?></td>
                              <td><?php echo e($appoints->status); ?></td>
                              <td><a class="btn btn-primary" href="<?php echo e(url('approved', $appoints->id)); ?>">Approve</a></td>
                              <td ><a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')" href="<?php echo e(url('cancel_appoint', $appoints->id)); ?>"> Cancel</a>
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
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html>










<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/doctor/doctorappointments.blade.php ENDPATH**/ ?>