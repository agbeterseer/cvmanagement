@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }} </div>
              @endif

            <div class="panel panel-default">
                <div class="panel-heading">Roles</div>
<div class="col-md-6" text-right style="margin-left: 635px;">
    <form action="{{route('role.index')}}" method="get" class="form-inline">
        <div class="form-group">
        <input type="text" class="form-control" name="s" placeholder="keyword" value="{{ isset($s) ? $s : '' }}">
         </div>
         <div class="form-group">

             <button type="submit" class="btn btn-success">Search</button>

         </div>
    </form>
</div>


                <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Role Name</th>
                          <th>Action</th>
                     </tr>
                     @foreach($rolesme as $role)
                     <tr>
                         
                         <td>  {{ link_to_route('role.show',$role->rolename, [$role->id]) }}</td>
                         <td>
                          {!! Form::open(array('route'=>['role.destroy',$role->id],'method'=>'DELETE')) !!}
                                {{ link_to_route('role.edit','Edit',[$role->id],['class'=>'btn btn-primary']) }}

                              
                             |
                                {!! Form::button('Delete',['type'=>'submit','class'=>'btn btn-danger']) !!}
                         
                          {!! Form::close() !!}

                         </td>
                     </tr>
                     @endforeach
                </table>
                {{ $rolesme->appends(['s' => $s])-> links() }}
                </div>
            </div>

            {{ link_to_route('role.create','Add new Role',null,['class'=>'btn btn-success']) }}
        </div>
    </div>
</div>
@endsection
