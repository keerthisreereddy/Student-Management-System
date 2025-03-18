
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('enrollments')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>Batch Id</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control"></br>
        <label>Student Id</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/enrollments/create.blade.php ENDPATH**/ ?>