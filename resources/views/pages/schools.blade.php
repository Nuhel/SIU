@extends('layout.app')

<title>@yield('pageTitle') Schools</title>

@push('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
@endpush


@section('content')
        <div class="main main-raised cst_main_rsd">
        <section class="all_schools">
            <div class="container">
                <div class="card card-nav-tabs nav_card">
                    <div class="card-header card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper schools_tab mr_t_60 custom_tab_style">
                                <ul class="nav nav-tabs tabs" data-tabs="tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#science" data-toggle="tab">
                                            <span class="schools_tab_text">School of Science and Engineering</span>
                                            <div class="ripple-container"></div></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#laws" data-toggle="tab">
                                            <span class="schools_tab_text">School of Laws</span>
                                            <div class="ripple-container"></div></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#humanities" data-toggle="tab">
                                            <span class="schools_tab_text">School of Humanities</span>
                                            <div class="ripple-container"></div></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#business" data-toggle="tab">
                                            <span class="schools_tab_text">School of Business</span>
                                            <div class="ripple-container"></div></a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div><div class="card-body mr_t_60">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="science">
                                <div class="custom_container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 medium_screen">
                                            <div class="card card_box" style="width: 30rem;">
                                                <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/cse.jpeg')}}" alt="Card image cap" >
                                                <div class="card-body">
                                                    <h5 class="card-title">Computer Science And Engineering</h5>
                                                </div>
                                                <ul class="list-group list-group-flush custom_style">
                                                    <li class="list-group-item"><a href="/dept_of_cse">Overview</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_cse">Faculty Members</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_cse">Syllabus</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_cse">Notice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 medium_screen">
                                            <div class="card card_box" style="width: 30rem;">
                                                <img class="img-responsive card-img-top" src="{{asset( 'siu/img/card_img/ComputerScienceandInformatics.jpg' )}}" alt="Card image cap" >
                                                <div class="card-body">
                                                    <h5 class="card-title">Computer Science And Informatics</h5>
                                                </div>
                                                <ul class="list-group list-group-flush custom_style">
                                                    <li class="list-group-item"><a href="/dept_of_csi">Overview</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_csi">Faculty Members</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_csi">Syllabus</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_csi">Notice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 medium_screen">
                                            <div class="card card_box" style="width: 30rem;">
                                                <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/ece.jpg')}}" alt="Card image cap" >
                                                <div class="card-body">
                                                    <h5 class="card-title">Electronics and Communication Engineering</h5>
                                                </div>
                                                <ul class="list-group list-group-flush custom_style">
                                                    <li class="list-group-item"><a href="/dept_of_ece">Overview</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_ece">Faculty Members</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_ece">Syllabus</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_ece">Notice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="laws">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="card card_box" style="width: 35rem;">
                                                <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/law.jpeg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">Law</h5>
                                                </div>
                                                <ul class="list-group list-group-flush custom_style">
                                                    <li class="list-group-item"><a href="/dept_of_law">Overview</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_law">Faculty Members</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_law">Syllabus</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_law">Notice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="humanities">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="card card_box" style="width: 35rem;">
                                                <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/humanitie.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">English</h5>

                                                </div>
                                                <ul class="list-group list-group-flush custom_style">
                                                    <li class="list-group-item"><a href="/dept_of_eng">Overview</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_eng">Faculty Members</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_eng">Syllabus</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_eng">Notice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="business">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="card card_box" style="width: 35rem;">
                                                <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/business.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">Business Administration</h5>
                                                </div>
                                                <ul class="list-group list-group-flush custom_style">
                                                    <li class="list-group-item"><a href="/dept_of_bba">Overview</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_bba">Faculty Members</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_bba">Syllabus</a></li>
                                                    <li class="list-group-item"><a href="/dept_of_bba">Notice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <h1 class="text-center">Example 2</h1>
                {{--=============== card 2 ================--}}
                <div class="container mr_t_50 mr_b_50">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-pricing card_for_img">
                                <div class="card-body ">
                                    <h6 class="card-category text-gray">Computer Science And Engineering</h6>
                                    <div class="icon icon-info">
                                        <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/cse.jpeg')}}" alt="Card image cap" height="200" >
                                    </div>
                                    <div class="btn_wrapper">
                                        <a href="#pablo" class="btn btn-info btn-round">Overview</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Member</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Syllabus</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Notice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-pricing card_for_img">
                                <div class="card-body ">
                                    <h6 class="card-category text-gray">Computer Science And Informatics</h6>
                                    <div class="icon icon-info">
                                        <img class="img-responsive card-img-top" src="{{asset( 'siu/img/card_img/ComputerScienceandInformatics.jpg' )}}" alt="Card image cap"  height="200" >
                                    </div>
                                    <div class="btn_wrapper">
                                        <a href="#pablo" class="btn btn-info btn-round">Overview</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Member</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Syllabus</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Notice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-pricing card_for_img">
                                <div class="card-body ">
                                    <h6 class="card-category text-gray">Electronics and Communication Engineering</h6>
                                    <div class="icon icon-info">
                                        <img class="img-responsive card-img-top" src="{{asset('siu/img/card_img/ece.jpg')}}" alt="Card image cap" height="200" >
                                    </div>
                                    <div class="btn_wrapper">
                                        <a href="#pablo" class="btn btn-info btn-round">Overview</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Member</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Syllabus</a>
                                        <a href="#pablo" class="btn btn-info btn-round">Notice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

    </div>













@endsection



@push('js')

@endpush
