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
            <a class="btn btn-primary" href="<?php echo e(url('add_post')); ?>">Add Post</a>
            
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
                    <h4 class="card-title">POSTS</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th >Id</th>
                          <th >Category</th>
                          <th >Brief description</th>
                          <th >Image</th>
                          <th >Author</th>
                          <th>Status</th>
                          <th align="center">Action</th>
                          
                          
                          


                          
                          
                        </tr>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($posts->id); ?></td>
                          <td><?php echo e($posts->Category); ?></td>
                          <td><?php echo e($posts->briefdescription); ?></td>
                          <td><img height="100" width="100" src="postimage/<?php echo e($posts->image); ?>"></td>
                          <td><?php echo e($posts->author); ?></td>
                          <td><?php echo e($posts->status); ?></td>
                          <td><a class="btn btn-primary" href="<?php echo e(url('individualpost', $posts->id)); ?>">View</a>
                          <a class="btn btn-success" href="<?php echo e(url('publish', $posts->id)); ?>" onclick="return confirm('Are you sure you want to publish this post?')">Publish</a>
                          <a class="btn btn-danger" href="<?php echo e(url('decline', $posts->id)); ?>" onclick="return confirm('Are you sure you want to decline this post?')">Decline</a>
                          <a class="btn btn-danger" href="<?php echo e(url('deletepost', $posts->id)); ?>" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a></td>
                          
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



<?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/admin/posts_news_and_articles.blade.php ENDPATH**/ ?>