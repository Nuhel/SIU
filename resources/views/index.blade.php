@extends('layout.app')



@section('content')
    <!-- ====================jQUERY SLIDER SECTION STARTED=============== -->

    <div class="big_screen_slider">

    @include('front_page.slider')





        <div class="slider_main_raised">
            <!-- ================ADMISSION GOING ON SECTION STARTED============== -->
        {{--@include('front_page.admission_going_on')--}}
        <!-- ================ADMISSION GOING ON SECTION END============== -->


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
                                    </li><li id="research-li" class="even">
                                        <a href="#research" data-toggle="tab">
                                            <i class="fas fa-globe"></i>
                                            <div>
                                                <h6>Mission</h6>
                                            </div>
                                        </a>
                                    </li><li id="publication-li" class="odd">
                                        <a href="#publications" data-toggle="tab">
                                            <i class="fas fa-eye"></i>
                                            <div>
                                                <h6>Vision</h6>
                                            </div>
                                        </a>
                                    </li><li id="scholarship-li" class="even">
                                        <a href="#scholarships" data-toggle="tab">
                                            <i class="fas fa-school"></i>
                                            <div>
                                                <h6>Schools</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li id="library-li" class="even">
                                        <a href="#library" data-toggle="tab">
                                            <i class="fas fa-procedures"></i>
                                            <div>
                                                <h6>Accommodation</h6>
                                            </div>
                                        </a>
                                    </li><li id="culture-li" class="odd last-child">
                                        <a href="#culture" data-toggle="tab">
                                            <i class="fas fa-book-reader"></i>
                                            <div>
                                                <h6>Library</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">

                                <div id="home-tab-content" class="tab-content custom_tab_content">
                                    <div class="tab-pane  active" id="overview">
                                        <h4>Welcome To Sylhet International University</h4>
                                        <p>The principal aim of the Sylhet International University is to provide high quality education at undergraduate and postgraduate levels relevant to the needs of a dynamic society.
                                            The courses and curricula are so designed as to enable a student to enter into the world of work or pursue higher academic and professional goals with a sound academic foundation. The medium of instructions in Sylhet International University is English.
                                            The academic goal of the university is not just to make the students pass the examination and get the degree but to equip them with the means to become productive members of the community and continue the practice of lifelong learning.
                                            </p>
                                        <a class="overview_readmore" href="">Discover More <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="tab-pane " id="research">
                                        <h4>Mission</h4>
                                        <p>Sylhet International University is achieving its mission by –
                                               <li>Providing an excellent teaching-learning environment</li>
                                               <li>Providing professionally accomplished faculty possessing an appropriate balance of academic qualifications</li>
                                               <li>Providing financial grants to the poor but meritorious students</li>
                                               <li>Imparting education with ethical concern and social responsibility</li>
                                               <li>Stimulating the search for knowledge</li>
                                               <li>Encouraging inquiry and conversation across the traditional academic disciplines</li>
                                               <li>Promoting opportunity for students to develop as creative independent thinkers and leaders</li></p>

                                    </div>
                                    <div class="tab-pane " id="publications">
                                        <h4>Vision</h4>
                                        <p>The vision of Sylhet International University is to infuse into its students a passion for learning that will help them grow in their professional lives, and thereby contributing to building a better society of the 21st century.</p>
                                    </div>
                                    <div class="tab-pane " id="scholarships">
                                        <h4>Schools</h4>
                                        <p>Minus voluptatibus quas maiores porttitor dis ut est aute! Fringilla maecenas malesuada, eiusmod soluta tenetur perferendis eiusmod nostrud! Potenti aliqua? Aut luctus, rhoncus aut? Nobis suscipit, ullam eligendi semper rhoncus urna quam rerum dictumst habitant, nihil ullamcorper ante nisi fugiat tempor fusce nulla vero eiusmod,
                                            vel praesent? Vero! Vestibulum itaque, fames turpis aptent nihil, corporis, incididunt, euismod velit atque eaque.</p>
                                        <a class="overview_readmore" href="">Discover More <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="tab-pane " id="library">
                                        <h4>Accommodation</h4>
                                        <p>SIU has female hostels in three separate buildings just adjacent to the campus where about 250 female students can be accommodated. Supervised by one provost and two assistant provosts, these hostels are safe, comfortable and quiet.</p>

                                    </div>
                                    <div class="tab-pane " id="culture">
                                        <h4>Library</h4>
                                        <p>SIU has a separate large building used as central library which can accommodate more than three hundred students at a time. There is a separate chamber where about 30 teachers can study. The number of books in the library are about 12 thousand which is beings continually increased.
                                            Also, the library is enriched by hundreds of scholarly journals, magazines, and CDs.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <span id="bg-tab"></span>
                </div>
            </div>



            <!-- ==================NOTICE BOARD SECTION STARTED================ -->


                <div class="container">
                    <div class="card padd_left_right_30 show_btn_1">

                        <div class="section_head scnd_hm_head">
                            <h3 style="color: #00a0b6;"><strong>Notices</strong></h3>
                            <div class="facilities_line scnd_hm_line1"></div>
                            <div class="facitilies_line_inner campus scnd_hm_line2"></div>
                        </div>
                        <div id="owl-demo_notice" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="example-1 card1">
                                    <div class="wrapper1">
                                        <div class="date1">
                                            <span class="day">15</span>
                                            <span class="month">Nov</span>
                                            <span class="year">2019</span>
                                        </div>
                                        <div class="data">
                                            <div class="content">
                                                <span class="author">NOVEMBER 11TH, 2018</span>
                                                <label for="show-menu" class="menu-button"><a href="#">View Notice</a></label>
                                                <h3 class="title"><a href="#">Admission Test Results, Spring 2019</a></h3>
                                                <p class="text">Expedita dolor, harum convallis ornare ea quo, fringilla
                                                    corporis accumsan, voluptas irure dignissimos ac! Interdum, beatae,
                                                    hendrerit itaque augue wisi libero aenean, incidunt explicabo deleniti
                                                    dapibus earum voluptates tempore? Malesuada, porro accumsan nesciunt
                                                    aspernatur parturient laboriosam erat optio sed nostrum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-buttons hide_next_prev_1" style="display: none">
                            <div class=" prev_btn"><i class="fas fa-chevron-circle-left"></i></div>
                            <div class=" next_btn"><i class="fas fa-chevron-circle-right"></i></div>
                        </div>
                        <div class="notice_header_p  mr_b_15">
                            <a href="/all_events"><strong>View All</strong><i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>




            <div class="container">
                <div class="card padd_left_right_30 show_btn_2">

                    <div class="section_head scnd_hm_head">
                        <h3 style="color: #00a0b6;"><strong>News & Events</strong></h3>
                        <div class="facilities_line scnd_hm_line1"></div>
                        <div class="facitilies_line_inner campus scnd_hm_line2"></div>
                    </div>
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/fancycrave-.jpg')}}" alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/shutterstoc.jpg')}}" alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/fancycrave-.jpg')}}" alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/shutterstock_218235004-700x450.jpg')}}"
                                             alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/shutterstoc.jpg')}}" alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/shutterstoc.jpg')}}" alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/shutterstock_218235004-700x450.jpg')}}"
                                             alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" style="color: #3D3C3C">
                                <div class="event_card_container">
                                    <div class="event_img">
                                        <img class="img-responsive"
                                             src="{{asset('siu/img/all events img/fancycrave-.jpg')}}" alt="">
                                    </div>
                                    <div class="und_none event_text">
                                        <div class="row">
                                            <div class="col-md-2 col-xs-2">
                                                <div class="events">
                                                    <span class="date">12</span>
                                                    <span class="day">JAN</span>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="text_wrapper">
                                                    <div class="event_content">
                                                        <a href="#">Fintech & Key Investment</a>
                                                    </div>
                                                    <div class="event_icon">
                                                        <span class="clock_ico"><i class="far fa-clock"></i> 7:00 am - 11:30 pm</span>
                                                        <span class="location_ico"><i class="fas fa-map-marker-alt"></i> Kingster Grand Hall</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="owl-buttons hide_next_prev_2">
                        <div class="owl-prev"><i class="fas fa-chevron-circle-left"></i></div>
                        <div class="owl-next"><i class="fas fa-chevron-circle-right"></i></div>
                    </div>
                    <div class="notice_header_p  mr_b_15">
                        <a href="/all_events"><strong>View All</strong><i class="fas fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>




        {{--=========================================--}}





        <!-- ====================RESIDENTIAL CAMPUS===================== -->
        @include('front_page.residentaial_part')
        <!-- ====================RESIDENTIAL CAMPUS END===================== -->



            <button class="scroll-top scroll-to-target open" data-target="html">
                <span class="fa fa-angle-up"></span>
            </button>





        <!-- ==================NOTICE BOARD SECTION STARTED================ -->


            <!-- ====================CAMPUS FACILITIES====================== -->
        @include('front_page.campus_facilities')
        <!-- ====================CAMPUS FACILITIES END====================== -->


            <!--===============MESSAGE FROM THE FOUNDER AND CHAIRPERSON=============== -->
        @include('front_page.chairperson')
        <!--===============MESSAGE FROM THE FOUNDER AND CHAIRPERSON END=============== -->


            <!--===============MESSAGE FROM THE FOUNDER AND CHANCELLOR=============== -->
        @include('front_page.vc')
        <!--===============MESSAGE FROM THE FOUNDER AND CHANCELLOR END=============== -->

        </div>
    </div>

    <!-- ============VIDEO SECTION============ -->
    @include('front_page.youtube_video')
    <!-- ============VIDEO SECTION END============ -->
@endsection