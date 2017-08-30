<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cv Database</title>
      
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    </head>
    <body>
      <nav class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
            <li><a href=""> </a></li>
            <li><a href=""> </a></li>
        </ul>
        </nav>
        <br><br><br><br>
      <div class="container">
         <!--      <div class="col-md-8">
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter some name" required>
                    <p class="error text-center alert alert-danger hidden"></p>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit" id="add">
                        <span class="glyphicon glyphicon-plus"></span> ADD
                    </button>
                
                </div> -->
                           @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}"> 
                            {!! session('message.content') !!}
                            </div>
                        @endif

                        @if(Session()->has('success'))
                <div class="alert alert-success"> 
                {!! Session::get('success') !!}
                </div>
                        @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            <div class="form-group row add">
  
                    <div class="flex-center position-ref full-height">
        
            <div class="content">
    <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
         
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
            <!-- <p id="myElem" style="display:none">Saved</p> -->
   <form class="form-horizontal" action="{{route('candidate.index')}}" enctype="multipart/form-data" method="post" role="form">
                        {{ csrf_field() }}
 
   <div class="form-group{{ $errors->has('candidates_name') ? ' has-error' : '' }}">
             
      <label for="candidates_name" class="col-md-4 control-label">Candidates Name</label>
                <div class="col-md-6">
         <input type="text" class="form-control"  id="candidates_name" name="candidates_name" placeholder="Enter name of candidates name"   required>
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

                         <select name="profession[]" id="profession" multiple="multiple"  class="form-control" required="required">
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
                    <input  type="number" id="years_of_experience" class="form-control" placeholder="Enter years Of Experience" name="years_of_experience" required>

                    @if ($errors->has('years_of_experience'))
                        <span class="help-block">
                            <strong>{{ $errors->first('years_of_experience') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('region_id') ? ' has-error' : '' }}">
                <label for="region_id" class="col-md-4 control-label">Region</label>

                <div class="col-md-6">
              <select name="region_id" id="region_id"  class="form-control" required="required">
              <option value="">...select one...</option>
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

            <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                <label for="city_id" class="col-md-4 control-label">Location</label>

                <div class="col-md-6">
              <select name="city_id"  id="city_id" class="form-control" required="required">
                <option value="">...select one...</option>
                           @foreach($cities as $city)
                           <option value="{{$city->id}}">{{$city->name}}</option>
                           @endforeach
                       </select>
                    @if ($errors->has('city_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('city_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                <label for="cv_file" class="col-md-4 control-label">Upload  A CV</label>

                <div class="col-md-6">
           <input id="file" type="file" class="form-control" name="file" required="required">

                    @if ($errors->has('file'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cv_file') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
                <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                   <button class="btn btn-primary" type="submit" id="add">
                    <span class="glyphicon glyphicon-plus"></span> Update 
                    CV
                    </button>
            <!-- <img id="loading" src="{{asset('uploads/ajax-loader.gif')}}" > -->
                </div>
                </div> 
                </form>
                    <!-- </div> -->

           <p class="error text-center alert alert-danger hidden" style="padding-left: 350px; width: 1000px;"></p>            
                    </div>
                </div>

                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
   
            </div>
        </div>
    </div>
  

    </div>
      <div class="content" style="padding-left: 450px; width: 1000px;">

                 @if (count($errors))
<div class="alert alert-danger">
                    <ul >
                        @foreach ($errors->all() as $error)

                            <li>
                 <p class="error text-center alert alert-danger hidden"></p>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>
                 @endif 
                 </div>

   
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      <!-- <script src="{{ asset('js/script.js') }}"></script> -->
    </body>
</html>