<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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

            <a class="btn btn-primary" href="<?php echo e(url('add_hospital')); ?>">Add Hospital</a>
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
                    <h4 class="card-title">Hospitals</h4>
                    <div class="table-responsive">
                      <table class="table-bordered">
                        <tr>
                          <th >Id</th>
                          <th >Name</th>
                           <th>Location</th>
                          <th >Landmark</th>
                         
                          <th >Doctor in Charge</th>
                          <th >Mobile</th>
                          <th >Email</th>
                          <th >Operating hours</th>
                          <th >Specialist Services</th>
                          <th >Delete</th>
                          <th >Update</th>


                          
                          
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center" >
                          <td><?php echo e($hospital->id); ?></td>
                          <td><?php echo e($hospital->name); ?></td>
                          <td><?php echo e($hospital->location); ?></td>
                          <td><?php echo e($hospital->landmark); ?></td>
                          <td><?php echo e($hospital->doctor_in_charge); ?></td>
                          <td><?php echo e($hospital->phone); ?></td>
                          <td><?php echo e($hospital->email); ?></td>
                          

                          <td>
                            <ol>
                              <li>Weekdays: <?php echo e($hospital->operating_hours_weekdays); ?></li>
                              <li>Weekends: <?php echo e($hospital->operating_hours_weekend); ?></li>
                            </ol>
                          </td>
                          <td><?php echo e($hospital->specialist_services); ?></td>
                          <td><a onclick="return confirm('Are you sure you want to delete <?php echo e($hospital->name); ?>\'s data?')" class="btn btn-danger" href="<?php echo e(url('deletehospital',$hospital->id)); ?>">Delete</a></td>
                          <td><a class="btn btn-primary" href="<?php echo e(url('updatehospital', $hospital->id)); ?>">Update</a></td>
                          
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



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/hospitals.blade.php ENDPATH**/ ?>