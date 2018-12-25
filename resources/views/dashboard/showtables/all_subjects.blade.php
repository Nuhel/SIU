     @extends('dashboard/dash_inc.adjust')
     @section('content')
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">All Subjects</h2>
            </div>
          </header>


          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid" style="margin:10px">
               <div class="row">
               <div class="col-md-6">
                    <form action="/dashboard/allSubjects/search" method="get" class="sidebar-form">
                    {{ csrf_field() }}
                         <div class="input-group">
                              <input type="text" name="q" class="form-control" placeholder="Search by title, code, credit, discipline, semester, status" required>
                                   <span class="input-group-btn">
                                        <button type="submit" name="search" class="btn btn-info" id="search-btn"><i class="fa fa-search"></i>
                                        </button>
                                   </span>
                         </div>
                    </form>
               </div>
               <div class="col-md-6">
                    <a href="{{ route('allSubjects') }}" class="btn btn-info">Refresh</a>
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
                              <th>Course Title</th>
                              <th>Course Code</th>
                              <th>Course Credit</th>
                              <th>Discipline</th>
                              <th>Semester</th>
                              <th>Status</th>
                             
                              <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                    @if(isset($data))
				@foreach($data as $item)
                            <tr>
                              @php
                                  $base64id=base64_encode($item->id);
                              @endphp
                              <td style="display: none">{{$item->id}}</td>
                              <td>{{$item->course_title}}</td>
                              <td>{{$item->course_code}}</td>
                              <td>{{$item->course_credit}}</td>
                              <td>{{$item->discipline}}</td>
                              <td>{{$item->semester}}</td>
                              <td>{{$item->isActive}}</td>
                              <td class="text-center">
                                   <a class="btn btn-info" href="{{ url('dashboard/updateSubject/'.$base64id.'/') }}"><span class="fas fa-edit"></span></a>
                                        {{-- <button class="delete-subject btn btn-danger btn-info"
                                        data-id="{{$item->id}}"data-code="{{$item->course_code}}">
                                        <span class="fas fa-trash-alt"></span>
                                        </button> --}}
                              </td>

                            </tr>
                            @endforeach
                            @endif
                    @if(isset($details))
                    <p style="font-size: 20px;"> The search results for your query <b> {{ $query }} </b> are :</p>
              
                     @foreach($details as $item)
                       <tr>
                              @php
                                  $base64id=base64_encode($item->id);
                              @endphp
                              <td style="display: none">{{$item->id}}</td>
                              <td>{{$item->course_title}}</td>
                              <td>{{$item->course_code}}</td>
                              <td>{{$item->course_credit}}</td>
                              <td>{{$item->discipline}}</td>
                              <td>{{$item->semester}}</td>
                              <td>{{$item->isActive}}</td>
                              <td class="text-center">
                                   <a class="btn btn-info" href="{{ url('dashboard/updateSubject/'.$base64id.'/') }}"><span class="fas fa-edit"></span></a>
                                        {{-- <button class="delete-subject btn btn-danger btn-info"
                                        data-id="{{$item->id}}"data-code="{{$item->course_code}}">
                                        <span class="fas fa-trash-alt"></span>
                                        </button> --}}
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