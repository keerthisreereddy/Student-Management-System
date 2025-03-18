
<?php $__env->startSection('content'); ?>
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($students->name); ?></h5>
        <p class="card-text">Address : <?php echo e($students->address); ?></p>
        <p class="card-text">Mobile : <?php echo e($students->mobile); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/students/show.blade.php ENDPATH**/ ?>