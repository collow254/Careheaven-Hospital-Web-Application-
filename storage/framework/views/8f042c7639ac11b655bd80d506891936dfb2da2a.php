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
                    	<?php echo $__env->make('doctor.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <!-- partial:partials/_navbar.html -->
              		<?php echo $__env->make('doctor.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <!-- partial -->
                      <div class="container-fluid page-body-wrapper" >

                     		<div class="main-panel" >            
                         <div class="row">
                            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                              <div class="card" style="background-color: skyblue">
                                <div class="card-body">
                                  <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Tests</h4>
                                  </div>
                                  <div class="preview-list">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="preview-item border-bottom">
                                        <h6 class="preview-subject"><?php echo e($tests->id); ?>...........</h6>
                                        <h6 class="preview-subject"><?php echo e($tests->test); ?></h6>
                                      <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"></h6>
                                            
                                          </div>
                                          <p class="text-muted"></p>
                                        </div>
                                      </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                                  </div>
                                </div>
                              </div>
                            </div>

                             <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                              <div class="card" style="background-color: skyblue">
                                <div class="card-body">
                                  <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Results</h4>
                                  </div>
                                  <div class="preview-list">
                                    <?php $__currentLoopData = $resultdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="preview-item border-bottom">
                                        <h6 class="preview-subject"><?php echo e($results->id); ?>...........</h6>
                                        <h6 class="preview-subject"><?php echo e($results->result); ?></h6>
                                      <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"></h6>
                                            
                                          </div>
                                          <p class="text-muted"></p>
                                        </div>
                                      </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                   
                                    
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                              <div class="card" style="background-color: skyblue">
                                <div class="card-body">
                                  <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title">Medicine</h4>
                                  </div>
                                  <div class="preview-list">
                                    <?php $__currentLoopData = $medicine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicines): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="preview-item border-bottom">
                                        <h6 class="preview-subject"><?php echo e($medicines->id); ?>...........</h6>
                                        <h6 class="preview-subject"><?php echo e($medicines->medicine); ?></h6>
                                      <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"></h6>
                                            
                                          </div>
                                          <p class="text-muted"></p>
                                        </div>
                                      </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                   
                                    
                                  </div>
                                </div>
                              </div>
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
              </html><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/doctor/patienthistory.blade.php ENDPATH**/ ?>