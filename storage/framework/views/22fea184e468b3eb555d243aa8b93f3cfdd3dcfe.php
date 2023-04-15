 <div class="page-section bg-light">
    <div class="container">
      <div align="center">
      <h1 class="text-center wow fadeInUp">We Are Hiring</h1>
     
      <div class="row mt-5">
        <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $careers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href=""><?php echo e($careers->title); ?></a>
              </div>
              <a href="" class="post-thumb">
                <img src="careerimage/<?php echo e($careers->image); ?>" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href=""><?php echo e($careers->title); ?></a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                  <span>Location: <?php echo e($careers->location); ?><br>
                  <span>Qualifications: <?php echo e($careers->qualifications); ?><br></span>
                  Due Date: <?php echo e($careers->due_date); ?>

                  </div>
                  <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="<?php echo e(url('career')); ?>" class="btn btn-primary">Apply</a>
        </div>
              </div>
            </div>
          </div>
        </div>
        
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="<?php echo e(url('career')); ?>" class="btn btn-primary">More Careers</a>
        </div>

        

      </div>
     
    </div>
  </div> <!-- .page-section -->
        
         
        

       

      </div>
     </div>
    </div>
  </div> <!-- .page-section -->
  </div>
<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/elp/career.blade.php ENDPATH**/ ?>