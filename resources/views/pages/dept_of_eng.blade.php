@extends('layout.app')

<title>@yield('pageTitle') SIU | Department Of English</title>


@section('content')
    <div class="big_screen_slider">

        <section class="Caroslider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner accomdn" role="listbox">

                    <div class="item">
                        <img src="/siu/img/library/cse_all.jpg" alt="slider2" width="100%">
                        <div class="carousel-caption">
                            Skill Development for mobile game and Application Development 2018!
                        </div>
                    </div>

                    <div class="item active left">
                        <img src="/siu/img/library/cse_all.jpg" alt="slider2" width="100%">
                        <div class="carousel-caption">
                            Skill Development for mobile game and Application Development 2018!
                        </div>
                    </div>
                    <div class="item next left">
                        <img src="/siu/img/library/cse_all.jpg" alt="slider2" width="100%">
                        <div class="carousel-caption">
                            Skill Development for mobile game and Application Development 2018!
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="previous_ico1"> <i class="fas fa-angle-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="previous_ico2"><i class="fas fa-angle-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </section>

        <div class="main slider_main_raised cst_main_rsd lab_raised">
            <div class="container">
                <div id="main_overview">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 padd_left_z">
                                <ul class="tab-nav cust_tab_nab">
                                    <li id="overview-li" class="active odd first-child">
                                        <a href="#overview" data-toggle="tab">
                                            <i class="fas fa-volleyball-ball"></i>
                                            <div>
                                                <h6>Overview</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="research-li" class="even">
                                        <a href="#mission" data-toggle="tab">
                                            <i class="fas fa-globe"></i>
                                            <div>
                                                <h6>Mission</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="research-li" class="even">
                                        <a href="#vision" data-toggle="tab">
                                            <i class="fas fa-eye"></i>
                                            <div>
                                                <h6>Vision</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="research-li" class="even">
                                        <a data-scroll href="#notice_board">
                                            <i class="fas fa-file-alt"></i>
                                            <div>
                                                <h6>Notice Board</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="scholarship-li" class="even">
                                        <a data-scroll href="#dept_head">
                                            <i class="far fa-comments"></i>
                                            <div>
                                                <h6>Message form dept. head</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="research-li" class="even">
                                        <a data-scroll href="#syllabus">
                                            <i class="fas fa-book-open"></i>
                                            <div>
                                                <h6>Syllabus</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="scholarship-li" class="even">
                                        <a data-scroll href="#faculty_member">
                                            <i class="fas fa-users"></i>
                                            <div>
                                                <h6>Faculty Member</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li id="scholarship-li" class="even">
                                        <a data-scroll href="#tuition_fee">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                            <div>
                                                <h6>Tuition Fee</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="scholarship-li" class="even">
                                        <a href="/alumni">
                                            <i class="fas fa-chalkboard-teacher"></i>
                                            <div>
                                                <h6>Alumni</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">

                                <div id="home-tab-content" class="tab-content custom_tab_content">
                                    <div class="tab-pane  active" id="overview">
                                        <h4>Department Of English</h4>
                                        <p>The principal aim of the Sylhet International University is to provide high
                                            quality education at undergraduate and postgraduate levels relevant to the
                                            needs of a dynamic society.
                                            The courses and curricula are so designed as to enable a student to enter
                                            into the world of work or pursue higher academic and professional goals with
                                            a sound academic foundation. The medium of instructions in Sylhet
                                            International University is English.
                                            The academic goal of the university is not just to make the students pass
                                            the examination and get the degree but to equip them with the means to
                                            become productive members of the community and continue the practice of
                                            lifelong learning.
                                        </p>
                                        <a class="overview_readmore" href="">Discover More <i
                                                    class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="tab-pane " id="mission">
                                        <h4>Mission</h4>
                                        <p>The principal aim of the Sylhet International University is to provide high-quality education at undergraduate and postgraduate levels relevant to the needs of a dynamic society.
                                            The courses and curriculum are so designed as to enable a student to enter into the world of work or pursue higher academic and professional goals with a sound academic foundation.
                                            The academic goal of the university is not just to make the students pass the examination and get the degree but to equip them with the means to become productive members of the community and continue the practice of lifelong learning.</p>
                                        <a class="overview_readmore" href="">Discover More <i
                                                    class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="tab-pane " id="vision">
                                        <h4>Vision</h4>
                                        <p>The principal aim of the Sylhet International University is to provide high-quality education at undergraduate and postgraduate levels relevant to the needs of a dynamic society.
                                            The courses and curriculum are so designed as to enable a student to enter into the world of work or pursue higher academic and professional goals with a sound academic foundation.
                                            The academic goal of the university is not just to make the students pass the examination and get the degree but to equip them with the means to become productive members of the community and continue the practice of lifelong learning.</p>
                                        <a class="overview_readmore" href="">Discover More <i
                                                    class="fas fa-angle-double-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <span id="bg-tab"></span>
                </div>
                <div class="notice_board_inner card" id="notice_board">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="news_events_main" id="news_events_main">
                                <h3>News & Events</h3>
                                <div class="hr_line_notice"></div>
                                <div class="news_events">
                                    <div class="news_events_inner" id="news_events_inner">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="date_box">
                                                    <div class="date_box_inner">
                                                        <span class="box_h3">28</span>
                                                        <span class="box_p">Jan 19</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <div class="news">
                                                    <p>International Conference on Enginnering , Research, Innovation
                                                        and education(CERIE,2009)</p>
                                                </div>
                                                <div class="read_more_btn pull-right">
                                                    <a href="">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news_notice_board_line"></div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="date_box">
                                                    <div class="date_box_inner">
                                                        <span class="box_h3">28</span>
                                                        <span class="box_p">Jan 19</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <div class="news">
                                                    <p>International Conference on Enginnering , Research, Innovation
                                                        and education(CERIE,2009)</p>
                                                </div>
                                                <div class="read_more_btn pull-right">
                                                    <a href="">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="news_notice_board_line"></div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="date_box">
                                                    <div class="date_box_inner">
                                                        <span class="box_h3">28</span>
                                                        <span class="box_p">Jan 19</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-10">
                                                <div class="news">
                                                    <p>International Conference on Enginnering , Research, Innovation
                                                        and education(CERIE,2009)</p>
                                                </div>
                                                <div class="read_more_btn pull-right">
                                                    <a href="">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view_all_news_btn">
                                        <a href="/all_notice">View All News
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="notice_board_main">
                                <h3>Notice Board</h3>
                                <div class="hr_line_notice"></div>
                                <div class="notice_board">
                                    <div class="col-md-12">
                                        <div class="tab-content tab-space" id="tab-content">
                                            <div class="tab-pane active" id="pill1">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2">
                                                        <div class="date_box">
                                                            <div class="date_box_inner">
                                                                <span class="box_h3">28</span>
                                                                <span class="box_p">Jan 19</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10">
                                                        <div class="news">
                                                            <p>International Conference on Enginnering , Research,
                                                                Innovation and education(CERIE,2009)</p>
                                                        </div>
                                                        <div class="read_more_btn pull-right">
                                                            <a href="">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news_notice_board_line"></div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2">
                                                        <div class="date_box">
                                                            <div class="date_box_inner">
                                                                <span class="box_h3">28</span>
                                                                <span class="box_p">Jan 19</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10">
                                                        <div class="news">
                                                            <p>International Conference on Enginnering , Research,
                                                                Innovation and education(CERIE,2009)</p>
                                                        </div>
                                                        <div class="read_more_btn pull-right">
                                                            <a href="">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news_notice_board_line"></div>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2">
                                                        <div class="date_box">
                                                            <div class="date_box_inner">
                                                                <span class="box_h3">28</span>
                                                                <span class="box_p">Jan 19</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-sm-10">
                                                        <div class="news">
                                                            <p>International Conference on Enginnering , Research,
                                                                Innovation and education(CERIE,2009)</p>
                                                        </div>
                                                        <div class="read_more_btn pull-right">
                                                            <a href="">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view_all_news_btn" style="margin-top: 15px">
                                            <a href="/all_notice">View All Notice
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="chairperson_msg_main" id="dept_head">
                    <div class="section_head">
                        <h3 class="camp_text">Message From Dept. Head</h3>
                        <div class="facilities_line"></div>
                        <div class="facitilies_line_inner chairperson"></div>
                    </div>
                    <div class="card mr_t_30">
                        <div class="residential_inner">
                            <div class="residential_inner_box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="residential_right">
                                            <div class="residential_slider">
                                                <img class="img-responsive" src="{{asset('siu/img/chairperson.jpg')}}"
                                                     alt="">
                                                <div class="bottom-left">Mr. Shamim Ahmed</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="residential_left chairman_part">
                                            <p>
                                                Mr. Shamim Ahmed joined as Chairman of the Trustee Board (Gulshan
                                                Foundation for Education Development) of
                                                Sylhet International University on the 31st October, 2009 when his uncle
                                                Mr. Kutubuddin Ahmed retired on
                                                health grounds.
                                                Mr. Shamim Ahmed is a scion of an illustrious family which always played
                                                a philanthropic role in the social
                                                development of Sylhet region. His father late Moin Uddin Ahmed donated
                                                land and did the construction work at
                                                his own expense to establish Moin Uddin Adarsha Mohila College in
                                                1984.</p>
                                            <p> His uncle Mr. Kutubuddin Ahmed
                                                worked
                                                hand in hand with his father in all these philanthropic work.
                                                Subsequently in the vicinity of Moin Uddin
                                                Adarsha Mohila College,
                                                Sylhet International University was also established in 2001 on land
                                                donated by the same family. Not only
                                                the
                                                land but also the funds required for the initial construction work was
                                                donated by the family of Mr. Shamim.
                                            </p>
                                        </div>
                                        <div class="read_more">
                                            <a href="/chairman">Read More
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{--tution fee table--}}
                <section class="curriculam_area" id="tuition_fee">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Fees<span class="second_sp"></span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="curriculam_section">
                                <ul>
                                    <li>
                                        <a href="#" id="collapse" class="collapse">
                                            <span class="list_title"> Programmes Fees Structure</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box" >
                                            <table class="tbl">
                                                <tbody>
                                                <tr >
                                                    <td width="400" style="text-align: center;"><b>Registration x 8 Semester</b></td>
                                                    <td width="500px" style="text-align: center;"><b>Semester Fees x 8 Semester</b></td>
                                                    <td style="text-align: center;">Total Fees</td>
                                                </tr>
                                                <tr class="tr_head" >
                                                    <td style="text-align: center;">14,000 x 8 = 1,12,000 BDT</td>
                                                    <td style="text-align: center;">8,000 x 8 = 64,000 BDT</td>
                                                    <td style="text-align: center;">1,76,000 BDT</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse2" class="collapse">
                                            <span class="list_title"> Tution Fees Waiver</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box2">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="500" style="text-align: center;"><b>Waiver</b></td>
                                                    <td width="200" style="text-align: center;"><b>Rate</b></td>
                                                    <td width="100" style="text-align: center;"><b> Applicable For</b></td>
                                                    <td width="300" style="text-align: center;"><b>Registration x 8 Semester</b></td>
                                                    <td width="300" style="text-align: center;"><b>Tuition Fee x 8 Semester</b></td>
                                                    <td width="200" style="text-align: center;"><b>Total Fees</b></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Childreen of Freedom Fighters</td>
                                                    <td style="text-align: center;">100%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">0 BDT</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">GPA 5.0 in both SSC and HSC	</td>
                                                    <td style="text-align: center;">100%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">0 BDT</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Sum of GPA in SSC and HSC 9	</td>
                                                    <td style="text-align: center;">50%</td>
                                                    <td style="text-align: center;">Male</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">64,000 BDT</td>
                                                    <td style="text-align: center;">1,76,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Sum of GPA in SSC and HSC 9</td>
                                                    <td style="text-align: center;">60%</td>
                                                    <td style="text-align: center;">Female</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">51,200 BDT</td>
                                                    <td style="text-align: center;">1,63,200 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Sum of GPA in SSC and HSC 8</td>
                                                    <td style="text-align: center;">10%</td>
                                                    <td style="text-align: center;">male</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">1,15,200 BDT</td>
                                                    <td style="text-align: center;">2,27,200 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Sum of GPA in SSC and HSC 8</td>
                                                    <td style="text-align: center;">20%</td>
                                                    <td style="text-align: center;">Female</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">1,02,400 BDT</td>
                                                    <td style="text-align: center;">2,14,400 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Scored >=3.75 in both semesters of a year</td>
                                                    <td style="text-align: center;">25%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">96,000 BDT</td>
                                                    <td style="text-align: center;">2,08,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Physically Disable Students	</td>
                                                    <td style="text-align: center;">50%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">64,000 BDT</td>
                                                    <td style="text-align: center;">1,76,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Tribal Students</td>
                                                    <td style="text-align: center;">25%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">96,000 BDT</td>
                                                    <td style="text-align: center;">2,08,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">A Couple (Husband/Wife)</td>
                                                    <td style="text-align: center;">25%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">96,000 BDT</td>
                                                    <td style="text-align: center;">2,08,000 BDT</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td style="text-align: center;">Siblings</td>
                                                    <td style="text-align: center;">50%</td>
                                                    <td style="text-align: center;">All</td>
                                                    <td style="text-align: center;">1,12,000 BDT</td>
                                                    <td style="text-align: center;">64,000 BDT</td>
                                                    <td style="text-align: center;">1,76,000 BDT</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                {{--tution fee table--}}
                <section class="curriculam_area" id="syllabus">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Syllabus<span class="second_sp"></span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="curriculam_section">
                                <ul>
                                    <li>
                                        <a href="#" id="collapse" class="collapse">
                                            <span class="list_title">First Year : Semester I</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td><b> Credits</b></td>

                                                <tr class="tr_head">
                                                    <td>BAN-101</td>
                                                    <td>Introduction to Bangla Bhasha</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HUM-101</td>
                                                    <td>English-1 (Oral &amp; Written Comunication Skills)</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HUM-111</td>
                                                    <td>Bangladesh Studies</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>CSE-100</td>
                                                    <td>Computer Skills</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-101</td>
                                                    <td>Introduction to English Literature I</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>16</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse2" class="collapse">
                                            <span class="list_title">First Year : Semester II</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box2">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td><br>Credits</br></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HUM-103</td>
                                                    <td>English-II (Language Composition &amp; Comprehension)</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-103</td>
                                                    <td>Introduction to Linguistics</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-105</td>
                                                    <td>Critical Appreciation, Rhetoric and Prosody</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HST-101</td>
                                                    <td>Socio-Political and Cultural History of England</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-107</td>
                                                    <td>Introduction to English Literature II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>CVV-100</td>
                                                    <td>Comprehensive Viva Voce</td>
                                                    <td style="text-align: center;">1</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>16</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse3" class="collapse">
                                            <span class="list_title">Second Year : Semester I</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-201</td>
                                                    <td>Advanced Reading and Writing I</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>BAN-103</td>
                                                    <td>Introduction to Bangla Sahitya</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-203</td>
                                                    <td>Phonetics and Phonology</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-205</td>
                                                    <td>History of English Literature</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ECN-101</td>
                                                    <td>Principles of Economics</td>
                                                    <td style="text-align: center;">2</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>15</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse4" class="collapse">
                                            <span class="list_title">Second Year : Semester II</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collaps collapse_box" id="collapse_box">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-207</td>
                                                    <td>Advanced Reading and Writing II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-209</td>
                                                    <td>Anglo-Saxon and Medieval English Literature</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>HST-103</td>
                                                    <td>European History</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-211</td>
                                                    <td>Morphology and Syntax</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>GPL-101</td>
                                                    <td>Goverment and Politics of Bangladesh</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-200</td>
                                                    <td>Comprehensive Viva Voce</td>
                                                    <td style="text-align: center;">1</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>17</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse5" class="collapse">
                                            <span class="list_title">Third Year : Semester I</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box5">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-301</td>
                                                    <td>English for Professional Purposes</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-303</td>
                                                    <td>Aesthetics and Literary Movements</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-305</td>
                                                    <td>Sixteen and Seventeenth Century English Literature</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-307</td>
                                                    <td>Advanced Expository Writings</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>PHL-101</td>
                                                    <td>Western Thoughts</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>16</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse6" class="collapse">
                                            <span class="list_title">Third Year : Semester II</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box6">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-309</td>
                                                    <td>Restoration and 18th Century English Literature</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>PHL-103</td>
                                                    <td>Eastern Thoughts</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-311</td>
                                                    <td>The Romantic Poets</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-313</td>
                                                    <td>Victorian Poetry</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-315</td>
                                                    <td>Victorian Fiction</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-300</td>
                                                    <td>Comprehensive Viva Voce</td>
                                                    <td style="text-align: center;">1</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>16</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse7" class="collapse">
                                            <span class="list_title">Fourth Year : Semester I</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box7">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-401</td>
                                                    <td>English Language Teaching (ELT)</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-403</td>
                                                    <td>English Literacy Theory</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-405</td>
                                                    <td>American Literacy</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-407</td>
                                                    <td>Greek and Latin Classic in Translation</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-409</td>
                                                    <td>Structure of English</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>16</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse8" class="collapse">
                                            <span class="list_title">Fourth Year : Semester II</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box8">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-411</td>
                                                    <td>Modern English Drama</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-413</td>
                                                    <td>Modern English Novel</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-415</td>
                                                    <td>Modern English Poetry</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-400</td>
                                                    <td>Project / Thesis</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-400</td>
                                                    <td>Comprehensive Viva Voce</td>
                                                    <td style="text-align: center;">1</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-417</td>
                                                    <td>Comparative Literature</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-419</td>
                                                    <td>Development of Modern English Language</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-421</td>
                                                    <td>South Asian Literature</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-423</td>
                                                    <td>World Classics</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ENG-402</td>
                                                    <td>Viva Voce(Comprehensive)</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-402</td>
                                                    <td>Comprehansive Viva Voce</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>32</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="teacher_section" id="faculty_member">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Faculty Members<span class="second_sp"></span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/1.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Prof.Rishi Kesh Ghose</h3>
                                        <h5>Dean</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/2.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Khaled Hussain</h3>
                                        <h5>Head & Assistant Professor</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/3.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Abdul Awal Ansary</h3>
                                        <h5>Assistant Professor</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/4.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Sushanta Acharjee</h3>
                                        <h5>Assistant Professor</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/5.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Tonmay Bhattacharjee</h3>
                                        <h5>Senior Lecturer</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/6.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Rajarshi Roy Chowdhury</h3>
                                        <h5>Lecturer</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/7.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Rajib Karmakar</h3>
                                        <h5>Lecturer</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/8.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>M.A.G. Asif</h3>
                                        <h5>Lecturer</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/9.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Murtoza Sifat</h3>
                                        <h5>Lecturer</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="faculty_member">
                                    <div class="image_box">
                                        <div class="ovelay overly_tech"></div>
                                        <img src="{{asset('siu/img/teachers/10.jpg')}}" alt="">
                                        <div class="teachers_social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                            <div class="personal_info">
                                                <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                                <p><i class="fas fa-envelope"></i><a
                                                            href="mailto:">bangladesh@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teacher_desc">
                                        <h3>Mr.Ashiqul Islam Rajib</h3>
                                        <h5>Lecturer</h5>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        jQuery(document).ready(function ($) {
            function scrollToSection(event) {
                event.preventDefault();
                var $section = $($(this).attr('href'));
                $('html, body').animate({
                    scrollTop: $section.offset().top
                }, 500);
            }
            $('[data-scroll]').on('click', scrollToSection);
        }(jQuery));
    </script>

@endpush



