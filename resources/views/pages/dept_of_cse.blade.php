@extends('layout.app')

<title>@yield('pageTitle')SIU | Department Of CSE</title>


@push('css')


@endpush


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
                                        <h4>Department Of Computer Science And Engineering</h4>
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
                                        <p>The mission of the CSE Department is to provide quality education for those students who are able to compete nationally and internationally, able to produce creative and effective solutions to the national needs, conscious to the universal moral values, adherent to the professional ethical codes and to generate and disseminate knowledge and technological essentials to the local and global needs in the fields of Computer Science and Engineering.</p>
                                        <a class="overview_readmore" href="">Discover More <i
                                                    class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="tab-pane " id="vision">
                                        <h4>Vision</h4>
                                        <p>The vision of the CSE Department is to become a nationally and internationally leading institution of higher learning, building upon the culture and the values of universal science and a center of education and research that creates knowledge and technologies which form the groundwork in shaping the future of the Computer Science and Engineering fields.</p>
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
                                                    <td width="91">Course Code</td>
                                                    <td width="437">Course Title</td>
                                                    <td width="144">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">CSE-101</td>
                                                    <td width="437">Computer Fundamentals</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">CSE-102</td>
                                                    <td width="437">Computer Fundamentals Lab</td>
                                                    <td width="144">1.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">PHY-101</td>
                                                    <td width="437">Mechanics, Properties of Matter, Waves. Optics, Heat and thermodynamics</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">MTH-105</td>
                                                    <td width="437">Differential and Integral Calculus</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">CSE-105</td>
                                                    <td width="437">Structured Programming Language</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">CSE-106</td>
                                                    <td width="437">Structured Programming Language Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">HUM-105</td>
                                                    <td width="437">Oral and Written Communication in English Language</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="91">HUM-113</td>
                                                    <td width="437">Bangladesh Studies: History and Society of Bangladesh</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="528"><strong>Total</strong></td>
                                                    <td width="144"><strong>20.50</strong></td>
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
                                                    <td width="90">Course Code</td>
                                                    <td width="438">Course Title</td>
                                                    <td width="144">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-107</td>
                                                    <td width="438">Object Oriented Programming I</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-108</td>
                                                    <td width="438">Object Oriented Programming I Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">MTH-107</td>
                                                    <td width="438">Geometry and Linear Algebra</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">PHY-103</td>
                                                    <td width="438">Electromagnetism and Modern Physics</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">PHY-102</td>
                                                    <td width="438">Physics Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">ECE-101</td>
                                                    <td width="438">Basic Electrical Engineering</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">ECE-102</td>
                                                    <td width="438">Basic Electrical Engineering Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">ECN-101</td>
                                                    <td width="438">Principles of Economics</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">HUM-103</td>
                                                    <td width="438">Language Composition and Comprehension</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="528"><strong>Total</strong></td>
                                                    <td width="144"><strong>22.50</strong></td>
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
                                                    <td width="90">Course Code</td>
                                                    <td width="438">Course Title</td>
                                                    <td width="144">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-201</td>
                                                    <td width="438">Discrete Mathematics</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-211</td>
                                                    <td width="438">Object Oriented Programming&nbsp; II</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-212</td>
                                                    <td width="438">Object Oriented Programming II Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-205</td>
                                                    <td width="438">Data Structures</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">CSE-206</td>
                                                    <td width="438">Data Structures Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">MTH-205</td>
                                                    <td width="438">Vector Analysis and Complex Variable</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">ECE-201</td>
                                                    <td width="438">Electronic Devices and Circuits</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">ECE-202</td>
                                                    <td width="438">Electronic Devices and circuits Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="90">ACN-203</td>
                                                    <td width="438">Cost and Management Accounting</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="528">&nbsp;<strong>Total</strong></td>
                                                    <td width="144"><strong>22.50</strong></td>
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
                                                    <td width="114">Course Code</td>
                                                    <td width="414">Course Title</td>
                                                    <td width="144">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-207</td>
                                                    <td width="414">Algorithms</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-208</td>
                                                    <td width="414">Algorithms Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-209</td>
                                                    <td width="414">Numerical Methods</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-210</td>
                                                    <td width="414">Numerical Methods&nbsp; Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-231</td>
                                                    <td width="414">Digital Logic Design</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-232</td>
                                                    <td width="414">Digital Logic Design Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">MTH-207</td>
                                                    <td width="414">Differential Equations , Laplace Transforms and Fourier Analysis</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="114">CSE-200</td>
                                                    <td width="414">Project Work</td>
                                                    <td width="144">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="528">Total</td>
                                                    <td width="144"><strong>18.50</strong></td>
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
                                                    <td width="89">Course Code</td>
                                                    <td width="432">Course Title</td>
                                                    <td width="142">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-321</td>
                                                    <td width="432">Database Systems</td>
                                                    <td width="142">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-322</td>
                                                    <td width="432">Database Systems Lab</td>
                                                    <td width="142">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-331</td>
                                                    <td width="432">Computer Architecture</td>
                                                    <td width="142">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-323</td>
                                                    <td width="432">Web Engineering</td>
                                                    <td width="142">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-324</td>
                                                    <td width="432">Web Engineering Lab</td>
                                                    <td width="142">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">MTH-301</td>
                                                    <td width="432">Statistics and Probability</td>
                                                    <td width="142">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-309</td>
                                                    <td width="432">Cyber crime and Intellectual Property Law</td>
                                                    <td width="142">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-310</td>
                                                    <td width="432">Technical Report Writing and Presentation</td>
                                                    <td width="142">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-326</td>
                                                    <td width="432">Engineering Drawing</td>
                                                    <td width="142">1.0</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="524"><strong>Total</strong></td>
                                                    <td width="142"><strong>18.50</strong></td>
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
                                                    <td width="89">Course Code</td>
                                                    <td width="433">Course Title</td>
                                                    <td width="148">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-300</td>
                                                    <td width="433">Software Development</td>
                                                    <td width="148">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-303</td>
                                                    <td width="433">Operating Systems</td>
                                                    <td width="148">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-304</td>
                                                    <td width="433">Operating Systems Lab</td>
                                                    <td width="148">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-315</td>
                                                    <td width="433">Data Communication</td>
                                                    <td width="148">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-313</td>
                                                    <td width="433">Microprocessors and Microcontroller</td>
                                                    <td width="148">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-314</td>
                                                    <td width="433">Microprocessors and Microcontroller Lab</td>
                                                    <td width="148">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-337</td>
                                                    <td width="433">System Analysis and Software Engineering</td>
                                                    <td width="148">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-338</td>
                                                    <td width="433">System Analysis and Software Engineering Lab</td>
                                                    <td width="148">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="524"><strong>Total</strong></td>
                                                    <td width="148"><strong>18.50</strong></td>
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
                                                    <td width="89">Course Code</td>
                                                    <td width="437">Course Title</td>
                                                    <td width="144">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-425</td>
                                                    <td width="437">Digital Signal Processing</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-426</td>
                                                    <td width="437">Digital Signal Processing Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-403</td>
                                                    <td width="437">Compiler Design</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-404</td>
                                                    <td width="437">Compiler Design Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-421</td>
                                                    <td width="437">Computer Network</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-422</td>
                                                    <td width="437">Computer Network Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-4**</td>
                                                    <td width="437">Option</td>
                                                    <td width="144">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-4**</td>
                                                    <td width="437">Option Lab</td>
                                                    <td width="144">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="528"><strong>Total</strong></td>
                                                    <td width="144"><strong>18.00</strong></td>
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
                                                    <td colspan="2" width="91">Course Code</td>
                                                    <td width="441">Course Title</td>
                                                    <td colspan="3" width="136">Credit Hours</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-415</td>
                                                    <td width="441">Artificial Intelligence</td>
                                                    <td colspan="3" width="136">3.0</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-416</td>
                                                    <td width="441">Artificial Intelligence Lab</td>
                                                    <td colspan="3" width="136">1.5</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-431</td>
                                                    <td width="441">Computer Graphics</td>
                                                    <td colspan="3" width="136">3.0</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-432</td>
                                                    <td width="441">Computer Graphics Lab</td>
                                                    <td colspan="3" width="136">1.5</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-435</td>
                                                    <td width="441">Computer Interfacing</td>
                                                    <td colspan="3" width="136">3.0</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-436</td>
                                                    <td width="441">Computer Interfacing Lab</td>
                                                    <td colspan="3" width="136">1.5</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-4**</td>
                                                    <td width="441">Option</td>
                                                    <td colspan="3" width="136">3.0</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-4**</td>
                                                    <td width="441">Option Lab</td>
                                                    <td colspan="3" width="136">1.5</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CSE-400&nbsp;</td>
                                                    <td width="441">Project / Thesis&nbsp;</td>
                                                    <td colspan="3" width="136">3.0</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="91">CVV-402&nbsp;</td>
                                                    <td width="441">Comprehensive Viva Voce</td>
                                                    <td colspan="3" width="136">1.5</td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" width="534"><strong>Total</strong></td>
                                                    <td colspan="3" width="136"><strong>23.00</strong></td>
                                                    <td colspan="2" width="2">&nbsp;</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse9" class="collapse">
                                            <span class="list_title">Optional</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box9">
                                            <table class="tbl">
                                                <tbody>
                                                <tr>
                                                    <td width="89">Course Code</td>
                                                    <td width="446">Course Title</td>
                                                    <td width="135">Credit Hours</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-437</td>
                                                    <td width="446">Pattern Recognition</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-438</td>
                                                    <td width="446">Pattern Recognition Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-411</td>
                                                    <td width="446">VLSI Design</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-412</td>
                                                    <td width="446">VLSI Design Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-419</td>
                                                    <td width="446">Graph Theory</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-420</td>
                                                    <td width="446">Graph Theory Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-423</td>
                                                    <td width="446">Computer System Performance Evaluation</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-424</td>
                                                    <td width="446">Computer System Performance Evaluation Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">ECE-421</td>
                                                    <td width="446">Digital Communication</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">ECE-422</td>
                                                    <td width="446">Digital Communication Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-407</td>
                                                    <td width="446">Simulation and Modeling</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-408</td>
                                                    <td width="446">Simulation and Modeling Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-453</td>
                                                    <td width="446">Digital Image Processing</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-454</td>
                                                    <td width="446">Digital Image Processing Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-455</td>
                                                    <td width="446">Wireless and sensor Networks</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-456</td>
                                                    <td width="446">Wireless sensor Networks Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-409</td>
                                                    <td width="446">Computer Security and Cryptography</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-410</td>
                                                    <td width="446">Computer Security and Cryptography Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-457</td>
                                                    <td width="446">Bioinformatics</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-458</td>
                                                    <td width="446">Bioinformatics Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-461</td>
                                                    <td width="446">Neural Networks</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-462</td>
                                                    <td width="446">Neural Networks Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-463</td>
                                                    <td width="446">Machine Learning</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-464</td>
                                                    <td width="446">Machine Learning Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-465</td>
                                                    <td width="446">Contemporary course on CSE</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-466</td>
                                                    <td width="446">Contemporary course Lab on CSE</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-467</td>
                                                    <td width="446">Advanced Database Systems</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-468</td>
                                                    <td width="446">Advanced Database Systems Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-469</td>
                                                    <td width="446">Natural Language Processing</td>
                                                    <td width="135">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td width="89">CSE-470</td>
                                                    <td width="446">Natural Language Processing Lab</td>
                                                    <td width="135">1.5</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" width="536">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Credit Hours Required for Degree</strong></td>
                                                    <td width="135"><strong>162.00</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" id="collapse9" class="collapse">
                                            <span class="list_title">Detailed Syllabus</span>
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <div class="sroll_bar_t collapse_box" id="collapse_box9">
                                            <div class="chairman_text_inner">
                                                <p><strong>Detailed Syllabus</strong></p>
                                                <p><strong>CSE-101 Computer Fundamentals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><em>3 Credits&nbsp;</em></p>
                                                <p style="text-align: justify;"><strong>Introduction:</strong>
                                                    Definition, history &amp; some applications of computer. <strong>Classification
                                                        of Computer:</strong> H/W and S/W computer components. <strong>Number
                                                        systems :</strong> Binary, octal, hexadecimal number systems and
                                                    operations, computer codes. Boolean algebra.Data processing
                                                    techniques.Arithmetic e’ logic operation.Logic gates. Operating
                                                    systems: MS-WINDOWS, UNIX. Application software’s: Word processors,
                                                    word perfect, Ms-word Excel, Foxpro. <strong>Programming
                                                        languages:</strong> M/c language, assembly language, high level
                                                    languages, source &amp; object language, 4th generation language,
                                                    compilers, translators &amp; interpreter. Elements of computer H/W.
                                                    Data transmission &amp; networking.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introduction to Computers – <em>Subramanian</em></li>
                                                    <li>Inside the PC <em>– P. Norton</em></li>
                                                    <li>Introduction to Computer –&nbsp; <em>Norton</em></li>
                                                    <li>Computer Fundamentals –&nbsp; <em>Prodeep K. Sinha</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-102 Computer Fundamentals Lab</strong></p>
                                                <p><em>1.0 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 101</strong>.</p>
                                                <p><strong>PHY-101 Mechanics, Properties of Matter, Waves, Optics, Heat
                                                        &amp; Thermodynamics</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Mechanics :</strong>
                                                    Measurements, Motion in one Dimension, Motion in a Plane, Particle
                                                    Dynamics, Work &amp; Energy, Circular Motion, Simple Harmonic
                                                    Motion, Rotation of Rigid Bodies, Central Force, Structure of
                                                    Matter, Mechanical&nbsp; Properties of Materials. Properties of
                                                    Matter: Elasticity, Stresses &amp; Strains, Young’s Modulus, Bulk
                                                    Modulus, Rigidity Modulus, Elastic Limit, Poisson’s Ratio, Relation
                                                    between Elastic Constants, Bending of Beams. Fluid Motion, Equation
                                                    of Continuity, Bernoulli’s Theorem, Viscosity, Stokes’ Law. Surface
                                                    Energy &amp; Surface Tension, Capillarity, Determination of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    Surface Tension by Different Methods <strong>Waves :</strong> Wave
                                                    Motion &amp; Propagation, Simple Harmonic Motion, Vibration Modes,
                                                    Forced Vibrations, Vibration in Strings &amp; Columns, Sound Wave
                                                    &amp; Its Velocity, Doppler Effect, Elastic Waves, Ultrasonics,
                                                    Practical Applications. Optics : Theories of Light, Huygen’s
                                                    Principle, Electromagnetic Waves, Velocity of Light, Reflection,
                                                    Refraction, Lenses, Interference, Diffraction, Polarization. Heat
                                                    &amp; Thermodynamics : Temperature and Zeroth Law of Thermodynamics,
                                                    Calorimetry, Thermal Equilibrium &amp; Thermal Expansion, First Law
                                                    of Thermodynamics, Specific Heat, Heat Capacities, Equation of
                                                    State, Change of Phase, Heat Transfer, Second Law of Thermodynamics,
                                                    Carnot Cycle, Efficiency, Entropy, Kinetic Theory of Gases.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Fundamental of Physics (Part I)-<em>Haliday, Resnick&amp;
                                                            Walker</em></li>
                                                    <li>Modern Physics –&nbsp;&nbsp; <em>Bernstein</em></li>
                                                    <li>Concepts of Modern Physics – <em>Beiser</em></li>
                                                    <li>Electromagnetism and Modern Physics</li>
                                                    <li>Fundamental of Optics –&nbsp; <em>Brizlal</em></li>
                                                    <li>Optics – <em>Ghatak</em></li>
                                                    <li>Heat &amp; Thermodynamics –&nbsp;&nbsp; <em>Brizlal</em></li>
                                                    <li>University Physics with Modern Physics –&nbsp; <em>Young</em>
                                                    </li>
                                                    <li>EssentialUniversity Physics Volume I – <em>Wolfson</em></li>
                                                    <li>EssentialUniversity Physics Volume II – <em>Wolfson</em></li>
                                                </ol>
                                                <p><strong>MTH-105 Differential and Integral Calculus</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Differential Calculus: </strong>&nbsp;Real&nbsp;
                                                    number System. Relations and functions, Functions of single
                                                    variable, their Domain, Range, Graphs, Limit, Continuity and
                                                    Differentiability. Successive Differentiation, Leibnitz’s theorem,
                                                    Rolle’s theorem, Mean value&nbsp; theorem, Taylor’s theorem,
                                                    Maclaurin’s&nbsp; theorem, Langrage’s and Cauchy’s forms&nbsp; of
                                                    Remainder. Expansion of Function&nbsp; in Taylor’s and Maclaurin’s
                                                    Series. Maximum and Minimum Values of Function. Evaluation of
                                                    Indeterminate forms of limit, L’ Hospital’s Rule. Tangent and
                                                    Normal. Curvature, Radius of Curvature, Centre of Curvature.
                                                    Functions of more than one variable, Limit, Continuity,
                                                    Differentiability, Partial Derivatives, Euler’s Theorem. Jacobians.
                                                    &nbsp;<strong>Integral Calculus: </strong>Indefinite Integrals and
                                                    its definition. Methods of Integration (Integration by substitution,
                                                    Integration by parts, Integration by successive reduction).
                                                    Fundamental theorem of Integral calculus. Definite Integral and its
                                                    properties. Definite Integral as the limit of a sum. Improper
                                                    Integrals, Beta and Gamma Function, Its application in evaluating
                                                    Integrals. Evaluation of Arc length, Areas, Surfaces of Revolution,
                                                    Volumes of solids of Revolution, Multiple&nbsp; Integrals.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Calculus – <em>Howard Anton; 10<sup>th</sup> Edition; John Willy
                                                            and Sons</em></li>
                                                    <li>Differential Calculus – B. <em>C. Das &amp; B. N. Mukharjee;
                                                            54<sup>th</sup> Edition; U. N. Dhur &amp; Sons PTL</em></li>
                                                    <li>Integral Calculus – <em>C. Das &amp; B. N. Mukharjee;
                                                            54<sup>th</sup> Edition; U. N. Dhur &amp; Sons PTL</em></li>
                                                    <li>A Text Book on Differential Calculus – <em>Mohammad,
                                                            Bhattacharjee &amp; Latif, 4<sup>th</sup> Edition, 2014; S.
                                                            Chakravarty, Gonith Prokashan</em></li>
                                                    <li>A Text Book on Integral Calculus – <em>Mohammad, Bhattacharjee
                                                            &amp; Latif; 4<sup>th</sup> Edition, 2014; S. Chakravarty,
                                                            Gonith Prokashan.</em></li>
                                                </ol>
                                                <p><strong>CSE-105 Structured Programming Languages</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Programming language:</strong>
                                                    Basic concept; overview of programming languages, <strong>C-language:</strong>
                                                    Preliminaries; Elements of C; program constructs; variables and data
                                                    types in C; Input and output; character and formatted I/O;
                                                    Arithmetic expressions and assignment statements; loops and nested
                                                    loops; Decision making’ Arrays; Functions; Arguments and Local
                                                    Variables; Calling functions and arrays; Recursion and recursive
                                                    functions; structures within structure; Files; File functions for
                                                    sequential and Random I/O. Pointers, Pointers and Structures;
                                                    Pointers and functions; Pointer and arrays; Operations on pointers;
                                                    Pointer and memory addresses; Operations on bits; Bit operation; Bit
                                                    field; Advanced features; Standard and Library functions.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>The C Programming Language&nbsp; –&nbsp; <em>Kernighn&amp;
                                                            Ritchie</em></li>
                                                    <li>Teach Yourself C&nbsp; –&nbsp; <em>H. Schieldt</em></li>
                                                    <li>The Complete Reference, Turbo C/C++&nbsp; – <em>H. Schieldt</em>
                                                    </li>
                                                    <li>Programming with ANSI C&nbsp; –&nbsp; <em>E. Balagurusamy</em>
                                                    </li>
                                                    <li>Programming with C, Schaum’s outline Series&nbsp; –
                                                        <em>Gotfreid</em></li>
                                                </ol>
                                                <p><strong>CSE 106 Structured Programming Languages Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on CSE 105.</p>
                                                <p><strong>HUM-105 Oral and written Communication in English
                                                        Language</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Oral &amp; written communication skills
                                                    include communicative expressions for day to day activities, both
                                                    for personal and professional requirement. Grammar items will mainly
                                                    emphasize the use of articles, numbers, tense, modal verbs,
                                                    pronouns, punctuation, etc. Sentence formation, question formation,
                                                    transformation of sentence, simple passive voice construction, and
                                                    conditionals will also be covered.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Paragraph in English – <em>Tibbits</em></li>
                                                    <li>Exercise in Reading Comprehension – <em>Tibbits</em></li>
                                                    <li>Essential English Grammar – <em>Ramon Murphy</em></li>
                                                    <li>English Vocabulary in use – <em>Stuart</em></li>
                                                    <li>English Vocabulary in use&nbsp; – <em>McCarthy</em></li>
                                                    <li>Intermediate English Grammar&nbsp;&nbsp; –&nbsp; <em>Ramon
                                                            Murphy</em></li>
                                                </ol>
                                                <p><strong>HUM-113 Bangladesh Studies : History and Society of
                                                        Bangladesh</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Bangladesh-Geography of
                                                    Bangladesh-History of Bangladesh: ancient, medieval, British
                                                    periods, politics of 1930’s and 1940’s, Language movement, 6-point
                                                    &amp; 11-point programs, liberation war and emergence of Bangladesh
                                                    and constitutional transformation of the state. Social structure of
                                                    Bangladesh-Social problems such as repression of women, eve-teasing,
                                                    urbanization, terrorism, communalism, corruption etc.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Bangladesh Encyclopedia (English Version)</li>
                                                    <li>History of Bengal (English Version)&nbsp;&nbsp; –&nbsp;&nbsp;
                                                        <em>K. Ali</em></li>
                                                    <li>History of Bengal (English Version)&nbsp;&nbsp; –&nbsp;&nbsp;
                                                        <em>Majumder</em></li>
                                                    <li>Economy of Bangladesh (Economic Journal)</li>
                                                </ol>
                                                <p><strong>CSE-107 Object Oriented Programming I</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction to Java:</strong>
                                                    History of Java, Java class Libraries, Introduction to java
                                                    programming, and a simple program. Developing java Application:
                                                    Introduction, Algorithms, Pseudo code, control Structure, The
                                                    If/Else selection structure, the while Repetition structure,
                                                    Assignment operators, Increment and decrement operators, Primitive
                                                    data types, common Escape sequences, Logical operator. Control
                                                    Structure: Introduction, for Structure, switch structure, Do while
                                                    structure, Break and continue Structure. Methods: Introduction,
                                                    Program module in Java, Math class methods, method definitions, java
                                                    API packages, Automatic variables, Recursions, Method overloading,
                                                    Method of the Applet class. Arrays: Introduction, Arrays, declaring
                                                    and allocating arrays, passing arrays to methods, sorting arrays,
                                                    searching arrays, multiple subscripted Arrays. Inheritance:
                                                    Introduction, Super class, Subclass, Protected members, using
                                                    constructor and Finalizes in subclasses, composition vs.
                                                    Inheritance, Introduction to polymorphism, Dynamic method building,
                                                    Final methods and classes, Abstract super classes and concrete
                                                    classes, Exception Handling.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Java, How to Program- H. M. Deitel &amp; P. J. Deitel</li>
                                                    <li>Core Java (Vol. 1 and 2)- Sun Press</li>
                                                    <li>Beginning Java 2, Wrox – Ivor Horton</li>
                                                    <li>Java 2 Complete Reference- H. Schieldt</li>
                                                </ol>
                                                <p>&nbsp;</p>
                                                <p><strong>CSE 108 Object Oriented Programming I Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 107</strong>.</p>
                                                <p><strong>MTH-107 Geometry and Linear Algebra</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Geometry: Two dimensional
                                                        Geometry:</strong> Transformation of Co-ordinates. Pair of
                                                    straight lines, General Equation of Second Degree, Circle, Parabola,
                                                    Ellipse and Hyperbola. <strong>Three Dimensional Geometry:</strong>
                                                    Three Dimensional Co-ordinates, Direction Cosines and Direction
                                                    Ratios. Plane and Straight line.<strong> Linear Algebra:</strong>
                                                    Determinant and properties of Determinants, Matrix, Types of
                                                    matrices, Matrix operations, Laws of matrix Algebra, Invertible
                                                    matrices. Elementary row and Column operations and Row-reduced
                                                    echelon matrices, Rank of matrices. System of Linear equations
                                                    (homogeneous and non-homogeneous) and their solutions. Vectors in
                                                    R<sup>n</sup> and C<sup>n&nbsp;&nbsp; </sup>, Inner product, Norm
                                                    and Distance in R<sup>n</sup> and C<sup>n&nbsp; </sup>. Vector
                                                    Spaces, Subspace, Linear combination of vectors, Linear dependence
                                                    and independence of vectors. Basis and Dimension of vector spaces.
                                                    Inner product spaces, Orthogonality and Orthonormal sets, Eigen
                                                    values and Eigen vectors, diagonalization, Cayley-Hamilton&nbsp;
                                                    theorem and its application.</p>
                                                <p><strong>Books recommended:</strong></p>
                                                <ol>
                                                    <li>Analytical Geometry of Conic Section – <em>J.</em> <em>M.
                                                            Kar</em></li>
                                                    <li>An Elementary Treatise on Co-ordinate Geometry of three
                                                        dimensions –<em>J.</em> <em>T. Bell; Macmillan India Ltd</em>
                                                    </li>
                                                    <li>A Text Book on Co-ordinate Geometry – <em>Rahman &amp;
                                                            Bhattacharjee; 12<sup>th</sup> Edition, 2014; S.
                                                            Chakravarty, Gonith Prokashan</em></li>
                                                    <li><em>Schaum’s</em> Outline Series of the Theory and Problems on
                                                        Linear Algebra – <em>Seymour Lipschutz; 3<sup>rd</sup> Edition;
                                                            McGraw Hill Book Company</em></li>
                                                    <li>Linear Algebra with Applications – <em>Antone</em></li>
                                                    <li>Linear Algebra – <em>Dewan Abdul Quddus; Latest Edition; Titash
                                                            Publications</em></li>
                                                    <li>Linear Algebra – <em>Saikia</em></li>
                                                </ol>
                                                <p><strong>PHY-103 Electromagnetism and Modern Physics</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Electrostatics, Electric Charge,
                                                    Coulomb’s Law, Electric Field &amp; Electric Potential, Electric
                                                    Flux Density, Gauss’s Law, Capacitors and Dielectrics, Steady
                                                    Current, Ohm’s Law, Magnetostatics, Magnetic Field, Biot-Savart Law,
                                                    Ampere’s Law, Electromagnetic Induction, Faraday’s Law, Lenz’s Law,
                                                    Self Inductance &amp; Mutual Inductance, Magnetic Properties of
                                                    Matter, Permeability, Susceptibility, Diamagnetism, Paramagnetism&amp;Ferroma-gnetism,
                                                    Maxwell’s Equations of Electromagnetic Waves, Waves in Conducting
                                                    &amp; Non-Conducting Media, Total Internal Reflection, Transmission
                                                    along Wave Guides. Special Theory of Relativity, Length Contraction
                                                    &amp; Time Dilation, Mass-Energy Relation, Photo Electric Effect,
                                                    Quantum Theory, X-rays and X-ray Diffraction, Compton Effect, Dual
                                                    Nature of Matter &amp; Radiation, Atomic Structure, Nuclear
                                                    Dimensions, Electron Orbits, Atomic Spectra, Bohr Atom, Radioactive
                                                    Decay, Half-Life, a, b and g Rays, Isotopes, Nuclear Binding Energy,
                                                    Fundamentals of Solid State Physics, Lasers, Holography.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Fundamental of Physics(PartII)- <em>Haliday, Resnick&amp;
                                                            Walker</em></li>
                                                    <li>Modern Physics –&nbsp;&nbsp; <em>Bernstein</em></li>
                                                    <li>Concepts of Modern Physics – <em>Beiser</em></li>
                                                    <li>Electromagnetism and Modern Physics</li>
                                                    <li>Fundamental of Optics –&nbsp; <em>Brizlal</em></li>
                                                    <li>Optics – <em>Ghatak</em></li>
                                                    <li>Heat &amp; Thermodynamics –&nbsp;&nbsp; <em>Brizlal</em></li>
                                                    <li>University Physics with Modern Physics –&nbsp; <em>Young</em>
                                                    </li>
                                                    <li>Essential University Physics Volume II – <em>Wolfson</em></li>
                                                </ol>
                                                <p><strong>&nbsp;PHY-102 Physics Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>PHY-101 &amp; PHY-103</strong>.</p>
                                                <p><strong>ECE-101 Basic Electrical Engineering</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Fundamental electrical concepts,
                                                    Kirchoff’s Laws, Equivalent resistance. Electrical circuits: Series
                                                    circuits, parallel circuits, series-parallel networks. Network
                                                    analysis: Source conversion, Star/Delta conversion, Branch-current
                                                    method, Mesh analysis, Nodal analysis. Network theorems:
                                                    Superposition theorem, Thevenin’s theorem, Norton’s theorem.
                                                    Capacitors. Magnetic circuits, Inductors Sinosoidal alternating
                                                    waveforms: Definitions, phase relations, Instantaneous value,
                                                    Average value, Effective (rms)Value. Phasor algebra Series, parallel
                                                    and series-parallel ac networks. Power: Apparent power, Reactive
                                                    power, Power triangle, Power factor correction. Pulse waveforms and
                                                    the R-C response. Three-phase system Transformers.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introductory Circuit Analysis- <em>L. Boylestad</em></li>
                                                    <li>Introduction to Electrical Engineering- <em>P. Ward</em></li>
                                                    <li>Electrical Technology (Volume 1)-<em>L. Theraja, A.K.</em>Theraja
                                                    </li>
                                                    <li>Alternating Current Circuits-<em>M. Kerchner, G. F.
                                                            Corcoran</em></li>
                                                    <li>Electric Circuits – <em>James W. Nilson</em></li>
                                                </ol>
                                                <p><strong>&nbsp;ECE 102 Basic Electrical Engineering Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on ECE 101.</p>
                                                <p><strong>ECN 101 Principles of Economics</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction:</strong> The
                                                    Nature, scope and methods of Economics, Economics and Engineering.
                                                    Some Fundamental concepts commonly used in Economics. Micro
                                                    Economics: The theory of demand and supply and their elasticity’s.
                                                    Market price determination competition in theory and practice.
                                                    Indifference curve technique. Marginal analysis. Factors of
                                                    production and production function. Scale of production – Internal
                                                    and external economies and diseconomies. The short run and the long
                                                    run. Fixed cost and variable cost. <strong>Macro Economics:</strong>
                                                    National income analysis. Inflation and its effects. Savings,
                                                    Investments. The basis of trade and the terms of trade. Monetary
                                                    policy, Fiscal policy, Trade policy with reference to Bangladesh.
                                                    Planning in Bangladesh.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Economics&nbsp;&nbsp;&nbsp; –&nbsp; <em>Samuelson &amp;
                                                            Nordhaus</em></li>
                                                    <li>Economics&nbsp;&nbsp; –&nbsp;&nbsp; <em>Don Bush Fisher</em>
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;HUM-103 Language Composition and Comprehension</strong>
                                                </p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">This course purports to make the student
                                                    well up in composition and comprehension of English language used in
                                                    formal write ups like articles, essays and treatises. Here text will
                                                    be given for comprehension, exercises of writing essays, paragraphs
                                                    and reports will be done and construction of proper sentences
                                                    expressing formal ideas will be taught. Sufficient exercises of
                                                    translation and re-translations will be included.</p>
                                                <p><strong>&nbsp;Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Exercise in Reading Comprehension&nbsp;&nbsp; –&nbsp; <em>Tibbits</em>
                                                    </li>
                                                    <li>Essential English Grammar&nbsp; –&nbsp;&nbsp; <em>Ramon
                                                            Murphy</em></li>
                                                    <li>English Vocabulary in use&nbsp;&nbsp; –&nbsp; <em>Stuart</em>
                                                    </li>
                                                    <li>English Vocabulary in use&nbsp;&nbsp; –&nbsp;&nbsp;
                                                        <em>McCarthy</em></li>
                                                    <li>Intermediate English Grammar&nbsp;&nbsp; –&nbsp; <em>Ramon
                                                            Murphy</em></li>
                                                    <li>Paragraph in English&nbsp;&nbsp; –&nbsp; <em>Tibbits</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-201 Discrete Mathematics</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Mathematical Models and
                                                        Reasoning:</strong> Propositions, Predicates and Quantifiers,
                                                    Logical operators, Logical inference, Methods of proof. <strong>Sets:</strong>
                                                    Set theory, Relations between sets, Operations on sets. Induction,
                                                    The natural numbers, Set operations on å*. <strong>Binary Relations
                                                        :</strong> Binary relations and Digraphs, Graph theory, Trees,
                                                    Properties of relations, Composition of relations, Closure
                                                    operations on relations, Order relations, Equivalence relations and
                                                    partitions. <strong>Functions:</strong> Basic properties, Special
                                                    classes of functions. <strong>Counting and Algorithm
                                                        Analysis:</strong> Techniques, Asymptotic behavior of functions,
                                                    Recurrence systems, Analysis of algorithms. <strong>Infinite
                                                        sets:</strong> Finite and Infinite sets, Countable and
                                                    uncountable sets, Comparison of cardinal numbers.
                                                    <strong>Algebras:</strong> Structure, Varieties of algebras,
                                                    Homomorphism, Congruence relations.</p>
                                                <p><strong>&nbsp;Books Recommended:</strong></p>
                                                <ol>
                                                    <li><em>Schaum’s</em> <em>Outline</em> of <em>Theory and
                                                            Problems</em><em> of </em><em>Discrete</em>
                                                        <em>Mathematics-</em><em> Seymour Lipschutz</em></li>
                                                    <li>Discrete Mathematics and its Applications- <em>Kennth H.
                                                            Rosen</em></li>
                                                    <li>Discrete Mathematical Structures- <em>Bernard Kolman, Robert C.
                                                            Busby, Sharon Cutler Ross</em></li>
                                                    <li>Concrete Mathematics- <em>Ronald Ervin Knuth</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-211 Object Oriented Programming II</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">String, String Buffer and String Builder
                                                    classes, Files and Stream, Java Database Connectivity: Statement and
                                                    Prepared Statement Interfaces, CRUD operations using Statement and
                                                    Prepared Statement, JDBC Transaction Management, Object Relational
                                                    Mapping, Java Persistency API: Introduction, Entity class
                                                    annotations, Entity Manager interface, Entity Transaction interface,
                                                    CRUD operations using JPA, Primary Key Generation Strategies, Entity
                                                    Inheritance, Entity Mapping, Java Persistency Query Language:
                                                    Select, Update, Delete and Named Queries, Servlets: Servlet
                                                    Interface, Generic Servlet and HTTP Servlet, Servlet lifecycle, Java
                                                    Server Pages: JSP Life cycle methods, Tags in JSP, JSP Implicit
                                                    Objects, JSP Standard Tag Library, Java Server Faces: Introduction,
                                                    JSF Architecture and Application Development, JSF Page Navigation
                                                    and Managed Bean, JSF Core Tag Library, JSF Event Handling Model,
                                                    JSF Validation Model, JSF Data Conversion Model, JPA JSF
                                                    Integration, Java API, Utility classes, 2D Graphics, GUI, Swing,
                                                    Events.</p>
                                                <ol>
                                                    <li>Introduction to Programming in Java, <em>Robert Sedgewick &amp;
                                                            Kevin Wayne</em></li>
                                                    <li>An Introduction to Object-Oriented Programming, <em>Timothy
                                                            Budd</em></li>
                                                </ol>
                                                <p><strong>CSE-212</strong><strong> Object Oriented Programming II
                                                        Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 211</strong>.</p>
                                                <p><strong>&nbsp;CSE-205 Data Structures</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Concepts and examples: </strong>Introduction
                                                    to Data structures. <strong>Elementary data structures:</strong>
                                                    Arrays, records, pointer. <strong>Arrays:</strong> Type, memory
                                                    representation and operations with arrays. <strong>Linked
                                                        lists:</strong> Representation, Types and operations with linked
                                                    lists. <strong>Stacks and Queues:</strong> Implementations,
                                                    operations with stacks and queues. <strong>Graphs:</strong>
                                                    Implementations, operations with graph. <strong>Trees:</strong>
                                                    Representations, Types, operations with trees. Memory Management:
                                                    Uniform size records, diverse size records.
                                                    <strong>Sorting:</strong> Internal sorting, external sorting.
                                                    <strong>Searching :</strong> List searching, tree searching.
                                                    Hashing: Hashing functions, collision resolution.</p>
                                                <p><strong><em>&nbsp;</em></strong><strong>Books Recommended:</strong>
                                                </p>
                                                <ol>
                                                    <li>Fundamental of Data Structures – <em>Horowitz &amp; S.
                                                            Sahni</em></li>
                                                    <li>Data Structures –&nbsp; <em>Reingold</em></li>
                                                    <li>Data Structures, Schaum’s outline Series –&nbsp;
                                                        <em>Lipshultz</em></li>
                                                    <li>Data Structures &amp; Programming Design –&nbsp; <em>Robert L.
                                                            Kruse</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-206 Data Structures Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 205</strong>.</p>
                                                <p><strong>MTH-205</strong><strong> Vector Analysis and Complex
                                                        Variable</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Vector Analysis: </strong>Vector
                                                    Algebra – Vectors in three dimensional space, Algebra of Vectors,
                                                    Rectangular Components, Addition, Subtraction and Scalar
                                                    multiplication, Scalar and Vector product of two vectors. Scalar and
                                                    Vector triple product. Application in Geometry. Vector Calculus –
                                                    Limit, Continuity and Differentiability of Scalar and Vector point
                                                    functions.&nbsp; Scalar and Vector field. Gradient, Divergence and
                                                    Curl of point functions. Vector Integration, Line, Surface and
                                                    Volume Integrals. Green’s theorem, Gauss’s theorem, Stoke’s theorem.
                                                    <strong>Complex Variable: </strong>Field of Complex numbers,
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
                                                        Vector Analysis – <em>Murray R. Spiegel; SI (Metric Edition);
                                                            McGraw Hill Book Company</em></li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Complex
                                                        Variable – <em>Murray R. Spiegel; 2<sup>nd</sup> Edition; McGraw
                                                            Hill Book Company</em></li>
                                                    <li>Functions of a Complex Variable – <em>Dewan Abdul Quddus; Latest
                                                            Edition; Titash Publications</em></li>
                                                </ol>
                                                <p><strong>ECE-201 Electronic Devices &amp; Circuits</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction to semiconductors, Junction
                                                    diode characteristics &amp; diode applications, Bipolar Junction
                                                    transistor characteristics, Transistor biasing, Small signal low
                                                    frequency h-parameter model &amp; hybrid -pi model, AC analysis of
                                                    transistor, Frequency response of transistor, Operational
                                                    amplifiers, Linear applications of operational amplifiers, DC
                                                    performance of operational amplifiers, AC performance of operational
                                                    amplifiers, Introduction to JFET, MOSFET, PMOS, NMOS &amp; CMOS,
                                                    Introduction to SCR, TRIAC, DIAC &amp; UJT, Active filters
                                                    Introduction to IC fabrication techniques &amp; VLSI design.</p>
                                                <p><strong>Book Recommended:</strong></p>
                                                <ol>
                                                    <li><em>Electronic Devices</em><em> &amp; </em><em>Circuits</em>
                                                        McGraw-Hill -Jacob Millman &amp; Christos C. Halkias
                                                    </li>
                                                    <li><em>Electronics Devices And Circuits-</em> <em>Salivahanan</em>,
                                                        N. S. Kumar And A. Vallavaraj, Tata McGraw – Hill
                                                    </li>
                                                    <li><em>Electronics</em> Fundamentals:
                                                        <em>Circuits</em><em>, </em><em>Devices</em><em>,</em> and
                                                        Applications- Ronald J <em>Tocci</em></li>
                                                </ol>
                                                <p><strong>ECE 202 Electronic Devices &amp; Circuits Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>ECE 201</strong>.</p>
                                                <p><strong>ACN-203 Cost and Management Accounting</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction:</strong> <em>Cost
                                                        accounting:</em> Definition, Limitations of Financial
                                                    Accounting, Importance, Objectives, Functions and Advantages of Cost
                                                    Accounting, Financial Accounting VS. Cost Accounting VS. Managerial
                                                    Accounting, Techniques and Methods of Cost Accounting, International
                                                    Cost Accounting Systems. <em>Managerial accounting:</em> Definition
                                                    , Evolution , Objectives , Scope , Importance , Functions ,
                                                    Techniques , Differences among Managerial Accounting , Cost
                                                    Accounting and Financial Accounting , Management Accounting for
                                                    Planning and Control .<strong>Cost Classification</strong> : Cost
                                                    Concepts , Cost Terms , Cost Expenses and Losses , Cost Center ,Cost
                                                    Unit , Classification of Costs , Cost Accounting Cycle, Cost
                                                    Statement , The Flow of Costs in a Manufacturing Enterprise
                                                    ,Reporting and Results of Operation.&nbsp;
                                                    <strong>Materials</strong> : Indirect &amp; Direct Material ,
                                                    Procurement of Materials , Purchase Control ,&nbsp;&nbsp;&nbsp;
                                                    Purchase Department , Purchase Quantity , Fixed Order , Economic
                                                    Order Quantity , Stock-out Cost , Re-order Level , Purchase Order ,
                                                    Receipts and Inspection ,Classification and Codification of
                                                    materials ,Stock Verification , ABC Method of Store Control ,
                                                    Pricing of materials Issued , LIFO, FIFO and Average Pricing ,
                                                    Inventory Control; <strong>Labor</strong>: Labor Cost Control, Time
                                                    Recording Systems, Manual and Mechanical Methods, Time Booking,
                                                    Necessary Documents Maintained for Labor Control, Methods of
                                                    Remuneration;&nbsp; Treatment for Idle and Over Time. <strong>Overhead:</strong>
                                                    Definition , Classifications of Overheads , Methods of Overhead
                                                    Distribution , Distribution of&nbsp; Factory Overhead to Service
                                                    Departments, Redistribution of Service Department Cost , Uses of
                                                    Predetermined Overhead Rates , Treatment of Over and under absorbed
                                                    Overhead ,Treatment of Administration Overhead , Selling and
                                                    Distribution Overheads , Calculation of Machine Hour rate .<strong>
                                                        Job Order Costing: </strong>Feature Advantages, Limitation,
                                                    Accounting for Materials, Labor and Factory Overhead in Job Costing,
                                                    Accounting for Jobs Completed and Products Sold, Spoilage, Defective
                                                    Work and Scrap in job Costing System, The Job Cost Sheet, Job Order
                                                    Costing in Service Companies, Nature and Uses of Batch Costing,
                                                    Determination of Economic Batch Quantity.<strong> Contract
                                                        Costing: </strong>Introduction<strong>,</strong> Procedures,
                                                    Types of Contract, Retention Money, Profit or Loss on Incomplete
                                                    Contract, Cost plus Contract Systems; <strong>Operation
                                                        Costing: </strong>Nature, Procedures, Costing for Transport and
                                                    Hospital; <strong>Cost Behavior :</strong> Analysis of Cost Behavior
                                                    , Measurement of Cost Behavior , Methods of Methods of Measuring
                                                    Cost Functions , Analysis of Mixed Costs , High and Low Point Method
                                                    , Scatter graph&nbsp; Method , Least Squares Method , Use of
                                                    Judgment in Cost Analysis ; <strong>Cost – Volume Profit
                                                        Relationship :</strong> Profit Planning , Break Even Point ,
                                                    Break Even Chart , Changes in Underlying Factors , Profit Volume
                                                    Graph , Income Tax effect on Break Even Point , Break Even Point in
                                                    Decision Making , Risk and Profit Analysis , Limitations .</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Cost Accounting, A Managerial Emphasis: <em>T. Hormgren ET all&nbsp;</em>
                                                    </li>
                                                    <li>Managerial Accounting: <em>Ray .H. Garrison</em></li>
                                                    <li>Management Accounting: <em>N. Anthony</em></li>
                                                    <li>Management Accounting: <em>S.Kaplan</em></li>
                                                    <li>Cost Accounting: <em>Usry &amp; Hammer</em></li>
                                                    <li>Cost Accounting: <em>G. Rayburn</em></li>
                                                    <li>Cost Accounting: <em>P Lyenger</em></li>
                                                    <li>Accounting Principles – <em>Kieso</em></li>
                                                    <li>Financial &amp; Managerial Accounting-&nbsp; <em>Needles</em>
                                                    </li>
                                                    <li>Theory and Practice of Costing- <em>Basu &amp; Das</em></li>
                                                </ol>
                                                <p><strong>CSE-207 Algorithms</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Analysis of Algorithm: </strong>Asymptotic
                                                    analysis: Recurrences, Substitution method, Recurrence tree method,
                                                    Master method.<strong> Divide-and-Conquer:</strong> Binary search,
                                                    Powering a number, Fibonacci numbers, Matrix Multiplication,
                                                    Strassen’s Algorithm for Matrix Multiplication.<strong>
                                                        Sorting:</strong> Insertion sort, Merge sort, Quick sort,
                                                    Randomized quick sort, Decision tree, Counting sort, Radix
                                                    sort.<strong> Order Statistics:</strong> Randomized divide and
                                                    conquer, worst case linear time order statistics.<strong>
                                                        Graph:</strong> Representation, Traversing a graph, Topological
                                                    sorting, Connected Components.<strong> Dynamic Programming:</strong>
                                                    Elements of DP (Optimal substructure, Overlapping subproblem),
                                                    Longest Common Subsequence finding problem, Matrix Chain
                                                    Multiplication.<strong> Greedy Method:</strong> Greedy choice
                                                    property, elements of greedy strategy, Activity selector problem,
                                                    Minimum spanning tree (Prims algorithm, Kruskal algorithm), Huffman
                                                    coding.<strong> Shortest Path Algorithms:</strong> Dynamic and
                                                    Greedy properties, Dijkstra’s algorithm with its correctness and
                                                    analysis, Bellman-ford algorithm, All pair shortest path: Warshall’s
                                                    algorithm, Johnson’s algorithm.<strong> Network flow:</strong>
                                                    Maximum flow, Max-flow-min-cut, Bipartite matching.<strong>
                                                        Backtracking/Branch-and-Bound:</strong> Permutation,
                                                    Combination, 8-queen problem, 15-puzzle problem.<strong> Geometric
                                                        algorithm:</strong> Segment-segment intersection, Convex-hull,
                                                    Closest pair problem.<strong> And</strong> NP Completeness, NP hard
                                                    and NP complete problems.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introduction to Algorithms- <em>Thomas H. Cormen , Charles E.
                                                            Leiserson.</em></li>
                                                    <li>Algorithms –<em>Robert Sedgewick and Kevin Wayne.</em></li>
                                                    <li>Fundamental Algorithms- <em>Donald E. Knuth,”Art of Computer
                                                            Programming, Volume 1: Addison-Wesley Professional; 3rd
                                                            edition, 1997.</em></li>
                                                </ol>
                                                <p><strong>CSE-208 Algorithms Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p style="text-align: justify;">Using different well known algorithms to
                                                    solve the problem of Matrix-Chain Multiplication, Longest Common
                                                    Subsequence, Huffman codes generation, Permutation, Combination,
                                                    8-queen problem, 15-puzzle, BFS, DFS, flood fill using DFS,
                                                    Topological sorting, Strongly connected component, finding minimum
                                                    spanning tree, finding shortest path (Dijkstra’s algorithm and
                                                    Bellman-Ford’s algorithm), Flow networks and maximum bipartite
                                                    matching, Finding the convex hull, Closest pair.</p>
                                                <p><strong>CSE-209 Numerical Methods</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Errors and Accuracy. Iterative process:
                                                    Solution of f(x)= 0, existence and convergence of a root,
                                                    convergence of the iterative method, geometrical representation,
                                                    Aitken’s D<sup>2</sup>– process of acceleration. System of Linear
                                                    Equations. Solution of Non-Linear equations. Finite Differences and
                                                    Interpolation. Finite Difference Interpolation. Numerical
                                                    Differentiation. Numerical Integration. Differential Equations.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introductory methods of Numerical Analysis –&nbsp; <em>S. S.
                                                            Sastry</em></li>
                                                    <li>Numerical Methods for Engineers –<em>Steven C.&nbsp; Chapra</em>
                                                    </li>
                                                    <li>Numerical Mathematical Analysis – <em>James B. Scarborugh</em>
                                                    </li>
                                                </ol>
                                                <p><strong>CSE-210 Numerical Methods Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 209</strong>.</p>
                                                <p><strong>CSE-231 Digital Logic Design</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Binary Logic. Logic Gates: IC digital
                                                    logic families, positive and negative logic. Boolean Algebra.
                                                    Simplification of Boolean Functions: Karnaugh map method, SOP and
                                                    POS simplification, NAND, NOR, wired-AND, wired-OR implementation,
                                                    nondegenerate forms, Don’t care conditions, Tabulation method –
                                                    prime implicant chart. Combinational Logic: Arithmetic circuits –
                                                    half and full adders and subtractors, multilevel NAND and NOR
                                                    circuits, Ex-OR and Equivalence functions. Combinational Logic in
                                                    MSI and LSI: Binary parallel adder, decimal and BCD adders,
                                                    Comparators, Decoders and Encoders, Demultiplexors and Multiplexors.
                                                    Sequential Logic. Registers and Counters. Synchronous Sequential
                                                    Circuits. Asynchronous Sequential Circuits. Digital IC terminology,
                                                    TTL logic family, TTL series characteristics, open-collector TTL,
                                                    tristate TTL, ECL family, MOS digital ICs, MOSFET, CMOS
                                                    characteristics, CMOS tristate logic, TTL-CMOS-TTL interfacing,
                                                    memory terminology, general memory operation, semiconductor memory
                                                    technologies, different types of ROMs, semiconductor RAMs, static
                                                    and dynamic RAMs, magnetic bubble memory, CCD memory, FPGA
                                                    Concept.</p>
                                                <p><strong>Books Recommended</strong><em>:</em></p>
                                                <ol>
                                                    <li>Digital Logic &amp; Computer Design-<em>M. Morris Mano</em></li>
                                                    <li>Digital Fundamentals- <em>Floyd</em></li>
                                                    <li>Modern Digital Electronics-<em>R. P. Jain</em></li>
                                                    <li>Digital Systems- <em>R. J. Tocci</em></li>
                                                    <li>Digital Electronics- <em>Green</em></li>
                                                </ol>
                                                <p><strong>CSE-232 Digital Logic Design Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 231</strong>.</p>
                                                <p><strong>MTH-207</strong><strong> Differential Equations, Laplace
                                                        Transforms and Fourier Analysis</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Differential Equation:</strong>
                                                    Formation of Differential equation, Degree and Order of differential
                                                    equation, Complete and Particular solution. Ordinary differential
                                                    equation – Solution of ordinary differential equation of first order
                                                    and first degree (special forms). Linear differential equation with
                                                    constant coefficients. Homogeneous linear differential equation.
                                                    Solution of differential equation by the method of Variation of
                                                    parameters. Solution of linear differential equations in series by
                                                    Frobenius method. Bessel’s function and Legendre’s Polynomials and
                                                    their properties. Simultaneous equation of the form&nbsp;dx/P=dy/Q=dz/R.
                                                    Partial differential equation – Lagrange’s linear equation, Equation
                                                    of linear and non-linear first order standard forms, Charpit’s
                                                    method.</p>
                                                <p style="text-align: justify;"><strong>Laplace Transforms</strong>:
                                                    Definition, Laplace transforms of some elementary functions,
                                                    sufficient conditions for existence of Laplace transforms, Inverse
                                                    Laplace transforms, Laplace transforms of derivatives, Unit step
                                                    function, Periodic function, Some special theorems on Laplace
                                                    transforms, Partial fraction, Solution of differential equations by
                                                    Laplace transforms, Evaluation of Improper Integrals. <strong>Fourier
                                                        Analysis: </strong>Fourier series (Real and complex form).
                                                    Finite transforms, Fourier Integrals, Fourier transforms and
                                                    application in solving boundary value problems.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Differential Equations – <em>H. T. H. Piaggio; 1<sup>st</sup>
                                                            Indian Edition, 1985, S. K. Jain for CBS Publishers</em>
                                                    </li>
                                                    <li>A Text Book on Integral Calculus with Differential Equations –
                                                        <em>Mohammad,&nbsp; Bhattacharjee &amp; Latif, 4<sup>th</sup>
                                                            Edition, 2010; S. Chakravarty, Gonith Prokashon</em></li>
                                                    <li>Schaum’s Outline Series of the Theory and Problems on Laplace
                                                        Transforms – <em>Murray R. Spiegel; Revised Edition, 2003;
                                                            McGraw Hill Book Company</em></li>
                                                    <li>Differential Equation – <em>Md. Abu Eusuf; Latest Edition;
                                                            Abdullah Al Mashud Publisher</em></li>
                                                </ol>
                                                <p><strong>CSE-200 Project Work </strong></p>
                                                <p><em>2 Credits</em></p>
                                                <p style="text-align: justify;">Project focusing on Object oriented
                                                    programming approach and using standard algorithm is preferable.
                                                    Every project should maintain a goal so that it can be used as a
                                                    useful tool in the IT fields.&nbsp;Also innovative project ideas
                                                    that require different types scripting/programming languages or
                                                    programming tools can be accepted with respect to the consent of the
                                                    corresponding project supervisor.</p>
                                                <p><strong>CSE-321 Database Systems</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction: </strong>Purpose
                                                    of Database Systems, Data Abstraction, Data Models, Instances and
                                                    Schemes, Data Independence, Data Definition Language, Data
                                                    Manipulation Language, Database Manager, Database administrator,
                                                    Database Users, Overall System Structure, Advantages and
                                                    Disadvantage of a Database Systems. <em>Data Mining and analysis,
                                                        Database Architecture, History of Database Systems</em> <strong>Relationship
                                                        Entity-Model: </strong>Entities and Entity Sets, Relationships
                                                    and Relationship Sets, Attributes, <em>Composite and Multivalued
                                                        Attributes,</em> Mapping Constraints, Keys, Entity-Relationship
                                                    Diagram, Reducing of E-R Diagram to Tables, Generalization, <em>Attribute
                                                        Inheritance</em>, Aggregation, <em>Alternative E-R Notatios</em>,
                                                    Design of an E-R Database Scheme.</p>
                                                <p style="text-align: justify;"><strong>Relational Model: </strong>Structure
                                                    of Relational Database, <em>Fundamental Relational Algebra
                                                        Operations</em>, The Tuple Relational Calculus, The Domain
                                                    Relational Calculus, Modifying the Database. <strong>Relational
                                                        Commercial Language: </strong><em>SQL, Basic structure of SQL
                                                        Queries, Query-by-Example, Quel., Nested Sub queries, Complex
                                                        queries, Integrity Constraints, Authorization, Dynamic SQL,
                                                        Recursive Queries.</em> <strong>Relational Database
                                                        Design: </strong>Pitfalls in Relational Database Design, <em>Functional
                                                        Dependency Theory</em>, Normalization using Functional
                                                    Dependencies, Normalization using Multivalued Dependencies,
                                                    Normalization using join Dependencies, <em>Database Design
                                                        Process</em>. <strong>File And System Structure: </strong>Overall
                                                    System Structure, Physical Storage Media, File Organization, <em>RAID,</em>
                                                    Organization of Records into Blocks, Sequential Files, Mapping
                                                    Relational Data to Files, Data Dictionary Storage, Buffer
                                                    Management. <strong>Indexing And Hashing:</strong> Basic Concepts,
                                                    <em>Ordered Indices, </em>B+ -Tree Index Files, B-Tree Index Files,
                                                    Static and Dynamic Hash Function, Comparison of Indexing and
                                                    Hashing, Index Definition in SQL, Multiple Key Access.</p>
                                                <p style="text-align: justify;"><strong>Query Processing <em>and
                                                            Optimization</em>:</strong> Query Interpretation,
                                                    Equivalence of Expressions, Estimation of Query-Processing Cost,
                                                    Estimation of Costs of Access Using Indices, Join Strategies, Join
                                                    Strategies for parallel Processing, Structure of the query
                                                    Optimizer, <em>Transformation of Relational Expression.</em>
                                                    <strong>Concurrency Control: </strong>Schedules, Testing for
                                                    Serializability, Lock-Based Protocols, Timestamp-Based Protocols,
                                                    Validation Techniques, Multiple Granularity, Multiversion Schemes,
                                                    Insert and Delete Operations, <em>Deadlock Handling</em>. <strong>Distributed
                                                        Database: </strong>Structure of Distributed Databases, Trade-off
                                                    in Distributing the Database, Design of Distributed Database,
                                                    Transparancy and Autonomy, Distributed Query Processing, Recovery in
                                                    Distributed Systems, Commit Protocols, Concurrency Control. <strong>Data
                                                        Mining and Information Retrieval:<em>&nbsp; </em></strong>Data
                                                    analysis and OLAP, Data Warehouse, Data Mining, Relevance Ranking
                                                    Using Terms, Relevance Ranking Using Hyperlink, Synonyms, Homonyms,
                                                    Ontology, Indexing of Document, Measuring Retrieval Efficiencies,
                                                    Information Retrieval and Structured Data.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Database System Concepts – <em>Abraham Silberschratz, Henry K.
                                                            Korth, S. Sudarshan&nbsp; (5<sup>th</sup> edition)</em></li>
                                                    <li>Fundamentals of Database Systems – <em>Benjamin/Cummings,
                                                            1994</em></li>
                                                    <li>Database Principles, Programming, Performance&nbsp; – <em>Morgan
                                                            Kaufmann 1994</em></li>
                                                    <li>A First Course in Database Systems – <em>Prentice Hall,
                                                            1997</em></li>
                                                    <li>Database Management Systems, <em>McGraw Hill, 1996</em></li>
                                                </ol>
                                                <p><strong>CSE-322 Database Systems Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction: </strong>What is
                                                    database, MySQL , Oracle , SQL, Datatypes, SQL / PLSQL, Oracle
                                                    Software Installation, User Type, Creating User , Granting. <strong>Basic
                                                        Parts of Speech in SQL: </strong>Creating Newspaper Table,
                                                    Select Command (Where , order by), Creating View, Getting Text
                                                    Information &amp; Changing it, Concatenation, Cut &amp; paste
                                                    string(RPAD , LPAD , TRIM , LTRIM , RTRIM, LOWER , UPPER , INIT,
                                                    LENGTH , SUBSTR , INSTR , SOUNDEX). <strong>Playing The
                                                        Numbers: </strong>Addition , Subtraction , Multiplication ,
                                                    Division, NVL , ABS , Floor , MOD , Power , SQRT , EXR , LN , LOG ,
                                                    ROUND, AVG&nbsp; , MAX , MIN , COUNT , SUM, Distinct, SUBQUERY FOR
                                                    MAX,MIN. <strong>Grouping things together: </strong>Group By ,
                                                    Having, Order By, Views Renaming Columns with Aliases.<strong>When
                                                        one query depends upon another: </strong>Union, Intersect ,
                                                    Minus, Not in , Not Exists. <strong>Changing Data </strong>:
                                                    INSERT,UPDATE,MERGE,DELETE, ROLLBACK , AUTOCOMMIT , COMMIT,
                                                    SAVEPOINTS, MULTI TABLE INSERT, DELETE, UPDATE, MERGE. <strong>Creating
                                                        And Altering tables &amp; views: </strong>Altering table,
                                                    Dropping table, Creating view, Creating a table from a table.
                                                    <strong>By What Authority: </strong>Creating&nbsp; User, Granting
                                                    User, Password Management.<br>
                                                    <strong>An Introduction to PL/SQL</strong>: Implement few problems
                                                    using PL/SQL (eg Prime Number, Factorial, Calculating Area of
                                                    Circle, etc).<strong>An Introduction to Trigger and
                                                        Procedure: </strong>Implement few problems using Trigger&nbsp;
                                                    and Procedures. <strong>An Introduction to Indexing: </strong>Implement
                                                    indexing using a large database and observe the difference of
                                                    Indexed and Non-Indexed database.</p>
                                                <p><strong>CSE-331 Computer Architecture</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction to Computer
                                                        Architecture:</strong> Overview and history; Cost factor;
                                                    Performance metrics and evaluating computer designs. <strong>Instruction
                                                        set design:</strong> Von Neumann machine cycle, Memory
                                                    addressing, Classifying instruction set architectures, RISC versus
                                                    CISC, Micro programmed vs. hardwired control unit. <strong>Memory
                                                        System Design:</strong>&nbsp; Cache memory; Basic cache
                                                    structure and design; Fully associative, direct, and set associative
                                                    mapping; Analyzing cache effectiveness; Replacement policies;
                                                    Writing to a cache; Multiple caches; Upgrading a cache; Main Memory;
                                                    Virtual memory&nbsp; structure, and design; Paging; Replacement
                                                    strategies. <strong>Pipelining:</strong> General considerations;
                                                    Comparison of pipelined and nonpipelined computers; Instruction and
                                                    arithmetic pipelines, Structural, Data and Branch hazards. <strong>Multiprocessors
                                                        and Multi-core Computers:</strong>&nbsp; SISD, SIMD, and MIMD
                                                    architectures; Centralized and distributed shared memory-
                                                    architectures; Multi-core Processor architecture. Input/output
                                                    Devices: Performance measure, Types of I/O device, Buses and
                                                    interface to CPU, RAID. Pipelining: Basic pipelining, Pipeline
                                                    Hazards. Parallel Processing.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Computer Architecture and Organization- <em>John P.Hayes, &nbsp;3rd
                                                            Edition, McGraw Hill</em></li>
                                                    <li>Computer Organization and Design: The hardware / software
                                                        interface- <em>David A.Patterson and John L.Hennessy</em></li>
                                                </ol>
                                                <p><strong>CSE-323</strong><strong> Web Engineering</strong></p>
                                                <p><em>2</em><em> Credits</em></p>
                                                <p style="text-align: justify;">Introduction to Web Engineering,
                                                    Requirements Engineering and Modeling Web Applications, Web
                                                    Application Architectures, Technologies and Tools for Web
                                                    Applications, Testing and Maintenance of Web Applications, Usability
                                                    and Performance of Web Applications, Security of Web Applications,
                                                    The Semantic Web.</p>
                                                <p><strong>Books References:</strong></p>
                                                <ol>
                                                    <li>Web Engineering: The Discipline of Systematic Development of Web
                                                        Applications Editors- <em>GertiKappel, Birgit Proll, Siegfried
                                                            Reich, Werner Retschitzegger</em></li>
                                                    <li>Web Engineering: A Practitioner’s&nbsp; Approach- <em>Roger
                                                            Pressman, David Lowe</em></li>
                                                    <li>MIT Open Course Materials for the course Software Engineering
                                                        for Web Applications
                                                    </li>
                                                    <li>MIT Open Course Materials for the course Database, Internet, and
                                                        Systems Integration Technologies
                                                    </li>
                                                </ol>
                                                <p><strong>CSE-324</strong><strong> Web Engineering Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p style="text-align: justify;">Understanding the Web Application: Web
                                                    Engineering introduces a structured methodology utilized in software
                                                    engineering to Web development projects. The course addresses the
                                                    concepts, methods, technologies, and techniques of developing Web
                                                    Sites that collect, organize and expose information resources.
                                                    Topics covered include requirements engineering for Web
                                                    applications, design methods and technologies, interface design,
                                                    usability of web applications, accessibility, testing, metrics,
                                                    operation and maintenance of Web applications, security and project
                                                    management. Specific technologies covered in this course include
                                                    client-side (XHTML, JavaScript and CSS) and server-side (Perl and
                                                    PHP). Using the described concepts students should be able to
                                                    understand the Web engineering concepts behind the frameworks of
                                                    Joomla, Drupal, WordPress. Server-side technology: LAMP, Web
                                                    application frameworks, (example: Silverlight, Adobe Flex), Web 2.0
                                                    and Web APIs. Front-end technology: HTML, XHTML, XML. CSS Styling,
                                                    layout, selector, Document object model and JavaScript.
                                                    Client-Programming: Web APIs with JavaScript (example: Google AJAX
                                                    API). MVC: Understanding model, view and controller model.
                                                    Understanding Web APIs: REST, XML, JSON, RSS Parsing. JavaScript
                                                    Exercise: The goal of this assignment is to allow you to explore and
                                                    use vas many of JavaScript’s objects, methods and properties as
                                                    possible in a small assignment. Some functions must be written from
                                                    scratch. Other functions, appropriately attributed, may be
                                                    downloaded from the web and used as a part of the system or as the
                                                    basis for your own functions. &nbsp;PHP Exercise: Build a set of PHP
                                                    scripts that perform some dynamic server-side functionality.
                                                    Understanding plug-ins: Develop a Firefox extension.</p>
                                                <p><strong>MTH-301 Statistics and Probability</strong></p>
                                                <p><em>2 Credits</em></p>
                                                <p style="text-align: justify;">Frequency distribution; mean, median,
                                                    mode and other measures of central tendency, Standard deviation and
                                                    other measures of dispersion, Moments, skewness and kurtosis,
                                                    Elementary probability theory and discontinuous probability
                                                    distribution, e.g. binomial, poison and negative binomial,
                                                    Continuous probability distributions, e.g. normal and exponential,
                                                    Characteristics of distributions, Hypothesis testing and regression
                                                    analysis.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introduction to M athematical Statistics –&nbsp; <em>Hogg</em>
                                                    </li>
                                                    <li>Probability and Statistics for Scientists and Engineers – <em>Walpole</em>
                                                    </li>
                                                </ol>
                                                <p><strong>CSE-309 Cyber Crime and Intellectual Property Law</strong>
                                                </p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction:</strong> the
                                                    problem of computer crime, what is Cybercrime?
                                                    <strong>Cybercrime:</strong> the invisible threat, Information and
                                                    other assets in need of assurance, Computer focused and computer
                                                    assisted crimes, the hacker, hacking tactics, the victim, Data:
                                                    surveys, network flow and IPS/IDS, Data: honey pots and incidents,
                                                    Cyber terrorism, Cyber laws and regulations, Investigating cyber
                                                    crime , Preventing cyber crime and Future opportunities for managing
                                                    cybercrime. <strong>Intellectual Property: </strong>Introduction,
                                                    Philosophical Perspectives and Overview of Intellectual Property:
                                                    Trade Secret; Patent; Copyright; Trademark/Trade Dress; Problem;
                                                    Copyright and patent; need of intellectual Property laws, Copyright
                                                    for software, software-copyright cases, Database, the focus shifts
                                                    from copyright to patent, the nature of patent law, some
                                                    software-patent cases. Filmy and video, Pornography meets the
                                                    internet, different between downloads and publications, censoring
                                                    videos.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Understanding and Managing Cybercrime-<em>McQuade III, Samuel C.
                                                            2006. ISBN 0-205-43973-X</em></li>
                                                    <li>The Transformation of Crime in the Information Age –<em>Wall,
                                                            David. 2006. ISBN 0-745-62736-6</em></li>
                                                    <li>Cyber Crime and Digital Evidence: Materials and Cases –<em>Thomas
                                                            K. Clancy, First Edition 2011, LexisNexis, ISBN:
                                                            9781422494080</em></li>
                                                    <li>Cybercrime, investigating high-technology computer crime –<em>Moore,
                                                            Robert, (2011), (2ndEd.). Elsevier.</em></li>
                                                    <li>Cybercrime: The Investigation, Prosecution and Defense of a
                                                        Computer-related Crime –<em>Ralph D. Clifford, August 1,
                                                            2011</em></li>
                                                    <li>Intellectual Property in the New Technological Age –<em>Merges,
                                                            Menell &amp; Lemley,2011 (<sup>6th</sup> Edition)</em></li>
                                                    <li>Intellectual property: Law &amp; the information society- <em>James
                                                            Boyle, Jennifer Jenkins, First Edition, 2014.</em></li>
                                                    <li>International Intellectual Property law- <em>Jonathan Franklin,
                                                            2013</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-310 Technical Report Writing and
                                                        Presentation</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p style="text-align: justify;">Issues of technical writing and
                                                    effective oral presentation in Computer Science and Engineering;
                                                    Writing styles of definitions, propositions, theorems and proofs;
                                                    Preparation of reports, research papers, theses and books: abstract,
                                                    preface, contents, bibliography and index; Writing of book reviews
                                                    and referee reports; Writing tools: LATEX; Diagram drawing software;
                                                    presentation tools.</p>
                                                <p><strong>&nbsp;Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Technical Report Writing- <em>Daniel G. Riordan, Houghton
                                                            Mifflin Company, 8th edition, 2001</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-326 Engineering Drawing&nbsp;</strong></p>
                                                <p><em>1 Credit</em></p>
                                                <p>Introduction; Instruments and their uses; First and third angle
                                                    projection; Orthographic drawing; Sectional views and conventional
                                                    practices; Auxiliary views; Isometric views; Missing lines and
                                                    views.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Engineering Drawing &amp; Design<strong>– </strong><em>David A.
                                                            Madsen, David P. Madsen</em></li>
                                                </ol>
                                                <p><strong>CSE-300 Software Development</strong></p>
                                                <p><em>2</em><em> Credits</em></p>
                                                <p style="text-align: justify;">Students will work in groups or
                                                    individually to produce high quality software in different
                                                    languages. Students will write structured programs and use proper
                                                    documentation. Advanced programming techniques in Mobile
                                                    Application.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Android Application Development Cookbook- <em>Wei-Meng Lee</em>
                                                    </li>
                                                    <li>The Complete Android Guide- <em>Kevin Purdy</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-303 Operating Systems</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction:</strong> Operating
                                                    Systems Concept, Computer System Structures, Operating System
                                                    Structures, Operating System operations, Protection and Security,
                                                    Special-Purpose Systems. <strong>Fundamentals of OS :</strong> OS
                                                    services and components, multitasking,&nbsp; multiprogramming, time
                                                    sharing, buffering, spooling <strong>Process Management:</strong>
                                                    Process Concept, Process Scheduling, Process State, Process
                                                    Management, Interprocess Communication, interaction between
                                                    processes and OS, Communication in Client-Server Systems, Threading,
                                                    Multithreading, Process Synchronization<em>. </em><strong>Concurrency
                                                        control:</strong> Concurrency and race conditions, mutual
                                                    exclusion requirements, semaphores, monitors, classical IPC problem
                                                    and solutions, Dead locks – characterization, detection, recovery,
                                                    avoidance and prevention. <strong>Memory Management</strong>: Memory
                                                    partitioning, Swapping, Paging, Segmentation, Virtual memory –
                                                    Concepts, Overlays, Demand Paging, Performance of demand paging,
                                                    Page replacement algorithm, Allocation algorithms. <strong>Storage
                                                        Management</strong>: Principles of I/O hardware, Principles of
                                                    I/O software, Secondary storage structure, Disk structure, Disk
                                                    scheduling, Disk Management, Swap-space Management, Disk
                                                    reliability, Stable storage implementation. <strong>File
                                                        Concept:</strong><em>&nbsp; </em>File support, Access methods,
                                                    Allocation methods, Directory systems, File Protection, Free Space
                                                    management <strong>Protection &amp; Security</strong><em> : </em>Goals
                                                    of protection, Domain of protection, Access matrix, Implementation
                                                    of access matrix, Revocation of access rights, The security problem,
                                                    Authentication, One-time passwords, Program threats, System threats,
                                                    Threat monitoring, Encryption, Computer-security classification.&nbsp;
                                                    <strong>Distributed Systems:</strong> Types of Distributed Operating
                                                    System, Communication Protocols, Distributed File Systems, Naming
                                                    and Transparency, Remote File Access, Stateful Versus Stateless
                                                    Service, File Replication. <strong>Case Studies:</strong> Study of a
                                                    representative Operating Systems,</p>
                                                <p><strong>&nbsp;Books Recommended: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <ol>
                                                    <li>Operating System Concepts – <em>Silberschatz &amp; Galvin Wiley
                                                            2000 (7th Edition)</em></li>
                                                    <li>Operating Systems – <em>Achyut S. Godbole Tata Mc Graw Hill (2nd
                                                            Edition)</em></li>
                                                    <li>Understanding Operating System – <em>Flynn &amp; Metioes Thomsan
                                                            (4th Edition)</em></li>
                                                    <li>Operating Systems Design &amp; Implementation – <em>Andrew
                                                            Tanenbam, Albert S. Woodhull Pearson</em></li>
                                                    <li>Modern Operating System – <em>Andrew S. Tanenbaum</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-304 Operating Systems Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p><strong>Thread programming:</strong> Creating thread and thread
                                                    synchronization. <strong>Process Programming: </strong>The Process
                                                    ID, Running a New Process, Terminating a Process, Waiting for
                                                    Terminated Child Processes, Users and Groups, Sessions and Process
                                                    Groups. <strong>Concurrent Programming:</strong> Using fork, exec
                                                    for multi-task programs. <strong>File Operations:</strong> File
                                                    sharing across processes, System lock table, Permission and file
                                                    locking, Mapping Files into Memory, Synchronized, Synchronous, and
                                                    Asynchronous Operations, I/O Schedulers and I/O Performance.</p>
                                                <p><strong>Communicating across processes:</strong> Using different
                                                    signals, Pipes, Message queue, Semaphore, Semaphore arithmetic and
                                                    Shared memory.</p>
                                                <p><strong>&nbsp;Books Recommended:</strong></p>
                                                <ol>
                                                    <li>The ‘C’ Odyssey UNIX-The Open, Boundless C<strong>
                                                            – </strong><em>Meeta Gandhi, Tilak Shetty, Rajiv Shah</em>.
                                                    </li>
                                                    <li>Beginning Linux Programming<strong> – </strong><em>Neil Matthew
                                                            and Richard Stones</em></li>
                                                    <li>Linux System Programming<strong> – </strong><em>Robert Love</em>
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-315 Data Communication</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction to modulation techniques:
                                                    Pulse modulation; pulse amplitude modulation, pulse width modulation
                                                    and pulse position modulation. Pulse code modulation; quantization,
                                                    Delta modulation. TDM, FDM, OOK, FSK, PSK, QPSK; Representation of
                                                    noise; threshold effects in PCM and FM. Probability of error for
                                                    pulse systems, concepts of channel coding and capacity. Asynchronous
                                                    and synchronous communications. Hardware interfaces, multiplexers,
                                                    concentrators and buffers. Communication medium, Fiber optics.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introduction to Data Communications-<em>Eugene Blanchard</em>
                                                    </li>
                                                    <li>Data Communication Principles<em> – Ahmad, Aftab</em></li>
                                                    <li>Data Communication &amp; Networking<em>– </em><a
                                                                href="http://www.google.com.bd/search?tbo=p&amp;tbm=bks&amp;q=inauthor:%22V.S.Bagad%22"><em>S.Bagad</em></a><em><u>, </u></em><a
                                                                href="http://www.google.com.bd/search?tbo=p&amp;tbm=bks&amp;q=inauthor:%22I.A.Dhotre%22"><em>I.A.Dhotre</em></a>
                                                    </li>
                                                    <li>Data Communications and Networking- <em>Behrouz A. Forouzan</em>
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-313 Microprocessors and Microcontroller</strong>
                                                </p>
                                                <p><em>3 Credits</em></p>
                                                <p>Introduction to 8-bit, 16-bit, and 32-bit microprocessors:
                                                    architecture, addressing modes, instruction set, interrupts,
                                                    multi-tasking and virtual memory; Memory interface; Bus interface;
                                                    Arithmetic co-processor; Microcontrollers; Integrating
                                                    microprocessor with interfacing chips.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Microprocessors &amp; Interfacing- <em>Douglas V. Hall</em></li>
                                                </ol>
                                                <p><strong>CSE-314</strong><strong> Microprocessors and Microcontroller
                                                        Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE-313</strong>.</p>
                                                <p><strong>CSE-337 System Analysis and Software Engineering</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Concepts of Software Engineering;
                                                    Software Engineering paradigms;Different phases of software System
                                                    Development; Different types of&nbsp; information, qualities of
                                                    information. Project Management Concepts; Software process and
                                                    project Metrics; Software Project Planning; Risk Analysis and
                                                    management; Project Scheduling and Tracking. Analysis Concepts and
                                                    principles: requirement analysis, Analysis modeling, data modeling.
                                                    Design concepts and principles, Architectural design, User Interface
                                                    design, Object Oriented software development and design: Iterative
                                                    Development and the Unified Process. Sequential waterfall life
                                                    cycles, Inception. Use case model for requirement writing,
                                                    Elaboration using System Sequence Diagram, Domain Model. Visualizing
                                                    concept classes. UML diagrams, Interaction and Collaboration Diagram
                                                    for designing Software. Designing Objects with responsibilities.
                                                    GRASP patterns with General Principles in assigning
                                                    responsibilities: Information expert, Creator, Low Coupling and High
                                                    Cohesion, Creating design class diagrams and mapping design to
                                                    codes. Advanced GRASP patterns: Polymorphism, Pure Fabrication,
                                                    Indirection, Project Variation. GoF Design Patterns: Adapter,
                                                    Factory, Singleton, Strategy, Composite, Facade, and Observer.
                                                    Software Testing: White Box and Black Box testing. Basis Path
                                                    Testing. Testing for specialized environment. Software testing
                                                    strategies: Unit Testing, Integration Testing, Validation Testing,
                                                    System Testing, Art of debugging. Analysis of System Maintenance and
                                                    upgrading: Software repair, downtime, error and faults,
                                                    specification and correction, Maintenance cost models,
                                                    documentation. Software Quality Assurance, Quality factors. Software
                                                    quality measures.Cost impact of Software defects. Concepts of
                                                    Software reliability, availability and safety. Function based
                                                    metrics and bang metrics. Metrics for analysis and design model.
                                                    Metrics for source code, testing and maintenance.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Software Engineering-<em>Ian Sommerville, Addison Wesley, 6th
                                                            edition, 2000.</em></li>
                                                    <li>Software Engineering-<em>Roger S Pressman, Roger
                                                            Pressman</em>,<em> Practitioner’s Approach”, McGraw-Hill,
                                                            6th edition, 2004</em>.
                                                    </li>
                                                    <li>Systems Analysis and Design of Real<em>-Time Management
                                                            Information Systems- Robert J. Thierauf, Prentice Hall,
                                                            1975.</em></li>
                                                    <li>Analysis and Design of Information Systems- <em>Rajaraman,
                                                            Prentice-Hall of India Pvt.Ltd, 2004.</em></li>
                                                </ol>
                                                <p><strong>CSE-338 System Analysis and Software Engineering Lab</strong>
                                                </p>
                                                <p><em>1.5 Credits</em></p>
                                                <p style="text-align: justify;">Software Engineering lab works is solely
                                                    designed to attain hands on experience of architectural design,
                                                    documentation and testing of software so that students can develop
                                                    the software following the documents only.</p>
                                                <p style="text-align: justify;">Step1 (Requirement Engineering): Choose
                                                    a company/institute/client for which software will be developed
                                                    (make sure that they will provide required information whenever
                                                    necessary). Follow the steps for eliciting requirements and generate
                                                    use-case diagram. Also analyze the sufficiency of the requirement
                                                    engineering outcome for steps to follow.</p>
                                                <p style="text-align: justify;">Step 2 (Analysis model to Architectural
                                                    and Component level design): Generate Activity diagram, Data flow
                                                    diagram (DFD), Class diagram, State diagram, Sequence diagram and
                                                    follow other relevant steps for creating complete architectural and
                                                    component level design of the target software.</p>
                                                <p style="text-align: justify;">Step 3 (User Interface design, Design
                                                    evaluation, Testing strategies and Testing Tactics): Perform the
                                                    user interface design with the help of swimlane diagram. Carry out
                                                    the design evaluation steps. Generate all test cases for complete
                                                    checking of the software using black box, white box testing
                                                    concept.</p>
                                                <p>Step 4 Software testing and debugging</p>
                                                <p>Step 5 (Managing Software Projects): Analyze the estimation and
                                                    project schedule.</p>
                                                <p><strong>CSE-425 Digital Signal Processing</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction to digital signal
                                                    processing (DSP): Discrete-time signals and systems, analog to
                                                    digital conversion, impulse response, finite impulse response (FIR)
                                                    and infinite impulse response (IIR) of discrete-time systems,
                                                    difference equation, convolution, transient and steady state
                                                    response. Discrete transformations: Discrete Fourier series,
                                                    discrete-time Fourier series, discrete Fourier transform (DFT) and
                                                    properties, fast Fourier transform (FFT), inverse fast Fourier
                                                    transform, z-transformation – properties, transfer function, poles
                                                    and zeros and inverse z-transform. Correlation: circular
                                                    convolution, auto-correlation and cross correlation. Digital
                                                    Filters: FIR filters- linear phase filters, specifications, design
                                                    using window, optimal and frequency sampling methods; IIR filters-
                                                    specifications, design using impulse invariant, bi-linear
                                                    z-transformation, least-square methods and finite precision effects.
                                                    Digital signal processor TMS family, Application of digital signal
                                                    processing</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Digital Signal Processing-<em>John G. Proakis</em></li>
                                                    <li>Signals and Systems-<em>Simon Haykin and Barry Van Veen</em>
                                                    </li>
                                                    <li><em>Digital Signal Processing-R. W. Schafer</em></li>
                                                    <li>Digital Signal Processing-<em>Ifeachor</em></li>
                                                    <li>Introduction to DSP-<em>Johnny R. Johnson</em></li>
                                                </ol>
                                                <p><strong>CSE-426 Digital Signal Processing Lab</strong></p>
                                                <p><em>1.5</em><em> Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 425</strong>.</p>
                                                <p><strong>CSE-403 Compiler Design</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction to
                                                        compilers: </strong>Introductory concepts, types of compilers,
                                                    applications, phases of a compiler. <strong>Lexical
                                                        analysis: </strong>Role of the lexical analyzer, input
                                                    buffering, token specification, recognition of tokens, symbol
                                                    tables. <strong>Parsing: </strong>Parser and its role, context free
                                                    grammars, top-down parsing. <strong>Syntax-directed
                                                        translation: </strong>Syntax-directed definitions, construction
                                                    of syntax trees, top-down translation. <strong>Type
                                                        checking: </strong>Type systems, type expressions, static and
                                                    dynamic checking of types, error recovery. <strong>Run-time
                                                        organization: </strong>Run-time storage organization, storage
                                                    strategies. <strong>Intermediate code generation:</strong>
                                                    Intermediate languages, declarations, assignment statements.
                                                    <strong>Code optimization: </strong>Basic concepts of code
                                                    optimization, principal sources of optimization. <strong>Code
                                                        generation. Features of some common compilers: </strong>Characteristic
                                                    features of C, Pascal and Fortran compilers.</p>
                                                <p><strong>Books Recommended: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <ol>
                                                    <li>Compilers: Principles, Techniques, and Tools – <em>Alfred V.
                                                            Aho, Ravi Sethi, Jeffrey D. Ullman. Second Edition.</em>
                                                    </li>
                                                </ol>
                                                <p><strong>CSE-404 Compiler Design Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>How to use scanner and parser generator tools (e.g., Flex, JFlex,
                                                    CUP, Yacc, etc). For a given simple source language designing and
                                                    implementing lexical analyzer, symbol tables, parser, intermediate
                                                    code generator and code generator.</p>
                                                <p><strong>CSE-421 Computer Network</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Network architectures-layered
                                                    architectures and ISO reference model: data link protocols, error
                                                    control, HDLC, X.25, flow and congestion control, virtual terminal
                                                    protocol, data security. Local area networks, satellite networks,
                                                    packet radio networks. Introduction to ARPANET, SNA and DECNET.
                                                    Topological design and queuing models for network and distributed
                                                    computing systems.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Computer Networks-<em>A. S. Tanenbaum</em></li>
                                                    <li>Introduction to Networking- <em>Barry Nance</em></li>
                                                    <li>Data Communications, Computer Networks &amp; Open Systems-&nbsp;
                                                        <em>F. Halsall</em></li>
                                                    <li>TCP/IP-<em>SydniFeit</em></li>
                                                    <li>Data Communications and Networking-<em>Behrouz A. Forouzan</em>
                                                    </li>
                                                </ol>
                                                <p><strong>CSE-422Computer Network Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 421</strong>.</p>
                                                <p><strong>CSE-415</strong><strong> Artificial Intelligence</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>What is Artificial
                                                        Intelligence:</strong> The AI problems, The underlying
                                                    assumption, What is an AI technique. <strong>Problems, Problem
                                                        spaces and Search:</strong> Defining the problem as a state
                                                    space search, Production system, Problem characteristics. <strong>Heuristics
                                                        Search Techniques:</strong> Generate and Test, Hill climbing,
                                                    Best First Search, Problem Reduction, Constraint Satisfaction,
                                                    Means-Ends Analysis. <strong>Knowledge Representation
                                                        Issues: </strong>Representation and Mappings, Approaches to
                                                    knowledge Representation, Issues in Knowledge representation.
                                                    <strong>Using Predicate logic: </strong>Representing simple facts in
                                                    logic, Representing Instance and Isa relationships, Computable
                                                    functions and Predicates, Resolution. <strong>Representing Knowledge
                                                        using Rules: </strong>Procedural versus Declarative Knowledge,
                                                    Logic Programming, Forward versus Backward Reasoning, Matching.
                                                    <strong>Game playing: </strong>Overview, The Mimimax Search
                                                    Procedure, Adding Alpha-Beta cutoffs, Additional refinements,
                                                    iterative Deepening, <strong>Planning: </strong>Overview, An example
                                                    Domain: The Blocks World, Components of a planning system, Goal
                                                    stack planning, <strong>Understanding: </strong>What is
                                                    Understanding, What makes Understanding hard, Understanding as
                                                    constraint satisfaction. <strong>natural Language
                                                        Processing: </strong>Introduction, Syntactic Processing,
                                                    Semantic Analysis, Discourse and Pragmatic Processing. <strong>Expert
                                                        systems:</strong> representing and using domain knowledge,
                                                    Expert system shells explanation, Knowledge Acquisition.</p>
                                                <p><strong>AI Programming Language</strong>: Python, Prolog, LISP</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introduction to Artificial Intelligence and Expert System-<em>Dan
                                                            W. Peterson</em></li>
                                                    <li>Artificial Intelligence-<em>E. Rich and K. Knight</em></li>
                                                    <li>An Introduction to Neural Computing-<em>C. F. Chabris and T.
                                                            Jackson</em></li>
                                                    <li>Artificial Intelligence: A Modern Approach-<em>S. Russel and P.
                                                            Norvig</em></li>
                                                    <li>Artificial Intelligence using C&nbsp; –&nbsp; <em>H.
                                                            Schieldt</em></li>
                                                </ol>
                                                <p><strong>CSE-416</strong><strong> Artificial Intelligence Lab</strong>
                                                </p>
                                                <p><em>1.5 Credits</em></p>
                                                <p style="text-align: justify;">Students will have to understand the
                                                    functionalities of intelligent agents and how the agents will solve
                                                    general problems. Students have to use a high-level language
                                                    (Python, Prolog, LISP) to solve the following problems:</p>
                                                <p style="text-align: justify;"><strong>Backtracking: </strong>State
                                                    space, Constraint satisfaction, Branch and bound. Example: 8-queen,
                                                    8- puzzle, Crypt-arithmetic. <strong>BFS and production: </strong>Water
                                                    jugs problem, The missionaries and cannibal problem. <strong>Heuristic
                                                        and recursion: </strong>Tic-tac-toe, Simple bock world, Goal
                                                    stack planning, The tower of Hanoi. <strong>Question
                                                        answering: </strong>The monkey and bananas problem.</p>
                                                <p><strong>CSE-431Computer Graphics</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction to Graphical data
                                                    processing. Fundamentals of interactive graphics programming.
                                                    Architecture of display devices and connectivity to a computer.
                                                    Implementation of graphics concepts of two-dimensional and
                                                    three-dimensional viewing, clipping and transformations. Hidden line
                                                    algorithms. Raster graphics concepts: Architecture, algorithms and
                                                    other image synthesis methods. Design of interactive graphic
                                                    conversations.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Principles of Interactive Computer Graphics –<em>William M.,
                                                            Newman, McGraw-Hill, 2nd edition, 1978</em></li>
                                                    <li>Computer Graphics: Principle and Practice in C-<em>James D.
                                                            Foley, Andries van Dam, Steven K. Feiner, John F. Hughes,
                                                            Addison-Wesley, 2nd edition, 1995</em></li>
                                                </ol>
                                                <p><strong>CSE-432 Computer Graphics Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 431.</strong></p>
                                                <p><strong>CSE-435 Computer Interfacing</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p>Interface components and their characteristics, microprocessor I/O.
                                                    Disk, Drums, and Printers. Optical displays and sensors. High power
                                                    interface devices, transducers, stepper motors and peripheral
                                                    devices.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Microprocessors &amp; Interfacing-<em>Douglas V. Hall</em></li>
                                                    <li>Microprocessor &amp; Microcomputer based System Design&nbsp; –&nbsp;
                                                        <em>Rafiquzzaman</em></li>
                                                    <li>Microcomputer Interfacing-<em>Artwick</em></li>
                                                    <li>Microcomputer Interfacing-<em>Ramesh Goanker</em></li>
                                                    <li>Designing User Interfaces-<em>James E. Powell</em></li>
                                                </ol>
                                                <p><strong>CSE-436 Computer Interfacing Lab&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                                                </p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 435</strong>.</p>
                                                <p><strong>CSE-437 Pattern Recognition</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction to pattern recognition:
                                                    features, classifications, learning. Statistical methods, structural
                                                    methods and hybrid method. Applications to speech recognition,
                                                    remote sensing and biomedical area, Learning algorithms. Syntactic
                                                    approach: Introduction to pattern grammars and languages. parsing
                                                    techniques. Pattern recognition in computer aided design.</p>
                                                <ol>
                                                    <li>Pattern Recognition- <em>K. Koutroumbas</em></li>
                                                    <li>Pattern Recognition and Machine Learning- <em>Christopher M.
                                                            Bishop</em></li>
                                                    <li>Pattern Recognition for Neural Networks- <em>Brian Ripley</em>
                                                    </li>
                                                </ol>
                                                <p><strong>CSE-438 Pattern Recognition Lab</strong></p>
                                                <p><em>1.5</em><em> Credits&nbsp;</em></p>
                                                <p>Laboratory works based on <strong>CSE 437</strong>.</p>
                                                <p><strong>CSE-411 VLSI Design</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Design and analysis techniques for VLSI
                                                    circuits. Design of reliable VLSI circuits, noise considerations,
                                                    design and operation of large fan out and fan in circuits, clocking
                                                    methodologies, techniques for data path and data control design.
                                                    Simulation techniques. Parallel processing, special purpose
                                                    architectures in VLSI. VLSI layouts partitioning and placement
                                                    routing and wiring in VLSI. Reliability aspects of VLSI design.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Basic VLSI Design-<em>Douglas A Pucknell, Kamran Eshraghian</em>
                                                    </li>
                                                    <li>VLSI Technology – <em>S. M. Sze</em></li>
                                                    <li>Introduction to VLSI Systems&nbsp; –&nbsp; <em>C. A. Mead and L.
                                                            A. Conway</em></li>
                                                </ol>
                                                <p><strong>CSE-412 VLSI Design Lab</strong></p>
                                                <p><em>1.5 Credits&nbsp;&nbsp;&nbsp;&nbsp;</em></p>
                                                <p>Laboratory works based on <strong>CSE-411</strong>.</p>
                                                <p><strong>CSE-419 Graph Theory </strong><br>
                                                    <em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction, Fundamental concepts,
                                                    Trees, Spanning trees in graphs, Distance in graphs, Eulerian
                                                    graphs, Digraphs, Matching and factors, Cuts and connectivity,
                                                    k-connected graphs, Network flow problems, Graph coloring: vertex
                                                    coloring and edge coloring, Line graphs, Hamiltonian cycles, Planar
                                                    graphs, Perfect graphs.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <ol>
                                                        <li>Graph Theory and Its Applications<em> – Jonathan L.
                                                                Gross, </em><a
                                                                    href="http://www.google.com.bd/search?tbo=p&amp;tbm=bks&amp;q=inauthor:%22Jay+Yellen%22"><em>Jay
                                                                    Yellen</em></a></li>
                                                        <li>A Textbook of Graph Theory – <a
                                                                    href="http://www.google.com.bd/search?tbo=p&amp;tbm=bks&amp;q=inauthor:%22R.+Balakrishnan%22"><em>R.
                                                                    Balakrishnan</em></a><em>, </em><a
                                                                    href="http://www.google.com.bd/search?tbo=p&amp;tbm=bks&amp;q=inauthor:%22K.+Ranganathan%22"><em>K.
                                                                    Ranganathan</em></a></li>
                                                    </ol>
                                                </ol>
                                                <p><strong>CSE-420 Graph Theory Lab</strong><br>
                                                    <em>1.5 Credits</em><br>
                                                    Laboratory works based on <strong>CSE 419</strong>.</p>
                                                <p><strong>CSE-423 Computer System Performance Evaluations</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Review of system analysis, approaches to
                                                    system development, feasibility assessment, hardware and software
                                                    acquisition. Procurement, workload characterization, the
                                                    representation of measurement data, instrumentation: software
                                                    monitors, hardware monitors, capacity planning, bottleneck
                                                    detection, system and program tuning, simulation and analytical
                                                    models and their application, case studies.</p>
                                                <ol>
                                                    <li>Computer Systems Performance Evaluation and
                                                        Prediction<strong>–</strong> <em>Paul J. Fortier and Howard E.
                                                            Michel</em></li>
                                                    <li>The Art of Computer Systems Performance Analysis- <em>Jain</em>
                                                    </li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-424 Computer System Performance Evaluation
                                                        Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory based on <strong>CSE 423.</strong></p>
                                                <p><strong>ECE-421 Digital Communication</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction to modulation techniques:
                                                    Pulse modulation; pulse amplitude modulation, pulse width modulation
                                                    and pulse position modulation. Pulse code modulation; quantization,
                                                    Delta modulation. TDM, FDM, OOK, FSK, PSK, QPSK; Representation of
                                                    noise; threshold effects in PCM and FM. Probability of error for
                                                    pulse systems, concepts of channel coding and capacity. Asynchronous
                                                    and synchronous communications. Hardware interfaces, multiplexers,
                                                    concentrators and buffers. Communication medium, Fiber optics.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Digital Communication- <em>John G. Proakis</em></li>
                                                    <li>Digital Communication –<em>Bernard Sklar</em></li>
                                                    <li>Introduction to Digital Communication- <em>Roger L.
                                                            Peterson</em></li>
                                                    <li>Digital Communication-<em>Prof. N. Sarkar</em></li>
                                                    <li>Communication Systems-<em>Simon Haykin</em></li>
                                                </ol>
                                                <p><strong>ECE-422 Digital Communication Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>ECE 421</strong>.</p>
                                                <p><strong>CSE-407 Simulation and Modeling</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Simulation methods, model building,
                                                    random number generator, statistical analysis of results, validation
                                                    and verification techniques, Digital simulation of continuous
                                                    systems. Simulation and analytical methods, for analysis of computer
                                                    systems and practical problems in business and practice.
                                                    Introduction to the simulation packages.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>System Modeling and Simulation- V.P. Singh</li>
                                                    <li>System Design, Modeling, and Simulation using- <em>Claudius
                                                            Ptolemaeus</em></li>
                                                </ol>
                                                <p><strong>CSE-408 Simulation and Modeling Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 407</strong>.</p>
                                                <p><strong>CSE-453</strong><strong> Digital Image
                                                        Processing </strong><br>
                                                    <em>3 Credits</em></p>
                                                <p style="text-align: justify;">Image Processing: Image Fundamentals,
                                                    Image Enhancement: Background, Enhancement by Point-Processing,
                                                    Spatial Filtering, Enhancement in Frequency Domain, Color Image
                                                    Processing. Image Restoration: Degradation Model, Diagonalization of
                                                    Circulant and Block-Circulant Matrices, Algebraic Approach to
                                                    Restoration, Inverse Filtering, Geometric Transformation. Image
                                                    Segmentation: Detection of Discontinuities, Edge Linking and
                                                    Boundary Detection, Thresholding, Region-Oriented Segmentation, The
                                                    use of Motion in Segmentation. Image-Compression.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Digital Image Processing-<em>Rafael C. Gonzalez and Richard E.
                                                            Woods, Pearson Education Asia.</em></li>
                                                    <li>Non-Linear&nbsp; Digital Filter : Principles and Applications
                                                        –<em>I. Pitas and A. N. Venetsanopoulos, Kluwer Academic
                                                            Publications.</em></li>
                                                </ol>
                                                <p><strong><em>&nbsp;</em></strong><strong>CSE-454</strong><strong>
                                                        Digital Image Processing Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 453</strong>.</p>
                                                <p><strong>&nbsp;CSE-455 Wireless Sensor Networks</strong><br>
                                                    <em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction: applications; Localization
                                                    and tracking: tracking multiple objects; Medium Access Control:
                                                    S-MAC, IEEE 802.15.4 and ZigBee; Geographic and energy-aware
                                                    routing; Attribute-Based Routing: directed diffusion, rumor routing,
                                                    geographic hash tables; Infrastructure establishment: topology
                                                    control, clustering, time synchronization; Sensor tasking and
                                                    control: task-driven sensing, information-based sensor tasking,
                                                    joint routing and information aggregation; Sensor network databases:
                                                    challenges, querying the physical environment, in-network
                                                    aggregation, data indices and range queries, distributed
                                                    hierarchical aggregation; Sensor network platforms and tools: sensor
                                                    node hardware, sensor network programming challenges; Other
                                                    state-of-the-art related topics.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ul>
                                                    <li>Wireless Sensor Networks<em> – C. S. Raghavendra, Krishna M.
                                                            Sivalingam and TaiebZnati</em></li>
                                                    <li><em>Wireless Sensor Networks: An Information Processing Approach
                                                            (The Morgan Kaufmann Series in Networking)</em> – <a
                                                                href="http://www.amazon.com/Feng-Zhao/e/B001K6O2FW/ref=ntt_athr_dp_pel_1">Feng
                                                            Zhao</a>,<a
                                                                href="http://www.amazon.com/s/ref=ntt_athr_dp_sr_2?_encoding=UTF8&amp;field-author=Leonidas%20Guibas&amp;ie=UTF8&amp;search-alias=books&amp;sort=relevancerank">Leonidas
                                                            Guibas</a></li>
                                                </ul>
                                                <p><strong>CSE-456 Wireless Sensor Networks Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 455</strong>.</p>
                                                <p><strong>CSE-409 Computer Security and Cryptography</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Network Security Practice,
                                                    Authentication Digital certificates and Public key infrastructure,
                                                    X.500, Application, Electronic Mail Security, IP Security, Web
                                                    Security, System Security, Intruders, Malicious Software, Firewalls,
                                                    Threats and Attacks, Various Attack Techniques and Prevention;
                                                    <strong>Cryptography: </strong>Overview, Terminology, Substitution
                                                    and Transposition ciphers, One time pads, Symmetric Ciphers,
                                                    classical Encryption Technique, Block Ciphers and the Data
                                                    Encryption Standard, Introduction to Finite Fields, Advanced
                                                    Encryption Standard, Contemporary, Symmetric Ciphers Confidentiality
                                                    Using Symmetric Encryption, Public Key Encryption, One way functions
                                                    and Hash Functions, Introduction to Number Theory, Prime number
                                                    generation, Public-Key Cryptography and RSA, Key Management, Key
                                                    exchange algorithm; Other Public-key Cryptosystems, Message
                                                    Authentication and Hash Functions, Hash Algorithms, MD5, SHA,
                                                    Digital Signatures and Authentication Protocols, DSA, Kerberos.</p>
                                                <p>&nbsp;</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Applied Cryptography, John Wiley &amp; Sons, Inc.- Bruce
                                                        Schneier
                                                    </li>
                                                    <li>Computer Security; ISBN: 0-471-97844-2; Edition: 1999;
                                                        Publisher: John Wiley and Son Ltd.- Dieter Gollmann
                                                    </li>
                                                    <li>Fundamentals of Computer Security Technology; ISBN:
                                                        0-13-108929-3; Publisher: Prentice Hall.- Edward Amoroso
                                                    </li>
                                                    <li>Cryptography and Network Security Principles and Practice,
                                                        Prentice Hall, New Jersey, 1999.- W. Stallings
                                                    </li>
                                                    <li>Differential Crypt analysis of the data encryption standard,
                                                        Springer Verlag, 1993.- E. Biham and A. Shamir
                                                    </li>
                                                    <li>Cryptography and data security, Addison Wesley, 1982.- D.
                                                        Denning
                                                    </li>
                                                    <li>A course on Number theory and Cryptography, Springer Verlag,
                                                        1994.- N. Kobliz
                                                    </li>
                                                </ol>
                                                <p>&nbsp;</p>
                                                <p><strong>CSE-410 Computer Security and Cryptography Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 409</strong>.</p>
                                                <p><strong>CSE-457 Bio-Informatics</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Cell concept:</strong>
                                                    Structural organization of plant and animal cells, nucleus, cell
                                                    membrane and cell wall. <strong>Cell division:</strong> Introducing
                                                    chromosome, Mitosis, Meiosis and production of haploid/diploid cell.
                                                    <strong>Nucleic acids:</strong> Structure and properties of
                                                    different forms of DNA and RNA; DNA replication.
                                                    <strong>Proteins:</strong> Structure and classification, Central
                                                    dogma of molecular biology. <strong>Genetic code:</strong> A brief
                                                    account. <strong>Genetics:</strong> Mendel’s laws of inheritance,
                                                    Organization of genetic material of prokaryotes and eukaryotes,
                                                    C-Value paradox, repetitive DNA, structure of chromatin –
                                                    euchromatin and heterochromatin, chromosome organization and banding
                                                    patterns, structure of gene – intron, exon and their relationships,
                                                    overlapping gene, regulatory sequence (<em>lac </em>operon),
                                                    Molecular mechanism of general recombination, gene conversion,
                                                    Evolution and types of mutation, molecular mechanisms of mutation,
                                                    site-directed mutagenesis, transposons in mutation. <strong>Introduction
                                                        to Bioinformatics:</strong> Definition and History of
                                                    Bioinformatics, Human Genome Project, Internet and Bioinformatics,
                                                    Applications of Bioinformatics&nbsp; <strong>Sequence
                                                        alignment:</strong> Dynamic programming. Global <em>versus</em>
                                                    local. Scoring matrices. The Blast family of programs. Significance
                                                    of alignments, Aligning more than two sequences. Genomes alignment.
                                                    Structure-based alignment. <strong>Hidden Markov Models in
                                                        Bioinformatics:</strong> Definition and applications in
                                                    Bioinformatics. Examples of the Viterbi, the Forward and the
                                                    Backward algorithms. Parameter estimation for HMMs.
                                                    <strong>Trees:</strong> The Phylogeny problem. Distance methods,
                                                    parsimony, bootstrap. Stationary Markov processes. Rate matrices.
                                                    Maximum likelihood. Felsenstein’s post-order traversal. <strong>Finding
                                                        regulatory elements:</strong> Finding regulatory elements in
                                                    aligned and unaligned sequences. Gibbs sampling. <strong>Introduction
                                                        to microarray data analysis:</strong> Steady state and time
                                                    series microarray data. From microarray data to biological networks.
                                                    Identifying regulatory elements using microarray data. <strong>Pi
                                                        calculus:</strong> Description of biological networks;
                                                    stochastic Pi calculus, Gillespie algorithm.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Introduction to Bioinformatics Algorithms –<em>Jones and Pavel
                                                            A. Pevzner</em></li>
                                                    <li>Introduction to Bioinformatics – <em>Stephen A. Krawetz, David
                                                            D. Womble</em></li>
                                                    <li>Introduction to Bioinformatics – <em>Arthur M. Lesk</em></li>
                                                </ol>
                                                <p><strong>CSE-458 Bio-Informatics Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE-457</strong>.</p>
                                                <p><strong>CSE-461 Neural Networks</strong><br>
                                                    <em>3 Credits</em></p>
                                                <p style="text-align: justify;">Fundamentals of Neural Networks; Back
                                                    propagation and related training algorithms; Hebbian learning;
                                                    Cohonen-Grossberg learning; The BAM and the Hopfield Memory;
                                                    Simulated Annealing; Different types of Neural Networks: Counter
                                                    propagation, Probabilistic, Radial Basis Function, Generalized
                                                    Regression, etc; Adaptive Resonance Theory; Dynamic Systems and
                                                    neural Control; The Boltzmann Machine; Self-organizing Maps;
                                                    Spatiotemporal Pattern Classification, The Neocognition; Practical
                                                    Aspects of Neural Networks.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>An Introduction to Neural Networks<em> – Prof. Leslie Smith</em>
                                                    </li>
                                                    <li>Fundamentals of Artificial Neural Networks<em> – Mohamad H.
                                                            Hassoun</em></li>
                                                </ol>
                                                <p><strong>CSE-462 Neural Networks Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 461</strong>.</p>
                                                <p><strong>CSE-463 Machine Learning</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction: </strong>Definition
                                                    of learning systems. Goals and applications of machine learning.
                                                    Aspects of developing a learning system- training data, concept
                                                    representation, function approximation.&nbsp;&nbsp; <strong>Inductive
                                                        Classification: </strong>The concept learning task. Concept
                                                    learning as search through a hypothesis space. General-to-specific
                                                    ordering of hypotheses. Finding maximally specific hypotheses.
                                                    Version spaces and the candidate elimination algorithm. Learning
                                                    conjunctive concepts. The importance of inductive bias. <strong>Decision
                                                        Tree Learning: </strong>Representing concepts as decision trees.
                                                    Recursive induction of decision trees. Picking the best splitting
                                                    attribute: entropy and information gain. Searching for simple trees
                                                    and computational complexity. Occam’s razor. Overfitting, noisy
                                                    data, and pruning. <strong>Experimental Evaluation of Learning
                                                        Algorithms: </strong>Measuring the accuracy of learned
                                                    hypotheses. Comparing learning algorithms- cross-validation,
                                                    learning curves, and statistical hypothesis testing. <strong>Computational
                                                        Learning Theory: </strong>Models of learnability- learning in
                                                    the limit; probably approximately correct (PAC) learning. Sample
                                                    complexity- quantifying the number of examples needed to PAC learn.
                                                    Computational complexity of training. Sample complexity for finite
                                                    hypothesis spaces. PAC results for learning conjunctions, kDNF, and
                                                    kCNF. Sample complexity for infinite hypothesis spaces,
                                                    Vapnik-Chervonenkis dimension. <strong>Rule Learning, Propositional
                                                        and First-Order:</strong> Translating decision trees into rules.
                                                    Heuristic rule induction using separate and conquer and information
                                                    gain. First-order Horn-clause induction (Inductive Logic
                                                    Programming) and Foil. Learning recursive rules. Inverse resolution,
                                                    Golem, and Progol. <strong>Artificial Neural Networks: </strong>Neurons
                                                    and biological motivation. Linear threshold units. Perceptrons:
                                                    representational limitation and gradient descent training.
                                                    Multilayer networks and backpropagation. Hidden layers and
                                                    constructing intermediate, distributed representations. Overfitting,
                                                    learning network structure, recurrent networks. <strong>Support
                                                        Vector Machines: </strong>Maximum margin linear separators.
                                                    Quadractic programming solution to finding maximum margin
                                                    separators. Kernels for learning non-linear functions. <strong>Bayesian
                                                        Learning: </strong>Probability theory and Bayes rule. Naive
                                                    Bayes learning algorithm. Parameter smoothing. Generative vs.
                                                    discriminative training. Logisitic regression. Bayes nets and Markov
                                                    nets for representing dependencies. <strong>Instance-Based
                                                        Learning: </strong>Constructing explicit generalizations versus
                                                    comparing to past specific examples. k-Nearest-neighbor algorithm.
                                                    Case-based learning. <strong>Text Classification: </strong>Bag of
                                                    words representation. Vector space model and cosine similarity.
                                                    Relevance feedback and Rocchio algorithm. Versions of nearest
                                                    neighbor and Naive Bayes for text. <strong>Clustering and
                                                        Unsupervised Learning: </strong>Learning from unclassified data.
                                                    Clustering. Hierarchical Aglomerative Clustering. k-means
                                                    partitional clustering. Expectation maximization (EM) for soft
                                                    clustering. Semi-supervised learning with EM using labeled and
                                                    unlabled data.</p>
                                                <p><em>&nbsp;</em></p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Artificial Intelligence: a modern approach (2nd edition), <em>Russell,
                                                            S. and P. Norvig, Prentice Hall, 2003</em></li>
                                                    <li>Introduction to Machine Learning – Ethem ALPAYDIN</li>
                                                    <li>Machine Learning – <em>Tom Mitchell, McGraw Hill</em></li>
                                                    <li>Introduction to machine learning (2nd edition), <em>Alpaydin,
                                                            Ethem, MIT Press, 2010</em></li>
                                                    <li>An Introduction to Support Vector Machines and Other
                                                        Kernel-based Learning Methods, <em>NelloCristianini&nbsp;and&nbsp;John
                                                            Shawe-Taylor, Cambridge University Press</em></li>
                                                </ol>
                                                <p><strong>CSE-464 Machine Learning Lab</strong></p>
                                                <p><em>1.5 Credits</em>.</p>
                                                <p style="text-align: justify;">Students should learn the methods for
                                                    extracting rules or learning from data, and get the necessary
                                                    mathematical background to understand how the methods work and how
                                                    to get the best performance from them. To achieve these goals
                                                    student should learn the following algorithms in the lab: K Nearest
                                                    Neighbor Classifier, Decision Trees, Model Selection and Empirical
                                                    Methodologies, Linear Classifiers: Perception and SVM, Naive Bayes
                                                    Classifier,Basics of Clustering Analysis, K-mean Clustering
                                                    Algorithm, Hierarchical Clustering Algorithm. Upon completion of the
                                                    course, the student should be able to perform the followings: a.
                                                    Evaluate whether a learning system is required to address a
                                                    particular problem. b. Understand how to use data for learning,
                                                    model selection, and testing to achieve the goals.c. Understand
                                                    generally the relationship between model complexity and model
                                                    performance, and be able to use this to design a strategy to improve
                                                    an existing system.<br>
                                                    d. Understand the advantages and disadvantages of the learning
                                                    systems studied in the course, and decide which learning system is
                                                </p>
                                                <p style="text-align: justify;">appropriate for a particular
                                                    application. e. Make a naive Bayes classifier and interpret the
                                                    results as probabilities. f. Be able to apply clustering algorithms
                                                    to simple data sets for clustering analysis.</p>
                                                <p><strong>CSE-465 Contemporary Course on CSE</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p>The course and course contents will be proposed from the department
                                                    which will be more relevant with respect to present CSE
                                                    technology.</p>
                                                <p><strong>CSE-466 Contemporary Course Lab on CSE</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE 465</strong>.</p>
                                                <p><strong>CSE-467 Advanced Database Systems</strong><br>
                                                    <em>3 Credits</em></p>
                                                <p style="text-align: justify;"><strong>Introduction : </strong>Object
                                                    oriented Database, Data Model, Design, Languages; <strong>Object
                                                        Relational Database:</strong> Complex data types, Querying with
                                                    complex data types, Design; <strong>Distributed Database:</strong>
                                                    Levels of distribution transparency, Translation of global queries
                                                    to fragment queries, Optimization of access strategies, Management
                                                    of distributed transactions, Concurrency control, reliability,
                                                    Administration<strong>; Parallel Database:</strong> Different types
                                                    of parallelism, Design of parallel database; <strong>Multimedia
                                                        Database Systems:</strong> Basic concepts, Design, Optimization
                                                    of access strategies, Management of Multimedia Database Systems,
                                                    Reliability; <strong>Database Wire-housing/Data mining:</strong>
                                                    Basic concepts and algorithms.</p>
                                                <p><strong>Books Recommended:</strong></p>
                                                <ol>
                                                    <li>Oracle Advanced PL/SQL Programming with CD-ROM<em>– Scott
                                                            Urman.</em></li>
                                                </ol>
                                                <p><strong>CSE-468 Advanced Database System Lab</strong></p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Laboratory works based on <strong>CSE-467</strong>.</p>
                                                <p><strong>CSE 469 Natural Language Processing</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p style="text-align: justify;">Introduction; Word Modeling: Automata
                                                    and Linguistics, Statistical Approaches and Part of Speech Tagging;
                                                    Linguistics and Grammars; Parsing Algorithms; Parsing Algorithms and
                                                    the Lexicon; Semantic; Feature Parsing; Tree Banks and Probabilistic
                                                    Parsing; Machine Translation; Evolutionary Models of Language
                                                    Learning and Origins.</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Speech and Language Processing –<em>Jurafsky, D. and Martin, J.
                                                            H</em></li>
                                                    <li>Foundations of Statistical Natural Language Pr<em>–Manning, C.
                                                            D. and H. Schütze</em></li>
                                                    <li>Computational Complexity and Natural Language– <em>Barton, E.,
                                                            Berwick, R.,&nbsp;and Ristad, E</em></li>
                                                    <li>Natural Language Understanding -Allen, J.</li>
                                                    <li>Computational Models of Discourse–<em>Brady, J.,&nbsp;and
                                                            Berwick, R.</em></li>
                                                </ol>
                                                <p><strong>CSE-470 Natural Language Processing Lab</strong></p>
                                                <p>&nbsp;</p>
                                                <p><em>1.5 Credits</em></p>
                                                <p>Processing of words, Phrase structure parsing, Semantic
                                                    Interpretation with Phrase Structure Grammars</p>
                                                <p><strong>Books Recommended</strong>:</p>
                                                <ol>
                                                    <li>Speech and Language Processing –<em>Jurafsky, D. and Martin, J.
                                                            H</em></li>
                                                    <li>Foundations of Statistical Natural Language Pr<em>–Manning, C.
                                                            D. and H. Schütze</em></li>
                                                    <li>Computational Complexity and Natural Language– <em>Barton, E.,
                                                            Berwick, R.,&nbsp;and Ristad, E</em></li>
                                                    <li>Natural Language Understanding -Allen, J.</li>
                                                    <li>Computational Models of Discourse–<em>Brady, J.,&nbsp;and
                                                            Berwick, R.</em></li>
                                                </ol>
                                                <p><strong>&nbsp;CSE-400 Project / Thesis</strong></p>
                                                <p><em>3 Credits</em></p>
                                                <p>Study of problems in the field of Computer Science and Engineering.
                                                    This course will be initiated in the 3<sup>rd</sup> year or early in
                                                    4<sup>th</sup> year.</p>
                                                <p><strong>CSE-402 Comprehensive Viva Voce</strong></p>
                                                <p><em>2 Credits</em></p>

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



