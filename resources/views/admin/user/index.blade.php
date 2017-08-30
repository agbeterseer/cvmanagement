@extends('admin.layout.admin')
@section('content')
    
</script>

        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Users</span>
                    </div>
                
                </div>
                <div class="portlet-body">
                   <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">

<a class="btn btn-success" href="{{url('register')}}"><i class="fa fa-plus"></i>Create User</a>
                                </div>
                            </div>
      
                        </div>

                        @if(Session()->has('success'))
                <div class="alert alert-success"> 
                {!! Session::get('success') !!}
                </div>
                        @endif
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                    
                                <th> Name </th>
                                <th> Role </th>
                                <th> Email </th>
                               
                               <th> Assign Role </th>
                               <th> Delete </th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $userd)

             <tr class="odd gradeX">
               
                        <td>{{$userd->name}}</td>
                        <td>
                      
                        @foreach($userd->roles as $role)
                        {{$role->name}}
                        @endforeach

                        </td>
                        <td>{{$userd->email}}</td>
                                     
                        <td>
                  <div class="btn-group">
           <button class="btn btn-xs btn-primary" type="button" data-toggle="modal" data-target="#myModal-{{$userd->id}}"> Assign.. <i class="fa fa-angle-down"></i> </button>                                   
        <div class="modal fade" id="myModal-{{$userd->id}}" tabindex="1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                 <span aria-hidden="true"></span>   </button>
            <h4 class="modal-title" id="myModalLabel" style="margin-left: 165px;">{{$userd->name}}Assign Role To User</h4>
                        </div>
                        <div class="modal-body">
    <form action="{{route('user.update',$userd->id)}}" method="post" role="form" id="role-form-{{$userd->id}}">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}

                        <div class="form-group" style="margin-left: 185px;">
                          note:
                           <select name="role[]" multiple="multiple">
                           @foreach($allRoles as $role)
                           <option value="{{$role->id}}">{{$role->name}}</option>
                           @endforeach
                            </select>
                          </div>
                        </form>
                      </div>
                        <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" onclick="$('#role-form-{{$userd->id}}').submit()">Save changes</button>

                        </div>
                    </div>
                 </div>
              </div>
            </div>
        </td>
        <td>
     <form class="delete" action="{{route('user.destroy', $userd->id)}}" method="POST">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
              <input class="btn btn-sm btn-danger" type="submit" value="Delete">
    </form>
        </td>
    </tr>
                   @empty
                <tr>
                <td> No Roles</td>
                </tr>
          @endforelse
                   </tbody>
                        </table>

          </div>

          </div>
      </div>
      <!-- END EXAMPLE TABLE PORTLET-->
  </div>



@endsection