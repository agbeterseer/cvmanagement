@extends('admin.layout.admin')
@section('content')
 
    <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Add Document</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                <span style="color: red;">
                @if(count($errors))
                    <ul>
                        @foreach($errors->all() as $error)
                           <li> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                </span>
                    </div>
                </div>
            </div>
        </div>
             <form class="form-horizontal" action="{{route('document.update',$document)}}" enctype="multipart/form-data" method="post" role="form">
                {{ method_field('PATCH')}}
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('candidates_name') ? ' has-error' : '' }}">
                <label for="candidates_name" class="col-md-4 control-label">Candidates Name</label>
                <div class="col-md-6">
         <input id="" type="text" class="form-control" name="candidates_name" placeholder="Enter name of candidates name"   required value="{{$document->candidates_name}}">
                    @if ($errors->has('candidates_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('candidates_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        
            <div class="form-group{{ $errors->has('profession') ? ' has-error' : '' }}">
                <label for="profession" class="col-md-4 control-label">Profession</label>
                <div class="col-md-6">
             <span style="color: red;">  Note: you can select more than one Proferssion shift + click</span>
                        @foreach($document->professions as $profession)
     <option value="{{ $profession->id }}" selected="selected">{{ $profession->name }}</option>
                           @endforeach
                  <select name="profession[]" multiple="multiple" class="form-control" required="required">

   
               
                                       @foreach($aop as $profession)

                   <option value="{{$profession->id}}">{{$profession->name}}</option>
                                       @endforeach
                                   </select>
                    @if ($errors->has('profession'))
                        <span class="help-block">
                            <strong>{{ $errors->first('profession') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('years_of_experience') ? ' has-error' : '' }}">
                <label for="description" class="col-md-4 control-label">Years of Experience</label>

                <div class="col-md-6">
                    <input id="" type="number" class="form-control" placeholder="Enter years Of Experience" name="years_of_experience" required value="{{$document->years_of_experience}}">

                    @if ($errors->has('years_of_experience'))
                        <span class="help-block">
                            <strong>{{ $errors->first('years_of_experience') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
                <label for="region" class="col-md-4 control-label">Region</label>

                <div class="col-md-6">
            <select name="region"  class="form-control" required="required">
    <option value="{{ $document->region->id }}">  {{ $document->region->name }}</option>
                    @foreach($regions as $region)
                   <option value="{{$region->id}}">{{$region->name}}</option>
                   @endforeach
            </select>
        

                    @if ($errors->has('region'))
                        <span class="help-block">
                            <strong>{{ $errors->first('region') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                <label for="location" class="col-md-4 control-label">Location</label>

                <div class="col-md-6">
              <select name="location"  class="form-control" required="required">
                <option value="{{ $document->city->id }}">{{ $document->city->name }}</option>
                           @foreach($cities as $city)
    <option value="{{$city->id}}">{{$city->name}}</option>
                           @endforeach
                       </select>
                    @if ($errors->has('location'))
                        <span class="help-block">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
<!-- 
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                <label for="cv_file" class="col-md-4 control-label">Pick A CV</label>

                <div class="col-md-6">
           <input id="" type="file" class="form-control" name="file">

                    @if ($errors->has('file'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cv_file') }}</strong>
                        </span>
                    @endif
                </div>
            </div> -->
                <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Edit Records
                    </button>
                </div></div>  
                   
                    </form>
                                       
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
  
@endsection
