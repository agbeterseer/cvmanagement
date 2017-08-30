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

<a class="btn btn-success" href="{{route('role.create')}}"><i class="fa fa-plus"></i>Create Role</a>
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
                                <th>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th>
                                <th> Name </th>
                                <th> Display Name </th>
                                <th> Description </th>
                               
                               <th> Actions </th>
                           
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($roles as $role)

                              <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                </td>
                                <td>{{$role->name}}</td>
                                 <td>
                        
                                 
                                 {{$role->display_name}}

                                 </td>
                                  <td>{{$role->description}}</td>
                                                 
                                                    <td>
                                                        <div class="btn-group">
                           <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                     
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{route('role.edit', $role->id)}}">
                            <i class="icon-docs"></i> Edit </a>
                         
                        </li>
                        <li class="divider"> </li>
                        <form action="{{route('role.destroy', $role->id)}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                 
                                                    </form>
                                                  
                                                       
                                                 
                                                              
                                                            </ul>
                                                  


                                                        </div>
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
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
       


@endsection

 