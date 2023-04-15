

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



          <div class="container" align="center" style="padding-top: 100px">

            <?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>



          <?php endif; ?>

            <form action="<?php echo e(url('upload_career')); ?>" method="POST" enctype="multipart/form-data" class="form-bg">

              <?php echo csrf_field(); ?>

              <div style="padding: 15px">
                <label>Title</label>
                <input type="text" style="color: black" name="title" placeholder="Title" required="">
              </div>

              <div style="padding: 15px">
                <label>Location</label>
                <select name="location" style="color: black; width: 220px" required="">
                  <option>---SELECT---</option>
                  <option value="cardiologist">Cardiologist</option>
                  <option value="general health">General health</option>
                  <option value="Serologist">Serologist</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Optician">Optician</option>
                  
                </select>
              </div>

              <div style="padding: 15px">
                <label>Qualifications</label>
                <input type="text" style="color: black" name="qualifications" placeholder="Qualifications" required="">
              </div>

              <div style="padding: 15px">
                <label>Email</label>
                <input type="email" style="color: black" name="email" placeholder="Email" required="">
              </div>

              <div style="padding: 15px">
                <label>Due Date</label>
                <input type="date" style="color: black" name="due_date" placeholder="Due Date" required="">
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
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/add_career.blade.php ENDPATH**/ ?>