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
        <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="0">
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet">

            <link href="{{ asset('css/assets/pages/css/profile.min.css') }}" rel="stylesheet">
 
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


<div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        
 <img src="/logo/rhizome.jpg" alt="Logo" width="80px" height="20px" class="logo-default" /> 
                          
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->

                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
    
    <img alt="" class="img-circle" src="/uploads/avatars/default.png" />
       

                                @if(Auth::user())
                                    <span class="username username-hide-on-mobile" > {{ Auth::user()->name }} </span>
                                @else
<span class="username username-hide-on-mobile" > Admin </span>
                                @endif
                                   <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
    <li>
          <a href="{{ url('user/profile')}}"><i class="icon-user"></i> My Profile
    </a> </li>

                                    <li>
                                        <a href="page_user_lock.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                     
                                    <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon-key"></i> Logout
                                        </a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
 
                                    </li>

                                </ul>
                            </li>
                             <!--     <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul> -->
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
       



            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <div class="page-container">
                  <!-- BEGIN SIDEBAR -->
                  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

          <div class="page-sidebar-wrapper">
                      <!-- BEGIN SIDEBAR -->
                      <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                      <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                      <div class="page-sidebar navbar-collapse collapse">
                          <!-- BEGIN SIDEBAR MENU -->

                          <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                              <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                              <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                              <li class="sidebar-toggler-wrapper hide">
                                  <div class="sidebar-toggler">
                                      <span></span>
                                  </div>
                              </li>

                              <!-- END SIDEBAR TOGGLER BUTTON -->
                              <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                              <li class="sidebar-search-wrapper">
                                  <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                  <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                  <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                  <form class="sidebar-search" action="{{route('document.index')}}" method="POST">
                                   {{ csrf_field() }}
                                      <a href="javascript:;" class="remove">
                                          <i class="icon-close"></i>
                                      </a>
                                      <div class="input-group">
                 <input type="text" class="form-control" name="s"placeholder="Search...">
                                          <span class="input-group-btn">
                                 <a type="submit" href=" " class="btn submit">
                                                  <i class="icon-magnifier"></i>
                                              </a>
                                          </span>
                                      </div>
                                  </form>
                                  <!-- END RESPONSIVE QUICK SEARCH FORM -->
                              </li>
                              <li class="nav-item start  active open">
                                  <a href="{{route('home')}}" class="nav-link nav-toggle">
                                      <i class="icon-home"></i>
                                      <span class="title">Dashboard</span>
                                      <!-- <span class="arrow open"></span> -->
                                  </a>
                              </li>
                              <li class="nav-item ">
               
                                  <ul class="sub-menu">
                          
                            
                                    </ul>
                                  </li>
                                   <li class="nav-item  ">
                            
                                   <ul class="sub-menu">
                                 
                               <!--     <li class="nav-item ">
                                          <a href="{{route('user.index')}}" class="nav-link ">
                                              <span class="title">Assign Roles</span>
                                          </a>
                                      </li> -->
                                  </ul>
                                       <!--  <a href="{{ url('/register') }}">Register</a>  -->
                      
                              </li>

                                  <li class="nav-item  ">
                      
                                  <ul class="sub-menu">
                                  
                                      <li class="nav-item ">
                          
                                      </li>
                                          <li class="nav-item ">
                                  
                                      </li>
                                       <li class="nav-item ">
                                  
                                      </li>
                              
                                    
                                  </ul>
                               
                              </li>
                          
                         <!-- END SIDEBAR MENU -->
                          <!-- END SIDEBAR MENU -->
                     </div>
                      <!-- END SIDEBAR -->
                  </div>

             
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
                     
                          <div class="row">
                             
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
                    <a href=" " target="_blank" class="active">
                        <span>Applicant</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href=" " target="_blank">
                        <span>Shortlisted</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href=" " target="_blank">
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
            <script src="{{ asset('css/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
      
 <!--        <script src="{{ asset('css/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script> -->
 
<!-- <script src="{{ asset('css/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
       -->
 <script src="{{ asset('css/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('css/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
         
  <!--       <script src="{{ asset('css/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script> -->
        <script src="{{ asset('css/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>

         <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('css/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
         <script src="{{ asset('css/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
      <!--   <script src="{{ asset('css/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script> -->
         
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

 
    </body>

</html>