@extends('admin.layout.admin')
@section('content')
 
    <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Roles</span>
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
             <form class="form-horizontal" action="{{route('role.store')}}" method="post" role="form">
                        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter name of Role"   required>

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
                    <input id="" type="text" class="form-control" name="display_name" placeholder="Enter Display name"  required>

                    @if ($errors->has('display_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="col-md-4 control-label">Descritption</label>

                <div class="col-md-6">
                    <input id="" type="text" class="form-control" placeholder="Enter Description" name="description" required>

                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
              <div class="col-md-6">
				 <h3>Permissions</h3>
				 @foreach($permissions as $permission)<br>
					<input type="checkbox"  name="permission[]" value="{{$permission->id}}">{{$permission->name}}
					@endforeach
					</div>
				</div>
	                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Roles
                                </button>
                            </div>
                        </div>
                    </form>
                                    
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
  
@endsection
