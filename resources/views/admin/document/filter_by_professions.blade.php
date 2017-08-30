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
                        <div class="row">
                         <table width="100%">
                            <tr>
                                <td>
   <a href="{{route('document.index')}}" class="btn btn-success">
                          <i class="fa fa-search"></i>
                          Filter by City
                        </a>
                       </td>
                        
                    <td> 
                          <a href="" class="btn btn-success">
                          <i class="fa fa-search"></i>
                          Filter by Region
                        </a>
 
                          </td>
                               <td>
                                 <a href="{{ route('document.index') }}" class="btn btn-success">
                                 <i class="fa fa-search"></i>
                          Filter by Profession
                                   </a>
 

                                </td>
                            </tr>
                        </table>
                       
                            <div class="col-md-6">
                                <div class="btn-group">
 
 
                                </div>
                            </div>
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
           @foreach($professions as $profession)
  
              @foreach($profession->documents as $document)
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
                   <ul class="dropdown-menu" >
           
                      <li>
              <a href="{{route('document.edit', $document->id)}}">
                            <i class="icon-docs"></i> Edit CV </a>
                         
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
                       @endforeach            
             @endforeach
           
                   </tbody>
                      </table>
                 </div>
              </div>
              <!-- END EXAMPLE TABLE PORTLET-->
          </div>



@endsection