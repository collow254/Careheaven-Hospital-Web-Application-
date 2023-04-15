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
  <body>
  	<div class="admin-bg">

    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      	<?php echo $__env->make('pharmacist.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial:partials/_navbar.html -->
		<?php echo $__env->make('pharmacist.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
       		<div class="main-panel" >
          
            
            
            
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="<?php echo e(url('mypatients')); ?>">
                  <div class="card-body">
                    <h5>Patients</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
                  </a>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="<?php echo e(url('tests')); ?>">
                  <div class="card-body">
                    <h5>Tests</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </a>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="<?php echo e(url('results')); ?>">
                  <div class="card-body">
                    <h5>Results</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </a>
                </div>
              </div>
            </div>






            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                	<a href="<?php echo e(url('patients')); ?>">
                  <div class="card-body">
                    <h5>Referrals</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">47</h2>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
              </a>
                </div>
              </div>
              
              





            





            
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
        	


</div>
        	 

        	
         	 
         
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->

  </body>
</html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/pharmacist/pharmacisthome.blade.php ENDPATH**/ ?>