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

<a class="btn btn-success" href="<?php echo e(route('role.create')); ?>"><i class="fa fa-plus"></i>Create Role</a>
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
                                <th>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th>
                                <th> Name </th>
                                <th> Display Name </th>
                                <th> Description </th>
                               
                               <th> Actions </th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                              <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                </td>
                                <td><?php echo e($role->name); ?></td>
                                 <td>
                        
                                 
                                 <?php echo e($role->display_name); ?>


                                 </td>
                                  <td><?php echo e($role->description); ?></td>
                                                 
                                                    <td>
                                                        <div class="btn-group">
                           <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                     
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo e(route('role.edit', $role->id)); ?>">
                            <i class="icon-docs"></i> Edit </a>
                         
                        </li>
                        <li class="divider"> </li>
                        <form action="<?php echo e(route('role.destroy', $role->id)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                 
                                                    </form>
                                                  
                                                       
                                                 
                                                              
                                                            </ul>
                                                  


                                                        </div>
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
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
       


<?php $__env->stopSection(); ?>

 
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>