
<?php $__env->startSection('content'); ?>
 
 
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($batches->name); ?></h5>
        <p class="card-text">course_id : <?php echo e($batches->course->name); ?></p>
        <p class="card-text">start_date : <?php echo e($batches->start_date); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/batches/show.blade.php ENDPATH**/ ?>