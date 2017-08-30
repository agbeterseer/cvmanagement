@extends('admin.layout.admin')
@section('content')
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Candidates CV</span>
                    </div>
                 </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                    <div class="row">
          
                    <div class="col-md-6">
                    <div class="btn-group">

<a class="btn btn-success" href="{{route('document.create')}}"><i class="fa fa-plus"></i>Add CV</a>
                                </div>
                            </div>
                    </div>
                        <div class="row">
                        <table width="100%">
                            <tr>
                                <td>
               
 <form  action="{{route('document.view_filter_by_city')}}"   method="post" role="form">
   {{ csrf_field() }}
     <a href="" class="btn btn-success form-control" style="width: 250px;  >
                          <i class="fa fa-search "></i>
                          Filter by City
                        </a>
                 <select name="location" class="form-control" style="width: 250px; " onchange="this.form.submit();" >
                       <option value="">...Select City...</option>
                           @foreach($cities as $city)
                           <option value="{{$city->id}}">{{$city->name}}</option>
                           @endforeach
                       </select>
                    </form>
                       </td>
                        
                        <td> 
     <form action="{{route('document.index')}}" method="get">
                                  {{ csrf_field()}}
                                  <table align="center" width="100%">
                                    <tr>
                                        <td>
<input type="text" name="s" class="form-control" placeholder="Enter candidates Name or Years of Experience" value="{{ isset($s) ? $s : ''}}">
                                        </td>
                                        <td>
                <button type="submit" class="btn btn-success">Search</button>
                                        </td>
                                        <span>Note: search for candidates Name and Years of Experience</span> 
                                    </tr>
                                </table>
                                  </form>
                          </td>
                             <td> 
 <!-- <form class="form-horizontal" action="{{route('document.search_category')}}" method="post" role="form"> 
   {{ csrf_field() }}      
    <input type="text" name="s" placeholder="Enter Years Of Experience" class="form-control" value="{{ isset($s) ? $s : ''}}" >
      <button type="submit" class="btn btn-success  ">
                          <i class="fa fa-search"></i>
                          Filter by Yeas OF Experience
                       </button>
                        </td>
                          </form> -->
                               <td>
      <form class="form-horizontal" action="{{route('document.view_filter_by_professions')}}" method="post" role="form">
                {{method_field('POST')}}
                {{ csrf_field() }}
                               <button class="btn btn-success " style="width: 250px; margin-top: -20px;"> 
                                 <i class="fa fa-search"></i>
                          Filter by Profession
                                 </button>  
  <select name="profession[]" multiple="multiple"  class="form-control" style="width: 250px; margin-bottom: : -60px;">
                                       @foreach($professions as $profession)
                                       <option value="{{$profession->id}}">{{$profession->name}}</option>
                                       @endforeach
                                   </select>
                            </form>
                                </td>
                            </tr>
                        </table>
                            </div>

                        </div>
         
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
                                <th> Candidate's name </th>
                                <th> Profession </th>
                                <th> Years Of Experience </th>
                                <th> Date Created </th>
                                <th> Location </th>
                                <th> File </th>
                                <th> Actions </th>
                                </tr>
                        </thead>
                        <tbody>
                        @forelse($documents as $document)
                       <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>

                            <td>{{ title_case($document->candidates_name)}}</td>
                            <td>
                                 @foreach($document->professions as $proferssion)
                              
                              {{$proferssion->name}}
                        @endforeach
                            </td>
                            <td>{{$document->years_of_experience}}</td>
                            <td>
                            {{$document->created_at}}
                            
                            </td>
                            <td>
                            {{$document->city->name}}
                            
                            </td>
                             <td>
      <form action="{{route('document.getFile')}}" method="POST">
        <input type="hidden" name="cv_file" value="{{ $document->cv_file }}">
                                                        {{csrf_field()}}
                                                        {{method_field('POST')}}

               <button class="btn btn-xs btn-primary  dropdown-toggle"  type="submit"> CV<i class="fa fa-download"></i></button>
             </form>
                                                      </td>
                                                      <td>
                 <div class="btn-group">
                     <button class="btn btn-xs green dropdown-toggle"  type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>

                   @role(['admin'])
                                               <ul class="dropdown-menu" >
                                        
                                                  <li>
                                          <a href="{{route('document.edit', $document->id)}}">
                                                        <i class="icon-docs"></i> Edit CV </a>
                                                     
                                                    </li>
                                                    <li class="divider"> </li>
            <form  class="delete" action="{{route('document.destroy', $document->id)}}" method="POST">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete"></form> 
                                                            </ul>
                                                               @endrole
                                                        </div>  
                                                    </td>
                                                </tr>
                                                 @empty
                                        <tr>
                                        <td> No Cvs'</td>
                                        </tr> 
                             @endforelse 
                                            </tbody>
                                        </table> 
                        {{ $documents->appends(['s' => $s])->links() }}

                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div> 


@endsection
 
