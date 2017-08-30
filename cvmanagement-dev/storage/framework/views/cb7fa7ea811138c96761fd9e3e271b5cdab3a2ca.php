<?php $__env->startSection('content'); ?>
	
		<a href="<?php echo e(url('downloadExcel/xls')); ?>"><button class="btn btn-success">Back up CV Records xls</button></a>
		<a href="<?php echo e(url('downloadExcel/xlsx')); ?>"><button class="btn btn-success">Back up CV Records xlsx</button></a>
		<a href="<?php echo e(url('downloadExcel/csv')); ?>"><button class="btn btn-success">Back up CV Records CSV</button></a>
<br/>
<hr>
	<!-- 	<a href="<?php echo e(url('downloadExcel/xls')); ?>"><button class="btn btn-success">Back up CV Records xls</button></a>
		<a href="<?php echo e(url('downloadExcel/xlsx')); ?>"><button class="btn btn-success">Back up CV Records xlsx</button></a>
		<a href="<?php echo e(url('backUpDocumentProfession/csv')); ?>"><button class="btn btn-success">Complete backup CV Records CSV</button></a>
	   -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>