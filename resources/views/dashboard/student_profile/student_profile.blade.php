@extends('layout.app')

@section('title','SIU | Student Profile')


@push('css')

@endpush


@section('content')
    <div class="main main-raised cst_main_rsd">
        <div class="container contents"   style="padding-top: 30px">
            <div class="profile_main">
                <div class="row">
                    <div class="col-md-2">
                        <div class="img-profile">
                          <img src="/storage/uploaded/students/{{$StudentInfo->picture}}" alt="">
                            <div class="name-profile t-center">
                              <h5 class="uppercase">{{$StudentInfo->student_name}}</h5>
                            </div>
                        </div>
                        <ul class="nav nav-pills cst_nav_pill flex-column">
                            <li class="nav-item active cst_nav_item hvr-bounce-to-right">
                                <a class="nav-link" href="#tab2" data-toggle="tab"><i class="fas fa-clipboard-list"></i>Results</a>
                            </li>
                            <li class="nav-item cst_nav_item hvr-bounce-to-right">

                                <a class="nav-link" href="#tab1" data-toggle="tab"><i class="fas fa-user-alt"></i>About</a>
                            </li>
                            <li class="nav-item cst_nav_item hvr-bounce-to-right">
                                <a class="nav-link" href="#tab3" data-toggle="tab"><i class="fas fa-phone"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div class="tab-pane" id="tab1">
                                <div class="row">
                                    <div class="col-md-12  ">
                                        <div class="main-title text-center">
                                            <h1>{{$StudentInfo->student_name}}</h1>
                                    <h3>{{$StudentInfo->discipline}}</h3>
                                            <div class="block-content">
                                                <div class="row">
                                                    <div class="col-md-12  ">
                                                        <div class="sub-title mb-40">
                                                            <h2 class="uppercase">Basic Informations</h2>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">

                                                    <!--Listing-->
                                                    <div class="listing mt-40">

                                                        <div class="listing-inner">
                                                            <div class="listing-event">
                                                                   <ul class="data left">
                                                                    <li class="clr_1">Student Name</li>
                                                                    <li class="clr_1">Father's Name</li>
                                                                    <li class="clr_1">Mother's Name</li>
                                                                    <li class="clr_1">Date of birth</li>
                                                                </ul>
                                                                <ul class="data right">
                                                                    <li>{{$StudentInfo->student_name}}</li>
                                                                    <li>{{$StudentInfo->fathers_name}}</li>
                                                                    <li>{{$StudentInfo->mothers_name}}</li>
                                                                    <li>{{$StudentInfo->dob}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content ">
                                                <div class="row">
                                                    <div class="col-md-12  ">
                                                        <div class="sub-title mb-40">
                                                            <h2 class="uppercase">Academic Informations</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">
                                                    <div class="listing mt-40" style="margin-bottom: 50px">

                                                        <div class="listing-inner">
                                                            <div class="listing-event">
                                                                <ul class="data left">
                                                                    <li class="clr_1">Registration No.</li>
                                                                    <li class="clr_1">Academic Year</li>
                                                                    <li class="clr_1">Discipline</li>
                                                                    <li class="clr_1">Roll No.</li>
                                                                    <li class="clr_1">Date Of Admission</li>
                                                                </ul>
                                                                <ul class="data right">
                                                                    <li>{{$StudentInfo->registration_number}}</li>
                                                                    <li>{{$StudentInfo->academic_year}}</li>
                                                                    <li>{{$StudentInfo->discipline}}</li>
                                                                    <li>{{$StudentInfo->roll_number}}</li>
                                                                    <li>{{$StudentInfo->created_at}}</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content ">
                                                <div class="row">
                                                    <div class="col-md-12  ">
                                                        <div class="sub-title mb-40">
                                                            <h2 class="uppercase">Legal Guardian</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">
                                                    <div class="listing mt-40" style="margin-bottom: 50px">

                                                        <div class="listing-inner">
                                                            <div class="listing-event">
                                                               <ul class="data left">
                                                                    <li class="clr_1">Guardian's Name</li>
                                                                    <li class="clr_1">Guardian's Address</li>
                                                                    <li class="clr_1">Guardian's Phone No.</li>
                                                                </ul>
                                                                <ul class="data right">
                                                                    <li>{{$StudentInfo->legal_guardian_name}}</li>
                                                                    <li>{{$StudentInfo->legal_guardian_address}}</li>
                                                                    <li>{{$StudentInfo->legal_guardian_phone_number}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active" id="tab2">
                                <div class="main-title text-center">
                                   <h1>{{$StudentInfo->student_name}}</h1>
                                    <h3>{{$StudentInfo->discipline}}</h3>
                                      @php
                                        $cnt=0;
                                    @endphp
                                    @if (!count($exam_result)>0)
                                    <h1 style="color: #00b3c0; font-weight: bold">You Don't Have Any Result History To View</h1>
                                        
                                    @endif
  
                            @foreach ($exam_result as $key => $value)
                                    <div class="block-content mb-100 padd_15">
                                        <div class="table-responsive">
                                              <h3 class="pull-left">{{$key}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$value[$cnt]['semester']}}</h3>
                                              <table class="table table-striped cst_table_ctrl">
                                                <thead>
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Credit</th>
                                                    <th>GPA</th>
                                                    <th>Grade</th>
                                                    <th>Remarks</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($value as $subValue)
                                                   
                                                    <tr>
                                                        <td>{{$subValue->course_code}}</td>
                                                        <td>{{$subValue->course_title}}</td>
                                                        <td>{{$subValue->course_credit}}</td>
                                                        <td>{{$subValue->gpa}}</td>
                                                        <td>{{$subValue->grade}}</td>
                                                        <td>{{$subValue->remarks}}</td>
                                                        <td>{{$subValue->status}}</td>
                                                    </tr>
                                                      @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                     @endforeach
                                       @php
                                             $cnt+=1;
                                     @endphp
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="main-title text-center">
                                  <h1>{{$StudentInfo->student_name}}</h1>
                                    <h3>{{$StudentInfo->discipline}}</h3>
                                    <div class="block-content mb-100 ">
                                        <div class="row">
                                            <div class="col-md-12  ">
                                                <div class="sub-title mb-40">
                                                    <h2 class="uppercase">Contact Informations</h2>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row"  style="margin: 5px;">
                                            <div class="block-info ">
                                                <div class="col-md-6">
                                                    <div class="info">
                                                        <div class="ico mb-20">
                                                            <i class="fas fa-portrait"></i>
                                                        </div>
                                                        <h5 class="mb-20">Contact Informations</h5>
                                                        <ul>
                                                            <li><strong>Present Address: </strong>{{$StudentInfo->mailing_address}}<br></li>
                                                            <li><strong>Permanent Address: </strong>{{$StudentInfo->permanent_address}}<br></li>
                                                            
                                                            <li><strong>Present Address Phone No:</strong>{{$StudentInfo->mailing_address_number}}<br></li>
                                                            <li><strong>Permanent Address Phone No:</strong>{{$StudentInfo->permanent_address_number}}<br></li>
                                                            <li><strong>Emargency Contact No:</strong>{{$StudentInfo->emargency_contact_number}}<br></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="info">
                                                        <div class="ico mb-20">
                                                            <i class="fas fa-mobile-alt"></i>
                                                        </div>
                                                        <h5 class="mb-20">Student's Email Information</h5>
                                                        <ul>
                                                            <li><strong>Personal Email :</strong> {{$StudentInfo->personal_email}}<br></li>
                                                            <li><strong>Academic Email :</strong> {{$StudentInfo->authorized_email}}<br></li>
                                                            <br>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('scripts')

@endpush
