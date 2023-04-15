

<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      label{
        display: inline-block;
        width: 200px;

      }

    </style>
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
         <div class="container-fluid page-body-wrapper">



          <div class="container" align="center" style="padding-top: 5px">


            <?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>



          <?php endif; ?>

            <form action="<?php echo e(url('uploadhospital')); ?>" method="POST" enctype="multipart/form-data">

              <?php echo csrf_field(); ?>

    

              <div style="padding: 15px">
                <label>Name</label>
                <input type="text" style="color: black" name="name" placeholder="Name" required="">
              </div>

              <div style="padding: 15px">
                <label>Landmark</label>
                <input type="text" style="color: black" name="landmark" placeholder="Landmark" required="">
              </div>

              <div style="padding: 15px">
                <label>Doctor in Charge</label>
                <input type="text" style="color: black" name="doctor_in_charge" placeholder="Doctor in Charge" required="">
              </div>

              <div style="padding: 15px">
                <label>Location</label>
                <input type="text" style="color: black" name="location" placeholder="Location" required="">
              </div>

              <div style="padding: 15px">
                <label>Mobile</label>
                <input type="number" style="color: black" name="number" placeholder="Mobile Number" required="">
              </div>

              <div style="padding: 15px">
                <label>Email</label>
                <input type="email" style="color: black" name="email" placeholder="Email Address" required="">
              </div>


              <div style="padding: 15px">
                <label>Operating Hours Weekdays</label>
                <input type="text" style="color: black" name="operating_hours_weekdays" placeholder="Operating Hours Weekdays" required="">
              </div>

              <div style="padding: 15px">
                <label>Operating Hours Weekends</label>
                <input type="text" style="color: black" name="operating_hours_weekend" placeholder="Operating Hours Weekends" required="">
              </div>

              <div style="padding: 15px">
                <label>Specialist Services</label>
                <input type="text" style="color: black" name="specialist_services" placeholder="Specialist Services" required="">
              </div>

              <div style="padding: 15px">
                <input type="submit" class="btn btn-success" value="submit">
              </div>




            </form>

          </div>
         </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </div>
  </body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/add_hospital.blade.php ENDPATH**/ ?>