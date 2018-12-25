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
                                        <h4>Department Of Law</h4>
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
                                                    <td>HUM-101</td>
                                                    <td>English 1: (Oral and Written Communication Skills)</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>HUM-111</td>
                                                    <td>Bangladesh Studies: History, Soiety and Economy Part 1:History and Society of Bangladesh (2 Credits) Part II: Economy of Bangladesh (2 Credits)</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-101</td>
                                                    <td>Jurisprudence</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-103</td>
                                                    <td>Law of Contract</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CSE-100</td>
                                                    <td>Computer Skills</td>
                                                    <td style="text-align: center;">3</td>
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
                                                    <td>English II: (Language Composition and Comprehension)</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>ECN-101</td>
                                                    <td>Principles of Economics</td>
                                                    <td style="text-align: center;">2</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-105</td>
                                                    <td>Legal History of Bangladesh</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-107</td>
                                                    <td>Law of Tort</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-109</td>
                                                    <td>Muslim Law</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-100</td>
                                                    <td>Comprehansive Viva Voce</td>
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
                                                    <td>LAW-201</td>
                                                    <td>Equity and Trust Act</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-203</td>
                                                    <td>Penel Code-1</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-205</td>
                                                    <td>Constitutional Law Of Bangladesh</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-207</td>
                                                    <td>Constitutional Law Of UK and USA</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CSE-209</td>
                                                    <td>Government and Politics</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-209</td>
                                                    <td>Goverment and Politics</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>18</b></td>
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
                                                    <td>LAW-211</td>
                                                    <td>Transfer of Property Act</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-213</td>
                                                    <td>Hindu and Roman Law</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-215</td>
                                                    <td>Panel Code-II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-217</td>
                                                    <td>Law relation to protection of women and children</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-219</td>
                                                    <td>Intellectual Property Law</td>
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
                                                    <td>LAW-301</td>
                                                    <td>Land Laws of Bangladesh</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-303</td>
                                                    <td>Law of Taxation</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-305</td>
                                                    <td>Company Law &amp; Partnership Act</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-307</td>
                                                    <td>Criminal Procedure Code-1</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-309</td>
                                                    <td>Law of Evidence-1</td>
                                                    <td style="text-align: center;">3</td>
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
                                                    <td>LAW-311</td>
                                                    <td>Criminal Procedure Code-II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-313</td>
                                                    <td>Administrative Law</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-315</td>
                                                    <td>Labor and Industrial Law</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>LAW-317</td>
                                                    <td>Law of Evidence-II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>
                                                <tr class="tr_head">
                                                    <td>LAW-319</td>
                                                    <td>Mercantile Law</td>
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
                                                    <td>LAW-401</td>
                                                    <td>Civil Procedure Code-1</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-403</td>
                                                    <td>Criminology</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-405</td>
                                                    <td>Specific Relief Act, Registration Act and Public Demand Recovery Act</td>
                                                    <td style="text-align: center;">4</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-407</td>
                                                    <td>Criminal and Civil Drafting</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-409</td>
                                                    <td>Public International Law 1</td>
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
                                                    <td>LAW-411</td>
                                                    <td>Public International Law II</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-413</td>
                                                    <td>Comparative Law</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-415</td>
                                                    <td>Civil Procedure Code-II &amp; Law of Limitation</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-417</td>
                                                    <td>Environment Law</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-400</td>
                                                    <td>Project and Court</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-402</td>
                                                    <td>Viva Voce</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-400</td>
                                                    <td>Comprehansive Viva Voce`</td>
                                                    <td style="text-align: center;">2</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>CVV-401</td>
                                                    <td>Project Viva</td>
                                                    <td style="text-align: center;">2</td>
                                                </tr>

                                                <tr class="tr_head">
                                                    <td>LAW-419</td>
                                                    <td>Administrative Law</td>
                                                    <td style="text-align: center;">3</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2"><b>Total</b></td>
                                                    <td style="text-align: center;" colspan="2"><b>25</b></td>
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



