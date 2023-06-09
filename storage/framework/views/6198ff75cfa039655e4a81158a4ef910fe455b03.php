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
    <base href="/public">
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </head>
  <body class="admin-bg">
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      	<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
		<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
        	 

        	<div style="padding-top: 100px">
        		<?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>



          <?php endif; ?>

         	 <form action="<?php echo e(url('editdoctor', $data->id)); ?>" method="POST" enctype="multipart/form-data">

              <?php echo csrf_field(); ?>

              <div style="padding: 15px">
                <label>Doctor Name</label>
                <input type="text" style="color: black" name="name" value="<?php echo e($data->name); ?>">
              </div>

              <div style="padding: 15px">
                <label>Phone Number</label>
                <input type="number" style="color: black" name="number" value="<?php echo e($data->phone); ?>">
              </div>

              <div style="padding: 15px">
                <label>Speciality</label>
                <select name="speciality" style="color: black;">
                  <option><?php echo e($data->speciality); ?></option>
                  <option value="cardiologist">Cardiologist</option>
                  <option value="general health">General health</option>
                  <option value="Serologist">Serologist</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Optician">Optician</option>
                  
                </select>
              </div>

              <div style="padding: 15px">
                <label>Room</label>
                <input type="text" style="color: black" name="room" value="<?php echo e($data->room); ?>">
              </div>

              <div style="padding: 15px">
                <label>Old Image</label>
                <img height="150" width="150" src="doctorimage/<?php echo e($data->image); ?>">
              </div>

              <div style="padding: 15px">
              	<label>Change Image</label>
              	<input type="file" name="file">
              </div>

              <div style="padding: 15px">
                <input type="submit" class="btn btn-primary" value="Update">
              </div>




            </form>
            </div>
         	
         </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/update_doctor.blade.php ENDPATH**/ ?>