<?php $__env->startSection('content'); ?>
    
</script>

        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Users</span>
                    </div>
                
                </div>
                <div class="portlet-body">
                   <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">

<a class="btn btn-success" href="<?php echo e(url('register')); ?>"><i class="fa fa-plus"></i>Create User</a>
                                </div>
                            </div>
      
                        </div>

                        <?php if(Session()->has('success')): ?>
                <div class="alert alert-success"> 
                <?php echo Session::get('success'); ?>

                </div>
                        <?php endif; ?>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                    
                                <th> Name </th>
                                <th> Role </th>
                                <th> Email </th>
                               
                               <th> Assign Role </th>
                               <th> Delete </th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

             <tr class="odd gradeX">
               
                        <td><?php echo e($userd->name); ?></td>
                        <td>
                      
                        <?php $__currentLoopData = $userd->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($role->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </td>
                        <td><?php echo e($userd->email); ?></td>
                                     
                        <td>
                  <div class="btn-group">
           <button class="btn btn-xs btn-primary" type="button" data-toggle="modal" data-target="#myModal-<?php echo e($userd->id); ?>"> Assign.. <i class="fa fa-angle-down"></i> </button>                                   
        <div class="modal fade" id="myModal-<?php echo e($userd->id); ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                 <span aria-hidden="true"></span>   </button>
            <h4 class="modal-title" id="myModalLabel" style="margin-left: 165px;"><?php echo e($userd->name); ?>Assign Role To User</h4>
                        </div>
                        <div class="modal-body">
    <form action="<?php echo e(route('user.update',$userd->id)); ?>" method="post" role="form" id="role-form-<?php echo e($userd->id); ?>">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>


                        <div class="form-group" style="margin-left: 185px;">
                          note:
                           <select name="role[]" multiple="multiple">
                           <?php $__currentLoopData = $allRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </form>
                      </div>
                        <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" onclick="$('#role-form-<?php echo e($userd->id); ?>').submit()">Save changes</button>

                        </div>
                    </div>
                 </div>
              </div>
            </div>
        </td>
        <td>
     <form class="delete" action="<?php echo e(route('user.destroy', $userd->id)); ?>" method="POST">
                                  <?php echo e(csrf_field()); ?>

                                  <?php echo e(method_field('DELETE')); ?>

              <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                       
                              </form>
        </td>
    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                <td> No Roles</td>
                </tr>
          <?php endif; ?>
                   </tbody>
                        </table>

          </div>

          </div>
      </div>
      <!-- END EXAMPLE TABLE PORTLET-->
  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>