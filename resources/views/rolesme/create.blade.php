@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                <div class="panel-heading">Role</div>

                <div class="panel-body">
             
                {!! Form::open(array('route'=>'role.store')) !!}
                <div class="form-group">
                    {!! Form::label('','Enter Role Name') !!}
                    {!! Form::text('rolename',null,['class'=>'form-control']) !!}
                </div>

                 <div class="form-group">
                    {!! Form::label('','Enter Description') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
                </div>
            </div> 
           @if (count($errors)>0)
                <ul class="alert alert-danger"> 
                @foreach ($errors->all() as $error)
                   <li> {{ $error }}</li>
                @endforeach
                </ul>
            @endif

           <!--  @if($errors->has(''))
                    <ul class="aler alert-danger">
                @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
                    </ul>
            @endif
  -->
    </div>
    </div>
</div>
@endsection
