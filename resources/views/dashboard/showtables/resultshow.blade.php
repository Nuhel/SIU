     @extends('dashboard/dash_inc.adjust')
     @section('content')
        <div class="content-inner">
          <!-- Page Header-->

      


          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">All Results of {{base64_decode($discipline)}}</h2>
            </div>
          </header>


          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid" style="margin:10px">
               <div class="row">
               <div class="col-md-6">
                   <form action="{{ url('/dashboard/DepartmentalResult/search/'.$discipline.'/') }}"method="get" class="sidebar-form">
                    {{ csrf_field() }}
                         <div class="input-group">
                              <input type="text" name="q" class="form-control" placeholder="Search by reg, roll, discipline, status" required>
                                   <span class="input-group-btn">
                                        <button type="submit" name="search" class="btn btn-info" id="search-btn"><i class="fa fa-search"></i>
                                        </button>
                                   </span>
                         </div>
                    </form>
               </div>
               <div class="col-md-6">
                    <a href="{{ url('/dashboard/DepartmentalResult/'.$discipline.'/') }}" class="btn btn-info">Refresh</a>
               </div>
               </div>
          </div>

          <section class="tables" style="padding: 0">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">

                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th style="display: none">#</th>
                              <th>Roll</th>
                              <th>Reg</th>
                              <th>Discipline</th>
                              <th>Semester</th>
                              <th>Session</th>
                              <th>Course</th>
                              <th>Credit</th>
                              <th>GPA</th>
                              <th>Status</th>
                             
                              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                    @if(isset($data))
				@foreach($data as $item)
                            <tr>
                              @php
                                  $base64id=base64_encode($item->s_id);
                              @endphp
                              <td style="display: none">{{$item->s_id}}</td>
                              <td>{{$item->roll_number}}</td>
                              <td>{{$item->registration_number}}</td>
                              <td>{{$item->discipline}}</td>
                              <td>{{$item->semester}}</td>
                               <td>{{$item->exam_semester}}</td>
                                <td>{{$item->course_code}}</td>
                              <td>{{$item->course_credit}}</td>
                              <td>{{$item->gpa}}</td>
                              <td>{{$item->status}}</td>
                              <td class="text-center">
                                   <a class="btn btn-info" href="#"><span class="fas fa-edit"></span></a>
                                        
                              </td>

                            </tr>
                            @endforeach
                            @endif
                    @if(isset($details))
                    <p style="font-size: 20px;"> The search results for your query <b> {{ $query }} </b> are :</p>
              
                     @foreach($details as $item)
                          <tr>
                              @php
                                  $base64id=base64_encode($item->s_id);
                              @endphp
                              <td style="display: none">{{$item->s_id}}</td>
                              <td>{{$item->roll_number}}</td>
                              <td>{{$item->registration_number}}</td>
                              <td>{{$item->discipline}}</td>
                              <td>{{$item->semester}}</td>
                               <td>{{$item->exam_semester}}</td>
                                <td>{{$item->course_code}}</td>
                              <td>{{$item->course_credit}}</td>
                              <td>{{$item->gpa}}</td>
                              <td>{{$item->status}}</td>
                              <td class="text-center">
                                   <a class="btn btn-info" href="#"><span class="fas fa-edit"></span></a>
                                        
                              </td>

                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                         @if(isset($data)){!! $data->render() !!}@endif
                         @if(isset($details)){!! $details->render() !!}
                         @elseif(isset($message))
                         <p>{{ $message }}</p>
                         @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

               @endsection