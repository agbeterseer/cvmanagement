<?php $__env->startSection('content'); ?>
 
    <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Roles</span>
                    </div>
                
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
 
                                </div>
                            </div>
                       
                        </div>
                    </div>
             <form class="form-horizontal" action="<?php echo e(route('role.store')); ?>" method="post" role="form">
                        <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter name of Role"   required>

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('display_name') ? ' has-error' : ''); ?>">
                <label for="display_name" class="col-md-4 control-label">Displyname</label>
                <div class="col-md-6">
                    <input id="" type="text" class="form-control" name="display_name" placeholder="Enter Display name"  required>

                    <?php if($errors->has('display_name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('display_name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                <label for="description" class="col-md-4 control-label">Descritption</label>

                <div class="col-md-6">
                    <input id="" type="text" class="form-control" placeholder="Enter Description" name="description" required>

                    <?php if($errors->has('description')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('description')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
              <div class="col-md-6">
				 <h3>Permissions</h3>
				 <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><br>
					<input type="checkbox"  name="permission[]" value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
	                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Roles
                                </button>
                            </div>
                        </div>
                    </form>
                                    
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>