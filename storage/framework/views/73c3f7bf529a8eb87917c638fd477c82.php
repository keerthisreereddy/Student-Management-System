
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Enrollments Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/enrollments/create')); ?>" class="btn btn-success btn-sm" title="Add New enrollment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enroll No</th>
                                        <th>Batch Id</th>
                                        <th>Student Id</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->enroll_no); ?></td>
                                        <td><?php echo e($item->batch->name); ?></td>
                                        <td><?php echo e($item->student->name); ?></td>
                                        <td><?php echo e($item->join_date); ?></td>
                                        <td><?php echo e($item->fee); ?></td>
 
                                        <td>
                                            <a href="<?php echo e(url('/enrollments/' . $item->id)); ?>" title="View batche"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/enrollments/' . $item->id . '/edit')); ?>" title="Edit batche"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="<?php echo e(url('/enrollments' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanagement-app\resources\views/enrollments/index.blade.php ENDPATH**/ ?>