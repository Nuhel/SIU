@extends('layout.app')

<title>@yield('pageTitle') SIU | Electronics lab</title>

@push('css')
    <link rel="stylesheet" href="{{asset('siu/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/slick-theme.css')}}">
@endpush


@section('content')
<div class="big_screen_slider">

                <section class="Caroslider">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner accomdn" role="listbox">

                            <div class="item">
                                <img src="/siu/img/lab/lab_1.jpg" alt="slider2" width="100%">
                                <div class="carousel-caption">
                                    Students Working In the Lab.
                                </div>
                            </div>

                            <div class="item active left">
                                <img src="/siu/img/lab/lab_2.jpg" alt="image" width="100%" height="400">
                                <div class="carousel-caption">
                                    Students Working In the Lab.
                                </div>
                            </div>
                            <div class="item next left">
                                <img src="/siu/img/lab/lab_3.jpg" alt="image" width="100%" height="400">
                                <div class="carousel-caption">
                                    Students Working In the Lab.
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
                                    <a href="#equipments" data-toggle="tab">
                                        <i class="fas fa-cog"></i>
                                        <div>
                                            <h6>Equipments</h6>
                                        </div>
                                    </a>
                                </li>
                                <li id="research-li" class="even">
                                    <a data-scroll href="#lab_staff">
                                        <i class="fas fa-file-alt"></i>
                                        <div>
                                            <h6>Lab Staff</h6>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div id="home-tab-content" class="tab-content custom_tab_content">
                                <div class="tab-pane  active" id="overview">
                                    <h4>Electronics Lab</h4>
                                    <p>The Electronics lab is enriched with latest equipment that helps the students gain practical knowledge and experience in the fields of Analog and Digital Circuit Design, Instrumentation and Control,
                                        Embedded Systems, VLSI Design, Microwave Technology, Digital Signal Processing, Digital Electronics and Microprocessors
                                    </p>
                                </div>
                                <div class="tab-pane " id="equipments">
                                    <h4>Equipments</h4>
                                    <li>Providing an excellent </li>
                                    <li>Providing professionally </li>
                                    <li>Providing financial grants </li>
                                    <li>Imparting education with ethic</li>
                                    <li>Stimulating the search for knowledge</li>
                                    <li>Encouraging inquiry and conversation a</li>
                                    <li>Promoting opportunity for students</li>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <span id="bg-tab"></span>
            </div>



            <div class="container" id="lab_staff">
                <div class="card_head_line">
                    <h4><span>Lab Satff</span></h4>
                </div>
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card text-center self_style faculty_card">
                            <div class="faculty_member faculty_self_style">
                                <div class="image_box">
                                    <div class="ovelay overly_tech"></div>
                                    <img src="{{asset('siu/img/lab/lab_staff.jpg')}}" alt="">
                                    <div class="teachers_social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="personal_info">
                                            <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:">bangl@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_desc">
                                    <h3>Md.Rahim</h3>
                                    <h5>Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center self_style faculty_card">
                            <div class="faculty_member faculty_self_style">
                                <div class="image_box">
                                    <div class="ovelay overly_tech"></div>
                                    <img src="{{asset('siu/img/lab/lab_staff.jpg')}}" alt="">
                                    <div class="teachers_social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="personal_info">
                                            <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:">bangl@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_desc">
                                    <h3>Md.Rahim</h3>
                                    <h5>Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center self_style faculty_card">
                            <div class="faculty_member faculty_self_style">
                                <div class="image_box">
                                    <div class="ovelay overly_tech"></div>
                                    <img src="{{asset('siu/img/lab/lab_staff.jpg')}}" alt="">
                                    <div class="teachers_social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="personal_info">
                                            <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:">bangl@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_desc">
                                    <h3>Md.Rahim</h3>
                                    <h5>Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center self_style faculty_card">
                            <div class="faculty_member faculty_self_style">
                                <div class="image_box">
                                    <div class="ovelay overly_tech"></div>
                                    <img src="{{asset('siu/img/lab/lab_staff.jpg')}}" alt="">
                                    <div class="teachers_social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="personal_info">
                                            <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:">bangl@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_desc">
                                    <h3>Md.Rahim</h3>
                                    <h5>Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center self_style faculty_card">
                            <div class="faculty_member faculty_self_style">
                                <div class="image_box">
                                    <div class="ovelay overly_tech"></div>
                                    <img src="{{asset('siu/img/lab/lab_staff.jpg')}}" alt="">
                                    <div class="teachers_social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="personal_info">
                                            <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:">bangl@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_desc">
                                    <h3>Md.Rahim</h3>
                                    <h5>Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card text-center self_style faculty_card">
                            <div class="faculty_member faculty_self_style">
                                <div class="image_box">
                                    <div class="ovelay overly_tech"></div>
                                    <img src="{{asset('siu/img/lab/lab_staff.jpg')}}" alt="">
                                    <div class="teachers_social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <div class="personal_info">
                                            <p><i class="fas fa-phone"></i><a href="tel:">+8801788657478</a></p>
                                            <p><i class="fas fa-envelope"></i><a href="mailto:">bangl@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher_desc">
                                    <h3>Md.Rahim</h3>
                                    <h5>Member</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customNavigation" style="margin-bottom: 15px;">
                    <a class="prev" style="cursor: pointer"><i class="fas fa-chevron-circle-left"></i></a>
                    <a class="next" style="cursor: pointer"><i class="fas fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
      </div>
@endsection

@push('js')

    <script>

        $(document).ready(function () {

            var owl = $("#owl-demo");
            $(".next").click(function () {
                owl.trigger('owl.next');
            });
            $(".prev").click(function () {
                owl.trigger('owl.prev');
            });
            $(".play").click(function () {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            });
            $(".stop").click(function () {
                owl.trigger('owl.stop');
            });
        });
    </script>

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
