
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('courses/' .$courses->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($courses->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($courses->name); ?>" class="form-control"></br>
        <label>Course-id</label></br>
        <input type="text" name="address" id="syllabus" value="<?php echo e($courses->syllabus); ?>" class="form-control"></br>
        <label>Start-date</label></br>
        <input type="text" name="mobile" id="duration" value="<?php echo e($courses->duration); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/courses/edit.blade.php ENDPATH**/ ?>