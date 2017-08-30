<?php $__env->startSection('content'); ?>

<h3>Upload Cv</h3>
<?php if(count($errors)): ?>
    <ul class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
  <div class="col-md-12">
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>"> 
    <?php echo session('message.content'); ?>

    </div>
<?php endif; ?>
  
           <div class="m-heading-1 border-green m-bordered">
             <h3>Dropzone</h3>
     <form action="<?php echo e(url('/document/upload')); ?>" method="POST" enctype="multipart/form-data" >
        <?php echo e(csrf_field()); ?>

                  
                  <input type="file" name="upload-file" class="form-control"> <br/>
                  <button class="btn btn-primary">Upload</button>
                </form>
                  </div>
                    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>