<?php $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($conversation->from_user_id == Auth::user()->id): ?>
        <a href="<?php echo e(route('messages.show', ['userId' => $conversation->to_user_id])); ?>"><?php echo e($conversation->toUser->name); ?></a>
    <?php else: ?>
        <a href="<?php echo e(route('messages.show', ['userId' => $conversation->from_user_id])); ?>"><?php echo e($conversation->fromUser->name); ?></a>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\COLLOW\hospital\hospital\resources\views/messages/index.blade.php ENDPATH**/ ?>