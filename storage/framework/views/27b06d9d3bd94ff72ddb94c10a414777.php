
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('teachers/' .$teachers->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($teachers->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($teachers->name); ?>" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="<?php echo e($teachers->address); ?>" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="<?php echo e($teachers->mobile); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/teachers/edit.blade.php ENDPATH**/ ?>