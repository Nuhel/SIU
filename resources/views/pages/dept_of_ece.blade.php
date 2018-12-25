@extends('layout.app')

<title>@yield('pageTitle') SIU | Department</title>


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
                                        <h4>Department Of Electronics And Communication Engineering</h4>
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
                                        <p>The principal aim of the Sylhet International University is to provide
                                            high-quality education at undergraduate and postgraduate levels relevant to
                                            the needs of a dynamic society.
                                            The courses and curriculum are so designed as to enable a student to enter
                                            into the world of work or pursue higher academic and professional goals with
                                            a sound academic foundation.
                                            The academic goal of the university is not just to make the students pass
                                            the examination and get the degree but to equip them with the means to
                                            become productive members of the community and continue the practice of
                                            lifelong learning.</p>
                                        <a class="overview_readmore" href="">Discover More <i
                                                    class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="tab-pane " id="vision">
                                        <h4>Vision</h4>
                                        <p>The principal aim of the Sylhet International University is to provide
                                            high-quality education at undergraduate and postgraduate levels relevant to
                                            the needs of a dynamic society.
                                            The courses and curriculum are so designed as to enable a student to enter
                                            into the world of work or pursue higher academic and professional goals with
                                            a sound academic foundation.
                                            The academic goal of the university is not just to make the students pass
                                            the examination and get the degree but to equip them with the means to
                                            become productive members of the community and continue the practice of
                                            lifelong learning.</p>
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


                {{--tution fee table--}}
                <section class="curriculam_area" id="syllabus">

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Syllabus - Course Offering (Day Program)<span
                                            class="second_sp"></span></h1>
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
                                                    <td width="93">Course Code</td>
                                                    <td width="411">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">HUM –101D</td>
                                                    <td width="411">Oral and Written Communication in English Language
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">PHY – 101</td>
                                                    <td width="411">Mechanics, Waves, Optics, Heat&nbsp; and
                                                        Thermodynamics
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">MTH – 101D</td>
                                                    <td width="411">Differential and Integral Calculus</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">HUM – 111D</td>
                                                    <td width="411">Bangladesh Studies: History and Society of
                                                        Bangladesh
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 103</td>
                                                    <td width="411">Electrical Circuits I</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 104</td>
                                                    <td width="411">Electrical Circuits I Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">CHE – 101</td>
                                                    <td width="411">Chemistry</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">CHE – 102</td>
                                                    <td width="411">Chemistry Lab</td>
                                                    <td width="120">0.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">&nbsp;</td>
                                                    <td width="411"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>19.5</strong></td>
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
                                                    <td width="93"><strong>Course Code</strong></td>
                                                    <td width="411">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">HUM – 103</td>
                                                    <td width="411">Language Composition and Comprehension</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">PHY – 103</td>
                                                    <td width="411">Electromagnetism and Modern Physics</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">PHY – 104</td>
                                                    <td width="411">Physics Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">MTH –103D</td>
                                                    <td width="411">Geometry and Linear Algebra</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">CSE – 103</td>
                                                    <td width="411">Computer Programming in C</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">CSE – 104</td>
                                                    <td width="411">Computer Programming in C Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 105</td>
                                                    <td width="411">Electrical Circuits II</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 106</td>
                                                    <td width="411">Electrical Circuits II Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">&nbsp;</td>
                                                    <td width="411"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>19.5</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">MTH – 201D</td>
                                                    <td width="408">Vector Analysis and Complex Variable</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 205</td>
                                                    <td width="408">Electronic Circuits – I</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 206</td>
                                                    <td width="408">Electronic Circuits – I Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ACN – 201</td>
                                                    <td width="408">Principles of Accounting</td>
                                                    <td width="120">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECN – 101</td>
                                                    <td width="408">Principles of Economics</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 209</td>
                                                    <td width="408">Numerical Methods</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 210</td>
                                                    <td width="408">Electronic Simulation</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">IPE – 393</td>
                                                    <td width="408">Industrial Management</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>20.0</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">MTH – 203D</td>
                                                    <td width="408">Differential Equations, Laplace Transforms and
                                                        Fourier Analysis
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 367</td>
                                                    <td width="408">Electronic Circuits II</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 368</td>
                                                    <td width="408">Electronic Circuits II Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 211</td>
                                                    <td width="408">Digital Electronics</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 212</td>
                                                    <td width="408">Digital Electronics Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">MTH – 301</td>
                                                    <td width="408">Statistics and Probability</td>
                                                    <td width="120">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 207</td>
                                                    <td width="408">Electrical Machine</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 208</td>
                                                    <td width="408">Electrical Machine Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 203</td>
                                                    <td width="408">Object Oriented Programming</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 204</td>
                                                    <td width="408">Object Oriented Programming Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408">&nbsp;<strong>Subtotal</strong></td>
                                                    <td width="120"><strong>23.0</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 325</td>
                                                    <td width="408">Microprocessors and Interfacing</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 326</td>
                                                    <td width="408">Microprocessors and Interfacing Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 361</td>
                                                    <td width="408">Telecommunication Engineering</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 362</td>
                                                    <td width="408">Telecommunication Engineering Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 335</td>
                                                    <td width="408">Signals and Communication Systems</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 370</td>
                                                    <td width="408">Electronic Shop Practice</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 375</td>
                                                    <td width="408">Power Electronics</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 376</td>
                                                    <td width="408">Power Electronics Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 379</td>
                                                    <td width="408">Solid State Devices</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>21.0</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 327</td>
                                                    <td width="408">Computer Networks</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 328</td>
                                                    <td width="408">Computer Networks Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 355</td>
                                                    <td width="408">Electromagnetic Fields and Waves</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 357</td>
                                                    <td width="408">Measurement and Instrumentations</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 358</td>
                                                    <td width="408">Measurement and Instrumentations Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 421</td>
                                                    <td width="408">Digital Communication</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 422</td>
                                                    <td width="408">Digital Communication Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96"><strong>&nbsp;</strong></td>
                                                    <td width="408"><strong>(Option)</strong></td>
                                                    <td width="120"><strong>3.0</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>19.5</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse7" class="collapse">
                                            <span class="list_title">Optional</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box7">
                                            <h3>Optional Subject</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse8" class="collapse">
                                            <span class="list_title">Detailed Syllabus</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box8">
                                            <div class="chairman_text_inner">
                                                <p><strong>Detailed Syllabus</strong></p>
                                                <p><strong>HUM-101: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        English-1 (Oral and written Communication Skills)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Oral &amp; written communication skills include communicative
                                                    expressions for day to day activities, both for personal and
                                                    professional requirement. Grammar items will mainly emphasize the
                                                    use of articles, numbers, tense, modal verbs, pronouns, punctuation,
                                                    etc. Sentence formation, question formation, transformation of
                                                    sentence, simple passive voice construction, and conditionals will
                                                    also be covered.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Paragraph in English – Tibbits</li>
                                                    <li>Exercise in Reading Comprehension – Tibbits</li>
                                                    <li>Essential English Grammar – Ramon Murphy</li>
                                                    <li>English Vocabulary in Use – Stuart</li>
                                                    <li>English Vocabulary in Use – McCarthy</li>
                                                    <li>Intermediate English Grammar – Ramon Murphy</li>
                                                </ol>
                                                <p><strong>APE-101: Academic and Professional English</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Grammar: Use of articles, number, tense, modal verbs, pronouns,
                                                    punctuation, sentence formation, question formation, transformation
                                                    of sentence, simple-passive voice construction. Oral and written
                                                    communication skills including communicative expressions for day to
                                                    day activities. Comprehension. Paragraph, report and Curriculum
                                                    Vitae writing.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Paragraph in English – Tibbits</li>
                                                    <li>Exercise in Reading Comprehension – Tibbits</li>
                                                    <li>Essential English Grammar – Ramon Murphy</li>
                                                    <li>English Vocabulary in Use – Stuart</li>
                                                    <li>English Vocabulary in Use – McCarthy</li>
                                                    <li>Intermediate English Grammar – Ramon Murphy</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>HUM-103: &nbsp;&nbsp;&nbsp;&nbsp; English
                                                        II: </strong><strong>Language Composition and
                                                        Comprehension</strong></p>
                                                <p><strong>3 credits</strong></p>
                                                <p>This course purports to make the student well up in composition and
                                                    comprehension of English language used in formal write ups like
                                                    articles, essays and treatises. Here text will be given for
                                                    comprehension, exercises of writing essays, paragraphs and reports
                                                    will be done and construction of proper sentences expressing formal
                                                    ideas will be taught. Sufficient exercises of translation and
                                                    re-translations will be included.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Paragraph in English – Tibbits</li>
                                                    <li>Exercise in Reading Comprehension – Tibbits</li>
                                                    <li>Essential English Grammar – Ramon Murphy</li>
                                                    <li>English Vocabulary in Use – Stuart</li>
                                                    <li>English Vocabulary in Use – McCarthy</li>
                                                    <li>Intermediate English Grammar – Ramon Murphy</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>HUM-111: &nbsp;&nbsp; Bangladesh Studies</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Part I: Society and Culture</strong></p>
                                                <p>The Sociological Perspective, Primary Concepts, Factors of social
                                                    life, Social Structure and Process, Social Institutions, Culture and
                                                    Civilization, City and Country, Social Change, Problems of Society,
                                                    Social Problems of Bangladesh, Urbanization Process and its impact
                                                    on Bangladesh Society will be covered.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Part II: Bangladesh History</strong></p>
                                                <p>The land, the geographical factor, and the people of Bangladesh.
                                                    Historical perspectives: Ancient Bengal, Early Medieval Bengal, Late
                                                    Medieval Bengal, Beginning of British rule in Bengal, Nineteenth
                                                    century Bengali Renaissance and area of social and religious
                                                    reforms, Partition of Bengal and its annulment, Bengal politics in
                                                    the 1930’s and 1940’s, Elections of 1936-37, Pakistan movement,
                                                    Partition of Bengal (1947), Language Movement (1952), Movement for
                                                    autonomy, 6-point and 11-point programmes, the 1970 election,
                                                    Genocide in East Pakistan, The Liberation War, the emergence of
                                                    Bangladesh as a sovereign independent state in 1971.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Bangladesh Encyclopedia (English Version)</li>
                                                    <li>History of Bengal (English Version) – K. Ali</li>
                                                    <li>History of Bengal (English Version) – Majumder</li>
                                                    <li>Economy of Bangladesh (Economic Journal)</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH-101: Differential and Integral Calculus (Day /
                                                        Evening)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Differential Calculus: </strong>&nbsp;Real&nbsp; number
                                                    System. Relations and functions, Functions of single variable, their
                                                    Domain, Range, Graphs, Limit, Continuity and Differentiability.
                                                    Successive Differentiation, Leibnitz’s theorem, Rolle’s theorem,
                                                    Mean value&nbsp; theorem, Taylor’s theorem, Maclaurin’s&nbsp;
                                                    theorem, Langrange’s and Cauchy’s forms&nbsp; of Remainder.
                                                    Expansion of Function&nbsp; in Taylor’s and Maclaurin’s Series.
                                                    Maximum and Minimum Values of Function. Evaluation of Indeterminate
                                                    forms of limit, L’ Hospital’s Rule. Tangent and Normal. Curvature,
                                                    Radius of Curvature, Centre of Curvature. Functions of more than one
                                                    variable, Limit, Continuity, Differentiability, Partial Derivatives,
                                                    Euler’s Theorem. Jacobians.</p>
                                                <p><strong>Integral Calculus: </strong>Indefinite Integrals and its
                                                    definition. Methods of Integration (Integration by substitution,
                                                    Integration by parts, Integration by successive reduction).
                                                    Fundamental theorem of Integral calculus. Definite Integral and its
                                                    properties. Definite Integral as the limit of a sum. Improper
                                                    Integrals, Beta and Gamma Function, Its application in evaluating
                                                    Integrals. Evaluation of Arc length, Areas, Surfaces of Revolution,
                                                    Volumes of solids of Revolution, Multiple &nbsp;Integrals.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Calculus – Howard Anton; 10<sup>th</sup> Edition; John Willy and
                                                        Sons.
                                                    </li>
                                                    <li>Differential Calculus – B. C. Das &amp; B. N. Mukharjee; 54<sup>th</sup>
                                                        Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                    <li>Integral Calculus – B. C. Das &amp; B. N. Mukharjee;
                                                        54<sup>th</sup> Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                    <li>A Text Book on Differential Calculus – Mohammad, Bhattacharjee
                                                        &amp; Latif, 4<sup>th</sup> Edition, 2014; S. Chakravarty,
                                                        Gonith Prokashan.
                                                    </li>
                                                    <li>A Text Book on Integral Calculus – Mohammad, Bhattacharjee &amp;
                                                        Latif; 4<sup>th</sup> Edition, 2014; S. Chakravarty, Gonith
                                                        Prokashan.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH-103: Geometry and Linear Algebra (Day)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Geometry:</strong></p>
                                                <p><strong>Two dimensional Geometry:</strong> Transformation of
                                                    Co-ordinates. Pair of straight lines, General Equation of Second
                                                    Degree, Circle, Parabola, Ellipse and Hyperbola. <strong>Three
                                                        Dimensional Geometry:</strong> Three Dimensional Co-ordinates,
                                                    Direction Cosines and Direction Ratios. Plane and Straight line.</p>
                                                <p><strong>Linear Algebra:</strong> Determinant and properties of
                                                    Determinants, Matrix, Types of matrices, Matrix operations, Laws of
                                                    matrix Algebra, Invertible matrices, System of Linear equations
                                                    (homogeneous and non-homogeneous) and their solution. Elementary row
                                                    and Column operations and Row-reduced echelon matrices, Rank of
                                                    matrices. Vectors in R<sup>n</sup> and C<sup>n&nbsp;&nbsp; </sup>,
                                                    Inner product, Norm and Distance in R<sup>n</sup> and
                                                    C<sup>n&nbsp; </sup>. Vector Spaces, Subspace, Linear combination of
                                                    vectors, Linear dependence and independence of vectors. Basis and
                                                    Dimension of vector spaces. Inner product spaces, Orthogonality and
                                                    Orthonormal sets, Eigen values and Eigen vectors, diagonalization,
                                                    Cayley-Hamilton&nbsp; theorem and its application.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Books recommended:</strong></p>
                                                <ol>
                                                    <li>Analytical Geometry of Conic Section – J. M. Kar.</li>
                                                    <li>An Elementary Treatise on Co-ordinate Geometry of three
                                                        dimensions – J. T. Bell; Macmillan India Ltd.
                                                    </li>
                                                    <li>A Text Book on Co-ordinate Geometry – Rahman &amp;
                                                        Bhattacharjee; 12<sup>th</sup> Edition, 2014; S. Chakravarty,
                                                        Gonith Prokashan.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Linear
                                                        Algebra – Seymour Lipschutz; 3<sup>rd</sup> Edition; McGraw Hill
                                                        Book Company.
                                                    </li>
                                                    <li>Linear Algebra with Applications – R. Antone.</li>
                                                    <li>Linear Algebra – Dewan Abdul Quddus; Latest Edition; Titash
                                                        Publications.
                                                    </li>
                                                    <li>Linear Algebra – Saikia.</li>
                                                </ol>
                                                <p><strong>MTH-201: Vector Analysis and Complex Variable (Day)</strong>
                                                </p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Vector Analysis: </strong>Vector Algebra – Vectors in three
                                                    dimensional space, Algebra of Vectors, Rectangular Components,
                                                    Addition, Subtraction and Scalar multiplication, Scalar and Vector
                                                    product of two vectors. Scalar and Vector triple product.
                                                    Application in Geometry.</p>
                                                <p>Vector Calculus – Limit, Continuity and Differentiability of Scalar
                                                    and Vector point functions.&nbsp; Scalar and Vector field. Gradient,
                                                    Divergence and Curl of point functions. Vector Integration, Line,
                                                    Surface and Volume Integrals. Green’s theorem, Gauss’s theorem,
                                                    Stoke’s theorem.</p>
                                                <p><strong>Complex Variable: </strong>Field of Complex numbers,
                                                    D’Moivre’s theorem and its applications. Limit and Continuity of
                                                    complex functions, Derivatives, Analytic function, Harmonic
                                                    function, Cauchy-Rieman equation. Line Integral of Complex
                                                    functions. Cauchy’s&nbsp; Integral theorem and Cauchy’s&nbsp;
                                                    Integral formula. Lioville’s theorem, Taylors and Laurent’s theorem,
                                                    Singularity Residue, Cauchy’s Residue theorem. Contour Integration.
                                                    Bilinear transformation. Mapping of Elementary functions. Conformal
                                                    mapping.</p>
                                                <p><strong>Book Recommended:</strong></p>
                                                <ol>
                                                    <li>Schaum’s Outline Series of the Theory and&nbsp; Problems on
                                                        Vector Analysis – Murray R. Spiegel; SI (Metric Edition); McGraw
                                                        Hill Book Company.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Complex
                                                        Variable – Murray R. Spiegel; 2<sup>nd</sup> Edition; McGraw
                                                        Hill Book Company.
                                                    </li>
                                                    <li>Functions of a Complex Variable – Dewan Abdul Quddus; Latest
                                                        Edition; Titash Publications.
                                                    </li>
                                                </ol>
                                                <p><strong>MTH-203: Differential Equations, Laplace Transforms and
                                                        Fourier
                                                        Analysis </strong><strong>(</strong><strong>Day)</strong></p>
                                                <p><strong>3 Credits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Differential Equation:</strong> Formation of Differential
                                                    equation, Degree and Order of differential equation, Complete and
                                                    Particular solution. Ordinary differential equation – Solution of
                                                    ordinary differential equation of first order and first degree
                                                    (special forms). Linear differential equation with constant
                                                    coefficients. Homogeneous linear differential equation. Solution of
                                                    differential equation by the method of Variation of parameters.
                                                    Solution of linear differential equations in series by Frobenius
                                                    method. Bessel’s function and Legendre’s Polynomials and their
                                                    properties. Simultaneous equation of the form &nbsp;&nbsp;&nbsp;= =&nbsp;.
                                                    Partial differential equation – Lagrange’s linear equation, Equation
                                                    of linear and non-linear first order standard forms, Charpit’s
                                                    method.</p>
                                                <p><strong>Laplace Transforms</strong>: Definition, Laplace transforms
                                                    of some elementary functions, sufficient conditions for existence of
                                                    Laplace transforms, Inverse Laplace transforms, Laplace transforms
                                                    of derivatives, Unit step function, Periodic function, Some special
                                                    theorems on Laplace transforms, Partial fraction, Solution of
                                                    differential equations by Laplace transforms, Evaluation of Improper
                                                    Integrals.</p>
                                                <p><strong>Fourier Analysis: </strong>Fourier series (Real and complex
                                                    form). Finite transforms, Fourier Integrals, Fourier transforms and
                                                    application in solving boundary value problems.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Differential Equations – H. T. H. Piaggio; 1<sup>st</sup> Indian
                                                        Edition, 1985, S. K. Jain for CBS Publishers.
                                                    </li>
                                                    <li>A Text Book on Integral Calculus with Differential Equations –
                                                        Mohammad,&nbsp; Bhattacharjee &amp; Latif, 4<sup>th</sup>
                                                        Edition, 2010; S. Chakravarty, Gonith Prokashon.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Laplace
                                                        Transforms – Murray R. Spiegel; Revised Edition, 2003; McGraw
                                                        Hill Book Company.
                                                    </li>
                                                    <li>Differential Equation – Md. Abu Eusuf; Latest Edition; Abdullah
                                                        Al Mashud Publisher.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH – 101: Geometry, Differential and Integral Calculus
                                                        (Evening)</strong></p>
                                                <p><strong>3.0 Credits</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Geometry:</strong></p>
                                                <p>Two dimensional Geometry: Transformation of Coordinates, General
                                                    Equation of Second Degree, pair of straight lines, Circle, Parabola,
                                                    Ellipse and Hyperbola. Three Dimensional Geometry: Three Dimensional
                                                    Co-ordinates, Direction Cosines and Direction Ratios. Plane and
                                                    Straight line.</p>
                                                <p><strong>Differential Calculus: </strong>&nbsp;Real&nbsp; number
                                                    System. Functions of single variable, its Graphs, Limit, Continuity
                                                    and Differentiability. Successive Differentiation, Leibnitz’s
                                                    theorem, Rolle’s theorem, Mean value&nbsp; theorem, Taylor’s
                                                    theorem, Maclaurin’s&nbsp; theorem, Langrange’s and Cauchy’s forms&nbsp;
                                                    of Remainder. Expansion of Function in Taylor’s and Maclaurin’s
                                                    Series. Maximum and Minimum Values of Function. Evaluation of
                                                    Indeterminate forms of limit, L’ Hospital’s Rule. Tangent and
                                                    Normal. Functions of more than one variable, Limit, Continuity,
                                                    Differentiability, Partial Derivatives, Euler’s Theorem. Jacobians.
                                                </p>
                                                <p><strong>Integral Calculus: </strong>Indefinite Integrals and its
                                                    definition. Methods of Integration (Integration by substitution,
                                                    Integration by parts, Integration by successive reduction).
                                                    Fundamental theorem of Integral calculus. Definite Integral and its
                                                    properties. Definite Integral as the limit of a sum. Improper
                                                    Integrals, Beta and Gamma Function, Its application in evaluating
                                                    Integrals. Evaluation of Arc length, Areas, Surfaces of Revolution,
                                                    Volumes of solids of Revolution, Multiple&nbsp; Integrals.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Analytical Geometry of Conic Section – J. M. Kar.</li>
                                                    <li>A Text Book on Co-ordinate Geometry – Rahman &amp;
                                                        Bhattacharjee; Chakravarty, Gonith Prokashon.
                                                    </li>
                                                    <li>Calculus with Analytic Geometry – Thomas and Finne</li>
                                                    <li>Calculus – Howard Anton; 10<sup>th</sup> Edition; John Willy and
                                                        Sons.
                                                    </li>
                                                    <li>Differential Calculus – B. C. Das &amp; B. N. Mukharjee; 54<sup>th</sup>
                                                        Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                    <li>Integral Calculus – B. C. Das &amp; B. N. Mukharjee;
                                                        54<sup>th</sup> Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH-103: Linear Algebra, Vector Analysis and Complex Variable
                                                        (Evening)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>Linear Algebra:</strong> Matrix, Types of matrices, Matrix
                                                    operations, Laws of matrix Algebra, Invertible matrices, System of
                                                    Linear equations (homogeneous and non-homogeneous) and their
                                                    solution. Elementary row and Column operations and Row-reduced
                                                    echelon matrices, Different types of matrices, Rank of matrices.
                                                    Eigen values and Eigen vectors.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Vector Analysis: </strong>Vector Algebra – Vectors in three
                                                    dimensional space, Algebra of Vectors, Rectangular components,
                                                    Addition and Scalor multiplication, Scalor and Vector product of two
                                                    Vectors, Scalor and Vector triple product. Vector Calculus – Vector
                                                    differentiation and&nbsp; Integration. Gradient, Divergence and
                                                    Curl. Green’s theorem, Gauss’s theorem, Stoke’s theorem.</p>
                                                <p><strong>Complex Variable: </strong>Limit. Continuity and
                                                    differentiability of complex functions. Analytic function, Harmonic
                                                    function, Cauchy–Rieman equation. Complex Integration. Cauchy’s
                                                    integral theorem and Cauchy’s Integral formula. Lioville’s theorem.
                                                    Taylor’s and Laurent’s theorems. Singularities. Residue, Cauchy’s
                                                    Residue theorem. Contour Integration.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Linear
                                                        Algebra – Seymour Lipschutz; 3<sup>rd</sup> Edition; McGraw Hill
                                                        Book Company.
                                                    </li>
                                                    <li>Linear Algebra with Applications – R. Antone.</li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Vector
                                                        Analysis – Murray R. Spiegel; SI (Metric Edition); McGraw Hill
                                                        Book Company.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Complex
                                                        Variable – Murray R. Spiegel; McGraw Hill Book Company.
                                                    </li>
                                                    <li>Functions of a Complex Variable – Dewan Abdul Quddus, Latest
                                                        Edition, Titash Publications.
                                                    </li>
                                                </ol>
                                                <p><strong>MTH-203: Differential Equations, Laplace Transforms and
                                                        Fourier Analysis (Evening)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong><u>&nbsp;</u></strong></p>
                                                <p><strong>Differential Equation: </strong>Formation, Degree and Order
                                                    of differential equation, Complete and Particular solution. &nbsp;Solution
                                                    of ordinary differential equation of first order and first degree
                                                    (special forms), Linear differential equation with constant
                                                    co-efficients. Homogeneous linear differential equation. Solution of
                                                    equation by the method of Variation of Parameters.&nbsp; Solution of
                                                    Linear differential equation in series by Frobenius method. Solution
                                                    of Simultaneous equations of the form&nbsp;&nbsp;&nbsp; &nbsp;= =&nbsp;.
                                                </p>
                                                <p><strong>Laplace Transforms</strong>: Definition, Laplace transforms
                                                    of some elementary functions, Sufficient conditions for existence of
                                                    Laplace Transforms, Inverse Laplace transforms, Laplace transforms
                                                    of derivatives, Unit step function, Periodic function, some special
                                                    theorems on Laplace transforms, Partial fraction. Solution of
                                                    differential equations by Laplace transforms. Evaluation of Improper
                                                    Integrals.</p>
                                                <p><strong>Fourier Analysis</strong>: Fourier series (Real and complex
                                                    form), Finite transforms, Fourier Integrals, Fourier Transforms and
                                                    application in solving boundary value problems.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Differential Equation – H. T. H. Piaggio, 1<sup>st</sup> Indian
                                                        Edition, 1985, S. K. Jain for CBS Publishers
                                                    </li>
                                                    <li>A Text Book on Integral Calculus with Differential Equation –
                                                        Mohammad,&nbsp; Bhattacharjee &amp; Latif, 4<sup>th</sup>
                                                        Edition, Gonith Prokashon.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Laplace
                                                        Transforms – Murray R. Spiegel , Revised Edition,&nbsp; 2003,
                                                        McGraw Hill Book Company.
                                                    </li>
                                                    <li>Differential Equations – Md. Abu Eusuf, Latest Edition, Abdullah
                                                        Al Mashud Publisher.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>PHY-101: Physics-I: Mechanics, Properties of Matter, Waves,
                                                        Optics, Heat and Thermodynamics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Mechanics</strong>: Measurements, Motion in One Dimension,
                                                    Motion in a Plane, Particle Dynamics, Work &amp; Energy, Circular
                                                    Motion, Simple Harmonic Motion, Rotation of Rigid Bodies, Central
                                                    Force, Structure of Matter, Mechanical&nbsp; Properties of
                                                    Materials. Properties of Matter: Elasticity, Stresses &amp; Strains,
                                                    Young’s Modulus, Bulk Modulus, Rigidity Modulus, Elastic Limit,
                                                    Poisson’s Ratio, Relation between Elastic Constants, Bending of
                                                    Beams. Fluid Motion, Equation of Continuity, Bernoulli’s Theorem,
                                                    Viscosity, Stokes’ Law. Surface Energy &amp; Surface Tension,
                                                    Capillarity, Determination of Surface Tension by Different Methods.
                                                </p>
                                                <p><strong>Waves</strong>: Wave Motion &amp; Propagation, Simple
                                                    Harmonic Motion, Vibration Modes, Forced Vibrations, Vibration in
                                                    Strings &amp; Columns, Sound Wave &amp; Its Velocity, Doppler
                                                    Effect, Elastic Waves, Ultrasonics, Practical Applications. <strong>Optics</strong>:
                                                    Theories of Light, Huygen’s Principle, Electromagnetic Waves,
                                                    Velocity of Light, Reflection, Refraction, Lenses, Interference,
                                                    Diffraction, Polarization. Heat &amp; Thermodynamics : Temperature
                                                    and Zeroth Law of Thermodynamics, Calorimetry, Thermal Equilibrium
                                                    &amp; Thermal Expansion, First Law of Thermodynamics, Specific Heat,
                                                    Heat Capacities, Equation of State, Change of Phase, Heat Transfer,
                                                    Second Law of Thermodynamics, Carnot Cycle, Efficiency, Entropy,
                                                    Kinetic Theory of Gases.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Fundamentals of Physics (Part I) – Haliday, Resnic and Walker
                                                    </li>
                                                    <li>Modern Physics – Bernstein</li>
                                                    <li>Concept of Modern Physics – Beiser</li>
                                                    <li>Fundamentals of Optics – Brizlal</li>
                                                    <li>Optics – Ghotok</li>
                                                    <li>Heat and Thermodynamics – Brizlal</li>
                                                    <li>University Physics with Modern Physics – Young</li>
                                                    <li>Essential University Physics Vol. I – Wolfson</li>
                                                </ol>
                                                <p><strong>PHY-103: Electricity and Magnetism &amp; Modern
                                                        Physics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Electrostatics, Electric Charge, Coulomb’s Law, Electric Field &amp;
                                                    Electric Potential, Electric Flux Density, Gauss’s Law, Capacitors
                                                    and Dielectrics, Steady Current, Ohm’s Law, Magnetostatics, Magnetic
                                                    Field, Biot-Savart Law, Ampere’s Law, Electromagnetic Induction,
                                                    Faraday’s Law, Lenz’s Law, Self Inductance &amp; Mutual Inductance,
                                                    Magnetic Properties of Matter, Permeability, Susceptibility,
                                                    Diamagnetism, Paramagnetism &amp; Ferromagnetism, Maxwell’s
                                                    Equations of Electromagnetic Waves, Waves in Conducting &amp;
                                                    Non-Conducting Media, Total Internal Reflection, Transmission along
                                                    Wave Guides.</p>
                                                <p>Special Theory of Relativity, Length Contraction &amp; Time Dilation,
                                                    Mass-Energy Relation, Photo Electric Effect, Quantum Theory, X-rays
                                                    and X-ray Diffraction, Compton Effect, Dual Nature of Matter &amp;
                                                    Radiation, Atomic Structure, Nuclear Dimensions, Electron Orbits,
                                                    Atomic Spectra, Bohr Atom, Radioactive Decay, Half-Life, a, b and g
                                                    Rays, Isotopes, Nuclear Binding Energy, Fundamentals of Solid State
                                                    Physics, Lasers, Holography.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Fundamentals of Physics (Part II) – Haliday, Resnic and Walker
                                                    </li>
                                                    <li>Modern Physics – Bernstein</li>
                                                    <li>Concept of Modern Physics – Beiser</li>
                                                    <li>Fundamentals of Optics – Brizlal</li>
                                                    <li>Optics – Ghotok</li>
                                                    <li>Heat and Thermodynamics – Brizlal</li>
                                                    <li>University Physics with Modern Physics – Young</li>
                                                    <li>Essential University Physics Vol. I – Wolfson</li>
                                                </ol>
                                                <p><strong>PHY–102: Physics Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on PHY 101 and PHY 103</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>PHY-101E: Physics for Engineering (Evening)</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>Properties of matter</strong>: Elasticity, Stress and Strain,
                                                    Young’s Modulus, Surface Tension.</p>
                                                <p><strong>Heat &amp; Thermodynamics</strong>: Heat, Temperature, Zeroth
                                                    Law of&nbsp; Thermodynamics, Thermal Equilibrium, Seebeck Effect,
                                                    Reversible and Irreversible Processes, First and Second law of
                                                    Thermodynamics, Heat Engine, Carnot Cycle.</p>
                                                <p><strong>Electromagnetism</strong>: Electric charge, Charge Density,
                                                    Coulomb’s and Ohm’s law, Electric field and Electrical Potential,
                                                    Electric dipole, Electric flux, Gauss’s law and its application,
                                                    Capacitance, Magnetic field, Biot-Savert law, Ampere’s law and its
                                                    application, Electromagnetic Induction, Faraday’s law, Lenz’s law,
                                                    Self Inductance and Mutual Inductance.</p>
                                                <p><strong>Optics</strong>: Nature and Propagation of light, Reflection
                                                    and Refraction of light, Total Internal Reflection, Interference,
                                                    Diffraction, Dispersion, Polarization.</p>
                                                <p><strong>Modern Physics</strong>: Theory of Relativity, Length
                                                    Contraction and Time Dilation, Mass-Energy Relation, Compton Effect,
                                                    Photoelectric Effect, Quantum Theory, Atomic structure, X-ray
                                                    Diffraction, Atomic Spectra, Electron Orbital Wavelength, Bohr
                                                    radius, Radioactivity, de Broglie&nbsp;theory, Nuclear Fission and
                                                    Fusion.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Fundamentals of Physics (Part I) – Haliday, Resnic and Walker
                                                    </li>
                                                    <li>Modern Physics – Bernstein</li>
                                                    <li>Concept of Modern Physics – Beiser</li>
                                                    <li>Fundamentals of Optics – Brizlal</li>
                                                    <li>Optics – Ghotok</li>
                                                    <li>Heat and Thermodynamics – Brizlal</li>
                                                    <li>University Physics with Modern Physics – Young</li>
                                                    <li>Essential University Physics Vol. I – Wolfson</li>
                                                </ol>
                                                <p><strong>PHY–102E: Physics Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on PHY-101E</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CHE-101: Chemistry</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Atomic and Molecular Structure: </strong>Atomic Orbital:
                                                    Hydrogen atom and many electron atoms, The periodic table of
                                                    elements, Atomic properties and the periodic table, Chemical
                                                    properties of s-, p-, d-, f- block elements, The origin of bonding
                                                    forces, covalent versus bonding, Detailed consideration of Covalent
                                                    bonding, bonding in some representative molecules.</p>
                                                <p><strong>Acids and Bases: </strong>Acid-Base equilibrium and pH scale
                                                    in terms of activities, Acid-Base titration, Acid-Base indicators,
                                                    Buffers, Henderson-Hasselbach approximation useful in biology
                                                    application.</p>
                                                <p><strong>Electrochemistry: </strong>Introductory topics,
                                                    Oxidation-Reduction reactions, The electrochemical cell, The Nernst
                                                    equation, The measurement of cell e.m.f.</p>
                                                <p><strong>The rates of chemical reactions: </strong>Experimental rate
                                                    laws, Elementary reactions, Kinetics and mechanisms.</p>
                                                <p><strong>Processes and process variables: </strong>Mass and volume,
                                                    Flow rate, Chemical composition, Pressure, Temperature.</p>
                                                <p><strong>Material Balances: </strong>Process classification, Balances,
                                                    Material balance calculations, balances on multiple unit processes,
                                                    Balances on reactive systems and processes. Phase rule, Phase
                                                    diagram of mono component system.</p>
                                                <p><strong>Energy and energy balances: </strong>Energy balances on
                                                    closed systems, Energy balances on open systems at steady state,
                                                    Energy balance procedures, mechanical energy balances.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Physical Chemistry – Peter Atkins and Julio de Paula</li>
                                                    <li>Modern Chemistry – Raymond E. Davis</li>
                                                    <li>Physical Chemistry – Robert J. Silbey, Robert A. Alberty and
                                                        Moungi G. Bawendi
                                                    </li>
                                                    <li>Introductory Chemistry a Foundation – Steven S. Zumdahl</li>
                                                    <li>Inorganic Chemistry – Catherine Housecroft and Alan G. Sharpe
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CHE–102: Chemistry Lab</strong></p>
                                                <p><strong>0.0 Credits</strong></p>
                                                <p>Laboratory works based on CHE – 101</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 103 Electrical Circuits I</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Fundamental electrical concepts, Kirchoff’s Laws, Equivalent
                                                    resistance. Electrical circuits: Series circuits, parallel circuits,
                                                    series-parallel networks. Network analysis: Source conversion,
                                                    Star/Delta conversion, Branch-current method, Mesh analysis, Nodal
                                                    analysis. Network theorems: Superposition theorem, Thevenin’s
                                                    theorem, Norton’s theorem, Maximum Power Transfer theorem,
                                                    Reciprocity theorem. Capacitors and inductors, series and parallel
                                                    combination of inductors and capacitors. Responses of RL and RC
                                                    circuit: Natural and step responses. Inductors</p>
                                                <p>Magnetic quantities and variables: Flux, permeability and reluctance,
                                                    magnetic field strength, magnetic potential, flux density,
                                                    magnetization curve. Laws in magnetic circuits: Ohm’s law and
                                                    Ampere’s circuital law. Magnetic circuits: Series, parallel and
                                                    series-parallel circuits.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Introductory Circuit Analysis – R . L . Boylestad</li>
                                                    <li>Introduction to Electrical Engineering – R .P. Ward</li>
                                                    <li>Electrical Technology (Volume 1) – B . L . Theraja A. K.
                                                        Theraja
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 104: Electrical Circuits I Lab</strong></p>
                                                <p><strong>1.5 credits</strong></p>
                                                <p>Laboratory works based on ECE – 101</p>
                                                <p><strong>ECE-105: Electrical Circuits II</strong></p>
                                                <p><strong>Credit: 3.0</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Sinusoidal Alternating Waveforms</strong>: Definitions, phase
                                                    relations, Instantaneous value, Average value, Effective (rms)
                                                    value. Phasor algebra and complex quantities, Series, parallel and
                                                    series-parallel ac networks. Power: Apparent power, Reactive power,
                                                    Power triangle, Power factor correction. Pulse waveforms and the RC
                                                    response.</p>
                                                <p>Analysis of Single phase AC circuit: Series and parallel RL, RC and
                                                    RLC circuit, nodal and mesh analysis, application of network
                                                    theorems in AC circuits. Circuits with non-sinusoidal excitations,
                                                    transients in AC circuits, passive filters. <strong>Resonance in AC
                                                        Circuits: </strong>Series and parallel resonance. Q of a
                                                    circuit, Admittance. Impedance matching and maximum power transfer.
                                                    <strong>Poly-Phase Circuit: T</strong>hree phase supply, balanced
                                                    and unbalanced poly phase circuit, power calculation.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Introductory circuit Analysis – R. L. Boylestad</li>
                                                    <li>Alternating Current Circuit –R. M. Kerchner , G. F. Corcoran
                                                    </li>
                                                    <li>Electrical Circuit –James W. Nilson</li>
                                                    <li>Electrical technology (Volume 1) –B. L. Theraja K. Theraja</li>
                                                </ol>
                                                <p><strong>ECE-106:&nbsp; Electrical Circuits II Lab</strong></p>
                                                <p><strong>Credit: 1.5</strong></p>
                                                <p>Laboratory works based on ECE 103.</p>
                                                <p><strong>CSE-103: &nbsp;&nbsp;&nbsp;&nbsp; Computer Programming in
                                                        C</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Programming language: Basic concept; overview of programming
                                                    languages, C-language: Preliminaries; Elements of C; program
                                                    constructs; variables and data types in C; Input and output;
                                                    character and formatted I/O; Arithmetic expressions and assignment
                                                    statements; loops and nested loops; Decision making’ Arrays;
                                                    Functions; Arguments and Local Variables; Calling functions and
                                                    arrays; Recursion and recursive functions; structures within
                                                    structure; Files; File functions for sequential and Random I/O.
                                                    Pointers, Pointers and Structures; Pointers and functions; Pointer
                                                    and arrays; Operations on pointers; Pointer and memory addresses;
                                                    Operations on bits; Bit operation; Bit field; Advanced features;
                                                    Standard and Library functions.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>The C Programming Language – Kernighan and Ritchie</li>
                                                    <li>Teach Yourself C – H. Schield</li>
                                                </ol>
                                                <p><strong>CSE-104: Computer Programming in C Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on CSE-103</p>
                                                <p><strong>ECE – 205: Electronic Circuit I</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>Semiconductor Diode:</strong> Introduction to semiconductor
                                                    devices, p-type and n-type semiconductors, principle of p-n junction
                                                    diode,&nbsp; forward and reverse biased conditions, I-V
                                                    Characteristics of a Diode, Simplified DC and AC Diode Models,
                                                    Dynamic Resistance and Capacitance, load line analysis, half wave
                                                    and full wave rectifiers, filter, clipping and clamping&nbsp;
                                                    circuits. Optical Diodes, Solar Cell, Zener diode and its
                                                    applications and voltage regulator circuits.</p>
                                                <p><strong>Bipolar Junction Transistor (BJT):</strong> Principle of
                                                    operation of BJT. Transistor circuit configurations (CE, CB and CC
                                                    configurations) and their input, output and transfer
                                                    characteristics. BJT biasing circuits and Thermal Stabilization, DC
                                                    Load Line and Operating Point. Low frequency AC equivalent circuits,
                                                    configurations, voltage, current and power gain, input and output
                                                    impedance with resistive load. Transistor as an Amplifier,
                                                    Transistor as a Switch. Low and high frequency response of CE
                                                    amplifiers. <strong>BJTs at Low Frequencies:</strong> Hybrid h
                                                    Model, H-Parameters, Analysis of a Transistor Amplifier Circuit
                                                    using h-parameters, High Input Resistance Transistor Circuits;
                                                    <strong>BJTs at High Frequencies:</strong> Hybrid pi-model. CE Short
                                                    Circuit Current Gain, Current Gain with Resistive Load. Harmonic
                                                    distortion in CE amplifiers.</p>
                                                <p><strong>Introduction of Field Effect Transistor (FET),</strong>
                                                    Junction Field Effect Transistor (JFET), Metal Oxide Semiconductor
                                                    Field Effect Transistors (MOSFET): physical construction,
                                                    classification, basic equations and various types of I-V
                                                    characteristics. Basic FET amplifiers. Use of FET as voltage
                                                    controlled switch and resistors.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electronic Devices – Thomas L. Floyd</li>
                                                    <li>Electronics Device and Circuit – R. L. Boylested</li>
                                                    <li>Integrated Electronics –Jacob Millman and Christos C. Halkias.
                                                    </li>
                                                    <li>Electronics Principle – Malvino</li>
                                                    <li>Micro Electronics – Jacob Millman, Arvin Garbel.</li>
                                                    <li>Solid State Electronics Devices – Ben G. Streetman</li>
                                                    <li>Electronics Technology – B. L. Theraja</li>
                                                </ol>
                                                <p><strong>ECE – 206: Electronic Circuits I Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on <strong>ECE – 206</strong>.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 367: Electronic Circuits II</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Feedback Amplifier: </strong>Classification, Feedback
                                                    Concept, Effect of Feedback on Transfer Gain, Loops; Gain, Amplifier
                                                    Characteristics, Types of Feedback. Negative Feedback Amplifiers and
                                                    their Applications.</p>
                                                <p><strong>Sinusoidal Oscillators:</strong> Conditions of self
                                                    Oscillation, Phase Shift Oscillation; Colpitt’s and Hartley, Wien
                                                    Bridge and Crystal Oscillators.</p>
                                                <p><strong>Active Filters:</strong> Basic Filter Responses, Filter
                                                    Response Characteristics, Active Low Pass, High Pass, Band Pass, and
                                                    Band Stop Filters;</p>
                                                <p><strong>Power Amplifiers:</strong> Untuned Power Amplifiers; Class A,
                                                    Push Pull Class B, Complementary Symmetry Class B, Class AB,
                                                    Darlington Pair. Tuned Voltage and Power (Class B and Class C)
                                                    Amplifiers, Wide Band Amplifier, Mixers.</p>
                                                <p><strong>Operational Amplifiers (OP Amps):</strong> Introduction to
                                                    Op-Amps, Differential and Common mode gain. Common Mode Rejection
                                                    Ratio (CMRR). Frequency response of Op-Amps and slew rate, Noise and
                                                    Frequency Compensation. Inverting and Non-inverting Amplifier, Phase
                                                    Inverter, Scale Changer, Integrating and Differentiating Circuits.
                                                    Comparators, Comparators and Applications; Adder or Summing
                                                    Amplifier, Voltage to Current and Current to Voltage Converter,
                                                    Voltage Follower. Electronic Analog Computation, Capacitors,
                                                    Differential, Instrumentation and Bridge Amplifiers. Phase Locked
                                                    Loop (PLL) circuit and Voltage Controlled Oscillator,
                                                    multi-vibrators, Schmitt Trigger circuit and wave shaping using
                                                    op-amp, 555 timer and other linear ICs.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electronic Devices – Thomas L. Floyd</li>
                                                    <li>Electronics Device and circuit – R. L. Boylested</li>
                                                    <li>Integrated Electronics – Jacob Millman and Christos C. Halkias
                                                    </li>
                                                    <li>Electronics Principle – Malvino</li>
                                                    <li>Micro Electronics – Jacob Millman, Arvin Garbel</li>
                                                    <li>Electronics Devices : A Design Approach – Ali Aminian and Marian
                                                        Kazimierczuk
                                                    </li>
                                                    <li>Solid State Electronics Devices – Ben G. Streetman</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 368: Electronic Circuits II Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on <strong>ECE – 367</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 369: Solid State Devices</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p>Introduction: Classification of solids, crystal lattice and
                                                    structures, Miller Indices, Electronic model of semiconductor and
                                                    solids. Valance and conduction bands Concept of holes. Introductory
                                                    quantum mechanics, wave equation, uncertainty principle, postulates,
                                                    Schrodinger time independent equation. Energy band diagrams of
                                                    semiconductor.</p>
                                                <p>Semiconductors in equilibrium: Energy bands, intrinsic and extrinsic
                                                    Semiconductors, Fermi levels, electron and hole concentrations,
                                                    temperature dependence of carrier concentrations and invariance of
                                                    Fermi level. Carrier transport processes and excess carriers: Drift
                                                    and diffusion, generation and recombination of excess,
                                                    built-in-field, Einstein relations, continuity and diffusion
                                                    equations for holes and electrons and quasi-fermi level. PN
                                                    junction: Basic structure, equilibrium conditions, contact
                                                    potential, equilibrium Fermi level, space charge, non-equilibrium
                                                    condition, forward and reverse bias, carrier injection, minority
                                                    carrier currents, transient and AC conditions, time variation of
                                                    stored charge, reverse recovery transient and capacitance. Bipolar
                                                    Junction Transistor: Basic principle of pnp and npn transistors,
                                                    emitter efficiency, base transport factor and current gain,
                                                    diffusion equation in the base terminal currents, coupled-diode
                                                    model and charge control analysis, Ebers-Moll equations and circuit
                                                    synthesis. Metal-semiconductor junction: Energy band diagram of
                                                    metal semiconductor junctions, rectifying and ohmic contacts. MOS
                                                    structure: MOS capacitor, energy band diagrams and flat band
                                                    voltage, threshold voltage and control of threshold voltage, static
                                                    C-V characteristics, qualitative theory of MOSFET operation, body
                                                    effect and current-voltage relationship of a MOSFET. Junction
                                                    Field-Effect-transistor:&nbsp; Introduction, qualitative theory of
                                                    operation, pinch-off voltage and current-voltage relationship.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electrical Engineering Materials – A. J. Dekker</li>
                                                    <li>Introduction to Solid State Physics – Charles Kittel</li>
                                                    <li>Principles of Electronic Materials and Devices – S. O. Kasap
                                                    </li>
                                                    <li>Solid State Electronic Devices – Ben Streetman and Sanjay
                                                        Banerjee
                                                    </li>
                                                    <li>Fundamentals of Solid State Electronics – Chih-Tang Sah</li>
                                                    <li>Semiconductor Device: Physics and Technology – S. M. Sze</li>
                                                    <li>Electrical Engineering Materials – T. K. Basak</li>
                                                </ol>
                                                <p><strong>ECE – 207: &nbsp; Electrical
                                                        Machine&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p><strong>3 Credits&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>DC Generator</strong>: Principles. Construction,
                                                    classification, armature winding, voltage build up, armature
                                                    relations and commutation, performance and testing.</p>
                                                <p><strong>DC Motor</strong>: Operation, types, speed-torque
                                                    characteristics, methods of speed control, Transformer: Principle,
                                                    construction, cooling, vector diagrams and voltage regulation,
                                                    equivalent circuits, performance and testing.</p>
                                                <p><strong>Induction Motor</strong>: Principle of operation.
                                                    Constructional details, equivalent circuits, speed –torque relation,
                                                    losses and efficiency, circle diagram.</p>
                                                <p><strong>Synchronous Generators</strong>: General constructional
                                                    outline of synchronous generators, Air gap flux and voltage
                                                    expressions, armature winding. Alternator regulation. Determination
                                                    of machine parameters from tests. Vector diagrams, losses and
                                                    efficiency.</p>
                                                <p><strong>Synchronous Motors</strong>: General constructional
                                                    features., theory of operation, motor terminal characteristics,
                                                    mathematical analysis, vector diagrams, V-curves, motor tests,
                                                    losses, efficiency and starting.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Direct and Alternating Current Machinery – Rosen Blut</li>
                                                    <li>Electrical Machines – S. K. Bhattacharjee</li>
                                                    <li>Electrical Machines – Nagarth and Kothari</li>
                                                    <li>Functional and Sub Functional Horse Power Electric Motor –
                                                        Joseph E. Martin
                                                    </li>
                                                </ol>
                                                <p><strong>ECE – 208: &nbsp; Electrical Machine Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 207</p>
                                                <p><strong>IPE – 393: Industrial Management</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction, evolution, management functions. Organization and
                                                    environment.</p>
                                                <p>Organization: theory and structure, coordination, span of control,
                                                    authority delegation, groups, committee and task force, manpower
                                                    planning.</p>
                                                <p>Personnel management: scope, importance, need hierarchy, motivation,
                                                    job redesign, leadership, participative management, training,
                                                    performance appraisal, wages &amp; incentives, informal groups,
                                                    organizational change and conflict.</p>
                                                <p>Cost and Financial management: Elements of costs of products
                                                    depreciation, breakeven analysis, Investment Analysis, Benefit cost
                                                    analysis.</p>
                                                <p>Management accounting: Cost planning and control; budget &amp;
                                                    budgetary control, Development planning process.</p>
                                                <p>Marketing Management: Concepts, strategy, sales promotion, patent
                                                    laws.</p>
                                                <p>Technology Management; Management of innovation and changes,
                                                    technology life cycle.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Operation Management – Krajewski, Ritzman</li>
                                                    <li>Operation Management for Competitiye (Edition 11) – Chase,
                                                        Jaccob, Aquilano
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 350: Electronic Shop Practice</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CSE-209: Numerical Methods</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Errors and Accuracy. Iterative process: Solution of f(x) = 0,
                                                    existence and convergence of a root, convergence of the iterative
                                                    method, geometrical representation, Aitken’s D<sup>2</sup>– process
                                                    of acceleration. System of Linear Equations. Solution of Non-Linear
                                                    equations. Finite Differences and Interpolation. Finite Difference
                                                    Interpolation. Numerical Differentiation. Numerical Integration.
                                                    Differential Equations.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Numerical methods for Engineers –Steven C. Chapra</li>
                                                    <li>Numerical methods Analysis –James B. Scarborugh</li>
                                                    <li>Introductory methods of Numerical Analysis – S. S. Sastry</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 335: Signals and Communication Systems</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Classification of signals and systems: Signals classification, basic
                                                    operations on signals, elementary signals, representation of signals
                                                    using impulse functions; system classification.</p>
                                                <p>Spectral Analysis: Fourier series, the sampling function, response of
                                                    a linear system, normalized power in Fourier expansion, power
                                                    spectral density, the Fourier transform, convolution, Parvesal’s
                                                    theorem, correlation between waveforms and autocorrelation.</p>
                                                <p>Random Variables and Processes: Probability, cumulative distribution
                                                    function, probability density function, Tchebycheff’s inequality,
                                                    the Gaussian probability density, the error function, the Rayleigh
                                                    probability density, correlation random variables, the central limit
                                                    theorem, random processes, autocorrelation, power spectral density
                                                    of a sequence of random pulses, power spectral density of digital
                                                    data, effect of rudimentary filters of digital data, the
                                                    complimentary error function.</p>
                                                <p>Noise: Some sources of noise, characteristics of of various noises,
                                                    and SNR, a frequency-domain representation of noise, spectral
                                                    components of noise, response of narrow band filter to noise, effect
                                                    of a filter on the power spectral density of noise, superposition of
                                                    noises, mixing involving noise, linear filtering, noise bandwidth,
                                                    quadrature components of noise, power spectral density of nct and
                                                    nst, probability density of nct and nst and their time
                                                    derivatives.</p>
                                                <p>Communication System and Noise Calculations: Resistor noise, multiple
                                                    resistor noise sources, network with reactive elements, an example,
                                                    available power, noise temperature, two ports, noise bandwidth,
                                                    effective input-noise</p>
                                                <p>temperature, noise figure and equivalent noise temperature of a
                                                    cascade, an example of a receiving system, antennas, system
                                                    calculation.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Communication Systems – Simon Haykin</li>
                                                    <li>Signals and systems- Simon Haykin and Barry Van Veen</li>
                                                    <li>Principles of Communication Systems – Herbert Taub and Donald L.
                                                        Schilling
                                                    </li>
                                                </ol>
                                                <p><em>&nbsp;</em></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 355: Electromagnetic Fields and Waves</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Review of vector Analysis. Electrostatics: Coulomb’s Law, force
                                                    electric filed intensity, electrical flux density. Gauss theorem
                                                    with application, electrostatic potential, boundary conditions,
                                                    method of images, Laplace’s and Poisson’s equations, energy of an
                                                    electrostatic system, conductor and dielectrics.</p>
                                                <p>Magneto-statics; Concept of magnetic field, Ampere’s Law, Biot-Savart
                                                    law, vector magnetic potential, energy of magneto static system,
                                                    mechanical forces and torques in electric and magnetic fields,
                                                    Curvilinear co-ordinates. Rectangular, cylindrical and spherical
                                                    coordinates, solutions to static field problems.</p>
                                                <p>Graphical field mapping with applications, solution to Laplace’s
                                                    equations. Rectangular, cylindrical and spherical harmonics with
                                                    applications.</p>
                                                <p>Maxwell’s equations: Their derivations, continuity of charges,
                                                    concepts of displacement current: Boundary conditions for time
                                                    varying systems, Potentials used with varying charges and currents.
                                                    Retarded potentials. Maxwell’s equations in different coordinate
                                                    systems.</p>
                                                <p>Relation between circuit theory and field theory: Circuit concepts
                                                    and the derivation from the field equations. High frequency circuit
                                                    concepts, circuit radiation resistance. Skin effect and circuit
                                                    impedance. Concept of good and perfect conductors and dielectrics.
                                                    Current distribution in various types of conductors, depth of
                                                    penetration, internal impedance, power loops, calculation of
                                                    inductance and capacitance.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Field and Wave Electromagnetic – David K. Cheng</li>
                                                    <li>Field &amp; Wave in Communication Electronics – J. R. Whinnery
                                                    </li>
                                                    <li>Field &amp; Wave in Communication Electronics – Simon Ramo</li>
                                                </ol>
                                                <p><strong>ECE – 357: Measurement and Instrumentations</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction:&nbsp; Applications, functional elements of a
                                                    measurement system and classification of instruments. Ammeter,
                                                    Voltmeter and extension of instrument ranges.&nbsp; Measurement of
                                                    electrical quantities: Resistance, Capacitance and Inductance
                                                    measurement, Current and Voltage measurement, Power and Energy
                                                    measurement. Localization of cable fault, Magnetic measurement,
                                                    ballistic galvanometer, high voltage measurement. Transducers:
                                                    Mechanical, Electrical and Optical&nbsp; transducer. Measurement of
                                                    non-electrical quantities: Radiation, Temperature, Pressure, Flow,
                                                    Level, Strain, Force and Torque measurement.&nbsp; Electronic
                                                    measuring instruments: Oscilloscope, Digital multi meters, DMM,
                                                    statistical measurement, Spectrum analyzer. Computerized
                                                    Instrumentation: Data acquisition, loggers and recorders.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electrical and Electronics Measurement and Instrumentation – A.
                                                        K. Sawhney
                                                    </li>
                                                    <li>Introduction to measurement and Instrumentation – Hellfrick,
                                                        Cooper
                                                    </li>
                                                    <li>Electrical Technology (Vol. 11) – B. L. Theraja</li>
                                                </ol>
                                                <p><strong>ECE – 358: Measurement and Instrumentations Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 358</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 325: Microprocessors and Interfacing</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>Microprocessors</strong>: Introduction to microprocessors.
                                                    Intel 8086 microprocessor, architecture, addressing modes,
                                                    instruction set, assembly language programming, interrupts and
                                                    stack.</p>
                                                <p><strong>Interfacing</strong>: memory, I/O, programmable peripheral
                                                    interface (PPI), programmable timer, serial communication interface,
                                                    programmable interrupt controller, direct memory access (DMA),
                                                    keyboard and display interface, RS-232, USB, RS-422 and RS-485,
                                                    IEEE-488.</p>
                                                <p><strong>Microcontrollers</strong>: Introduction to microcontrollers
                                                    and embedded system, PIC microcontrollers, architecture, PIC
                                                    programming in C, I/O programming, hardware connection and ROM
                                                    loaders.</p>
                                                <p>Book Recommended:</p>
                                                <ol>
                                                    <li>Microprocessors and Interfacing- Douglas V. Hall</li>
                                                    <li>Microprocessor and Microcomputer Based System Design –Mohammad
                                                        Rafiquzzaman
                                                    </li>
                                                    <li>Microprocessors – Harunur Rashid</li>
                                                    <li>Microcomputer Systems: 8086/8088 Family – Y. Liu and G. A.
                                                        Gibson
                                                    </li>
                                                    <li>The Intel Microprocessors – Bary B. Brey</li>
                                                    <li>PIC Microcontroller and Embedded Systems – Ali Mazidi, Rolin
                                                        McKinlay, Danny Causey
                                                    </li>
                                                    <li>The 8088 and 8086 Microprocessors – Walter A. Triebel and Avtar
                                                        Singh
                                                    </li>
                                                </ol>
                                                <p><strong>ECE – 326: Microprocessors and Interfacing Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 325</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 361:&nbsp;&nbsp; Telecommunication Engineering</strong>
                                                </p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Telephony:</strong> Elements of communication systems,
                                                    introduction to telephone system, exchanges, numbering, switching
                                                    principles; Subscriber’s apparatus, Dialing and signaling; Types of
                                                    signaling – different tones. <strong>Basics of switching
                                                        system</strong>: Strowger switching, crossbar switching,
                                                    electronic space division switching, time division switching, FDM,
                                                    TDM, STS and TST, combination switching, Digital signal hierarchies
                                                    in telephone systems – DS0, DS1, DS3, E1, E2, E3 etc., Stored
                                                    Program Control (SPC), Software architecture, enhanced services,
                                                    two-stage network, three-stage network, n-stage network. Principles
                                                    of common control, touch tone dial telephone, Crosspoint technology,
                                                    No. 1 ESS, Japanese D-10, Metaconta. Subscriber loop systems,
                                                    switching hierarchy and routing, transmission plan, transmission
                                                    systems, numbering plan, charging plan; signaling techniques,
                                                    in-channel signaling, common channel signaling, Overview of SS7
                                                    architecture.</p>
                                                <p><strong>Modulation:</strong> Necessity of Modulation, Types of
                                                    Modulation, Amplitude Modulation (AM) and Demodulation, Frequency
                                                    Modulation (FM) and Demodulation, PLL, Super heterodyne receiver,
                                                    Phase Modulation (PM) and Demodulation. Introduction to radio wave
                                                    propagation methods.</p>
                                                <p><strong>Introduction to Television (TV) Engineering:</strong>
                                                    Scanning and Synchronizing, Composite Video Signal, Video
                                                    Modulation, Sound Modulation, Reception Technique of Vestigial
                                                    Sideband Signal, Basic Operation of a TV Camera, Television
                                                    Transmitters and Receivers, Color TV principles, The Luminance and
                                                    Color Difference Signals, NTSC, PAL and SECAM Encoders, The PAL
                                                    Decoder Principles, The Picture Tubes and types of Drives used to
                                                    Reproduce the Color. TV studio design. <strong>Digital Television
                                                        and Video: </strong>Video Digitization formats – the 4:2:2
                                                    formats, 4:2:0 format, Source Intermediate Format (SIF), Common
                                                    Intermediate Format (CIF), General compression principles – Run
                                                    Length Coding, Discrete Cosine Transform (DCT) compression
                                                    technique, MPEG-1, MPEG-2.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Communication Systems – Simon Haykin</li>
                                                    <li>Telecommunication Switching Systems and Networks – T.
                                                        Viswanathan
                                                    </li>
                                                    <li>Communication Systems – John G. Proakis</li>
                                                    <li>Basic Television and Video System – B. Grob</li>
                                                    <li>Monochrome and Colour Television – Gulati</li>
                                                    <li>Radio Engineering – G. K. Mithal</li>
                                                </ol>
                                                <p><strong>ECE – 362:&nbsp; Telecommunication Engineering Lab</strong>
                                                </p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 361</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 373: &nbsp; Mobile Cellular
                                                        Communication&nbsp;</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Introduction to Cellular Communication; Modern cellular system (1G
                                                    Analog cellular, 2G Digital Cellular, 2.5 G Cellular System; 3G
                                                    Wireless System; 4G Wireless System; i) Radio Propagation Technique,
                                                    Free space Propagation; Two Ray model, Multipath Fading &amp;
                                                    Doppler. ii) Modulated Carrier Transmission, GMSK, QPSK iii)
                                                    Diversity Technique: Frequency &amp; Space Diversity, iv) Coding
                                                    Technique: Block Coding, Convolution Coding, v) Speech coding,
                                                    Channel coding, Equalizer, Frequency Hopping, Interleaving; Wireless
                                                    Network Operation: i) Cellular Concept, Cell Fundamentals, Traffic
                                                    Engineering, ii) Capacity Expansion Technique: Frequency Reuse, Cell
                                                    Splitting, Sectoring, Lee’s Micro cell Method, Overlaid Concept. ;
                                                    GSM Technology: i) Introduction, GSM Phases, GSM System
                                                    Architecture, GSM Components, ii) GSM Traffic Handling:
                                                    Registration, Call Establishment, Traffic Cases, iii) GSM Network
                                                    Interfaces: Air Interface, A-bis Interface, A Interface, iv) GPRS
                                                    &amp; EDGE; CDMA Technology: Spread Spectrum, IS-95 Forward Channel,
                                                    IS-95 Reverse Channel, Power Control, Handoff, W-CDMA &amp; CDMA
                                                    2000, OFDM.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Mobile Cellular Telecommunication –William C. Y. Lee</li>
                                                    <li>Mobile Communication –Jochen Schiller</li>
                                                    <li>Wireless Communication : Principles and Practices –Theodore S.
                                                        Rappaport
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 374:&nbsp;&nbsp; Mobile Cellular Communication
                                                        Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 373</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 379: &nbsp; Power Electronics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Introduction to power electronic devices</strong>: Thyristor,
                                                    SCR, BJT, MOSFET, IGBT, GTO, DIAC, TRIAC, SUS, UJT and PUJT.</p>
                                                <p><strong>Introduction to triggering</strong>: UJT relaxation
                                                    oscillator, phase control circuit, PUT relaxation oscillator, pulse
                                                    transformer.</p>
                                                <p><strong>DC-DC Converter</strong>: Choppers, step-down, step-up
                                                    choppers, Zero Voltage Switching (ZVS), Zero Current Switching
                                                    (ZCS).</p>
                                                <p><strong>Regulated Power Supplies</strong>: Buck, boost, buckboost and
                                                    Cuk regulators, switch mode power supply.</p>
                                                <p><strong>Inverters</strong>: Single phase inverters, over current
                                                    protection, output voltage control, PWM, SPWM, three phase
                                                    inverters, resonant pulse inverters.</p>
                                                <p><strong>Motor Drives</strong>: DC motor drives, AC motor drives,
                                                    speed control of AC motor, variable frequency converter, stepper
                                                    motor drive circuit, brushless DC motor drive.</p>
                                                <p><strong>Industrial Heating: </strong>Resistive heating, High
                                                    frequency heating, Induction heating, Dielectric heating and
                                                    applications, Closed loop control system.</p>
                                                <p><strong>PLC: </strong>Introduction to PLC<strong>, </strong>Controllers,
                                                    Hardware, Internal architecture, Programming, Testing, debugging,
                                                    Commercial PLC.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Power Electronics – H. Rashid</li>
                                                    <li>Principle of power Electronics –Kassakian</li>
                                                    <li>Industrial Electronics and Robotics – Schuller and McNamee</li>
                                                    <li>Power and Industrial Electronics – G. K. Mithal</li>
                                                    <li>Power Electronics System: Theory and Design – Agarwal</li>
                                                    <li>Introduction to PLCs: A beginner’s guide to Programmable Logic
                                                        Controllers – Elvin Pérez Adrover
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 380:&nbsp;&nbsp; Power Electronics Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 379</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 421:&nbsp;&nbsp; Digital Communication</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction to modulation techniques: Pulse modulation; pulse
                                                    amplitude modulation, pulse width modulation and pulse position
                                                    modulation. Pulse code modulation; quantization, Delta modulation.
                                                    TDM, FDM, OOK, FSK, PSK, QPSK; Representation of noise; threshold
                                                    effects in PCM and FM. Probability of error for pulse systems,
                                                    concepts of channel coding and capacity. Asynchronous and
                                                    synchronous communications. Hardware interfaces, multiplexers,
                                                    concentrators and buffers. Spread spectrum signals and systems.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Digital Communication – John G. Proakis</li>
                                                    <li>Digital Communication – Bernard Sklar</li>
                                                    <li>Introduction to Digital Communication – Roger L. Peterson</li>
                                                    <li>Digital Communication – Prof. N. Sarker</li>
                                                    <li>Communication System – Simon Haykin</li>
                                                </ol>
                                                <p><strong>ECE – 422: &nbsp; Digital Communication Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 421</p>
                                                <p><strong>ECE – 457: &nbsp; Satellite Communication</strong></p>
                                                <p><strong>3 Credits&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Elements of Satellite Communication, Satellite orbits-orbit
                                                    fundamental, Orbital period and speed, Angle of inclination &amp;
                                                    elevation, Azimuth, Station keeping Attitude control, Satellite
                                                    launching freq allocation. Satellite communication system, Earth
                                                    station, Satellite link design, Modulation and muse technique for
                                                    satellite link, Multiple Access. Error control for satellite link.
                                                    Factors that have influence or satellite link design. Satellite
                                                    spread spectrum communication, VSAT, Mobile Satellite Networks.
                                                    Satellite Television; Network distribution and direct
                                                    broadcasting.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Satellite Communications – Dennis Roddy</li>
                                                    <li>Electronics Communication – Dennis Roddy, John Coolen</li>
                                                    <li>Satellite Communication Engineering – Michalle A. Kolawole</li>
                                                    <li>Satellite Communication – Timothy Pratt, Charles Bostian and
                                                        Jeremy Allnutt
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 465: Microwave Engineering</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Transmission lines</strong>: H.F. transmission lines, Smith
                                                    chart, Impedance matching techniques and applications, E.M.
                                                    propagation, reflection and refraction. Waveguide: Wave guides;
                                                    Parallel plane, Rectangular, Coaxial wave guides, wave guide
                                                    components, cavity resonators. <strong>Microwave tubes</strong>:
                                                    Transit time effects, Velocity modulation, space charge wave,
                                                    Klystron amplifier, Multicavity Klystron amplifier, Reflex Klystron
                                                    oscillator. Magnetron. Traveling Wave Tube (TWT) amplifier. Backward
                                                    Wave Oscillator (BWO). <strong>Antennas</strong>: Introduction to
                                                    antennas, antennas and radiation, Hertzian dipole, Long straight
                                                    antennas; analysis, radiation patterns, Rhombic and Slot antenna.
                                                    Frequency independent and log periodic antennas, Antenna arrays,
                                                    array design.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Microwave Devices and Circuits –Samuel Y. Liao</li>
                                                    <li>Microwave Engineering –David M. Pozer</li>
                                                </ol>
                                                <p><strong>ECE – 466: Microwave Engineering Lab.&nbsp;</strong></p>
                                                <p><strong>1.5 credits&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 465</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 471: Optical Fiber Communication</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction to optical fiber communication; Optical fibers;
                                                    structure, step-index and graded – index fibers, modes of
                                                    propagation, modal theory for circular wave guide, d modal
                                                    equations, wave guide equations, power flow in optical fibers.
                                                    Signal degradation in optical fibers: fiber attenuation., distortion
                                                    in optical wave guides, dispersions in fibers, mode coupling.
                                                    Optical sources: light emitting diode (LED) and semiconductor laser
                                                    diode (SLD) – structures, internal quantum efficiencies, modulation
                                                    capability, transient response, power bandwidth product, modal
                                                    noise, temperature effects and reliability considerations. Digital
                                                    transmitter design with LASER diode. Photo detectors: p-I-n and
                                                    avalanche photo detectors (APDs) principles of operations,
                                                    structures, photo detector noise sources, detector response time,
                                                    detector responsively and photodiode materials.</p>
                                                <p>Optical modulation and detection schemes; direct detection, coherent
                                                    detection. Direct detection receiver; configuration, receiver
                                                    operation, receiver noises, receiver sensitivity calculation,
                                                    performance curves and design of receiver pre amplifier. Effect of
                                                    laser phase noise on receiver performance. Introduction to
                                                    heterodyne optical receiver. Transmission link analysis; point – to
                                                    – point links – system configuration, link power budget, rise time
                                                    budget. Data buses; star and T-coupler data buses. Local area
                                                    networks applied to single-mode fibre-optic communication. Line
                                                    coding: NRZ, RZ, Manchester code (MC) and block codes. Introduction
                                                    to wavelength division multiplexing (WDM) and optical Frequency
                                                    division multiplexing (OFDM) transmission schemes.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Optical Fiber Communications – John M. Senior</li>
                                                    <li>Optical Fiber Communications – Keiser Gred</li>
                                                    <li>Optical Fiber Communications – Palais Joseph</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 472: Optical Fiber Communication Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 471</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 211: Digital Electronics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction: Digital and Analog systems. Number Systems and codes:
                                                    Decimal, binary octal and hexadecimal number systems. 1’s complement
                                                    and 2’s complement; addition and subtraction in different bases,
                                                    subtraction using complements. Binary codes, Binary Coded Decimal
                                                    (BCD), Excess-3, Gray, Alphanumeric codes. Error detection and
                                                    correction code. Boolean Algebra and Logic Gates: Boolean algebra,
                                                    logic gates, Boolean function, De Morgan’s theorems, standard and
                                                    canonical forms. Simplification of Boolean functions: Karnaugh map,
                                                    don’t care combination, minimization in SOP form using K-map,
                                                    minimization in POS form using K-map. Combinational Logic Circuits:
                                                    Design procedure, half adder, full adder, half subtractor, full
                                                    subtractor. Combinational logic: Binary parallel adder, BCD adder;
                                                    encoder and decoder; multiplexer and demultiplexer.</p>
                                                <p>Flip-Flops: SR, JK, T and D type flip-flops, their truth tables;
                                                    master slave flip-flop; edge triggered flip-flop; asynchronous
                                                    inputs. Sequential circuits: Introduction to sequential circuits;
                                                    analysis of clocked sequential circuits; state reduction and
                                                    assignment; Flip-Flop excitation tables; Registers: Classification;
                                                    register with parallel load; shift register, bidirectional shift
                                                    register with parallel load and their applications. Counters:
                                                    Classification; binary ripple counter; BCD ripple counter; binary
                                                    up/down counter; binary counter with parallel load; timing sequence;
                                                    ring counter and Johnson counter. Memory units: Classification and
                                                    characteristics of memory; memory organization and operation;
                                                    Introduction to PLA and FPGA. Introduction to Digital ICs and Logic
                                                    Families: Diode Logic gates; Resistor transistor logic (RTL); Diode
                                                    transistor logic (DTL); Transistor-Transistor Logic (TTL); Emitter
                                                    Coupled Logic (ECL) MOS Logic and CMOS logic. Converters: Different
                                                    types of Digital to Analog converter (DAC) and Analog to Digital
                                                    converters (ADC) with their applications.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Digital Logic and Computer Design – M. Morris Mano</li>
                                                    <li>Digital Systems – R. J. Tocci</li>
                                                    <li>Digital Fundamentals – T. Floyd</li>
                                                    <li>Modern Digital Electronics – R. P. Jain</li>
                                                    <li>Digital Electronic Circuits and Systems – V. K. Puri</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 212: Digital Electronics Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 211</p>
                                                <p><strong>ECE – 479: VLSI Circuits</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Overview of the design methodology; top-down design approach.
                                                    Technology trends and design styles. Brief review of MOS transistor
                                                    theory; nMOS and pMOS transistors, threshold voltage, body effect,
                                                    design equations and V-I characteristics. Latch-up problem. MOS
                                                    transistor as a switch; pass transistors and transmission gates.
                                                    nMOS inverter characteristics. CMOS inverter characteristics;
                                                    influence of n/p ratio on transfer characteristics and noise margin.
                                                    CMOS processing technologies; design-fabrication interface, layers
                                                    of abstraction, CMOS design rules. CMOS circuit characteristics and
                                                    performance estimation; resistance and capacitance. Rise and fall
                                                    times, delay gate transistor sizing, power consumption. CMOS logic
                                                    design; logic structures, electrical and physical design of logic
                                                    gates, clocking strategies, I/O structures.</p>
                                                <p>Structured design methods; design styles, automated synthesis,
                                                    circuit extraction, simulation and design rule checking (DRC).
                                                    Design examples. CMOS subsystem design; adders and related
                                                    functions, multipliers, memory systems, data paths, programmable
                                                    logic arrays (PLAs). Field programmable gate arrays (FPGAs). VLSI
                                                    testing; fault models, design for testability (DFT) – ad hoc
                                                    testing, structured DFT, self-test and built-in test.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Basic VLSI Design –Douglas A. Pucknell, Kamran Eshraghian</li>
                                                    <li>VLSI Technology –S. M. Sze</li>
                                                    <li>Introduction to VLSI Systems –C. A. Mead and L. A. Conway</li>
                                                </ol>
                                                <p><strong>ECE – 480: VLSI Circuits Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 479</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 481: Biomedical Engineering</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Biomedical Instrumentation: hazards and safety measures in biomedical
                                                    applications, electrodes, electrocardiography (ECG),
                                                    electroencephalography (EEG), X-Ray machine, computer aided
                                                    tomography (CAT), Electrical Impedance Tomography (EIT), Focused
                                                    Impedance Measurement (FIM), Ultrasonic Imaging System, LASER
                                                    applications in biomedical field, Magnetic Resonance Imaging
                                                    (MRI).</p>
                                                <p>Blood flow meter, blood cell counters, pacemakers. Medical image
                                                    processing: Degradation model, algebraic approach of image
                                                    restoration, inverse filtering, detection of discontinuities,
                                                    region-oriented segmentation, threshold, image compression.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Handbook ofBiomedical&nbsp;Instrumentation –&nbsp;Khandpur</li>
                                                    <li>Digital Image Processing – Rafael C. Gonzalez and Richard E.
                                                        Woods, Pearson Education Asia.
                                                    </li>
                                                </ol>
                                                <p><strong>ECE – 483: Renewable Energy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><strong>Introduction to Renewable Energy Sources: </strong>Statistics
                                                    regarding solar radiation and wind speed isolation, geographical
                                                    distribution. Introduction to solar thermal conversion and solar
                                                    collectors.</p>
                                                <p><strong>Radiation characteristics of materials</strong>: Absorptance,
                                                    Emittance, Reflectance and Selective Surfaces, Modes of heat
                                                    transfer. <strong>Solar Collectors: </strong>Flat plate collectors,
                                                    Concentrating collectors, Solar distillation, Solar energy systems
                                                    for process heating, Power generation and refrigeration, Performance
                                                    and optimum design, Solar thermal modeling. <strong>Solar
                                                        Photovoltaic Energy Conversion: </strong>Solar cell fundamental,
                                                    Basic principle, Types of solar cells, PN junction as photovoltaic
                                                    cell, Heterojunction, Schottky barrier junction, Fabrication of
                                                    solar cell, Effect of environment on solar cells, (effect of
                                                    irradiance once, and effect of temperature), Effect of shading, Thin
                                                    film solar cell, Multiple sun solar cells, Fabrication of
                                                    photovoltaic modules and panels, Dimension of cells, Packing
                                                    efficiency of cells in modules, Characterization of cells and
                                                    modules.<strong> Other Non-conventional Energy Options: </strong>Wind,
                                                    Geothermal, OTEC, Wave energy, Biomass, MHD, Chemical energy, Fuel
                                                    cell and Nuclear fusion.</p>
                                                <p><strong>Power conditioning of Photovoltaic System:</strong>
                                                    Batteries, inverters, maximum power trrackers, energy system without
                                                    battery, energy storage in battery, PV – Grid interconnection with
                                                    battery storage, energy system with diesel backup and battery
                                                    storage. Design of a PV system: Calculation of array size, selection
                                                    of modules of arrays, calculation of battery capacity. Wind Energy:
                                                    Wind turbine, tubes, operational characteristics, cut-in and cut-out
                                                    speed, control, grid interfacing, AC-DC-AC link.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Renewable Energy: Power for a Sustainable Future – Godfrey
                                                        Boyle
                                                    </li>
                                                    <li>Renewable Energy – Bent Sorensen</li>
                                                    <li>Renewable Energy Sources and Methods – Anne Maczulak</li>
                                                    <li>Fundamentals of Renewable Energy Processes – Aldo Da Rosa</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 463: Antennas and Propagation</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Definitions, antenna as an aperture; Arrays of point sources; Review
                                                    of dipoles, loop and thin linear antennas. Helical antenna,
                                                    biconical and spheroidal antennas. Internal-equation methods,
                                                    current distribution; Self and mutual impedances; Arrays; design and
                                                    synthesis; Reflector type antennas. Babiner’s principle and
                                                    complementary antennas. Application of reaction concept and
                                                    variation principles in antennas and propagation; Frequency
                                                    independent antennas. Scattering and diffraction, selected topics in
                                                    microwave antennas. Antenna measurements. Application of
                                                    broadcasting, microwave links, satellite communications and radio
                                                    astronomy.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electromagnetic Fields and Waves – D. K. Cheng,</li>
                                                    <li>Antenna Theory: Analysis and Design – Constantine A. Balanis,
                                                    </li>
                                                    <li>Antenna and Wave Propagation – K. D. Prasad</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 485: Stochastic Theory of Communication</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Probability and random variables. Distribution and density functions
                                                    and conditional probability. Expectation: moments and characteristic
                                                    functions. Transformation of a random variable. Vector random
                                                    variables. Joint distribution and density. Independence. Sums of
                                                    random variables. Random Processes. Correlation functions. Process
                                                    measurements. Gaussian and Poisson random processes. Noise models.
                                                    Stationarity and Ergodicity. Spectral Estimation. Correlation and
                                                    power spectrum. Cross spectral densities. Response of linear systems
                                                    to random inputs. Introduction to discrete time processes,
                                                    Mean-square error estimation, Detection and linear filtering.
                                                    Discrete time Markov chain, Continuous time Markov chain,
                                                    Birth-death process in queuing problems. Introduction to queuing
                                                    theory, Network of queues, Queuing models: M/M/1, M/M/K, M/G/1,
                                                    M/G/K, G/M/I and G/M/K queuing models, Application of queuing models
                                                    in communication engineering.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Introduction to Probability Models – &nbsp;Sheldon M. Ross</li>
                                                    <li>Introduction to Queing Theory – Robert B Cooper</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 485: </strong><strong>Semiconductor Processing and
                                                        Fabrication Technology</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Physics of semiconductors: </strong>Electronic motion in
                                                    periodic lattice, Energy bands, Brillouin zones, and reciprocal
                                                    lattice, lattice mattering.</p>
                                                <p><strong>Semiconductor Materials: </strong>Intrinsic and extrinsic
                                                    semiconductor and compounds, purification of Ge and Si,</p>
                                                <p>preparation of single crystals and wafer, process chemicals, states
                                                    of matter, phase diagram, crystalline materials, crystal
                                                    orientation. Concept of clean room.</p>
                                                <p><strong>Crystal growth technology: </strong>Czochralski method,
                                                    solution growth, solgel method, solar evaporation method, organic
                                                    semiconductors, traveling heater method, zone melting, polysilicon
                                                    and amorphous silicon deposition, group III-V and II-V
                                                    semiconductors, SOS and SOI.</p>
                                                <p><strong>Epitaxial growth: </strong>Epitaxial silicon, vapor phase
                                                    epitaxy, molecular beam epitaxy, MOCVD, LPCVD, PECVD.</p>
                                                <p><strong>Wafer Fabrication Technology: </strong>Introduction to MSI,
                                                    VLSI, Manufacturing wafers, wafer scale integration, thin film
                                                    deposition evaporation, sputtering, PCVD, laser ablation and ion
                                                    beam deposition, insulator deposition, oxidation, kinetics,
                                                    interface characterization, clean room technology and contamination
                                                    control, impurities control, dielectric passivaion, oxidation and
                                                    nitridation, basic patterning, photolithography and electron bean
                                                    lithography, mask fabrication.</p>
                                                <p><strong>Etching: </strong>wet and dry etching, lift-off techniques.
                                                </p>
                                                <p><strong>Diffusion of impurities: </strong>Impurities control and
                                                    junction of formation, drift transistors.</p>
                                                <p><strong>Other: </strong>Metalization, assembly and encapsulation,
                                                    binding and ion implantation, sputtering section, packaging,</p>
                                                <p>fabrication of IC PIC and OEIC, Design of linear IC, and
                                                    semiconductor opto-electronic devices, process and device
                                                    evaluation, economic aspects of fabrication industry, yield
                                                    reliability and testing, scaling and limits to miniaturization,
                                                    speed-power product.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>VLSI Technology – Simon Sze</li>
                                                    <li>Fundamentals of Semiconductor FabricationPaperback&nbsp;– Gary
                                                        S. May&nbsp;&nbsp;and&nbsp;Simon M. Sze
                                                    </li>
                                                    <li>Introduction to Semiconductor Manufacturing Technology – Hong
                                                        Xiao
                                                    </li>
                                                    <li>Handbook of Semiconductor Manufacturing Technology – Yoshio
                                                        Nishi andRobert Doering
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 425: Optoelectronics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Optical properties in semiconductor: Direct and indirect band-gap
                                                    materials, radiative and non-radiative recombination, optical
                                                    absorption, photo-generated excess carriers, minority carrier life
                                                    time, luminescence and quantum efficiency in radiation. Properties
                                                    of light: Particle and wave nature of light, polarization,
                                                    interference, diffraction and blackbody radiation. Light emitting
                                                    diode (LED): Principles, materials for visible and infrared LED,
                                                    internal and external efficiency, loss mechanism, structure and
                                                    coupling to optical fibers. Stimulated emission and light
                                                    amplification: Spontaneous and stimulated emission, Einstein
                                                    relations, population inversion, absorption of radiation, optical
                                                    feedback and threshold conditions. Semiconductor Lasers: Population
                                                    inversion in degenerate semiconductors, laser cavity, operating
                                                    wavelength, threshold current density, power output, hetero-junction
                                                    lasers, optical and electrical confinement. Introduction to quantum
                                                    well lasers. Photo-detectors: Photoconductors, junction
                                                    photo-detectors, PIN detectors, avalanche photodiodes and
                                                    phototransistors. Solar cells: Solar energy and spectrum, silicon
                                                    and Schottkey solar cells. Modulation of light: Phase and amplitude
                                                    modulation, electro-optic effect, acousto-optic effect and
                                                    magneto-optic devices. Introduction to integrated optics.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electrochromism and Electrochromic Devices – Paul Monk, R. J.
                                                        Mortimer and D. R. Rosseinsky
                                                    </li>
                                                    <li>Optical System Design – Robert Fischer, Paul R. Yoder, Biljana
                                                        Tadic-Galeb
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CSE- 331: Computer Architecture</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Information representation and transfer; instruction and data access
                                                    methods; the control unit: hardwired and microprogrammed control;
                                                    memory organization, I/O systems, channels, interrupts, DMA. Von
                                                    Neumann SISD organization. RISC and CISC machines. Micro programmed
                                                    vs. hardwired control unit. <strong>Memory System Design: </strong>Cache
                                                    memory; Basic cache structure and design; Fully associative, direct
                                                    and set associative mapping; Analyzing cache effectiveness;
                                                    Replacement policies; Writing to a cache; Multiple caches; Upgrading
                                                    a cache; Main Memory; Virtual memory structure, and design; Paging;
                                                    Replacement strategies. <strong>Pipelining:</strong> General
                                                    consideration; Comparison of pipelined and nonpipelined computer;
                                                    Instruction and arithmetic pipelines, Data and Branch hazards.
                                                    <strong>Multiprocessor and Multi Computers:</strong> SISD, SIMD, and
                                                    MIMD architectures; centralized and distributed shared
                                                    memory-architectures; Multi-core Processor&nbsp; architectures.
                                                    Input/Output Devices: Performance measure, Types of I/O device,
                                                    Buses and interface to CPU, RAID. Pipelining, Pipeline Hazards.
                                                    Parallel Processing.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Computer Architecture and Parallel Processing – K Hang</li>
                                                    <li>Computer Organization and Architecture – W. Stallings</li>
                                                </ol>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section_heading text-center">
                                <h1><span class="first_sp"></span>Syllabus - Course Offering (Evening Program)<span
                                            class="second_sp"></span></h1>
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
                                                    <td width="102">Course Code</td>
                                                    <td width="402">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">APE – 101</td>
                                                    <td width="402">Academic and Professional English</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">PHY – 101E</td>
                                                    <td width="402">Physics for Engineering</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">PHY – 102E</td>
                                                    <td width="402">Physics Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">MTH – 101</td>
                                                    <td width="402">Geometry, Differential and Integral Calculus</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">CSE – 103</td>
                                                    <td width="402">Computer Programming in C</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">CSE – 104</td>
                                                    <td width="402">Computer Programming in C Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">ECE – 103</td>
                                                    <td width="402">Electrical Circuits I</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">ECE – 104</td>
                                                    <td width="402">Electrical Circuits I Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">CHM – 101</td>
                                                    <td width="402">Chemistry</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">CHM – 102</td>
                                                    <td width="402">Chemistry Lab</td>
                                                    <td width="120">0.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="102">&nbsp;</td>
                                                    <td width="402"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>22.5</strong></td>
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
                                                    <td width="93"><strong>Course Code</strong></td>
                                                    <td width="411">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">MTH – 103</td>
                                                    <td width="411">Linear Algebra, Complex Variable and Vector
                                                        Analysis
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 103</td>
                                                    <td width="411">Electrical Circuits II</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 104</td>
                                                    <td width="411">Electrical Circuits II Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 211</td>
                                                    <td width="411">Digital Electronics</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 212</td>
                                                    <td width="411">Digital Electronics Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 205</td>
                                                    <td width="411">Electronic Circuits – I</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">ECE – 206</td>
                                                    <td width="411">Electronic Circuits – I Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">IPE – 393</td>
                                                    <td width="411">Industrial Management</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">MTH – 301</td>
                                                    <td width="411">Statistics and Probability</td>
                                                    <td width="120">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="93">&nbsp;</td>
                                                    <td width="411"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>21.5</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 209</td>
                                                    <td width="408">Numerical Methods</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 325</td>
                                                    <td width="408">Microprocessors and Interfacing</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 326</td>
                                                    <td width="408">Microprocessors and Interfacing Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 367</td>
                                                    <td width="408">Electronic Circuits – II</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 368</td>
                                                    <td width="408">Electronic Circuits – II Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 355</td>
                                                    <td width="408">Electromagnetic Fields and Waves</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 207</td>
                                                    <td width="408">Electrical Machines</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 208</td>
                                                    <td width="408">Electrical Machines Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>19.5</strong></td>
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
                                                    <td width="100"><strong>Course Code</strong></td>
                                                    <td width="404">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">MTH – 203</td>
                                                    <td width="404">Differential Equations, Laplace Transforms and
                                                        Fourier Analysis
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">ECE – 335</td>
                                                    <td width="404">Signals and Communication Systems</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">ECE – 357</td>
                                                    <td width="404">Measurement and Instrumentation</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">ECE – 358</td>
                                                    <td width="404">Measurement and Instrumentation Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">CSE – 203</td>
                                                    <td width="404">Object Oriented Programming</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">CSE – 204</td>
                                                    <td width="404">Object Oriented Programming lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">ECE – 362</td>
                                                    <td width="404">Telecommunication Engineering Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">ECE – 375</td>
                                                    <td width="404">Power Electronics</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">ECE – 376</td>
                                                    <td width="404">Power Electronics Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="100">&nbsp;</td>
                                                    <td width="404">&nbsp;<strong>Subtotal</strong></td>
                                                    <td width="120"><strong>24.0</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 421</td>
                                                    <td width="408">Digital Communication</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 422</td>
                                                    <td width="408">Digital Communication Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 411</td>
                                                    <td width="408">Control System Engineering</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 412</td>
                                                    <td width="408">Control System Engineering Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 465</td>
                                                    <td width="408">Microwave Engineering</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 466</td>
                                                    <td width="408">Microwave Engineering Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 327</td>
                                                    <td width="408">Computer Networks</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CSE – 328</td>
                                                    <td width="408">Computer Networks Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 483</td>
                                                    <td width="408">Renewable Energy</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 485</td>
                                                    <td width="408">Semiconductor Processing and Fabrication
                                                        Technology
                                                    </td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>24.0</strong></td>
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
                                                    <td width="96"><strong>Course Code</strong></td>
                                                    <td width="408">Course Title</td>
                                                    <td width="120">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 373</td>
                                                    <td width="408">Mobile Cellular Communication</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 374</td>
                                                    <td width="408">Mobile Cellular Communication Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 461</td>
                                                    <td width="408">Digital Signal Processing</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 462</td>
                                                    <td width="408">Digital Signal Processing Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 481</td>
                                                    <td width="408">Biomedical Engineering</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 457</td>
                                                    <td width="408">Satellite Communication</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 471</td>
                                                    <td width="408">Optical Fiber Communication</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 472</td>
                                                    <td width="408">Optical Fiber Communication Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 479</td>
                                                    <td width="408">VLSI Circuits</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 480</td>
                                                    <td width="408">VLSI Circuits Lab</td>
                                                    <td width="120">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="96"><strong>&nbsp;</strong></td>
                                                    <td width="408"><strong>Subtotal</strong></td>
                                                    <td width="120"><strong>24.0</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408">&nbsp;</td>
                                                    <td width="120">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">ECE – 490</td>
                                                    <td width="408">Thesis/Project</td>
                                                    <td width="120">4.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">CVV – 492</td>
                                                    <td width="408">Comprehensive Viva Voce</td>
                                                    <td width="120">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>&nbsp;</strong></td>
                                                    <td width="120"><strong>&nbsp;</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="96">&nbsp;</td>
                                                    <td width="408"><strong>Total Credits required for the
                                                            degree</strong></td>
                                                    <td width="120"><strong>142.5</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse8" class="collapse">
                                            <span class="list_title">Detailed Syllabus</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box8">
                                            <div class="chairman_text_inner">
                                                <p><strong>Detailed Syllabus</strong></p>
                                                <p><strong>HUM-101: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        English-1 (Oral and written Communication Skills)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Oral &amp; written communication skills include communicative
                                                    expressions for day to day activities, both for personal and
                                                    professional requirement. Grammar items will mainly emphasize the
                                                    use of articles, numbers, tense, modal verbs, pronouns, punctuation,
                                                    etc. Sentence formation, question formation, transformation of
                                                    sentence, simple passive voice construction, and conditionals will
                                                    also be covered.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Paragraph in English – Tibbits</li>
                                                    <li>Exercise in Reading Comprehension – Tibbits</li>
                                                    <li>Essential English Grammar – Ramon Murphy</li>
                                                    <li>English Vocabulary in Use – Stuart</li>
                                                    <li>English Vocabulary in Use – McCarthy</li>
                                                    <li>Intermediate English Grammar – Ramon Murphy</li>
                                                </ol>
                                                <p><strong>APE-101: Academic and Professional English</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Grammar: Use of articles, number, tense, modal verbs, pronouns,
                                                    punctuation, sentence formation, question formation, transformation
                                                    of sentence, simple-passive voice construction. Oral and written
                                                    communication skills including communicative expressions for day to
                                                    day activities. Comprehension. Paragraph, report and Curriculum
                                                    Vitae writing.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Paragraph in English – Tibbits</li>
                                                    <li>Exercise in Reading Comprehension – Tibbits</li>
                                                    <li>Essential English Grammar – Ramon Murphy</li>
                                                    <li>English Vocabulary in Use – Stuart</li>
                                                    <li>English Vocabulary in Use – McCarthy</li>
                                                    <li>Intermediate English Grammar – Ramon Murphy</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>HUM-103: &nbsp;&nbsp;&nbsp;&nbsp; English
                                                        II: </strong><strong>Language Composition and
                                                        Comprehension</strong></p>
                                                <p><strong>3 credits</strong></p>
                                                <p>This course purports to make the student well up in composition and
                                                    comprehension of English language used in formal write ups like
                                                    articles, essays and treatises. Here text will be given for
                                                    comprehension, exercises of writing essays, paragraphs and reports
                                                    will be done and construction of proper sentences expressing formal
                                                    ideas will be taught. Sufficient exercises of translation and
                                                    re-translations will be included.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Paragraph in English – Tibbits</li>
                                                    <li>Exercise in Reading Comprehension – Tibbits</li>
                                                    <li>Essential English Grammar – Ramon Murphy</li>
                                                    <li>English Vocabulary in Use – Stuart</li>
                                                    <li>English Vocabulary in Use – McCarthy</li>
                                                    <li>Intermediate English Grammar – Ramon Murphy</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>HUM-111: &nbsp;&nbsp; Bangladesh Studies</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Part I: Society and Culture</strong></p>
                                                <p>The Sociological Perspective, Primary Concepts, Factors of social
                                                    life, Social Structure and Process, Social Institutions, Culture and
                                                    Civilization, City and Country, Social Change, Problems of Society,
                                                    Social Problems of Bangladesh, Urbanization Process and its impact
                                                    on Bangladesh Society will be covered.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Part II: Bangladesh History</strong></p>
                                                <p>The land, the geographical factor, and the people of Bangladesh.
                                                    Historical perspectives: Ancient Bengal, Early Medieval Bengal, Late
                                                    Medieval Bengal, Beginning of British rule in Bengal, Nineteenth
                                                    century Bengali Renaissance and area of social and religious
                                                    reforms, Partition of Bengal and its annulment, Bengal politics in
                                                    the 1930’s and 1940’s, Elections of 1936-37, Pakistan movement,
                                                    Partition of Bengal (1947), Language Movement (1952), Movement for
                                                    autonomy, 6-point and 11-point programmes, the 1970 election,
                                                    Genocide in East Pakistan, The Liberation War, the emergence of
                                                    Bangladesh as a sovereign independent state in 1971.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Bangladesh Encyclopedia (English Version)</li>
                                                    <li>History of Bengal (English Version) – K. Ali</li>
                                                    <li>History of Bengal (English Version) – Majumder</li>
                                                    <li>Economy of Bangladesh (Economic Journal)</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH-101: Differential and Integral Calculus (Day /
                                                        Evening)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Differential Calculus: </strong>&nbsp;Real&nbsp; number
                                                    System. Relations and functions, Functions of single variable, their
                                                    Domain, Range, Graphs, Limit, Continuity and Differentiability.
                                                    Successive Differentiation, Leibnitz’s theorem, Rolle’s theorem,
                                                    Mean value&nbsp; theorem, Taylor’s theorem, Maclaurin’s&nbsp;
                                                    theorem, Langrange’s and Cauchy’s forms&nbsp; of Remainder.
                                                    Expansion of Function&nbsp; in Taylor’s and Maclaurin’s Series.
                                                    Maximum and Minimum Values of Function. Evaluation of Indeterminate
                                                    forms of limit, L’ Hospital’s Rule. Tangent and Normal. Curvature,
                                                    Radius of Curvature, Centre of Curvature. Functions of more than one
                                                    variable, Limit, Continuity, Differentiability, Partial Derivatives,
                                                    Euler’s Theorem. Jacobians.</p>
                                                <p><strong>Integral Calculus: </strong>Indefinite Integrals and its
                                                    definition. Methods of Integration (Integration by substitution,
                                                    Integration by parts, Integration by successive reduction).
                                                    Fundamental theorem of Integral calculus. Definite Integral and its
                                                    properties. Definite Integral as the limit of a sum. Improper
                                                    Integrals, Beta and Gamma Function, Its application in evaluating
                                                    Integrals. Evaluation of Arc length, Areas, Surfaces of Revolution,
                                                    Volumes of solids of Revolution, Multiple &nbsp;Integrals.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Calculus – Howard Anton; 10<sup>th</sup> Edition; John Willy and
                                                        Sons.
                                                    </li>
                                                    <li>Differential Calculus – B. C. Das &amp; B. N. Mukharjee; 54<sup>th</sup>
                                                        Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                    <li>Integral Calculus – B. C. Das &amp; B. N. Mukharjee;
                                                        54<sup>th</sup> Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                    <li>A Text Book on Differential Calculus – Mohammad, Bhattacharjee
                                                        &amp; Latif, 4<sup>th</sup> Edition, 2014; S. Chakravarty,
                                                        Gonith Prokashan.
                                                    </li>
                                                    <li>A Text Book on Integral Calculus – Mohammad, Bhattacharjee &amp;
                                                        Latif; 4<sup>th</sup> Edition, 2014; S. Chakravarty, Gonith
                                                        Prokashan.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH-103: Geometry and Linear Algebra (Day)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Geometry:</strong></p>
                                                <p><strong>Two dimensional Geometry:</strong> Transformation of
                                                    Co-ordinates. Pair of straight lines, General Equation of Second
                                                    Degree, Circle, Parabola, Ellipse and Hyperbola. <strong>Three
                                                        Dimensional Geometry:</strong> Three Dimensional Co-ordinates,
                                                    Direction Cosines and Direction Ratios. Plane and Straight line.</p>
                                                <p><strong>Linear Algebra:</strong> Determinant and properties of
                                                    Determinants, Matrix, Types of matrices, Matrix operations, Laws of
                                                    matrix Algebra, Invertible matrices, System of Linear equations
                                                    (homogeneous and non-homogeneous) and their solution. Elementary row
                                                    and Column operations and Row-reduced echelon matrices, Rank of
                                                    matrices. Vectors in R<sup>n</sup> and C<sup>n&nbsp;&nbsp; </sup>,
                                                    Inner product, Norm and Distance in R<sup>n</sup> and
                                                    C<sup>n&nbsp; </sup>. Vector Spaces, Subspace, Linear combination of
                                                    vectors, Linear dependence and independence of vectors. Basis and
                                                    Dimension of vector spaces. Inner product spaces, Orthogonality and
                                                    Orthonormal sets, Eigen values and Eigen vectors, diagonalization,
                                                    Cayley-Hamilton&nbsp; theorem and its application.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Books recommended:</strong></p>
                                                <ol>
                                                    <li>Analytical Geometry of Conic Section – J. M. Kar.</li>
                                                    <li>An Elementary Treatise on Co-ordinate Geometry of three
                                                        dimensions – J. T. Bell; Macmillan India Ltd.
                                                    </li>
                                                    <li>A Text Book on Co-ordinate Geometry – Rahman &amp;
                                                        Bhattacharjee; 12<sup>th</sup> Edition, 2014; S. Chakravarty,
                                                        Gonith Prokashan.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Linear
                                                        Algebra – Seymour Lipschutz; 3<sup>rd</sup> Edition; McGraw Hill
                                                        Book Company.
                                                    </li>
                                                    <li>Linear Algebra with Applications – R. Antone.</li>
                                                    <li>Linear Algebra – Dewan Abdul Quddus; Latest Edition; Titash
                                                        Publications.
                                                    </li>
                                                    <li>Linear Algebra – Saikia.</li>
                                                </ol>
                                                <p><strong>MTH-201: Vector Analysis and Complex Variable (Day)</strong>
                                                </p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Vector Analysis: </strong>Vector Algebra – Vectors in three
                                                    dimensional space, Algebra of Vectors, Rectangular Components,
                                                    Addition, Subtraction and Scalar multiplication, Scalar and Vector
                                                    product of two vectors. Scalar and Vector triple product.
                                                    Application in Geometry.</p>
                                                <p>Vector Calculus – Limit, Continuity and Differentiability of Scalar
                                                    and Vector point functions.&nbsp; Scalar and Vector field. Gradient,
                                                    Divergence and Curl of point functions. Vector Integration, Line,
                                                    Surface and Volume Integrals. Green’s theorem, Gauss’s theorem,
                                                    Stoke’s theorem.</p>
                                                <p><strong>Complex Variable: </strong>Field of Complex numbers,
                                                    D’Moivre’s theorem and its applications. Limit and Continuity of
                                                    complex functions, Derivatives, Analytic function, Harmonic
                                                    function, Cauchy-Rieman equation. Line Integral of Complex
                                                    functions. Cauchy’s&nbsp; Integral theorem and Cauchy’s&nbsp;
                                                    Integral formula. Lioville’s theorem, Taylors and Laurent’s theorem,
                                                    Singularity Residue, Cauchy’s Residue theorem. Contour Integration.
                                                    Bilinear transformation. Mapping of Elementary functions. Conformal
                                                    mapping.</p>
                                                <p><strong>Book Recommended:</strong></p>
                                                <ol>
                                                    <li>Schaum’s Outline Series of the Theory and&nbsp; Problems on
                                                        Vector Analysis – Murray R. Spiegel; SI (Metric Edition); McGraw
                                                        Hill Book Company.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Complex
                                                        Variable – Murray R. Spiegel; 2<sup>nd</sup> Edition; McGraw
                                                        Hill Book Company.
                                                    </li>
                                                    <li>Functions of a Complex Variable – Dewan Abdul Quddus; Latest
                                                        Edition; Titash Publications.
                                                    </li>
                                                </ol>
                                                <p><strong>MTH-203: Differential Equations, Laplace Transforms and
                                                        Fourier
                                                        Analysis </strong><strong>(</strong><strong>Day)</strong></p>
                                                <p><strong>3 Credits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Differential Equation:</strong> Formation of Differential
                                                    equation, Degree and Order of differential equation, Complete and
                                                    Particular solution. Ordinary differential equation – Solution of
                                                    ordinary differential equation of first order and first degree
                                                    (special forms). Linear differential equation with constant
                                                    coefficients. Homogeneous linear differential equation. Solution of
                                                    differential equation by the method of Variation of parameters.
                                                    Solution of linear differential equations in series by Frobenius
                                                    method. Bessel’s function and Legendre’s Polynomials and their
                                                    properties. Simultaneous equation of the form &nbsp;&nbsp;&nbsp;= =&nbsp;.
                                                    Partial differential equation – Lagrange’s linear equation, Equation
                                                    of linear and non-linear first order standard forms, Charpit’s
                                                    method.</p>
                                                <p><strong>Laplace Transforms</strong>: Definition, Laplace transforms
                                                    of some elementary functions, sufficient conditions for existence of
                                                    Laplace transforms, Inverse Laplace transforms, Laplace transforms
                                                    of derivatives, Unit step function, Periodic function, Some special
                                                    theorems on Laplace transforms, Partial fraction, Solution of
                                                    differential equations by Laplace transforms, Evaluation of Improper
                                                    Integrals.</p>
                                                <p><strong>Fourier Analysis: </strong>Fourier series (Real and complex
                                                    form). Finite transforms, Fourier Integrals, Fourier transforms and
                                                    application in solving boundary value problems.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Differential Equations – H. T. H. Piaggio; 1<sup>st</sup> Indian
                                                        Edition, 1985, S. K. Jain for CBS Publishers.
                                                    </li>
                                                    <li>A Text Book on Integral Calculus with Differential Equations –
                                                        Mohammad,&nbsp; Bhattacharjee &amp; Latif, 4<sup>th</sup>
                                                        Edition, 2010; S. Chakravarty, Gonith Prokashon.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Laplace
                                                        Transforms – Murray R. Spiegel; Revised Edition, 2003; McGraw
                                                        Hill Book Company.
                                                    </li>
                                                    <li>Differential Equation – Md. Abu Eusuf; Latest Edition; Abdullah
                                                        Al Mashud Publisher.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH – 101: Geometry, Differential and Integral Calculus
                                                        (Evening)</strong></p>
                                                <p><strong>3.0 Credits</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Geometry:</strong></p>
                                                <p>Two dimensional Geometry: Transformation of Coordinates, General
                                                    Equation of Second Degree, pair of straight lines, Circle, Parabola,
                                                    Ellipse and Hyperbola. Three Dimensional Geometry: Three Dimensional
                                                    Co-ordinates, Direction Cosines and Direction Ratios. Plane and
                                                    Straight line.</p>
                                                <p><strong>Differential Calculus: </strong>&nbsp;Real&nbsp; number
                                                    System. Functions of single variable, its Graphs, Limit, Continuity
                                                    and Differentiability. Successive Differentiation, Leibnitz’s
                                                    theorem, Rolle’s theorem, Mean value&nbsp; theorem, Taylor’s
                                                    theorem, Maclaurin’s&nbsp; theorem, Langrange’s and Cauchy’s forms&nbsp;
                                                    of Remainder. Expansion of Function in Taylor’s and Maclaurin’s
                                                    Series. Maximum and Minimum Values of Function. Evaluation of
                                                    Indeterminate forms of limit, L’ Hospital’s Rule. Tangent and
                                                    Normal. Functions of more than one variable, Limit, Continuity,
                                                    Differentiability, Partial Derivatives, Euler’s Theorem. Jacobians.
                                                </p>
                                                <p><strong>Integral Calculus: </strong>Indefinite Integrals and its
                                                    definition. Methods of Integration (Integration by substitution,
                                                    Integration by parts, Integration by successive reduction).
                                                    Fundamental theorem of Integral calculus. Definite Integral and its
                                                    properties. Definite Integral as the limit of a sum. Improper
                                                    Integrals, Beta and Gamma Function, Its application in evaluating
                                                    Integrals. Evaluation of Arc length, Areas, Surfaces of Revolution,
                                                    Volumes of solids of Revolution, Multiple&nbsp; Integrals.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Analytical Geometry of Conic Section – J. M. Kar.</li>
                                                    <li>A Text Book on Co-ordinate Geometry – Rahman &amp;
                                                        Bhattacharjee; Chakravarty, Gonith Prokashon.
                                                    </li>
                                                    <li>Calculus with Analytic Geometry – Thomas and Finne</li>
                                                    <li>Calculus – Howard Anton; 10<sup>th</sup> Edition; John Willy and
                                                        Sons.
                                                    </li>
                                                    <li>Differential Calculus – B. C. Das &amp; B. N. Mukharjee; 54<sup>th</sup>
                                                        Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                    <li>Integral Calculus – B. C. Das &amp; B. N. Mukharjee;
                                                        54<sup>th</sup> Edition; U. N. Dhur &amp; Sons PTL.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>MTH-103: Linear Algebra, Vector Analysis and Complex Variable
                                                        (Evening)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>Linear Algebra:</strong> Matrix, Types of matrices, Matrix
                                                    operations, Laws of matrix Algebra, Invertible matrices, System of
                                                    Linear equations (homogeneous and non-homogeneous) and their
                                                    solution. Elementary row and Column operations and Row-reduced
                                                    echelon matrices, Different types of matrices, Rank of matrices.
                                                    Eigen values and Eigen vectors.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Vector Analysis: </strong>Vector Algebra – Vectors in three
                                                    dimensional space, Algebra of Vectors, Rectangular components,
                                                    Addition and Scalor multiplication, Scalor and Vector product of two
                                                    Vectors, Scalor and Vector triple product. Vector Calculus – Vector
                                                    differentiation and&nbsp; Integration. Gradient, Divergence and
                                                    Curl. Green’s theorem, Gauss’s theorem, Stoke’s theorem.</p>
                                                <p><strong>Complex Variable: </strong>Limit. Continuity and
                                                    differentiability of complex functions. Analytic function, Harmonic
                                                    function, Cauchy–Rieman equation. Complex Integration. Cauchy’s
                                                    integral theorem and Cauchy’s Integral formula. Lioville’s theorem.
                                                    Taylor’s and Laurent’s theorems. Singularities. Residue, Cauchy’s
                                                    Residue theorem. Contour Integration.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Linear
                                                        Algebra – Seymour Lipschutz; 3<sup>rd</sup> Edition; McGraw Hill
                                                        Book Company.
                                                    </li>
                                                    <li>Linear Algebra with Applications – R. Antone.</li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Vector
                                                        Analysis – Murray R. Spiegel; SI (Metric Edition); McGraw Hill
                                                        Book Company.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Complex
                                                        Variable – Murray R. Spiegel; McGraw Hill Book Company.
                                                    </li>
                                                    <li>Functions of a Complex Variable – Dewan Abdul Quddus, Latest
                                                        Edition, Titash Publications.
                                                    </li>
                                                </ol>
                                                <p><strong>MTH-203: Differential Equations, Laplace Transforms and
                                                        Fourier Analysis (Evening)</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong><u>&nbsp;</u></strong></p>
                                                <p><strong>Differential Equation: </strong>Formation, Degree and Order
                                                    of differential equation, Complete and Particular solution. &nbsp;Solution
                                                    of ordinary differential equation of first order and first degree
                                                    (special forms), Linear differential equation with constant
                                                    co-efficients. Homogeneous linear differential equation. Solution of
                                                    equation by the method of Variation of Parameters.&nbsp; Solution of
                                                    Linear differential equation in series by Frobenius method. Solution
                                                    of Simultaneous equations of the form&nbsp;&nbsp;&nbsp; &nbsp;= =&nbsp;.
                                                </p>
                                                <p><strong>Laplace Transforms</strong>: Definition, Laplace transforms
                                                    of some elementary functions, Sufficient conditions for existence of
                                                    Laplace Transforms, Inverse Laplace transforms, Laplace transforms
                                                    of derivatives, Unit step function, Periodic function, some special
                                                    theorems on Laplace transforms, Partial fraction. Solution of
                                                    differential equations by Laplace transforms. Evaluation of Improper
                                                    Integrals.</p>
                                                <p><strong>Fourier Analysis</strong>: Fourier series (Real and complex
                                                    form), Finite transforms, Fourier Integrals, Fourier Transforms and
                                                    application in solving boundary value problems.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Differential Equation – H. T. H. Piaggio, 1<sup>st</sup> Indian
                                                        Edition, 1985, S. K. Jain for CBS Publishers
                                                    </li>
                                                    <li>A Text Book on Integral Calculus with Differential Equation –
                                                        Mohammad,&nbsp; Bhattacharjee &amp; Latif, 4<sup>th</sup>
                                                        Edition, Gonith Prokashon.
                                                    </li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Laplace
                                                        Transforms – Murray R. Spiegel , Revised Edition,&nbsp; 2003,
                                                        McGraw Hill Book Company.
                                                    </li>
                                                    <li>Differential Equations – Md. Abu Eusuf, Latest Edition, Abdullah
                                                        Al Mashud Publisher.
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>PHY-101: Physics-I: Mechanics, Properties of Matter, Waves,
                                                        Optics, Heat and Thermodynamics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Mechanics</strong>: Measurements, Motion in One Dimension,
                                                    Motion in a Plane, Particle Dynamics, Work &amp; Energy, Circular
                                                    Motion, Simple Harmonic Motion, Rotation of Rigid Bodies, Central
                                                    Force, Structure of Matter, Mechanical&nbsp; Properties of
                                                    Materials. Properties of Matter: Elasticity, Stresses &amp; Strains,
                                                    Young’s Modulus, Bulk Modulus, Rigidity Modulus, Elastic Limit,
                                                    Poisson’s Ratio, Relation between Elastic Constants, Bending of
                                                    Beams. Fluid Motion, Equation of Continuity, Bernoulli’s Theorem,
                                                    Viscosity, Stokes’ Law. Surface Energy &amp; Surface Tension,
                                                    Capillarity, Determination of Surface Tension by Different Methods.
                                                </p>
                                                <p><strong>Waves</strong>: Wave Motion &amp; Propagation, Simple
                                                    Harmonic Motion, Vibration Modes, Forced Vibrations, Vibration in
                                                    Strings &amp; Columns, Sound Wave &amp; Its Velocity, Doppler
                                                    Effect, Elastic Waves, Ultrasonics, Practical Applications. <strong>Optics</strong>:
                                                    Theories of Light, Huygen’s Principle, Electromagnetic Waves,
                                                    Velocity of Light, Reflection, Refraction, Lenses, Interference,
                                                    Diffraction, Polarization. Heat &amp; Thermodynamics : Temperature
                                                    and Zeroth Law of Thermodynamics, Calorimetry, Thermal Equilibrium
                                                    &amp; Thermal Expansion, First Law of Thermodynamics, Specific Heat,
                                                    Heat Capacities, Equation of State, Change of Phase, Heat Transfer,
                                                    Second Law of Thermodynamics, Carnot Cycle, Efficiency, Entropy,
                                                    Kinetic Theory of Gases.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Fundamentals of Physics (Part I) – Haliday, Resnic and Walker
                                                    </li>
                                                    <li>Modern Physics – Bernstein</li>
                                                    <li>Concept of Modern Physics – Beiser</li>
                                                    <li>Fundamentals of Optics – Brizlal</li>
                                                    <li>Optics – Ghotok</li>
                                                    <li>Heat and Thermodynamics – Brizlal</li>
                                                    <li>University Physics with Modern Physics – Young</li>
                                                    <li>Essential University Physics Vol. I – Wolfson</li>
                                                </ol>
                                                <p><strong>PHY-103: Electricity and Magnetism &amp; Modern
                                                        Physics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Electrostatics, Electric Charge, Coulomb’s Law, Electric Field &amp;
                                                    Electric Potential, Electric Flux Density, Gauss’s Law, Capacitors
                                                    and Dielectrics, Steady Current, Ohm’s Law, Magnetostatics, Magnetic
                                                    Field, Biot-Savart Law, Ampere’s Law, Electromagnetic Induction,
                                                    Faraday’s Law, Lenz’s Law, Self Inductance &amp; Mutual Inductance,
                                                    Magnetic Properties of Matter, Permeability, Susceptibility,
                                                    Diamagnetism, Paramagnetism &amp; Ferromagnetism, Maxwell’s
                                                    Equations of Electromagnetic Waves, Waves in Conducting &amp;
                                                    Non-Conducting Media, Total Internal Reflection, Transmission along
                                                    Wave Guides.</p>
                                                <p>Special Theory of Relativity, Length Contraction &amp; Time Dilation,
                                                    Mass-Energy Relation, Photo Electric Effect, Quantum Theory, X-rays
                                                    and X-ray Diffraction, Compton Effect, Dual Nature of Matter &amp;
                                                    Radiation, Atomic Structure, Nuclear Dimensions, Electron Orbits,
                                                    Atomic Spectra, Bohr Atom, Radioactive Decay, Half-Life, a, b and g
                                                    Rays, Isotopes, Nuclear Binding Energy, Fundamentals of Solid State
                                                    Physics, Lasers, Holography.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Fundamentals of Physics (Part II) – Haliday, Resnic and Walker
                                                    </li>
                                                    <li>Modern Physics – Bernstein</li>
                                                    <li>Concept of Modern Physics – Beiser</li>
                                                    <li>Fundamentals of Optics – Brizlal</li>
                                                    <li>Optics – Ghotok</li>
                                                    <li>Heat and Thermodynamics – Brizlal</li>
                                                    <li>University Physics with Modern Physics – Young</li>
                                                    <li>Essential University Physics Vol. I – Wolfson</li>
                                                </ol>
                                                <p><strong>PHY–102: Physics Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on PHY 101 and PHY 103</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>PHY-101E: Physics for Engineering (Evening)</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>Properties of matter</strong>: Elasticity, Stress and Strain,
                                                    Young’s Modulus, Surface Tension.</p>
                                                <p><strong>Heat &amp; Thermodynamics</strong>: Heat, Temperature, Zeroth
                                                    Law of&nbsp; Thermodynamics, Thermal Equilibrium, Seebeck Effect,
                                                    Reversible and Irreversible Processes, First and Second law of
                                                    Thermodynamics, Heat Engine, Carnot Cycle.</p>
                                                <p><strong>Electromagnetism</strong>: Electric charge, Charge Density,
                                                    Coulomb’s and Ohm’s law, Electric field and Electrical Potential,
                                                    Electric dipole, Electric flux, Gauss’s law and its application,
                                                    Capacitance, Magnetic field, Biot-Savert law, Ampere’s law and its
                                                    application, Electromagnetic Induction, Faraday’s law, Lenz’s law,
                                                    Self Inductance and Mutual Inductance.</p>
                                                <p><strong>Optics</strong>: Nature and Propagation of light, Reflection
                                                    and Refraction of light, Total Internal Reflection, Interference,
                                                    Diffraction, Dispersion, Polarization.</p>
                                                <p><strong>Modern Physics</strong>: Theory of Relativity, Length
                                                    Contraction and Time Dilation, Mass-Energy Relation, Compton Effect,
                                                    Photoelectric Effect, Quantum Theory, Atomic structure, X-ray
                                                    Diffraction, Atomic Spectra, Electron Orbital Wavelength, Bohr
                                                    radius, Radioactivity, de Broglie&nbsp;theory, Nuclear Fission and
                                                    Fusion.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Fundamentals of Physics (Part I) – Haliday, Resnic and Walker
                                                    </li>
                                                    <li>Modern Physics – Bernstein</li>
                                                    <li>Concept of Modern Physics – Beiser</li>
                                                    <li>Fundamentals of Optics – Brizlal</li>
                                                    <li>Optics – Ghotok</li>
                                                    <li>Heat and Thermodynamics – Brizlal</li>
                                                    <li>University Physics with Modern Physics – Young</li>
                                                    <li>Essential University Physics Vol. I – Wolfson</li>
                                                </ol>
                                                <p><strong>PHY–102E: Physics Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on PHY-101E</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CHE-101: Chemistry</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Atomic and Molecular Structure: </strong>Atomic Orbital:
                                                    Hydrogen atom and many electron atoms, The periodic table of
                                                    elements, Atomic properties and the periodic table, Chemical
                                                    properties of s-, p-, d-, f- block elements, The origin of bonding
                                                    forces, covalent versus bonding, Detailed consideration of Covalent
                                                    bonding, bonding in some representative molecules.</p>
                                                <p><strong>Acids and Bases: </strong>Acid-Base equilibrium and pH scale
                                                    in terms of activities, Acid-Base titration, Acid-Base indicators,
                                                    Buffers, Henderson-Hasselbach approximation useful in biology
                                                    application.</p>
                                                <p><strong>Electrochemistry: </strong>Introductory topics,
                                                    Oxidation-Reduction reactions, The electrochemical cell, The Nernst
                                                    equation, The measurement of cell e.m.f.</p>
                                                <p><strong>The rates of chemical reactions: </strong>Experimental rate
                                                    laws, Elementary reactions, Kinetics and mechanisms.</p>
                                                <p><strong>Processes and process variables: </strong>Mass and volume,
                                                    Flow rate, Chemical composition, Pressure, Temperature.</p>
                                                <p><strong>Material Balances: </strong>Process classification, Balances,
                                                    Material balance calculations, balances on multiple unit processes,
                                                    Balances on reactive systems and processes. Phase rule, Phase
                                                    diagram of mono component system.</p>
                                                <p><strong>Energy and energy balances: </strong>Energy balances on
                                                    closed systems, Energy balances on open systems at steady state,
                                                    Energy balance procedures, mechanical energy balances.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Physical Chemistry – Peter Atkins and Julio de Paula</li>
                                                    <li>Modern Chemistry – Raymond E. Davis</li>
                                                    <li>Physical Chemistry – Robert J. Silbey, Robert A. Alberty and
                                                        Moungi G. Bawendi
                                                    </li>
                                                    <li>Introductory Chemistry a Foundation – Steven S. Zumdahl</li>
                                                    <li>Inorganic Chemistry – Catherine Housecroft and Alan G. Sharpe
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CHE–102: Chemistry Lab</strong></p>
                                                <p><strong>0.0 Credits</strong></p>
                                                <p>Laboratory works based on CHE – 101</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 103 Electrical Circuits I</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Fundamental electrical concepts, Kirchoff’s Laws, Equivalent
                                                    resistance. Electrical circuits: Series circuits, parallel circuits,
                                                    series-parallel networks. Network analysis: Source conversion,
                                                    Star/Delta conversion, Branch-current method, Mesh analysis, Nodal
                                                    analysis. Network theorems: Superposition theorem, Thevenin’s
                                                    theorem, Norton’s theorem, Maximum Power Transfer theorem,
                                                    Reciprocity theorem. Capacitors and inductors, series and parallel
                                                    combination of inductors and capacitors. Responses of RL and RC
                                                    circuit: Natural and step responses. Inductors</p>
                                                <p>Magnetic quantities and variables: Flux, permeability and reluctance,
                                                    magnetic field strength, magnetic potential, flux density,
                                                    magnetization curve. Laws in magnetic circuits: Ohm’s law and
                                                    Ampere’s circuital law. Magnetic circuits: Series, parallel and
                                                    series-parallel circuits.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Introductory Circuit Analysis – R . L . Boylestad</li>
                                                    <li>Introduction to Electrical Engineering – R .P. Ward</li>
                                                    <li>Electrical Technology (Volume 1) – B . L . Theraja A. K.
                                                        Theraja
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 104: Electrical Circuits I Lab</strong></p>
                                                <p><strong>1.5 credits</strong></p>
                                                <p>Laboratory works based on ECE – 101</p>
                                                <p><strong>ECE-105: Electrical Circuits II</strong></p>
                                                <p><strong>Credit: 3.0</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Sinusoidal Alternating Waveforms</strong>: Definitions, phase
                                                    relations, Instantaneous value, Average value, Effective (rms)
                                                    value. Phasor algebra and complex quantities, Series, parallel and
                                                    series-parallel ac networks. Power: Apparent power, Reactive power,
                                                    Power triangle, Power factor correction. Pulse waveforms and the RC
                                                    response.</p>
                                                <p>Analysis of Single phase AC circuit: Series and parallel RL, RC and
                                                    RLC circuit, nodal and mesh analysis, application of network
                                                    theorems in AC circuits. Circuits with non-sinusoidal excitations,
                                                    transients in AC circuits, passive filters. <strong>Resonance in AC
                                                        Circuits: </strong>Series and parallel resonance. Q of a
                                                    circuit, Admittance. Impedance matching and maximum power transfer.
                                                    <strong>Poly-Phase Circuit: T</strong>hree phase supply, balanced
                                                    and unbalanced poly phase circuit, power calculation.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Introductory circuit Analysis – R. L. Boylestad</li>
                                                    <li>Alternating Current Circuit –R. M. Kerchner , G. F. Corcoran
                                                    </li>
                                                    <li>Electrical Circuit –James W. Nilson</li>
                                                    <li>Electrical technology (Volume 1) –B. L. Theraja K. Theraja</li>
                                                </ol>
                                                <p><strong>ECE-106:&nbsp; Electrical Circuits II Lab</strong></p>
                                                <p><strong>Credit: 1.5</strong></p>
                                                <p>Laboratory works based on ECE 103.</p>
                                                <p><strong>CSE-103: &nbsp;&nbsp;&nbsp;&nbsp; Computer Programming in
                                                        C</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Programming language: Basic concept; overview of programming
                                                    languages, C-language: Preliminaries; Elements of C; program
                                                    constructs; variables and data types in C; Input and output;
                                                    character and formatted I/O; Arithmetic expressions and assignment
                                                    statements; loops and nested loops; Decision making’ Arrays;
                                                    Functions; Arguments and Local Variables; Calling functions and
                                                    arrays; Recursion and recursive functions; structures within
                                                    structure; Files; File functions for sequential and Random I/O.
                                                    Pointers, Pointers and Structures; Pointers and functions; Pointer
                                                    and arrays; Operations on pointers; Pointer and memory addresses;
                                                    Operations on bits; Bit operation; Bit field; Advanced features;
                                                    Standard and Library functions.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>The C Programming Language – Kernighan and Ritchie</li>
                                                    <li>Teach Yourself C – H. Schield</li>
                                                </ol>
                                                <p><strong>CSE-104: Computer Programming in C Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on CSE-103</p>
                                                <p><strong>ECE – 205: Electronic Circuit I</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>Semiconductor Diode:</strong> Introduction to semiconductor
                                                    devices, p-type and n-type semiconductors, principle of p-n junction
                                                    diode,&nbsp; forward and reverse biased conditions, I-V
                                                    Characteristics of a Diode, Simplified DC and AC Diode Models,
                                                    Dynamic Resistance and Capacitance, load line analysis, half wave
                                                    and full wave rectifiers, filter, clipping and clamping&nbsp;
                                                    circuits. Optical Diodes, Solar Cell, Zener diode and its
                                                    applications and voltage regulator circuits.</p>
                                                <p><strong>Bipolar Junction Transistor (BJT):</strong> Principle of
                                                    operation of BJT. Transistor circuit configurations (CE, CB and CC
                                                    configurations) and their input, output and transfer
                                                    characteristics. BJT biasing circuits and Thermal Stabilization, DC
                                                    Load Line and Operating Point. Low frequency AC equivalent circuits,
                                                    configurations, voltage, current and power gain, input and output
                                                    impedance with resistive load. Transistor as an Amplifier,
                                                    Transistor as a Switch. Low and high frequency response of CE
                                                    amplifiers. <strong>BJTs at Low Frequencies:</strong> Hybrid h
                                                    Model, H-Parameters, Analysis of a Transistor Amplifier Circuit
                                                    using h-parameters, High Input Resistance Transistor Circuits;
                                                    <strong>BJTs at High Frequencies:</strong> Hybrid pi-model. CE Short
                                                    Circuit Current Gain, Current Gain with Resistive Load. Harmonic
                                                    distortion in CE amplifiers.</p>
                                                <p><strong>Introduction of Field Effect Transistor (FET),</strong>
                                                    Junction Field Effect Transistor (JFET), Metal Oxide Semiconductor
                                                    Field Effect Transistors (MOSFET): physical construction,
                                                    classification, basic equations and various types of I-V
                                                    characteristics. Basic FET amplifiers. Use of FET as voltage
                                                    controlled switch and resistors.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electronic Devices – Thomas L. Floyd</li>
                                                    <li>Electronics Device and Circuit – R. L. Boylested</li>
                                                    <li>Integrated Electronics –Jacob Millman and Christos C. Halkias.
                                                    </li>
                                                    <li>Electronics Principle – Malvino</li>
                                                    <li>Micro Electronics – Jacob Millman, Arvin Garbel.</li>
                                                    <li>Solid State Electronics Devices – Ben G. Streetman</li>
                                                    <li>Electronics Technology – B. L. Theraja</li>
                                                </ol>
                                                <p><strong>ECE – 206: Electronic Circuits I Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on <strong>ECE – 206</strong>.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 367: Electronic Circuits II</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Feedback Amplifier: </strong>Classification, Feedback
                                                    Concept, Effect of Feedback on Transfer Gain, Loops; Gain, Amplifier
                                                    Characteristics, Types of Feedback. Negative Feedback Amplifiers and
                                                    their Applications.</p>
                                                <p><strong>Sinusoidal Oscillators:</strong> Conditions of self
                                                    Oscillation, Phase Shift Oscillation; Colpitt’s and Hartley, Wien
                                                    Bridge and Crystal Oscillators.</p>
                                                <p><strong>Active Filters:</strong> Basic Filter Responses, Filter
                                                    Response Characteristics, Active Low Pass, High Pass, Band Pass, and
                                                    Band Stop Filters;</p>
                                                <p><strong>Power Amplifiers:</strong> Untuned Power Amplifiers; Class A,
                                                    Push Pull Class B, Complementary Symmetry Class B, Class AB,
                                                    Darlington Pair. Tuned Voltage and Power (Class B and Class C)
                                                    Amplifiers, Wide Band Amplifier, Mixers.</p>
                                                <p><strong>Operational Amplifiers (OP Amps):</strong> Introduction to
                                                    Op-Amps, Differential and Common mode gain. Common Mode Rejection
                                                    Ratio (CMRR). Frequency response of Op-Amps and slew rate, Noise and
                                                    Frequency Compensation. Inverting and Non-inverting Amplifier, Phase
                                                    Inverter, Scale Changer, Integrating and Differentiating Circuits.
                                                    Comparators, Comparators and Applications; Adder or Summing
                                                    Amplifier, Voltage to Current and Current to Voltage Converter,
                                                    Voltage Follower. Electronic Analog Computation, Capacitors,
                                                    Differential, Instrumentation and Bridge Amplifiers. Phase Locked
                                                    Loop (PLL) circuit and Voltage Controlled Oscillator,
                                                    multi-vibrators, Schmitt Trigger circuit and wave shaping using
                                                    op-amp, 555 timer and other linear ICs.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electronic Devices – Thomas L. Floyd</li>
                                                    <li>Electronics Device and circuit – R. L. Boylested</li>
                                                    <li>Integrated Electronics – Jacob Millman and Christos C. Halkias
                                                    </li>
                                                    <li>Electronics Principle – Malvino</li>
                                                    <li>Micro Electronics – Jacob Millman, Arvin Garbel</li>
                                                    <li>Electronics Devices : A Design Approach – Ali Aminian and Marian
                                                        Kazimierczuk
                                                    </li>
                                                    <li>Solid State Electronics Devices – Ben G. Streetman</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 368: Electronic Circuits II Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on <strong>ECE – 367</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 369: Solid State Devices</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p>Introduction: Classification of solids, crystal lattice and
                                                    structures, Miller Indices, Electronic model of semiconductor and
                                                    solids. Valance and conduction bands Concept of holes. Introductory
                                                    quantum mechanics, wave equation, uncertainty principle, postulates,
                                                    Schrodinger time independent equation. Energy band diagrams of
                                                    semiconductor.</p>
                                                <p>Semiconductors in equilibrium: Energy bands, intrinsic and extrinsic
                                                    Semiconductors, Fermi levels, electron and hole concentrations,
                                                    temperature dependence of carrier concentrations and invariance of
                                                    Fermi level. Carrier transport processes and excess carriers: Drift
                                                    and diffusion, generation and recombination of excess,
                                                    built-in-field, Einstein relations, continuity and diffusion
                                                    equations for holes and electrons and quasi-fermi level. PN
                                                    junction: Basic structure, equilibrium conditions, contact
                                                    potential, equilibrium Fermi level, space charge, non-equilibrium
                                                    condition, forward and reverse bias, carrier injection, minority
                                                    carrier currents, transient and AC conditions, time variation of
                                                    stored charge, reverse recovery transient and capacitance. Bipolar
                                                    Junction Transistor: Basic principle of pnp and npn transistors,
                                                    emitter efficiency, base transport factor and current gain,
                                                    diffusion equation in the base terminal currents, coupled-diode
                                                    model and charge control analysis, Ebers-Moll equations and circuit
                                                    synthesis. Metal-semiconductor junction: Energy band diagram of
                                                    metal semiconductor junctions, rectifying and ohmic contacts. MOS
                                                    structure: MOS capacitor, energy band diagrams and flat band
                                                    voltage, threshold voltage and control of threshold voltage, static
                                                    C-V characteristics, qualitative theory of MOSFET operation, body
                                                    effect and current-voltage relationship of a MOSFET. Junction
                                                    Field-Effect-transistor:&nbsp; Introduction, qualitative theory of
                                                    operation, pinch-off voltage and current-voltage relationship.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electrical Engineering Materials – A. J. Dekker</li>
                                                    <li>Introduction to Solid State Physics – Charles Kittel</li>
                                                    <li>Principles of Electronic Materials and Devices – S. O. Kasap
                                                    </li>
                                                    <li>Solid State Electronic Devices – Ben Streetman and Sanjay
                                                        Banerjee
                                                    </li>
                                                    <li>Fundamentals of Solid State Electronics – Chih-Tang Sah</li>
                                                    <li>Semiconductor Device: Physics and Technology – S. M. Sze</li>
                                                    <li>Electrical Engineering Materials – T. K. Basak</li>
                                                </ol>
                                                <p><strong>ECE – 207: &nbsp; Electrical
                                                        Machine&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p><strong>3 Credits&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>DC Generator</strong>: Principles. Construction,
                                                    classification, armature winding, voltage build up, armature
                                                    relations and commutation, performance and testing.</p>
                                                <p><strong>DC Motor</strong>: Operation, types, speed-torque
                                                    characteristics, methods of speed control, Transformer: Principle,
                                                    construction, cooling, vector diagrams and voltage regulation,
                                                    equivalent circuits, performance and testing.</p>
                                                <p><strong>Induction Motor</strong>: Principle of operation.
                                                    Constructional details, equivalent circuits, speed –torque relation,
                                                    losses and efficiency, circle diagram.</p>
                                                <p><strong>Synchronous Generators</strong>: General constructional
                                                    outline of synchronous generators, Air gap flux and voltage
                                                    expressions, armature winding. Alternator regulation. Determination
                                                    of machine parameters from tests. Vector diagrams, losses and
                                                    efficiency.</p>
                                                <p><strong>Synchronous Motors</strong>: General constructional
                                                    features., theory of operation, motor terminal characteristics,
                                                    mathematical analysis, vector diagrams, V-curves, motor tests,
                                                    losses, efficiency and starting.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Direct and Alternating Current Machinery – Rosen Blut</li>
                                                    <li>Electrical Machines – S. K. Bhattacharjee</li>
                                                    <li>Electrical Machines – Nagarth and Kothari</li>
                                                    <li>Functional and Sub Functional Horse Power Electric Motor –
                                                        Joseph E. Martin
                                                    </li>
                                                </ol>
                                                <p><strong>ECE – 208: &nbsp; Electrical Machine Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 207</p>
                                                <p><strong>IPE – 393: Industrial Management</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction, evolution, management functions. Organization and
                                                    environment.</p>
                                                <p>Organization: theory and structure, coordination, span of control,
                                                    authority delegation, groups, committee and task force, manpower
                                                    planning.</p>
                                                <p>Personnel management: scope, importance, need hierarchy, motivation,
                                                    job redesign, leadership, participative management, training,
                                                    performance appraisal, wages &amp; incentives, informal groups,
                                                    organizational change and conflict.</p>
                                                <p>Cost and Financial management: Elements of costs of products
                                                    depreciation, breakeven analysis, Investment Analysis, Benefit cost
                                                    analysis.</p>
                                                <p>Management accounting: Cost planning and control; budget &amp;
                                                    budgetary control, Development planning process.</p>
                                                <p>Marketing Management: Concepts, strategy, sales promotion, patent
                                                    laws.</p>
                                                <p>Technology Management; Management of innovation and changes,
                                                    technology life cycle.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Operation Management – Krajewski, Ritzman</li>
                                                    <li>Operation Management for Competitiye (Edition 11) – Chase,
                                                        Jaccob, Aquilano
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 350: Electronic Shop Practice</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CSE-209: Numerical Methods</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Errors and Accuracy. Iterative process: Solution of f(x) = 0,
                                                    existence and convergence of a root, convergence of the iterative
                                                    method, geometrical representation, Aitken’s D<sup>2</sup>– process
                                                    of acceleration. System of Linear Equations. Solution of Non-Linear
                                                    equations. Finite Differences and Interpolation. Finite Difference
                                                    Interpolation. Numerical Differentiation. Numerical Integration.
                                                    Differential Equations.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Numerical methods for Engineers –Steven C. Chapra</li>
                                                    <li>Numerical methods Analysis –James B. Scarborugh</li>
                                                    <li>Introductory methods of Numerical Analysis – S. S. Sastry</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 335: Signals and Communication Systems</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Classification of signals and systems: Signals classification, basic
                                                    operations on signals, elementary signals, representation of signals
                                                    using impulse functions; system classification.</p>
                                                <p>Spectral Analysis: Fourier series, the sampling function, response of
                                                    a linear system, normalized power in Fourier expansion, power
                                                    spectral density, the Fourier transform, convolution, Parvesal’s
                                                    theorem, correlation between waveforms and autocorrelation.</p>
                                                <p>Random Variables and Processes: Probability, cumulative distribution
                                                    function, probability density function, Tchebycheff’s inequality,
                                                    the Gaussian probability density, the error function, the Rayleigh
                                                    probability density, correlation random variables, the central limit
                                                    theorem, random processes, autocorrelation, power spectral density
                                                    of a sequence of random pulses, power spectral density of digital
                                                    data, effect of rudimentary filters of digital data, the
                                                    complimentary error function.</p>
                                                <p>Noise: Some sources of noise, characteristics of of various noises,
                                                    and SNR, a frequency-domain representation of noise, spectral
                                                    components of noise, response of narrow band filter to noise, effect
                                                    of a filter on the power spectral density of noise, superposition of
                                                    noises, mixing involving noise, linear filtering, noise bandwidth,
                                                    quadrature components of noise, power spectral density of nct and
                                                    nst, probability density of nct and nst and their time
                                                    derivatives.</p>
                                                <p>Communication System and Noise Calculations: Resistor noise, multiple
                                                    resistor noise sources, network with reactive elements, an example,
                                                    available power, noise temperature, two ports, noise bandwidth,
                                                    effective input-noise</p>
                                                <p>temperature, noise figure and equivalent noise temperature of a
                                                    cascade, an example of a receiving system, antennas, system
                                                    calculation.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Communication Systems – Simon Haykin</li>
                                                    <li>Signals and systems- Simon Haykin and Barry Van Veen</li>
                                                    <li>Principles of Communication Systems – Herbert Taub and Donald L.
                                                        Schilling
                                                    </li>
                                                </ol>
                                                <p><em>&nbsp;</em></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 355: Electromagnetic Fields and Waves</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Review of vector Analysis. Electrostatics: Coulomb’s Law, force
                                                    electric filed intensity, electrical flux density. Gauss theorem
                                                    with application, electrostatic potential, boundary conditions,
                                                    method of images, Laplace’s and Poisson’s equations, energy of an
                                                    electrostatic system, conductor and dielectrics.</p>
                                                <p>Magneto-statics; Concept of magnetic field, Ampere’s Law, Biot-Savart
                                                    law, vector magnetic potential, energy of magneto static system,
                                                    mechanical forces and torques in electric and magnetic fields,
                                                    Curvilinear co-ordinates. Rectangular, cylindrical and spherical
                                                    coordinates, solutions to static field problems.</p>
                                                <p>Graphical field mapping with applications, solution to Laplace’s
                                                    equations. Rectangular, cylindrical and spherical harmonics with
                                                    applications.</p>
                                                <p>Maxwell’s equations: Their derivations, continuity of charges,
                                                    concepts of displacement current: Boundary conditions for time
                                                    varying systems, Potentials used with varying charges and currents.
                                                    Retarded potentials. Maxwell’s equations in different coordinate
                                                    systems.</p>
                                                <p>Relation between circuit theory and field theory: Circuit concepts
                                                    and the derivation from the field equations. High frequency circuit
                                                    concepts, circuit radiation resistance. Skin effect and circuit
                                                    impedance. Concept of good and perfect conductors and dielectrics.
                                                    Current distribution in various types of conductors, depth of
                                                    penetration, internal impedance, power loops, calculation of
                                                    inductance and capacitance.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Field and Wave Electromagnetic – David K. Cheng</li>
                                                    <li>Field &amp; Wave in Communication Electronics – J. R. Whinnery
                                                    </li>
                                                    <li>Field &amp; Wave in Communication Electronics – Simon Ramo</li>
                                                </ol>
                                                <p><strong>ECE – 357: Measurement and Instrumentations</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction:&nbsp; Applications, functional elements of a
                                                    measurement system and classification of instruments. Ammeter,
                                                    Voltmeter and extension of instrument ranges.&nbsp; Measurement of
                                                    electrical quantities: Resistance, Capacitance and Inductance
                                                    measurement, Current and Voltage measurement, Power and Energy
                                                    measurement. Localization of cable fault, Magnetic measurement,
                                                    ballistic galvanometer, high voltage measurement. Transducers:
                                                    Mechanical, Electrical and Optical&nbsp; transducer. Measurement of
                                                    non-electrical quantities: Radiation, Temperature, Pressure, Flow,
                                                    Level, Strain, Force and Torque measurement.&nbsp; Electronic
                                                    measuring instruments: Oscilloscope, Digital multi meters, DMM,
                                                    statistical measurement, Spectrum analyzer. Computerized
                                                    Instrumentation: Data acquisition, loggers and recorders.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electrical and Electronics Measurement and Instrumentation – A.
                                                        K. Sawhney
                                                    </li>
                                                    <li>Introduction to measurement and Instrumentation – Hellfrick,
                                                        Cooper
                                                    </li>
                                                    <li>Electrical Technology (Vol. 11) – B. L. Theraja</li>
                                                </ol>
                                                <p><strong>ECE – 358: Measurement and Instrumentations Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 358</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 325: Microprocessors and Interfacing</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>Microprocessors</strong>: Introduction to microprocessors.
                                                    Intel 8086 microprocessor, architecture, addressing modes,
                                                    instruction set, assembly language programming, interrupts and
                                                    stack.</p>
                                                <p><strong>Interfacing</strong>: memory, I/O, programmable peripheral
                                                    interface (PPI), programmable timer, serial communication interface,
                                                    programmable interrupt controller, direct memory access (DMA),
                                                    keyboard and display interface, RS-232, USB, RS-422 and RS-485,
                                                    IEEE-488.</p>
                                                <p><strong>Microcontrollers</strong>: Introduction to microcontrollers
                                                    and embedded system, PIC microcontrollers, architecture, PIC
                                                    programming in C, I/O programming, hardware connection and ROM
                                                    loaders.</p>
                                                <p>Book Recommended:</p>
                                                <ol>
                                                    <li>Microprocessors and Interfacing- Douglas V. Hall</li>
                                                    <li>Microprocessor and Microcomputer Based System Design –Mohammad
                                                        Rafiquzzaman
                                                    </li>
                                                    <li>Microprocessors – Harunur Rashid</li>
                                                    <li>Microcomputer Systems: 8086/8088 Family – Y. Liu and G. A.
                                                        Gibson
                                                    </li>
                                                    <li>The Intel Microprocessors – Bary B. Brey</li>
                                                    <li>PIC Microcontroller and Embedded Systems – Ali Mazidi, Rolin
                                                        McKinlay, Danny Causey
                                                    </li>
                                                    <li>The 8088 and 8086 Microprocessors – Walter A. Triebel and Avtar
                                                        Singh
                                                    </li>
                                                </ol>
                                                <p><strong>ECE – 326: Microprocessors and Interfacing Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 325</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 361:&nbsp;&nbsp; Telecommunication Engineering</strong>
                                                </p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Telephony:</strong> Elements of communication systems,
                                                    introduction to telephone system, exchanges, numbering, switching
                                                    principles; Subscriber’s apparatus, Dialing and signaling; Types of
                                                    signaling – different tones. <strong>Basics of switching
                                                        system</strong>: Strowger switching, crossbar switching,
                                                    electronic space division switching, time division switching, FDM,
                                                    TDM, STS and TST, combination switching, Digital signal hierarchies
                                                    in telephone systems – DS0, DS1, DS3, E1, E2, E3 etc., Stored
                                                    Program Control (SPC), Software architecture, enhanced services,
                                                    two-stage network, three-stage network, n-stage network. Principles
                                                    of common control, touch tone dial telephone, Crosspoint technology,
                                                    No. 1 ESS, Japanese D-10, Metaconta. Subscriber loop systems,
                                                    switching hierarchy and routing, transmission plan, transmission
                                                    systems, numbering plan, charging plan; signaling techniques,
                                                    in-channel signaling, common channel signaling, Overview of SS7
                                                    architecture.</p>
                                                <p><strong>Modulation:</strong> Necessity of Modulation, Types of
                                                    Modulation, Amplitude Modulation (AM) and Demodulation, Frequency
                                                    Modulation (FM) and Demodulation, PLL, Super heterodyne receiver,
                                                    Phase Modulation (PM) and Demodulation. Introduction to radio wave
                                                    propagation methods.</p>
                                                <p><strong>Introduction to Television (TV) Engineering:</strong>
                                                    Scanning and Synchronizing, Composite Video Signal, Video
                                                    Modulation, Sound Modulation, Reception Technique of Vestigial
                                                    Sideband Signal, Basic Operation of a TV Camera, Television
                                                    Transmitters and Receivers, Color TV principles, The Luminance and
                                                    Color Difference Signals, NTSC, PAL and SECAM Encoders, The PAL
                                                    Decoder Principles, The Picture Tubes and types of Drives used to
                                                    Reproduce the Color. TV studio design. <strong>Digital Television
                                                        and Video: </strong>Video Digitization formats – the 4:2:2
                                                    formats, 4:2:0 format, Source Intermediate Format (SIF), Common
                                                    Intermediate Format (CIF), General compression principles – Run
                                                    Length Coding, Discrete Cosine Transform (DCT) compression
                                                    technique, MPEG-1, MPEG-2.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Communication Systems – Simon Haykin</li>
                                                    <li>Telecommunication Switching Systems and Networks – T.
                                                        Viswanathan
                                                    </li>
                                                    <li>Communication Systems – John G. Proakis</li>
                                                    <li>Basic Television and Video System – B. Grob</li>
                                                    <li>Monochrome and Colour Television – Gulati</li>
                                                    <li>Radio Engineering – G. K. Mithal</li>
                                                </ol>
                                                <p><strong>ECE – 362:&nbsp; Telecommunication Engineering Lab</strong>
                                                </p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 361</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 373: &nbsp; Mobile Cellular
                                                        Communication&nbsp;</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Introduction to Cellular Communication; Modern cellular system (1G
                                                    Analog cellular, 2G Digital Cellular, 2.5 G Cellular System; 3G
                                                    Wireless System; 4G Wireless System; i) Radio Propagation Technique,
                                                    Free space Propagation; Two Ray model, Multipath Fading &amp;
                                                    Doppler. ii) Modulated Carrier Transmission, GMSK, QPSK iii)
                                                    Diversity Technique: Frequency &amp; Space Diversity, iv) Coding
                                                    Technique: Block Coding, Convolution Coding, v) Speech coding,
                                                    Channel coding, Equalizer, Frequency Hopping, Interleaving; Wireless
                                                    Network Operation: i) Cellular Concept, Cell Fundamentals, Traffic
                                                    Engineering, ii) Capacity Expansion Technique: Frequency Reuse, Cell
                                                    Splitting, Sectoring, Lee’s Micro cell Method, Overlaid Concept. ;
                                                    GSM Technology: i) Introduction, GSM Phases, GSM System
                                                    Architecture, GSM Components, ii) GSM Traffic Handling:
                                                    Registration, Call Establishment, Traffic Cases, iii) GSM Network
                                                    Interfaces: Air Interface, A-bis Interface, A Interface, iv) GPRS
                                                    &amp; EDGE; CDMA Technology: Spread Spectrum, IS-95 Forward Channel,
                                                    IS-95 Reverse Channel, Power Control, Handoff, W-CDMA &amp; CDMA
                                                    2000, OFDM.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Mobile Cellular Telecommunication –William C. Y. Lee</li>
                                                    <li>Mobile Communication –Jochen Schiller</li>
                                                    <li>Wireless Communication : Principles and Practices –Theodore S.
                                                        Rappaport
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 374:&nbsp;&nbsp; Mobile Cellular Communication
                                                        Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 373</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 379: &nbsp; Power Electronics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Introduction to power electronic devices</strong>: Thyristor,
                                                    SCR, BJT, MOSFET, IGBT, GTO, DIAC, TRIAC, SUS, UJT and PUJT.</p>
                                                <p><strong>Introduction to triggering</strong>: UJT relaxation
                                                    oscillator, phase control circuit, PUT relaxation oscillator, pulse
                                                    transformer.</p>
                                                <p><strong>DC-DC Converter</strong>: Choppers, step-down, step-up
                                                    choppers, Zero Voltage Switching (ZVS), Zero Current Switching
                                                    (ZCS).</p>
                                                <p><strong>Regulated Power Supplies</strong>: Buck, boost, buckboost and
                                                    Cuk regulators, switch mode power supply.</p>
                                                <p><strong>Inverters</strong>: Single phase inverters, over current
                                                    protection, output voltage control, PWM, SPWM, three phase
                                                    inverters, resonant pulse inverters.</p>
                                                <p><strong>Motor Drives</strong>: DC motor drives, AC motor drives,
                                                    speed control of AC motor, variable frequency converter, stepper
                                                    motor drive circuit, brushless DC motor drive.</p>
                                                <p><strong>Industrial Heating: </strong>Resistive heating, High
                                                    frequency heating, Induction heating, Dielectric heating and
                                                    applications, Closed loop control system.</p>
                                                <p><strong>PLC: </strong>Introduction to PLC<strong>, </strong>Controllers,
                                                    Hardware, Internal architecture, Programming, Testing, debugging,
                                                    Commercial PLC.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Power Electronics – H. Rashid</li>
                                                    <li>Principle of power Electronics –Kassakian</li>
                                                    <li>Industrial Electronics and Robotics – Schuller and McNamee</li>
                                                    <li>Power and Industrial Electronics – G. K. Mithal</li>
                                                    <li>Power Electronics System: Theory and Design – Agarwal</li>
                                                    <li>Introduction to PLCs: A beginner’s guide to Programmable Logic
                                                        Controllers – Elvin Pérez Adrover
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 380:&nbsp;&nbsp; Power Electronics Lab</strong></p>
                                                <p><strong>1.5 Credits&nbsp;&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 379</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 421:&nbsp;&nbsp; Digital Communication</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction to modulation techniques: Pulse modulation; pulse
                                                    amplitude modulation, pulse width modulation and pulse position
                                                    modulation. Pulse code modulation; quantization, Delta modulation.
                                                    TDM, FDM, OOK, FSK, PSK, QPSK; Representation of noise; threshold
                                                    effects in PCM and FM. Probability of error for pulse systems,
                                                    concepts of channel coding and capacity. Asynchronous and
                                                    synchronous communications. Hardware interfaces, multiplexers,
                                                    concentrators and buffers. Spread spectrum signals and systems.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Digital Communication – John G. Proakis</li>
                                                    <li>Digital Communication – Bernard Sklar</li>
                                                    <li>Introduction to Digital Communication – Roger L. Peterson</li>
                                                    <li>Digital Communication – Prof. N. Sarker</li>
                                                    <li>Communication System – Simon Haykin</li>
                                                </ol>
                                                <p><strong>ECE – 422: &nbsp; Digital Communication Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 421</p>
                                                <p><strong>ECE – 457: &nbsp; Satellite Communication</strong></p>
                                                <p><strong>3 Credits&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Elements of Satellite Communication, Satellite orbits-orbit
                                                    fundamental, Orbital period and speed, Angle of inclination &amp;
                                                    elevation, Azimuth, Station keeping Attitude control, Satellite
                                                    launching freq allocation. Satellite communication system, Earth
                                                    station, Satellite link design, Modulation and muse technique for
                                                    satellite link, Multiple Access. Error control for satellite link.
                                                    Factors that have influence or satellite link design. Satellite
                                                    spread spectrum communication, VSAT, Mobile Satellite Networks.
                                                    Satellite Television; Network distribution and direct
                                                    broadcasting.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Satellite Communications – Dennis Roddy</li>
                                                    <li>Electronics Communication – Dennis Roddy, John Coolen</li>
                                                    <li>Satellite Communication Engineering – Michalle A. Kolawole</li>
                                                    <li>Satellite Communication – Timothy Pratt, Charles Bostian and
                                                        Jeremy Allnutt
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 465: Microwave Engineering</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Transmission lines</strong>: H.F. transmission lines, Smith
                                                    chart, Impedance matching techniques and applications, E.M.
                                                    propagation, reflection and refraction. Waveguide: Wave guides;
                                                    Parallel plane, Rectangular, Coaxial wave guides, wave guide
                                                    components, cavity resonators. <strong>Microwave tubes</strong>:
                                                    Transit time effects, Velocity modulation, space charge wave,
                                                    Klystron amplifier, Multicavity Klystron amplifier, Reflex Klystron
                                                    oscillator. Magnetron. Traveling Wave Tube (TWT) amplifier. Backward
                                                    Wave Oscillator (BWO). <strong>Antennas</strong>: Introduction to
                                                    antennas, antennas and radiation, Hertzian dipole, Long straight
                                                    antennas; analysis, radiation patterns, Rhombic and Slot antenna.
                                                    Frequency independent and log periodic antennas, Antenna arrays,
                                                    array design.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Microwave Devices and Circuits –Samuel Y. Liao</li>
                                                    <li>Microwave Engineering –David M. Pozer</li>
                                                </ol>
                                                <p><strong>ECE – 466: Microwave Engineering Lab.&nbsp;</strong></p>
                                                <p><strong>1.5 credits&nbsp;&nbsp;</strong></p>
                                                <p>Laboratory works based on ECE – 465</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 471: Optical Fiber Communication</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction to optical fiber communication; Optical fibers;
                                                    structure, step-index and graded – index fibers, modes of
                                                    propagation, modal theory for circular wave guide, d modal
                                                    equations, wave guide equations, power flow in optical fibers.
                                                    Signal degradation in optical fibers: fiber attenuation., distortion
                                                    in optical wave guides, dispersions in fibers, mode coupling.
                                                    Optical sources: light emitting diode (LED) and semiconductor laser
                                                    diode (SLD) – structures, internal quantum efficiencies, modulation
                                                    capability, transient response, power bandwidth product, modal
                                                    noise, temperature effects and reliability considerations. Digital
                                                    transmitter design with LASER diode. Photo detectors: p-I-n and
                                                    avalanche photo detectors (APDs) principles of operations,
                                                    structures, photo detector noise sources, detector response time,
                                                    detector responsively and photodiode materials.</p>
                                                <p>Optical modulation and detection schemes; direct detection, coherent
                                                    detection. Direct detection receiver; configuration, receiver
                                                    operation, receiver noises, receiver sensitivity calculation,
                                                    performance curves and design of receiver pre amplifier. Effect of
                                                    laser phase noise on receiver performance. Introduction to
                                                    heterodyne optical receiver. Transmission link analysis; point – to
                                                    – point links – system configuration, link power budget, rise time
                                                    budget. Data buses; star and T-coupler data buses. Local area
                                                    networks applied to single-mode fibre-optic communication. Line
                                                    coding: NRZ, RZ, Manchester code (MC) and block codes. Introduction
                                                    to wavelength division multiplexing (WDM) and optical Frequency
                                                    division multiplexing (OFDM) transmission schemes.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Optical Fiber Communications – John M. Senior</li>
                                                    <li>Optical Fiber Communications – Keiser Gred</li>
                                                    <li>Optical Fiber Communications – Palais Joseph</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 472: Optical Fiber Communication Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 471</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 211: Digital Electronics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Introduction: Digital and Analog systems. Number Systems and codes:
                                                    Decimal, binary octal and hexadecimal number systems. 1’s complement
                                                    and 2’s complement; addition and subtraction in different bases,
                                                    subtraction using complements. Binary codes, Binary Coded Decimal
                                                    (BCD), Excess-3, Gray, Alphanumeric codes. Error detection and
                                                    correction code. Boolean Algebra and Logic Gates: Boolean algebra,
                                                    logic gates, Boolean function, De Morgan’s theorems, standard and
                                                    canonical forms. Simplification of Boolean functions: Karnaugh map,
                                                    don’t care combination, minimization in SOP form using K-map,
                                                    minimization in POS form using K-map. Combinational Logic Circuits:
                                                    Design procedure, half adder, full adder, half subtractor, full
                                                    subtractor. Combinational logic: Binary parallel adder, BCD adder;
                                                    encoder and decoder; multiplexer and demultiplexer.</p>
                                                <p>Flip-Flops: SR, JK, T and D type flip-flops, their truth tables;
                                                    master slave flip-flop; edge triggered flip-flop; asynchronous
                                                    inputs. Sequential circuits: Introduction to sequential circuits;
                                                    analysis of clocked sequential circuits; state reduction and
                                                    assignment; Flip-Flop excitation tables; Registers: Classification;
                                                    register with parallel load; shift register, bidirectional shift
                                                    register with parallel load and their applications. Counters:
                                                    Classification; binary ripple counter; BCD ripple counter; binary
                                                    up/down counter; binary counter with parallel load; timing sequence;
                                                    ring counter and Johnson counter. Memory units: Classification and
                                                    characteristics of memory; memory organization and operation;
                                                    Introduction to PLA and FPGA. Introduction to Digital ICs and Logic
                                                    Families: Diode Logic gates; Resistor transistor logic (RTL); Diode
                                                    transistor logic (DTL); Transistor-Transistor Logic (TTL); Emitter
                                                    Coupled Logic (ECL) MOS Logic and CMOS logic. Converters: Different
                                                    types of Digital to Analog converter (DAC) and Analog to Digital
                                                    converters (ADC) with their applications.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Digital Logic and Computer Design – M. Morris Mano</li>
                                                    <li>Digital Systems – R. J. Tocci</li>
                                                    <li>Digital Fundamentals – T. Floyd</li>
                                                    <li>Modern Digital Electronics – R. P. Jain</li>
                                                    <li>Digital Electronic Circuits and Systems – V. K. Puri</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 212: Digital Electronics Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 211</p>
                                                <p><strong>ECE – 479: VLSI Circuits</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Overview of the design methodology; top-down design approach.
                                                    Technology trends and design styles. Brief review of MOS transistor
                                                    theory; nMOS and pMOS transistors, threshold voltage, body effect,
                                                    design equations and V-I characteristics. Latch-up problem. MOS
                                                    transistor as a switch; pass transistors and transmission gates.
                                                    nMOS inverter characteristics. CMOS inverter characteristics;
                                                    influence of n/p ratio on transfer characteristics and noise margin.
                                                    CMOS processing technologies; design-fabrication interface, layers
                                                    of abstraction, CMOS design rules. CMOS circuit characteristics and
                                                    performance estimation; resistance and capacitance. Rise and fall
                                                    times, delay gate transistor sizing, power consumption. CMOS logic
                                                    design; logic structures, electrical and physical design of logic
                                                    gates, clocking strategies, I/O structures.</p>
                                                <p>Structured design methods; design styles, automated synthesis,
                                                    circuit extraction, simulation and design rule checking (DRC).
                                                    Design examples. CMOS subsystem design; adders and related
                                                    functions, multipliers, memory systems, data paths, programmable
                                                    logic arrays (PLAs). Field programmable gate arrays (FPGAs). VLSI
                                                    testing; fault models, design for testability (DFT) – ad hoc
                                                    testing, structured DFT, self-test and built-in test.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Basic VLSI Design –Douglas A. Pucknell, Kamran Eshraghian</li>
                                                    <li>VLSI Technology –S. M. Sze</li>
                                                    <li>Introduction to VLSI Systems –C. A. Mead and L. A. Conway</li>
                                                </ol>
                                                <p><strong>ECE – 480: VLSI Circuits Lab</strong></p>
                                                <p><strong>1.5 Credits</strong></p>
                                                <p>Laboratory works based on ECE – 479</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 481: Biomedical Engineering</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Biomedical Instrumentation: hazards and safety measures in biomedical
                                                    applications, electrodes, electrocardiography (ECG),
                                                    electroencephalography (EEG), X-Ray machine, computer aided
                                                    tomography (CAT), Electrical Impedance Tomography (EIT), Focused
                                                    Impedance Measurement (FIM), Ultrasonic Imaging System, LASER
                                                    applications in biomedical field, Magnetic Resonance Imaging
                                                    (MRI).</p>
                                                <p>Blood flow meter, blood cell counters, pacemakers. Medical image
                                                    processing: Degradation model, algebraic approach of image
                                                    restoration, inverse filtering, detection of discontinuities,
                                                    region-oriented segmentation, threshold, image compression.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Handbook ofBiomedical&nbsp;Instrumentation –&nbsp;Khandpur</li>
                                                    <li>Digital Image Processing – Rafael C. Gonzalez and Richard E.
                                                        Woods, Pearson Education Asia.
                                                    </li>
                                                </ol>
                                                <p><strong>ECE – 483: Renewable Energy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><strong>Introduction to Renewable Energy Sources: </strong>Statistics
                                                    regarding solar radiation and wind speed isolation, geographical
                                                    distribution. Introduction to solar thermal conversion and solar
                                                    collectors.</p>
                                                <p><strong>Radiation characteristics of materials</strong>: Absorptance,
                                                    Emittance, Reflectance and Selective Surfaces, Modes of heat
                                                    transfer. <strong>Solar Collectors: </strong>Flat plate collectors,
                                                    Concentrating collectors, Solar distillation, Solar energy systems
                                                    for process heating, Power generation and refrigeration, Performance
                                                    and optimum design, Solar thermal modeling. <strong>Solar
                                                        Photovoltaic Energy Conversion: </strong>Solar cell fundamental,
                                                    Basic principle, Types of solar cells, PN junction as photovoltaic
                                                    cell, Heterojunction, Schottky barrier junction, Fabrication of
                                                    solar cell, Effect of environment on solar cells, (effect of
                                                    irradiance once, and effect of temperature), Effect of shading, Thin
                                                    film solar cell, Multiple sun solar cells, Fabrication of
                                                    photovoltaic modules and panels, Dimension of cells, Packing
                                                    efficiency of cells in modules, Characterization of cells and
                                                    modules.<strong> Other Non-conventional Energy Options: </strong>Wind,
                                                    Geothermal, OTEC, Wave energy, Biomass, MHD, Chemical energy, Fuel
                                                    cell and Nuclear fusion.</p>
                                                <p><strong>Power conditioning of Photovoltaic System:</strong>
                                                    Batteries, inverters, maximum power trrackers, energy system without
                                                    battery, energy storage in battery, PV – Grid interconnection with
                                                    battery storage, energy system with diesel backup and battery
                                                    storage. Design of a PV system: Calculation of array size, selection
                                                    of modules of arrays, calculation of battery capacity. Wind Energy:
                                                    Wind turbine, tubes, operational characteristics, cut-in and cut-out
                                                    speed, control, grid interfacing, AC-DC-AC link.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Renewable Energy: Power for a Sustainable Future – Godfrey
                                                        Boyle
                                                    </li>
                                                    <li>Renewable Energy – Bent Sorensen</li>
                                                    <li>Renewable Energy Sources and Methods – Anne Maczulak</li>
                                                    <li>Fundamentals of Renewable Energy Processes – Aldo Da Rosa</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 463: Antennas and Propagation</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Definitions, antenna as an aperture; Arrays of point sources; Review
                                                    of dipoles, loop and thin linear antennas. Helical antenna,
                                                    biconical and spheroidal antennas. Internal-equation methods,
                                                    current distribution; Self and mutual impedances; Arrays; design and
                                                    synthesis; Reflector type antennas. Babiner’s principle and
                                                    complementary antennas. Application of reaction concept and
                                                    variation principles in antennas and propagation; Frequency
                                                    independent antennas. Scattering and diffraction, selected topics in
                                                    microwave antennas. Antenna measurements. Application of
                                                    broadcasting, microwave links, satellite communications and radio
                                                    astronomy.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electromagnetic Fields and Waves – D. K. Cheng,</li>
                                                    <li>Antenna Theory: Analysis and Design – Constantine A. Balanis,
                                                    </li>
                                                    <li>Antenna and Wave Propagation – K. D. Prasad</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 485: Stochastic Theory of Communication</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Probability and random variables. Distribution and density functions
                                                    and conditional probability. Expectation: moments and characteristic
                                                    functions. Transformation of a random variable. Vector random
                                                    variables. Joint distribution and density. Independence. Sums of
                                                    random variables. Random Processes. Correlation functions. Process
                                                    measurements. Gaussian and Poisson random processes. Noise models.
                                                    Stationarity and Ergodicity. Spectral Estimation. Correlation and
                                                    power spectrum. Cross spectral densities. Response of linear systems
                                                    to random inputs. Introduction to discrete time processes,
                                                    Mean-square error estimation, Detection and linear filtering.
                                                    Discrete time Markov chain, Continuous time Markov chain,
                                                    Birth-death process in queuing problems. Introduction to queuing
                                                    theory, Network of queues, Queuing models: M/M/1, M/M/K, M/G/1,
                                                    M/G/K, G/M/I and G/M/K queuing models, Application of queuing models
                                                    in communication engineering.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Introduction to Probability Models – &nbsp;Sheldon M. Ross</li>
                                                    <li>Introduction to Queing Theory – Robert B Cooper</li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 485: </strong><strong>Semiconductor Processing and
                                                        Fabrication Technology</strong></p>
                                                <p><strong>3.0 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>Physics of semiconductors: </strong>Electronic motion in
                                                    periodic lattice, Energy bands, Brillouin zones, and reciprocal
                                                    lattice, lattice mattering.</p>
                                                <p><strong>Semiconductor Materials: </strong>Intrinsic and extrinsic
                                                    semiconductor and compounds, purification of Ge and Si,</p>
                                                <p>preparation of single crystals and wafer, process chemicals, states
                                                    of matter, phase diagram, crystalline materials, crystal
                                                    orientation. Concept of clean room.</p>
                                                <p><strong>Crystal growth technology: </strong>Czochralski method,
                                                    solution growth, solgel method, solar evaporation method, organic
                                                    semiconductors, traveling heater method, zone melting, polysilicon
                                                    and amorphous silicon deposition, group III-V and II-V
                                                    semiconductors, SOS and SOI.</p>
                                                <p><strong>Epitaxial growth: </strong>Epitaxial silicon, vapor phase
                                                    epitaxy, molecular beam epitaxy, MOCVD, LPCVD, PECVD.</p>
                                                <p><strong>Wafer Fabrication Technology: </strong>Introduction to MSI,
                                                    VLSI, Manufacturing wafers, wafer scale integration, thin film
                                                    deposition evaporation, sputtering, PCVD, laser ablation and ion
                                                    beam deposition, insulator deposition, oxidation, kinetics,
                                                    interface characterization, clean room technology and contamination
                                                    control, impurities control, dielectric passivaion, oxidation and
                                                    nitridation, basic patterning, photolithography and electron bean
                                                    lithography, mask fabrication.</p>
                                                <p><strong>Etching: </strong>wet and dry etching, lift-off techniques.
                                                </p>
                                                <p><strong>Diffusion of impurities: </strong>Impurities control and
                                                    junction of formation, drift transistors.</p>
                                                <p><strong>Other: </strong>Metalization, assembly and encapsulation,
                                                    binding and ion implantation, sputtering section, packaging,</p>
                                                <p>fabrication of IC PIC and OEIC, Design of linear IC, and
                                                    semiconductor opto-electronic devices, process and device
                                                    evaluation, economic aspects of fabrication industry, yield
                                                    reliability and testing, scaling and limits to miniaturization,
                                                    speed-power product.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>VLSI Technology – Simon Sze</li>
                                                    <li>Fundamentals of Semiconductor FabricationPaperback&nbsp;– Gary
                                                        S. May&nbsp;&nbsp;and&nbsp;Simon M. Sze
                                                    </li>
                                                    <li>Introduction to Semiconductor Manufacturing Technology – Hong
                                                        Xiao
                                                    </li>
                                                    <li>Handbook of Semiconductor Manufacturing Technology – Yoshio
                                                        Nishi andRobert Doering
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>ECE – 425: Optoelectronics</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Optical properties in semiconductor: Direct and indirect band-gap
                                                    materials, radiative and non-radiative recombination, optical
                                                    absorption, photo-generated excess carriers, minority carrier life
                                                    time, luminescence and quantum efficiency in radiation. Properties
                                                    of light: Particle and wave nature of light, polarization,
                                                    interference, diffraction and blackbody radiation. Light emitting
                                                    diode (LED): Principles, materials for visible and infrared LED,
                                                    internal and external efficiency, loss mechanism, structure and
                                                    coupling to optical fibers. Stimulated emission and light
                                                    amplification: Spontaneous and stimulated emission, Einstein
                                                    relations, population inversion, absorption of radiation, optical
                                                    feedback and threshold conditions. Semiconductor Lasers: Population
                                                    inversion in degenerate semiconductors, laser cavity, operating
                                                    wavelength, threshold current density, power output, hetero-junction
                                                    lasers, optical and electrical confinement. Introduction to quantum
                                                    well lasers. Photo-detectors: Photoconductors, junction
                                                    photo-detectors, PIN detectors, avalanche photodiodes and
                                                    phototransistors. Solar cells: Solar energy and spectrum, silicon
                                                    and Schottkey solar cells. Modulation of light: Phase and amplitude
                                                    modulation, electro-optic effect, acousto-optic effect and
                                                    magneto-optic devices. Introduction to integrated optics.</p>
                                                <p><strong>&nbsp;</strong></p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Electrochromism and Electrochromic Devices – Paul Monk, R. J.
                                                        Mortimer and D. R. Rosseinsky
                                                    </li>
                                                    <li>Optical System Design – Robert Fischer, Paul R. Yoder, Biljana
                                                        Tadic-Galeb
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;</strong></p>
                                                <p><strong>CSE- 331: Computer Architecture</strong></p>
                                                <p><strong>3 Credits</strong></p>
                                                <p>Information representation and transfer; instruction and data access
                                                    methods; the control unit: hardwired and microprogrammed control;
                                                    memory organization, I/O systems, channels, interrupts, DMA. Von
                                                    Neumann SISD organization. RISC and CISC machines. Micro programmed
                                                    vs. hardwired control unit. <strong>Memory System Design: </strong>Cache
                                                    memory; Basic cache structure and design; Fully associative, direct
                                                    and set associative mapping; Analyzing cache effectiveness;
                                                    Replacement policies; Writing to a cache; Multiple caches; Upgrading
                                                    a cache; Main Memory; Virtual memory structure, and design; Paging;
                                                    Replacement strategies. <strong>Pipelining:</strong> General
                                                    consideration; Comparison of pipelined and nonpipelined computer;
                                                    Instruction and arithmetic pipelines, Data and Branch hazards.
                                                    <strong>Multiprocessor and Multi Computers:</strong> SISD, SIMD, and
                                                    MIMD architectures; centralized and distributed shared
                                                    memory-architectures; Multi-core Processor&nbsp; architectures.
                                                    Input/Output Devices: Performance measure, Types of I/O device,
                                                    Buses and interface to CPU, RAID. Pipelining, Pipeline Hazards.
                                                    Parallel Processing.</p>
                                                <p>Books Recommended:</p>
                                                <ol>
                                                    <li>Computer Architecture and Parallel Processing – K Hang</li>
                                                    <li>Computer Organization and Architecture – W. Stallings</li>
                                                </ol>

                                            </div>
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



