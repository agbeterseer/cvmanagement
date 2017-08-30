@extends('admin.layout.admin')
@section('content')
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> CVs'</span>
                    </div>
                 </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">

<a class="btn btn-success" href="{{route('document.create')}}"><i class="fa fa-plus"></i>Add CV</a>
                                </div>
                                <form action="{{route('document.index')}}" method="get">
                                  {{ csrf_field() }}                               
                              
                                <table align="center" width="100%">
                                    <tr>
                                        <td>
             <input type="text" name="s" class="form-control" placeholder="Enter candidates Name or Years of Experience" value="{{ isset($s) ? $s : ''}}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success">Search</button>  
                                        </td>
                                        <td>
                                           
                                        </td>
                                       <td  >
                                         

                                       </td>
                                    </tr>
                                 <tr>
                                    <td>
                                         
                                    </td> 

                                 </tr>
                                </table>
                                  </form>
                                  <div class="row">
           <form action="{{route('region.getRegion')}}" method="post">
                                  {{ csrf_field() }}  
                                  {{method_field('POST')}}             

           <select name="region"  onchange="this.form.submit();" class="form-control" style="margin-left:442px;position: absolute; margin-top: -33px;">

                     <option value="">...Select Region...</option>
                     @foreach($regions as $region)
                     <option value="{{$region->id}}">{{$region->name}}</option>
                     @endforeach
                       </select>
                       </form>
                       </div>
  <span>Note: search for candidates Name and Years of Experience</span>

                            </div>
                        </div>

                        
                        <span>Note: search for candidates Name and Years of Experience</span>
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
                                                
                                                  {{$document->city->name}}

                                                </td>
                                                 <td>{{$document->cv_file}}</td>
                                                 
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