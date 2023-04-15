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

            <a class="btn btn-primary" href="<?php echo e(url('add_career')); ?>">Add Career</a>
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
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Title</th>
                          <th>Location</th>
                          <th >Qualifications</th>
                          <th >Email</th>
                          <th >Due Date</th>
                          <th >Status</th>
                          


                          
                          
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center" >
                          <td><?php echo e($career->id); ?></td>
                          <td><?php echo e($career->title); ?></td>
                          <td><?php echo e($career->location); ?></td>
                          <td><?php echo e($career->qualifications); ?></td>
                          <td><?php echo e($career->email); ?></td>
                          <td><?php echo e($career->due_date); ?></td>
                          <td><?php echo e($career->status); ?></td>
                          
                          
                          <td>	
                          	<a class="btn btn-primary" href="<?php echo e(url('update_career', $career->id)); ?>">Update</a>
                          	<a class="btn btn-success" href="<?php echo e(url('opencareer', $career->id)); ?>">Open</a>
                          	<a onclick="return confirm('Are you sure you want to close application?')" class="btn btn-danger" href="<?php echo e(url('closecareer',$career->id)); ?>">Close</a>
                          	<a onclick="return confirm('Are you sure you want to delete <?php echo e($career->name); ?>\'s data?')" class="btn btn-danger" href="<?php echo e(url('deletecareer',$career->id)); ?>">Delete</a>
                          </td>
                          
                          
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



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/careers.blade.php ENDPATH**/ ?>