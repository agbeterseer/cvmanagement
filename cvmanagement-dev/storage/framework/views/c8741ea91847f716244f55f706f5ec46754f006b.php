<!DOCTYPE html>
 
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?php echo e(config('app.locale')); ?>">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>CV MGSystem| User Login </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page  for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('css/assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
         <link href="<?php echo e(asset('css/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet">

         <link href="<?php echo e(asset('css/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
 
                <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo e(asset('css/assets/global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
         <link href="<?php echo e(asset('css/assets/global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet">
         <link href="<?php echo e(asset('css/assets/global/css/components.min.css')); ?>" rel="stylesheet">
                <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
         <link href="<?php echo e(asset('css/assets/global/css/plugins.min.css')); ?>" rel="stylesheet">
         <link href="<?php echo e(asset('css/assets/pages/css/login.min.css')); ?>" rel="stylesheet">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
         
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href=" ">
                <img src="/logo/rhizome.jpg" alt="Logo" width="150px" height="50px" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM login-form -->
             <form class="login-form" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>

                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter your email and password. </span>
                </div>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">                    
             <label class="control-label visible-ie8 visible-ie9">Username</label>
 <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email address" name="email" value="<?php echo e(old('email')); ?>" />
                                 <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
               </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input   class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="<?php echo e(old('password')); ?>"/> 

                      <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label>
  <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                    <!-- <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a> -->
                </div>
        
      
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
             <form class="forget-form" role="form" method="POST" action="<?php echo e(route('password.request')); ?>">
                        <?php echo e(csrf_field()); ?>

           <!--  <form class="" action="index.html" method="post"> -->
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->

            <!-- END REGISTRATION FORM -->
        </div>


        <div class="copyright"> 2017 © CV MGSystem. </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <script src="<?php echo e(asset('css/assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
         <script src="<?php echo e(asset('css/assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
          <script src="<?php echo e(asset('css/assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('css/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
         <script src="<?php echo e(asset('css/assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<!--          <script src="<?php echo e(asset('css/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>" type="text/javascript"></script> -->
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       <script src="<?php echo e(asset('css/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>" type="text/javascript"></script>
            <script src="<?php echo e(asset('css/assets/global/plugins/jquery-validation/js/additional-methods.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('css/assets/global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
         <script src="<?php echo e(asset('css/assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
          <script src="<?php echo e(asset('css/assets/pages/scripts/login.min.js')); ?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
       
    
    <script type="text/javascript">
     
var refresh_rate = 3600; //<-- In seconds, change to your needs
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

