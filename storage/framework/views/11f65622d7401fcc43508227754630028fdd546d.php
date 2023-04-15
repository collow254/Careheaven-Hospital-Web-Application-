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

        	<div align="center" style="padding-top: 100px">
        		<?php if(session()->has('message')): ?>

          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert"></button>

            <?php echo e(session()->get('message')); ?>

            
          </div>



          <?php endif; ?>
        		<table>
        			<tr>
        				<th style="padding: 10px">Id</th>
        				<th style="padding: 10px">Name</th>
        				<th style="padding: 10px">Mobile</th>
        				<th style="padding: 10px">Speciality</th>
        				<th style="padding: 10px">Room Number</th>
        				<th style="padding: 10px">Image</th>
        				<th style="padding: 10px">Delete</th>
        				<th style="padding: 10px">Update</th>


        				
        				
        			</tr>

        			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        			<tr align="center" >
        				<td><?php echo e($doctor->id); ?></td>
        				<td><?php echo e($doctor->name); ?></td>
        				<td><?php echo e($doctor->phone); ?></td>
        				<td><?php echo e($doctor->speciality); ?></td>
        				<td><?php echo e($doctor->room); ?></td>
        				<td><img height="100" width="100" src="doctorimage/<?php echo e($doctor->image); ?>"></td>
        				<td><a onclick="return confirm('Are you sure you want to delete <?php echo e($doctor->name); ?>\'s data?')" class="btn btn-danger" href="<?php echo e(url('deletedoctor',$doctor->id)); ?>">Delete</a></td>
        				<td><a class="btn btn-primary" href="<?php echo e(url('updatedoctor', $doctor->id)); ?>">Update</a></td>
        				
        			</tr>
        			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        		</table>
        	</div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/showdoctor.blade.php ENDPATH**/ ?>