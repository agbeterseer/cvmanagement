<?php $__env->startSection('content'); ?>
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i
                        <span class="caption-subject bold uppercase"> CVs'</span>
                    </div>
           
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                         <table width="100%">
                            <tr>
                                <td>
   <a href="<?php echo e(route('document.index')); ?>" class="btn btn-success">
                          <i class="fa fa-search"></i>
                          Filter by City
                        </a>
                       </td>
                        
                    <td> 
                          <a href="" class="btn btn-success">
                          <i class="fa fa-search"></i>
                          Filter by Region
                        </a>
 
                          </td>
                               <td>
                                 <a href="<?php echo e(route('document.index')); ?>" class="btn btn-success">
                                 <i class="fa fa-search"></i>
                          Filter by Profession
                                   </a>
 

                                </td>
                            </tr>
                        </table>
                       
                            <div class="col-md-6">
                                <div class="btn-group">
 
 
                                </div>
                            </div>
                        </div>
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
                                <th> Candidate's name </th>
                                <th> Profession </th>
                                <th> Years Of Experience </th>
                                <th> Location </th>
                                <th> File </th>
                               <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
           <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
              <?php $__currentLoopData = $profession->documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr class="odd gradeX">
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                            <td><?php echo e($document->candidates_name); ?></td>
                   
                            <td>
                        <?php $__currentLoopData = $document->professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proferssion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                              <?php echo e($proferssion->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </td>
                  
                            <td><?php echo e($document->years_of_experience); ?></td>
                            <td>
                            <?php echo e($document->city->name); ?>

                            </td>
                             <td>

                                <form action="<?php echo e(route('document.getFile')); ?>" method="POST">
        <input type="hidden" name="cv_file" value="<?php echo e($document->cv_file); ?>">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('POST')); ?>


               <button class="btn btn-xs btn-primary  dropdown-toggle"  type="submit"> CV<i class="fa fa-download"></i></button>
             </form> 
                             </td>
                              <td>
                            <div class="btn-group">
                     <button class="btn btn-xs green dropdown-toggle"  type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                  <i class="fa fa-angle-down"></i>
                                </button>
                   <ul class="dropdown-menu" >
           
                      <li>
              <a href="<?php echo e(route('document.edit', $document->id)); ?>">
                            <i class="icon-docs"></i> Edit CV </a>
                         
                        </li>
                        <li class="divider"> </li>
                        <form action="" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                 
                        </form>            
                              </ul>
                    
                          </div>
                      </td>
                  </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
                   </tbody>
                      </table>
                 </div>
              </div>
              <!-- END EXAMPLE TABLE PORTLET-->
          </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>