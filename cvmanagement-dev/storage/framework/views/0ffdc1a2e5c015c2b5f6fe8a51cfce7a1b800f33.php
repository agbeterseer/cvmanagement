<?php $__env->startSection('content'); ?>
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Candidates CV</span>
                    </div>
                 </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                    <div class="row">
          
                    <div class="col-md-6">
                    <div class="btn-group">

<a class="btn btn-success" href="<?php echo e(route('document.create')); ?>"><i class="fa fa-plus"></i>Add CV</a>
                                </div>
                            </div>
                    </div>
                        <div class="row">
                        <table width="100%">
                            <tr>
                                <td>
               
 <form  action="<?php echo e(route('document.view_filter_by_city')); ?>"   method="post" role="form">
   <?php echo e(csrf_field()); ?>

     <a href="" class="btn btn-success form-control" style="width: 250px;  >
                          <i class="fa fa-search "></i>
                          Filter by City
                        </a>
                 <select name="location" class="form-control" style="width: 250px; " onchange="this.form.submit();" >
                       <option value="">...Select City...</option>
                           <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                    </form>
                       </td>
                        
                        <td> 
     <form action="<?php echo e(route('document.index')); ?>" method="get">
                                  <?php echo e(csrf_field()); ?>

                                  <table align="center" width="100%">
                                    <tr>
                                        <td>
<input type="text" name="s" class="form-control" placeholder="Enter candidates Name or Years of Experience" value="<?php echo e(isset($s) ? $s : ''); ?>">
                                        </td>
                                        <td>
                <button type="submit" class="btn btn-success">Search</button>
                                        </td>
                                        <span>Note: search for candidates Name and Years of Experience</span> 
                                    </tr>
                                </table>
                                  </form>
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
                                       <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                            </form>
                                </td>
                            </tr>
                        </table>
                            </div>

                        </div>
         
                        <?php if(session()->has('message.level')): ?>
                        <div class="alert alert-<?php echo e(session('message.level')); ?>"> 
                        <?php echo session('message.content'); ?>

                        </div>
                        <?php endif; ?>

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
                                <th> Candidate's name </th>
                                <th> Profession </th>
                                <th> Years Of Experience </th>
                                <th> Date Created </th>
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

                            <td><?php echo e(title_case($document->candidates_name)); ?></td>
                            <td>
                                 <?php $__currentLoopData = $document->professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proferssion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                              <?php echo e($proferssion->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e($document->years_of_experience); ?></td>
                            <td>
                            <?php echo e($document->created_at); ?>

                            
                            </td>
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

                   <?php if (\Entrust::hasRole(['admin'])) : ?>
                                               <ul class="dropdown-menu" >
                                        
                                                  <li>
                                          <a href="<?php echo e(route('document.edit', $document->id)); ?>">
                                                        <i class="icon-docs"></i> Edit CV </a>
                                                     
                                                    </li>
                                                    <li class="divider"> </li>
            <form  class="delete" action="<?php echo e(route('document.destroy', $document->id)); ?>" method="POST">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php echo e(method_field('DELETE')); ?>

                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete"></form> 
                                                            </ul>
                                                               <?php endif; // Entrust::hasRole ?>
                                                        </div>  
                                                    </td>
                                                </tr>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                        <td> No Cvs'</td>
                                        </tr> 
                             <?php endif; ?> 
                                            </tbody>
                                        </table> 
                        <?php echo e($documents->appends(['s' => $s])->links()); ?>


                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div> 


<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>