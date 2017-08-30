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
                            <!--       <form class="sidebar-search" action="{{route('document.index')}}" method="POST">
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
                                  </form> -->
                                  <!-- END RESPONSIVE QUICK SEARCH FORM -->
                              </li>
                               @if ($user->is_admin())
                              <li class="nav-item start active open">
                              <a href="{{route('board')}}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                      <span class="arrow open"></span>
                                  </a>
                              </li>
                              @else

                      <li class="nav-item start active open">
                              <a href="{{route('home')}}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                      <span class="arrow open"></span>
                                  </a>
                     
                              </li>

                              @endif



                              @if ($user->is_admin())
                      <li class="nav-item  " id="roleid">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-briefcase"></i>
                                      <span class="title">Role Management</span>
                                  <span class="arrow"></span>
                                      <span class="selected"></span>
                                  </a>
                                  <ul class="sub-menu">
                                      <li class="nav-item ">
                                          <a href="{{route('role.index')}}" class="nav-link">
                                              <span class="title">View Roles</span>
                                             <span class="selected"></span>
                                          </a>
                                      </li>
                            
                                    </ul>
                                  </li>
                                  
                                   <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-users"></i>
                                      <span class="title">User Mangement</span>
                                      <span class="arrow"></span>
                                  </a>
                                   <ul class="sub-menu">
                                      <li class="nav-item ">
                                      <a href="{{ route('user.index') }}" class="nav-link "> 
                                     <span class="title">User</span>
                                      </a>
                                
                                      </li>
                               <!--     <li class="nav-item ">
                                          <a href="{{route('user.index')}}" class="nav-link ">
                                              <span class="title">Assign Roles</span>
                                          </a>
                                      </li> -->
                                  </ul>
                                       <!--  <a href="{{ url('/register') }}">Register</a>  -->
                      
                              </li>
                              @endif

                                  <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-puzzle"></i>
                                      <span class="title">Document Management</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                  
                                      <li class="nav-item ">
                                          <a href="{{route('document.index')}}" class="nav-link ">
                                              <span class="title">Candidates Records</span>
                                          </a>
                                      </li>
                                          <li class="nav-item ">
                                          <a href="{{route('document.uploadfromcsv')}}" class="nav-link ">
                                              <span class="title">Upload CV From CSV</span>
                                          </a>
                                      </li>
                                       <li class="nav-item ">
                                          <a href="{{route('document.search_category')}}" class="nav-link ">
                                              <span class="title">Document Search</span>
                                          </a>
                                      </li>
                                 <!--         <li class="nav-item ">
                                          <a href="{{route('region.index')}}" class="nav-link ">
                                              <span class="title">
                                              Regional Search</span>
                                          </a>
                                      </li> -->
                                    
                                  </ul>
                               
                              </li>

                              <li class="nav-item  ">
                                  <a href="javascript:;" class="nav-link nav-toggle">
                                      <i class="icon-settings"></i>
                                      <span class="title">Settings</span>
                                      <span class="arrow"></span>
                                  </a>
                                  <ul class="sub-menu">
                                  
                                      <li class="nav-item ">
                                          <a href="{{route('backupsys.importExport')}}" class="nav-link ">
                                        <span class="title">Back up cv </span>
                                          </a>
                                      </li>
                                             <li class="nav-item ">
                                          <a href="{{route('backupsys.backups')}}" class="nav-link ">
                                        <span class="title">Back up cv </span>
                                          </a>
                                      </li>


                                  </li>
                          
                         <!-- END SIDEBAR MENU -->
                          <!-- END SIDEBAR MENU -->
                     </div>
                      <!-- END SIDEBAR -->
                  </div>