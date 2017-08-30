@extends('admin.layout.admin')
@section('content')
 <script type="text/javascript">
    if(!!window.performance && window.performance.navigation.type === 2)
{
    console.log('Reloading');
    window.location.reload();
}
    </script>
    <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Edit Roles</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                </div>
                            </div>
                        </div>
                    </div>
    <form class="form-horizontal" action="{{route('user.update',$user)}}" method="post" role="form">
                        {{ method_field('PATCH')}}
                        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Enter name of Role"   required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
                <label for="display_name" class="col-md-4 control-label">Displyname</label>
                <div class="col-md-6">
                    <input id="" type="text" class="form-control" value="{{$user->email}}" name="display_name" placeholder="Enter Display name"  required>

                    @if ($errors->has('display_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

          

        <div class="form-group">
              <div class="col-md-6">
				 <h3>Roles</h3>
				 @foreach($roles as $role) |||
					<input type="checkbox"  name="role[]" value="{{$role->id}}">{{$role->name}}
					@endforeach
					</div>
				</div>
	                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Assign Role
                                </button>
                            </div>
                        </div>
                    </form>


                                        
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
  
@endsection
