<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet">
         <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('css/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/morris/morris.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('css/assets/global/css/components.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/css/plugins.min.css') }}" rel="stylesheet">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('css/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet">
        <!-- END THEME LAYOUT STYLES -->
<!--         <link rel="shortcut icon" href="favicon.ico" /> -->
 </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->


         @include('admin.layout.includes.header')



            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <div class="page-container">
                  <!-- BEGIN SIDEBAR -->
                  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

             @include('admin.layout.includes.sidenev')

             
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
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <span class="thin uppercase hidden-xs"></span>&nbsp;
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                        </div>
                            <!-- <img id="loading" src="assets/pages/img/login/ajax-loader.gif"> -->
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                                             
                        <!-- END DASHBOARD STATS 1-->
                        <h1 class="page-title"> Admin Dashboard
                            <small>Current Users, recent events and reports</small>
                        </h1>
                          <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-green-sharp">
                                             
                              <span data-counter="counterup" data-value="{{$documents}}">0</span>
                                        <!-- <small class="font-green-sharp">$</small> -->
                                            </h3>
                                            <small>TOTAL CV's</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-puzzle"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 30%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">{{$documents}}% progress</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> progress </div>
                                            <div class="status-number"> {{$documents}}% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-red-haze">
                                                <span data-counter="counterup" data-value="{{$roles}}">0</span>
                                            </h3>
                                            <small>Roles</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-like"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                <span class="sr-only">85</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> change </div>
                                            <div class="status-number"> 85% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-blue-sharp">
                                                <span data-counter="counterup" data-value="567"></span>
                                            </h3>
                                            <small>Updates</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-briefcase"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                                <span class="sr-only">45</span>
                                            </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> grow </div>
                                            <div class="status-number"> 45% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-purple-soft">
                                                <span data-counter="counterup" data-value="{{$users}}"></span>
                                            </h3>
                                            <small>USERS</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                        </div>
                                        <div class="status">
                                            <div class="status-title"> change </div>
                                            <div class="status-number"> 57% </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!-- contect here -->
                         @yield('content')
                        </div>
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
                    <a href="" target="_blank" class="active">
                        <span>Applicant</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <span>Shortlisted</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
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
  <!--       <script type="text/javascript">
            @mixin my-mixin($some-number) {
            width: $some-number;
            }
         

        </script> -->
            <script src="{{ asset('css/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
      
        <script src="{{ asset('css/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
 
<script src="{{ asset('css/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
      
 <script src="{{ asset('css/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('css/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
         
        <script src="{{ asset('css/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

         <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('css/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
         <script src="{{ asset('css/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
         
        <script src="{{ asset('css/assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
  
       
      <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
         
            <script src="{{ asset('css/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>

          <script src="{{ asset('css/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>

       <script src="{{ asset('css/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->

        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
      

 
        <script src="{{ asset('css/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
  
      
 
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         <script src="{{ asset('css/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
         <script src="{{ asset('css/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
       
        <script src="{{ asset('css/assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
      
        <script src="{{ asset('css/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
 
        <script src="{{ asset('css/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>

 

<script>
window.onpageshow = function(event) {
if (event.persisted) {
    window.location.reload() 
}
};
{
   var Backlen=history.length;   history.go(-Backlen); 
 
  window.location.href=page url
 
 }

</script>
 
    </body>

</html>