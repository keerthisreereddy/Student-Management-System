
<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Payment Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('payments')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Enrollment No</label></br>
        <!-- <input type="text" name="enrollment_no" id="name" class="form-control"></br> -->

        <select name="enroll_no" id="enroll_no" class="form control">
          <?php $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $enrollno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($id); ?>"><?php echo e($enrollno); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select></br>

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

        
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/payments/create.blade.php ENDPATH**/ ?>