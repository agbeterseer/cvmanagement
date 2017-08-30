<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> Document management System | Admin Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('css/assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/pages/css/profile.min.css')); ?>" rel="stylesheet">
 
         <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
  <!--       <link href="<?php echo e(asset('css/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')); ?>" rel="stylesheet"> -->
      <!--   <link href="<?php echo e(asset('css/assets/global/plugins/morris/morris.css')); ?>" rel="stylesheet" -->>
        <link href="<?php echo e(asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')); ?>" rel="stylesheet">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo e(asset('css/assets/global/css/components.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/global/css/plugins.min.css')); ?>" rel="stylesheet">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo e(asset('css/assets/layouts/layout/css/layout.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/assets/layouts/layout/css/themes/darkblue.min.css')); ?>" rel="stylesheet">
     <link href="<?php echo e(asset('css/assets/layouts/layout/css/custom.min.css')); ?>" rel="stylesheet">
        <!-- END THEME LAYOUT STYLES -->
<!--         <link rel="shortcut icon" href="favicon.ico" /> -->
 </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->

         <?php echo $__env->make('admin.layout.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <div class="page-container">
                  <!-- BEGIN SIDEBAR -->
                  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

             <?php echo $__env->make('admin.layout.includes.sidenev', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->

                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span></span>
                                </li>
                            </ul>
                 </div>
                            <!-- <img id="loading" src="assets/pages/img/login/ajax-loader.gif"> -->
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                                             
                        <!-- END DASHBOARD STATS 1-->
                     
                          <div class="row">
                              <?php echo $__env->make('alertify::alertify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                              <!-- contect here -->
                         <?php echo $__env->yieldContent('content'); ?>

                           
                        </div>

                         
                 
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="javascript:;" class="page-quick-sidebar-toggler">
                    <i class="icon-login"></i>
                </a>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 &copy; cv management
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="<?php echo e(route('user.index')); ?>"  class="active">
                        <span>Applicant</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('document.index')); ?>">
                        <span>Shortlisted</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('home')); ?>" >
                        <span>Scheduled for Interview</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
            <script src="<?php echo e(asset('css/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
     

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.min.css"/>

   <script src="<?php echo e(asset('css/assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
      

 <!--        <script src="<?php echo e(asset('css/assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script> -->
 
<!-- <script src="<?php echo e(asset('css/assets/global/plugins/counterup/jquery.waypoints.min.js')); ?>" type="text/javascript"></script>
       -->
 <script src="<?php echo e(asset('css/assets/global/plugins/counterup/jquery.counterup.min.js')); ?>" type="text/javascript"></script>

        <script src="<?php echo e(asset('css/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
         
  <!--       <script src="<?php echo e(asset('css/assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script> -->
<!--         <script src="<?php echo e(asset('css/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script> -->

         <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
  <!--       <script src="<?php echo e(asset('css/assets/global/plugins/moment.min.js')); ?>" type="text/javascript"></script> -->
<!--         <script src="<?php echo e(asset('css/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')); ?>" type="text/javascript"></script> -->
         <script src="<?php echo e(asset('css/assets/global/plugins/morris/morris.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('css/assets/global/plugins/morris/raphael-min.js')); ?>" type="text/javascript"></script>
<!--         <script src="<?php echo e(asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.js')); ?>" type="text/javascript"></script> -->
      <!--   <script src="<?php echo e(asset('css/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')); ?>" type="text/javascript"></script> -->
         
        <!-- <script src="<?php echo e(asset('css/assets/global/plugins/jquery.sparkline.min.js')); ?>" type="text/javascript"></script> -->
  
       
      <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
         
            <script src="<?php echo e(asset('css/assets/global/scripts/datatable.js')); ?>" type="text/javascript"></script>

          <script src="<?php echo e(asset('css/assets/global/plugins/datatables/datatables.min.js')); ?>" type="text/javascript"></script>

       <script src="<?php echo e(asset('css/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->

        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo e(asset('css/assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('css/assets/pages/scripts/table-datatables-managed.min.js')); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         <script src="<?php echo e(asset('css/assets/pages/scripts/dashboard.min.js')); ?>" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
         <script src="<?php echo e(asset('css/assets/layouts/layout/scripts/layout.min.js')); ?>" type="text/javascript"></script>
       
        <script src="<?php echo e(asset('css/assets/layouts/layout/scripts/demo.min.js')); ?>" type="text/javascript"></script>
      
        <script src="<?php echo e(asset('css/assets/layouts/global/scripts/quick-sidebar.min.js')); ?>" type="text/javascript"></script>
 
        <script src="<?php echo e(asset('css/assets/layouts/global/scripts/quick-nav.min.js')); ?>" type="text/javascript"></script>

  <script src="<?php echo e(asset('js/changepassword.js')); ?>"></script>

<?php if(session('success')): ?>

<script type="text/javascript">
    $(document).ready(function() {

        // alertify.success('<?php echo e(session('success')); ?>');
    
    });
</script>
 <?php endif; ?>
<?php if(session('error')): ?>

<script type="text/javascript">
    $(document).ready(function() {

        // alertify.error('<?php echo e(session('error')); ?>');
     
    });
</script>
 <?php endif; ?>
<script>
    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });
</script>
 
<script type="text/javascript">
     
var refresh_rate = 500; //<-- In seconds, change to your needs
var last_user_action = 0;
var has_focus = false;
var lost_focus_count = 0;
var focus_margin = 10; // If we lose focus more then the margin we want to refresh

function reset() {
    last_user_action = 0;
    console.log("Reset");
}

function windowHasFocus() {
    has_focus = true;
}

function windowLostFocus() {
    has_focus = false;
    lost_focus_count++;
    console.log(lost_focus_count + " <~ Lost Focus");
}

setInterval(function () {
    last_user_action++;
    refreshCheck();
}, 1000);

function refreshCheck() {
    var focus = window.onfocus;
    if ((last_user_action >= refresh_rate && !has_focus && document.readyState == "complete") || lost_focus_count > focus_margin) {
        window.location.reload(); // If this is called no reset is needed
        reset(); // We want to reset just to make sure the location reload is not called.
    }

}
window.addEventListener("focus", windowHasFocus, false);
window.addEventListener("blur", windowLostFocus, false);
window.addEventListener("click", reset, false);
window.addEventListener("mousemove", reset, false);
window.addEventListener("keypress", reset, false);

 </script>

 
    </body>

</html>