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

                                                <tr align="center" >
                          <td><?php echo e($data->id); ?></td>
                          <td><?php echo e($data->name); ?></td>
                          <td><?php echo e($data->age); ?></td>
                          <td><?php echo e($data->gender); ?></td>
                          <td><?php echo e($data->county); ?></td>
                          
                         
                          
                        </tr>
                        
                      </table>
            </div>
                  </div>
                </div>
              </div>
            </div>











          <div class="page-section pb-0">
      <div class="container">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            
            <a class="btn btn-primary" href="<?php echo e(url('patienthistory', $data->id)); ?>">View History</a>
            <a class="btn btn-success" href="<?php echo e(url('decline', $data->id)); ?>" >Enter Symptoms</a>
            <a class="btn btn-primary" href="<?php echo e(url('publish', $data->id)); ?>">Add tests</a><br><br>
            



						








          
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">

                <img  src="patientimage/<?php echo e($data->image); ?>" alt="">
              
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


























  


<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/doctor/individualpatient.blade.php ENDPATH**/ ?>