@extends('admin.layout.admin')
@section('content')
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> CV Category Search</span>
                    </div>
                  </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row" >
 
                        <table width="100%">
                            <tr>
                                <td>
               
 <form  action="{{route('document.view_filter_by_city')}}"   method="post" role="form">
   {{ csrf_field() }}
     <a href="" class="btn btn-success form-control" style="width: 250px; margin-top: -90px;">
                          <i class="fa fa-search "></i>
                          Filter by City
                        </a>
                    <select name="location" class="form-control" style="width: 250px;margin-top: -30px; " onchange="this.form.submit();" >
                       <option value="">...Select City...</option>
                           @foreach($cities as $city)
                           <option value="{{$city->id}}">{{$city->name}}</option>
                           @endforeach
                       </select>
</form>
                       </td>
                        
                        <td> 
  
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
                                       @foreach($aop as $profession)
                                       <option value="{{$profession->id}}">{{$profession->name}}</option>
                                       @endforeach
                                   </select>
                            </form>
                                </td>
                            </tr>
                        </table>
                            <div class="col-md-6">
                                <div class="btn-group">
                              </div>
                            </div>
                        </div>
                        <hr>
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
                                <th>Date Created</th>
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
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        <td> No Cvs'</td>
                                        </tr>
                            
                             @endforelse

                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- {{ $documents->links() }} END EXAMPLE TABLE PORTLET appends(['s' => $s])->-->
            </div>
@endsection