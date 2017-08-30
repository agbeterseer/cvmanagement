@extends('admin.layout.admin')
@section('content')
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i
                        <span class="caption-subject bold uppercase"> CVs'</span>
                    </div>
           
                </div>
                <div class="portlet-body">

                    <div class="table-toolbar">
                        <div class="row" style="background:#CCCCCC;">


                     <form class="form-horizontal" action=""   method="post" role="form">
                        {{ csrf_field() }}

                        <table width="100%">
                            <tr>
                                <td>
                    <select name="location" class="form-control" style="width: 250px; " >
                       <option value="">...Select City...</option>
                           @foreach($cities as $city)
                           <option value="{{$city->id}}">{{$city->name}}</option>
                           @endforeach
                       </select>

                       </td>
                        
                    <td> 

                    <select name="region" class="form-control" style="width: 250px;">
                  <option value="">...Select Region...</option>
                           @foreach($regions as $region)
                           <option value="{{$region->id}}">{{$region->name}}</option>
                           @endforeach
                       </select>

                       </td>
                  
                                <td>
                          <select name="profession[]" multiple="multiple"  class="form-control" style="width: 250px;">
                                       @foreach($aop as $profession)
                                       <option value="{{$profession->id}}">{{$profession->name}}</option>
                                       @endforeach
                                   </select>

                                </td>
                            </tr>
                        </table>
             
                           <div class="col-md-6">
                                <div class="btn-group">
<button class="btn btn-success"><i class="fa fa-search"></i> Search</button>
 
                                </div>
                            </div>
      </form>
                        </div>

 
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
                                                <td>{{$document->candidates_name}}</td>
                                       
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
                                                @foreach($document->cities as $city)

                                                {{$city->name}}

                                                @endforeach

                                        

                                                </td>
                                                 <td class="icon-docs">{{$document->cv_file}}</td>
                                                 
                                                    <td>
                                                        <div class="btn-group">
                     <button class="btn btn-xs green dropdown-toggle"  type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                               <ul class="dropdown-menu" >
                                                    <li>
                                          <a href="{{route('document.uploadcv', $document->id)}}">
                                                        <i class="icon-docs"></i> Add CV </a>
                                                     
                                                    </li>
                                                  <li>
                                          <a href="{{route('document.edit', $document->id)}}">
                                                        <i class="icon-docs"></i> Add CV </a>
                                                     
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <form action="" method="POST">
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
                                        <td> No Cvs'</td>
                                        </tr>
                            
                             @endforelse
                           
                            
                         
                                                
                                     


                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
       


@endsection