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
                            <img src="/siu/img/profile-img.jpg" alt="">
                            <div class="name-profile t-center">
                                <h5 class="uppercase">Rasel Ahmed</h5>
                            </div>
                        </div>
                        <ul class="nav nav-pills cst_nav_pill flex-column">
                            <li class="nav-item cst_nav_item active hvr-bounce-to-right">

                                <a class="nav-link" href="#tab1" data-toggle="tab"><i class="fas fa-user-alt"></i>About</a>
                            </li>
                            <li class="nav-item cst_nav_item hvr-bounce-to-right">
                                <a class="nav-link" href="#tab2" data-toggle="tab"><i class="fas fa-clipboard-list"></i>Results</a>
                            </li>
                            <li class="nav-item cst_nav_item hvr-bounce-to-right">
                                <a class="nav-link" href="#tab3" data-toggle="tab"><i class="fas fa-phone"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="row">
                                    <div class="col-md-12  ">
                                        <div class="main-title text-center">
                                            <h1>Rasel Ahmed</h1>
                                            <h3>Dept. of CSE</h3>
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
                                                                    <li>Misbahul Islam Thuaha</li>
                                                                    <li>Selim Ahmed </li>
                                                                    <li>Selina Begum</li>
                                                                    <li>13/05/1997</li>
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
                                                                    <li>161101017</li>
                                                                    <li>2016</li>
                                                                    <li>CSE</li>
                                                                    <li>30017</li>
                                                                    <li>12/02/2016</li>
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
                                                                    <li>Selim Ahmed</li>
                                                                    <li>Sunamgong, Sylhet</li>
                                                                    <li>01795123636</li>
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
                            <div class="tab-pane" id="tab2">
                                <div class="main-title text-center">
                                    <h1>Rasel Ahmed</h1>
                                    <h3>Dept. of CSE</h3>
                                    <div class="block-content mb-100 padd_15">
                                        <div class="table-responsive">
                                            <table class="table table-striped cst_table_ctrl">
                                                <thead>
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Credit</th>
                                                    <th>GPA</th>
                                                    <th>Grade</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>CSE - 205</td>
                                                        <td>Computer Fundamental</td>
                                                        <td>3.0</td>
                                                        <td>3.5</td>
                                                        <td>A</td>
                                                        <td>Regular</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSE - 205</td>
                                                        <td>Computer Fundamental</td>
                                                        <td>3.0</td>
                                                        <td>3.5</td>
                                                        <td>A</td>
                                                        <td>Regular</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSE - 205</td>
                                                        <td>Computer Fundamental</td>
                                                        <td>3.0</td>
                                                        <td>3.5</td>
                                                        <td>A</td>
                                                        <td>Regular</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSE - 205</td>
                                                        <td>Computer Fundamental</td>
                                                        <td>3.0</td>
                                                        <td>3.5</td>
                                                        <td>A</td>
                                                        <td>Regular</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CSE - 205</td>
                                                        <td>Computer Fundamental</td>
                                                        <td>3.0</td>
                                                        <td>3.5</td>
                                                        <td>A</td>
                                                        <td>Regular</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="main-title text-center">
                                    <h1>Rasel Ahmed</h1>
                                    <h3>Dept. of CSE</h3>
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
                                                            <li><strong>Present Address: </strong>Sreerampur,Brahmanbaria,Bangladesh<br></li>
                                                            <li><strong>Present Address: </strong>KajolShah, Medical Road, Sylhet<br></li>
                                                            <li><strong>Phone No:</strong> 01795129671<br></li>
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
                                                            <li><strong>Personal Email :</strong> raselqac77@gmail.com<br></li>
                                                            <li><strong>Academic Email :</strong> raselqax@gmail.com<br></li>
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
