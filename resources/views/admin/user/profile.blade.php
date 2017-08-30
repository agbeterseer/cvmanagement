@extends('admin.layout.admin')

@section('content')
  <div class="col-md-12">
  <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                       
 <img src="/uploads/avatars/{{ $user->avatar }}" class="img-responsive" alt="" > 
 </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> {{ $user->name }}'s Profile </div>
                                            <div class="profile-usertitle-job"> Developer </div>
                                        </div>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                              <!--           <div class="profile-userbuttons">
                                            <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                            <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                        </div> -->
                                        <!-- END SIDEBAR BUTTONS -->
                                        <!-- SIDEBAR MENU -->
                                 <!--        <div class="profile-usermenu">
                                            <ul class="nav">
                                                <li>
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-home"></i> Overview </a>
                                                </li>
                                                <li class="active">
                                                    <a href="page_user_profile_1_account.html">
                                                        <i class="icon-settings"></i> Account Settings </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_profile_1_help.html">
                                                        <i class="icon-info"></i> Help </a>
                                                </li>
                                            </ul>
                                        </div> -->
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light ">
                                        <!-- STAT -->
                          <!--               <div class="row list-separated profile-stat">
                                            <div class="col-md-4 col-sm-4 col-xs-6">
                                                <div class="uppercase profile-stat-title"> 37 </div>
                                                <div class="uppercase profile-stat-text"> Projects </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-6">
                                                <div class="uppercase profile-stat-title"> 51 </div>
                                                <div class="uppercase profile-stat-text"> Tasks </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-6">
                                                <div class="uppercase profile-stat-title"> 61 </div>
                                                <div class="uppercase profile-stat-text"> Uploads </div>
                                            </div>
                                        </div> -->
                                        <!-- END STAT -->
                                        <div>
                                            <h4 class="profile-desc-title">About {{ $user->name }}</h4>
                                            <span class="profile-desc-text"> Consultant at Rhizome Nigeria</span>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-globe"></i>
                                                <a href="">www.rhizomeng.com</a>
                                            </div>
                            <div class="margin-top-20 profile-desc-link">
                                <i class="fa fa-twitter"></i>
                                <a href="http://www.rhizomeng.com/">@jibrilrhizomeng</a>
                            </div>
                                            <div class="margin-top-20 profile-desc-link">
                                                <i class="fa fa-facebook"></i>
                                                <a href="http://www.rhizomeng.com/">@jibrilrhizomeng</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                </div>
            <div class="profile-content">
<div class="row">
<div class="col-md-12">
<div class="portlet light ">
<div class="portlet-title tabbable-line">
    <div class="caption caption-md">
        <i class="icon-globe theme-font hide"></i>
        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
    </div>
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
        </li>
        <li>
            <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
        </li>
        <li>
            <a href="#tab_1_3" data-toggle="tab">Change Password</a>
        </li>
 
    </ul>
</div>
<div class="portlet-body">
    <div class="tab-content">
        <!-- PERSONAL INFO TAB -->
        <div class="tab-pane active" id="tab_1_1">
   <form role="form" action="{{ url('/user/profile') }}" method="PATCH">
            {{ csrf_field() }} 
                <div class="form-group">
                    <label class="control-label">Full Name</label>
                    <input type="text" name="firstname" required="required" readonly="readonly"  class="form-control" value="{{ $user->name }}" /> </div>
 <!--                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input type="text" name="lastname" required="required" class="form-control" value="{{ str_limit($user->name, 7) }}" readonly="readonly" /> </div> -->
                 
         <!--        <div class="form-group">
                    <label class="control-label">Mobile Number</label>
                    <input type="text" required="required" placeholder="+1 646 580  (6284)" class="form-control" /> </div> -->
                <!-- <div class="form-group">
                    <label class="control-label">Interests</label>
                    <input type="text" placeholder="Design, Web etc." class="form-control" /> </div> -->
                <!-- <div class="form-group">
                    <label class="control-label">Occupation</label>
                    <input type="text" placeholder="Web Developer" class="form-control" /> </div> -->
          <!--       <div class="form-group">
                    <label class="control-label">About</label>
                    <textarea class="form-control" rows="3" placeholder=" We are Resource persons"></textarea>
                </div> -->
                <!-- <div class="form-group">
                    <label class="control-label">Website Url</label>
                    <input type="text" placeholder="we" class="form-control" /> </div> -->
<!--                 <div class="margiv-top-10">
                    <button  class="btn green" type="Submit"> Save Changes 
                    </button> 
                    <button class="btn default" type="reset"> Cancel </button>
                </div> -->
            </form>
        </div>
        <!-- END PERSONAL INFO TAB -->
        <!-- CHANGE AVATAR TAB -->
        <div class="tab-pane" id="tab_1_2">
            <p>Choose your avatar </p>
<form action="{{ url('/user/profile') }}" role="form" enctype="multipart/form-data" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
   <img src="/uploads/avatars/{{ $user->avatar }}"  alt="" width=" 300px" height="300px" /> </div>
        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                        <div>
                            <span class="btn default btn-file">
                                <span class="fileinput-new"> Select image </span>
                                <span class="fileinput-exists"> Change </span>
                                <input type="file" name="avatar" required="required"> </span>
                            <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                        </div>
                    </div>
                    <div class="clearfix margin-top-10">
                        <span class="label label-danger">NOTE! </span>
                        <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                    </div>
                </div>
                <div class="margin-top-10">
                <button class="btn green" type="Submit"> Submit</button>
               <button type="reset"  class="btn default"> Cancel </button>
                </div>
            </form>
                 @if(Session()->has('success'))
                <div class="alert alert-success"> 
                {!! Session::get('success') !!}
                </div>
                        @endif
        </div>
        <!-- END CHANGE AVATAR TAB -->
        <!-- CHANGE PASSWORD TAB user.changePassword-->
        <div class="tab-pane" id="tab_1_3">
<!-- <form  id="tab_1_3" class="form-horizontal" method="POST" action="{{ url('/user/password') }}"> -->
            {{ csrf_field() }} 
            <img src="/logo/" id="loading">
                 <div class="form-group">
                    <label class="control-label">Current Password</label>
                    <input type="password" id="passwordold" name="passwordold" class="form-control" required="required"/> </div>
                <div class="form-group">
                    <label class="control-label">New Password</label>
                    <input type="password" id="password" name="password" class="form-control"  required="required"/> </div>
                <div class="form-group">
                    <label class="control-label">Re-type New Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="required"/> </div>
                <div class="margin-top-10">
         <button class="btn green" type="Submit" id="changep"> Change Password  </button>
                    <button type="reset" class="btn default"> Cancel </button>
                </div>
            <!-- </form> -->
        <p class="error text-center alert alert-danger hidden"></p>
        <p class="success text-center alert alert-success hidden"></p>
       <!--          @if(Session()->has('success'))
                <div class="alert alert-success"> 
                {!! Session::get('success') !!}
                </div>
                @else
                 <div class="alert alert-danger"> 
                {!! Session::get('error') !!}
                </div>

                @endif -->

        </div>
    <!-- END CHANGE PASSWORD TAB -->
    <!-- PRIVACY SETTINGS TAB -->
    
    <!-- END PRIVACY SETTINGS TAB -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection

