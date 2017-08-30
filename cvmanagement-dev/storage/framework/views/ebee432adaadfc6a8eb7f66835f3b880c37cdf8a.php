<?php $__env->startSection('content'); ?>
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> CV Category Search</span>
                    </div>
                  </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row" >
 
                        <table width="100%">
                            <tr>
                                <td>
               
 <form  action="<?php echo e(route('document.view_filter_by_city')); ?>"   method="post" role="form">
   <?php echo e(csrf_field()); ?>

     <a href="" class="btn btn-success form-control" style="width: 250px; margin-top: -90px;">
                          <i class="fa fa-search "></i>
                          Filter by City
                        </a>
                    <select name="location" class="form-control" style="width: 250px;margin-top: -30px; " onchange="this.form.submit();" >
                       <option value="">...Select City...</option>
                           <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
</form>
                       </td>
                        
                        <td> 
  
                          </td>
                             <td> 
 <!-- <form class="form-horizontal" action="<?php echo e(route('document.search_category')); ?>" method="post" role="form">
  
   <?php echo e(csrf_field()); ?>

            
    <input type="text" name="s" placeholder="Enter Years Of Experience" class="form-control" value="<?php echo e(isset($s) ? $s : ''); ?>" >
      <button type="submit" class="btn btn-success  ">
                          <i class="fa fa-search"></i>
                          Filter by Yeas OF Experience
                       </button>
                        </td>
                          </form> -->
                               <td>
      <form class="form-horizontal" action="<?php echo e(route('document.view_filter_by_professions')); ?>" method="post" role="form">
    <?php echo e(method_field('POST')); ?>

   <?php echo e(csrf_field()); ?>

                               <button class="btn btn-success " style="width: 250px; margin-top: -20px;"> 
                                 <i class="fa fa-search"></i>
                          Filter by Profession
                                 </button>  
  <select name="profession[]" multiple="multiple"  class="form-control" style="width: 250px; margin-bottom: : -60px;">
                                       <?php $__currentLoopData = $aop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                            </form>
                                </td>
                            </tr>
                        </table>
                            <div class="col-md-6">
                                <div class="btn-group">
                              </div>
                            </div>
                        </div>
                        <hr>
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
                        <?php $__empty_1 = true; $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

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
                                          <a href="<?php echo e(route('document.uploadcv', $document->id)); ?>">
                                                        <i class="icon-docs"></i> Add CV </a>
                                                     
                                                    </li>
                                                  <li>
                                          <a href="<?php echo e(route('document.edit', $document->id)); ?>">
                                                        <i class="icon-docs"></i> Add CV </a>
                                                     
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
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        </tr>
                            
                             <?php endif; ?>

                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- <?php echo e($documents->links()); ?> END EXAMPLE TABLE PORTLET appends(['s' => $s])->-->
            </div>

       




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>