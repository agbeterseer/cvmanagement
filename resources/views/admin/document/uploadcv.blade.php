@extends('admin.layout.admin')
@section('content')

<h3>Upload Cv From CSV</h3>
@if(count($errors))
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
  <div class="col-md-12">
@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
    {!! session('message.content') !!}
    </div>
@endif
  
           <div class="m-heading-1 border-green m-bordered">
             <h3>Dropzone</h3>
     <form action="{{route('document.uploadcv')}}" method="POST" enctype="multipart/form-data" >
        {{ csrf_field() }}
                  
                  <input type="file" name="file" required="required"> <br/>
                  <button class="btn btn-primary" type="submit">Upload</button>
                </form>
                  </div>
                    </div>
@endsection
