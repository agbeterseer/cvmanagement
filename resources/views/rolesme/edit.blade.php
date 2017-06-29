@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                <div class="panel-heading">Update Role</div>

                <div class="panel-body">
             
                {!! Form::model($role,array('route'=>['role.update',$role->id],'method'=>'PUT')) !!}
                <div class="form-group">
                    {!! Form::label('rolename','Enter Role Name') !!}
                    {!! Form::text('rolename',null,['class'=>'form-control']) !!}
                </div>

                 <div class="form-group">
                    {!! Form::label('description','Enter Description') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::button('Update ',['type'=>'submit','class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
                </div>
            </div> 
            @if($errors->has(''))
                    <ul class="aler alert-danger">
                @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
                    </ul>
            @endif
 
    </div>
    </div>
</div>
@endsection
