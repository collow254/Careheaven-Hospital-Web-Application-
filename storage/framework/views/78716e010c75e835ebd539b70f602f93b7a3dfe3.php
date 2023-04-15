

 <div class="page-section ">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
     
      <div class="row mt-5">
         <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href=""><?php echo e($posts->Category); ?></a>
              </div>
              <a href="<?php echo e(url('postdetails', $posts->id)); ?>" class="post-thumb">
                <img src="postimage/<?php echo e($posts->image); ?>" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="<?php echo e(url('postdetails', $posts->id)); ?>"><?php echo e($posts->title); ?></a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <span><?php echo e($posts->author); ?></span>
                </div>
                <span class="mai-time"></span> <?php echo e($posts->created_at); ?>

              </div>
            </div>
          </div>
        </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="<?php echo e(url('posts')); ?>" class="btn btn-primary">Read More</a>
        

        
          <a href="<?php echo e(url('addpost')); ?>" class="btn btn-primary">Add New Post</a>
        </div>

      </div>
     
    </div>
  </div> <!-- .page-section --><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/elp/latest.blade.php ENDPATH**/ ?>