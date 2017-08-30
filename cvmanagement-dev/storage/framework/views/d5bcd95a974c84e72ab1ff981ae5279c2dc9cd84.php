<?php $__env->startSection('content'); ?>
 
    <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Add Document</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                <span style="color: red;">
                <?php if(count($errors)): ?>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li> <?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
                </span>
                    </div>
                </div>
            </div>
        </div>
             <form class="form-horizontal" action="<?php echo e(route('document.update',$document)); ?>" enctype="multipart/form-data" method="post" role="form">
                <?php echo e(method_field('PATCH')); ?>

                        <?php echo e(csrf_field()); ?>

            <div class="form-group<?php echo e($errors->has('candidates_name') ? ' has-error' : ''); ?>">
                <label for="candidates_name" class="col-md-4 control-label">Candidates Name</label>
                <div class="col-md-6">
         <input id="" type="text" class="form-control" name="candidates_name" placeholder="Enter name of candidates name"   required value="<?php echo e($document->candidates_name); ?>">
                    <?php if($errors->has('candidates_name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('candidates_name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        
            <div class="form-group<?php echo e($errors->has('profession') ? ' has-error' : ''); ?>">
                <label for="profession" class="col-md-4 control-label">Profession</label>
                <div class="col-md-6">
             <span style="color: red;">  Note: you can select more than one Proferssion shift + click</span>
                        <?php $__currentLoopData = $document->professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($profession->id); ?>" selected="selected"><?php echo e($profession->name); ?></option>
              

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <select name="profession[]" multiple="multiple" class="form-control" required="required">

   
               
                                       <?php $__currentLoopData = $aop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                   <option value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                    <?php if($errors->has('profession')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('profession')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('years_of_experience') ? ' has-error' : ''); ?>">
                <label for="description" class="col-md-4 control-label">Years of Experience</label>

                <div class="col-md-6">
                    <input id="" type="number" class="form-control" placeholder="Enter years Of Experience" name="years_of_experience" required value="<?php echo e($document->years_of_experience); ?>">

                    <?php if($errors->has('years_of_experience')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('years_of_experience')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('region') ? ' has-error' : ''); ?>">
                <label for="region" class="col-md-4 control-label">Region</label>

                <div class="col-md-6">
            <select name="region"  class="form-control" required="required">
    <option value="<?php echo e($document->region->id); ?>">  <?php echo e($document->region->name); ?></option>
                    <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        

                    <?php if($errors->has('region')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('region')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('location') ? ' has-error' : ''); ?>">
                <label for="location" class="col-md-4 control-label">Location</label>

                <div class="col-md-6">
              <select name="location"  class="form-control" required="required">
                <option value="<?php echo e($document->city->id); ?>"><?php echo e($document->city->name); ?></option>
                           <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($city->id); ?>"><?php echo e($city->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                    <?php if($errors->has('location')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('location')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
<!-- 
            <div class="form-group<?php echo e($errors->has('file') ? ' has-error' : ''); ?>">
                <label for="cv_file" class="col-md-4 control-label">Pick A CV</label>

                <div class="col-md-6">
           <input id="" type="file" class="form-control" name="file">

                    <?php if($errors->has('file')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('cv_file')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div> -->
                <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Edit Records
                    </button>
                </div></div>  
                   
                    </form>
                                       
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>