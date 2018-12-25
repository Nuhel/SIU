@extends('layout.app')

<title>@yield('pageTitle') SIU | Department Of BBA</title>


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
                                        <a href="/alumni">
                                            <i class="fas fa-chalkboard-teacher"></i>
                                            <div>
                                                <h6>Alumni</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="scholarship-li" class="even">
                                        <a data-scroll href="#tuition_fee">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                            <div>
                                                <h6>Tution Fee</h6>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">

                                <div id="home-tab-content" class="tab-content custom_tab_content">
                                    <div class="tab-pane  active" id="overview">
                                        <h4>Department of Business Administration</h4>
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
                <section id="tuition_fee">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Tuition Fee<span class="second_sp"></span></h1>
                            </div>
                        </div>
                    </div>
                    <table class="table-fill">
                        <tbody class="table-hover">
                        <tr>
                            <td class="text-left">Registration</td>
                            <td class="text-left">14,000 TK</td>
                        </tr>
                        <tr>
                            <td class="text-left">Tuition</td>
                            <td class="text-left">16,000 TK</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total in Semester</td>
                            <td class="text-left">30,000 TK</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total To Complete Course</td>
                            <td class="text-left">240,000 TK</td>
                        </tr>
                        </tbody>
                    </table>
                </section>



                <section class="curriculam_area" id="#tuition_fee">
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
                                            <span class="list_title"><i class="far fa-money-bill-alt" style="color: #00A1B7;"></i> Programmes Fees Structure</span>
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
                                                    <td>ACN-111</td>
                                                    <td>Financial Accounting -1</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse2" class="collapse">
                                            <span class="list_title"><i class="far fa-money-bill-alt" style="color: #00A1B7"></i> Tution Fees Waiver</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box2">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="75px"><b>Course No.</b></td>
                                                    <td width="500px"><b>Course Title</b></td>
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HUM-103</td>
                                                    <td>English II: Language Composition and Comprehension</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CAN-211</td>
                                                    <td>Financial Accounting-II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>BMT-201</td>
                                                    <td>Business Mathematics</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-205</td>
                                                    <td>Principles of Banking</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CSE-101</td>
                                                    <td>Introduction to Natural Science: (a) Physical Science (b)Biological Science</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-100</td>
                                                    <td>Comprehensive Viva 1</td>
                                                    <td style="text-align: center;">1</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-211</td>
                                                    <td>Financial Accounting-II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>INS-101</td>
                                                    <td>Introduction to Natural Science</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>PSY-101</td>
                                                    <td>Introduction to Psychology</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FRL-205</td>
                                                    <td>Principle Of Banking</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>30</b></td>
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
                                                    <td>Credits</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ACN-111</td>
                                                    <td>Financial Accounting -1</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>BUS-101</td>
                                                    <td>Introduction to Business</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HUM-101</td>
                                                    <td>English 1: Oral and Written Communication Skills</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>HUM-111</td>
                                                    <td>Bangladesh Studies:(a) Bangladesh Economy (b) Bangladesh Histoy</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CSE-100</td>
                                                    <td>Computer Application in Business</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MIS-100</td>
                                                    <td>Computer Application In Business</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>19</b></td>
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
                                                   <td>Credits</td>
                                               </tr>
                                               <tr class="tr_head">
                                                   <td>HUM-103</td>
                                                   <td>English II: Language Composition and Comprehension</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>CAN-211</td>
                                                   <td>Financial Accounting-II</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>BMT-201</td>
                                                   <td>Business Mathematics</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>FIN-205</td>
                                                   <td>Principles of Banking</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>CSE-101</td>
                                                   <td>Introduction to Natural Science: (a) Physical Science (b)Biological Science</td>
                                                   <td style="text-align: center;">4</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>CVV-100</td>
                                                   <td>Comprehensive Viva 1</td>
                                                   <td style="text-align: center;">1</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>ACN-211</td>
                                                   <td>Financial Accounting-II</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>INS-101</td>
                                                   <td>Introduction to Natural Science</td>
                                                   <td style="text-align: center;">4</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>PSY-101</td>
                                                   <td>Introduction to Psychology</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>FRL-205</td>
                                                   <td>Principle Of Banking</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr>
                                                   <td colspan="2"><b>Total</b></td>
                                                   <td style="text-align: center;" colspan="2"><b>30</b></td>
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
                                                    <td>Credits
                                                    </td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>BCN-201</td>
                                                    <td>Business Comunication</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ECN-111</td>
                                                    <td>Principles of Microeconomics</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-201</td>
                                                    <td>Principles of Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-203</td>
                                                    <td>Organization Behavior</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MIS-201</td>
                                                    <td>Business Statistics-1</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MHR-203</td>
                                                    <td>Organizational Behavior</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MHR-201</td>
                                                    <td>Principles of Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-201</td>
                                                    <td>Management Accounting</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ECN-201</td>
                                                    <td>Business Communication</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>27</b></td>
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
                                                   <td>Credits
                                                   </td>
                                               </tr>
                                               <tr class="tr_head">
                                                   <td>MIS-203</td>
                                                   <td>Business Statistics-II</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>CAN-213</td>
                                                   <td>Management Accounting</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>BLW-201</td>
                                                   <td>Business Law</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>MKT-201</td>
                                                   <td>Introduction to Marketing</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>MGT-205</td>
                                                   <td>Business Environment</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>ECN-211</td>
                                                   <td>Principles of Macroeconomics</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>CVV-200</td>
                                                   <td>Comprehensive Viva 2</td>
                                                   <td style="text-align: center;">1</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>ACN-213</td>
                                                   <td>Management Accounting</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>FRL-201</td>
                                                   <td>Business Law</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>FRL-206</td>
                                                   <td>Business Environment</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr class="tr_head">
                                                   <td>MGT-206</td>
                                                   <td>Business Environment</td>
                                                   <td style="text-align: center;">3</td>
                                               </tr>

                                               <tr>
                                                   <td colspan="2"><b>Total</b></td>
                                                   <td style="text-align: center;" colspan="2"><b>31</b></td>
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
                                                    <td>Credits
                                                    </td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FIN-301</td>
                                                    <td>Principles of Finance</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-301</td>
                                                    <td>Marketing Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-301</td>
                                                    <td>Human Resources Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-303</td>
                                                    <td>Production and Risk Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-300</td>
                                                    <td>Comprehensive Viva 3</td>
                                                    <td style="text-align: center;">1</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN 305</td>
                                                    <td>Insurance and Risk Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FRL-301</td>
                                                    <td>Principles Of Finance</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MHR-301</td>
                                                    <td>Human Resource Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FRL-302</td>
                                                    <td>Insurance &amp; Risk Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>IMG-301</td>
                                                    <td>Production Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-302</td>
                                                    <td>Risk and Insurance Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>31</b></td>
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
                                                    <td>Credits
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>IBS-301</td>
                                                    <td>International Business</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-305</td>
                                                    <td>Enterpreneurship and Small Business Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-303</td>
                                                    <td>Financial Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MIS-303</td>
                                                    <td>Introduction to MIS</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MIS-305</td>
                                                    <td>Operation Research</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FRL-303</td>
                                                    <td>Financial Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MHR-303</td>
                                                    <td>Entrepreneurship and Small Business Management</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MHR-304</td>
                                                    <td>Operation Research</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MIS-304</td>
                                                    <td>Management Information System</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>27</b></td>
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
                                                    <td>Credits
                                                    </td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-401</td>
                                                    <td>Business Research</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-401</td>
                                                    <td>Strategic Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-401</td>
                                                    <td>Cost Accounting</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-403</td>
                                                    <td>Taxation</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-405</td>
                                                    <td>Auditing</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-407</td>
                                                    <td>Advanced Accounting/ Advanced Financial Accounting</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-409</td>
                                                    <td>Accounting Information System</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-411</td>
                                                    <td>Accounting Theory</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-413</td>
                                                    <td>Accounting for govt. and Non-profit Organizations</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ACN-421</td>
                                                    <td>Financial Statement Analysis/Financial Analysis and Control</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-403</td>
                                                    <td>Public Finance and Taxation Practices</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-405</td>
                                                    <td>Capital Budgeting</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-423</td>
                                                    <td>Company Law</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-407</td>
                                                    <td>international Finance</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-409</td>
                                                    <td>Financial Institutions</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-415</td>
                                                    <td>Real Estate Principles</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-411</td>
                                                    <td>Banking and Insurance Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-413</td>
                                                    <td>Investment Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-419</td>
                                                    <td>Protfolio Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-421</td>
                                                    <td>Financial Analysis and Control</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-425</td>
                                                    <td>Working Capital Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-427</td>
                                                    <td>Money and Monetary Policy</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-429</td>
                                                    <td>Financial Planning and Strategy</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-430</td>
                                                    <td>E-Commerce and E-Banking</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-431</td>
                                                    <td>Bank Fund Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>FIN-437</td>
                                                    <td>Financial Derivatives</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-401</td>
                                                    <td>Consumer Behavior</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-403</td>
                                                    <td>Advertising</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-405</td>
                                                    <td>Selling and Sales Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-407</td>
                                                    <td>International Marketing</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-409</td>
                                                    <td>Introduction to Marketing Research</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-411</td>
                                                    <td>Brand Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-413</td>
                                                    <td>Business Logistics</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-415</td>
                                                    <td>Retail Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-417</td>
                                                    <td>Introduction to Strategic Marketing</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-419</td>
                                                    <td>Industrial Marketing</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-421</td>
                                                    <td>Service Marketing</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-422</td>
                                                    <td>Marketing of Agriculture Product</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-423</td>
                                                    <td>Export and Import Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-424</td>
                                                    <td>Pricing Theory and Practices</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MKT-425</td>
                                                    <td>Marketing Communication</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>MGT-413</td>
                                                    <td>Enterpreneurship Development</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-423</td>
                                                    <td>International Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-427</td>
                                                    <td>Administrative Planning &amp; Control</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-429</td>
                                                    <td>Organization Theory and Design</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-431</td>
                                                    <td>Managerial Planning</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-403</td>
                                                    <td>Principles of Total Quality Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-417</td>
                                                    <td>Investment Analysis &amp; Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-421</td>
                                                    <td>Comparative Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-425</td>
                                                    <td>Advanced Organization Theory &amp; Behavior</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-435</td>
                                                    <td>Industrial Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-405</td>
                                                    <td>Materials Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-407</td>
                                                    <td>Productivity Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-409</td>
                                                    <td>Production Planning and Inventory Control</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-411</td>
                                                    <td>Management Science Applications in Operations</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-415</td>
                                                    <td>Quantitative analysis for Decision Making</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-419</td>
                                                    <td>Oparations Research</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-403</td>
                                                    <td>Human Resource Planning</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-405</td>
                                                    <td>Compensation Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-407</td>
                                                    <td>Industrial Law and Labor Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-409</td>
                                                    <td>Traning and Development Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-411</td>
                                                    <td>Industrial Psychology</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-413</td>
                                                    <td>Strategic Human Resource Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-415</td>
                                                    <td>Labor Economics</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-417</td>
                                                    <td>Advanced Human Resource Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-419</td>
                                                    <td>Industrial Relations</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-421</td>
                                                    <td>Human Resource Practice in Bangladesh</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-423</td>
                                                    <td>International Human Resource Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>HRM-425</td>
                                                    <td>Conflict Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ECN-401</td>
                                                    <td>Comparative Economic System</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FIN-441</td>
                                                    <td>International Finance</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FIN-443</td>
                                                    <td>Legal Environment of International Business</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>IBS-417</td>
                                                    <td>Analytical Study of International Trade Agreement</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ECN-403</td>
                                                    <td>International Economics</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>IBS-411</td>
                                                    <td>Global Business Strategy</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>IBS-413</td>
                                                    <td>Country Risk Analysis</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>IBS-415</td>
                                                    <td>International Competitiveness</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>IBS-419</td>
                                                    <td>Foreign Trade of Bangladesh</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-403</td>
                                                    <td>Software Engineering</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-405</td>
                                                    <td>Decission Support System (DSS)</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-407</td>
                                                    <td>Data Communication and Network for Business</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-409</td>
                                                    <td>Data Structures and Algorithms</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-411</td>
                                                    <td>Advanced Computer Programming</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-413</td>
                                                    <td>System Analysis and Design</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-415</td>
                                                    <td>Database Management and Development</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-417</td>
                                                    <td>Local Area Networking</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-419</td>
                                                    <td>E-Commerce and Web Programming</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MIS-421</td>
                                                    <td>Multimedia System Design</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>ENG-411</td>
                                                    <td>Technology Management in MIS</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MHR-401</td>
                                                    <td>Stategic Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FRL-403</td>
                                                    <td>Public Finance Taxation Practices</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FRL-421</td>
                                                    <td>Financial Analysis and Control</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FRL-425</td>
                                                    <td>Working Capital Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FRL-411</td>
                                                    <td>Bank Fund Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>FRL-409</td>
                                                    <td>Financial Institute and Market</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-402</td>
                                                    <td>Project Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>0</b></td>
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
                                                    <td>Credits
                                                    </td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>BBA-400</td>
                                                    <td>Internship Program (12 Weeks+ 4 Week)</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>CVV-401</td>
                                                    <td>Comprehensive Viva Voce</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>CVV-400</td>
                                                    <td>Comprehansive Viva Voce</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-408</td>
                                                    <td>Hospitality &amp; Tourism Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>MGT-422</td>
                                                    <td>Performance Management</td>
                                                    <td style="text-align: center;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>0</b></td>
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



