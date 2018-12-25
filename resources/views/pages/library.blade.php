@extends('layout.app')

<title>@yield('pageTitle') SIU | Library</title>



@section('content')

    <div class="big_screen_slider">
                    <section class="Caroslider">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner accomdn" role="listbox">

                                <div class="item">
                                    <img src="/siu/img/library/lib_2.jpg" alt="slider2" width="100%">
                                    <div class="carousel-caption">
                                        SIU Library.
                                    </div>
                                </div>

                                <div class="item active left">
                                    <img src="/siu/img/library/lib_3.jpg" alt="image" width="100%" height="400">
                                    <div class="carousel-caption">
                                        SIU Library.
                                    </div>
                                </div>
                                <div class="item next left">
                                    <img src="/siu/img/library/lib_4.jpg" alt="image" width="100%" height="400">
                                    <div class="carousel-caption">
                                        SIU Library.
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
        <div class="container">
            <div class="card mr_b_50 mr_t_50">
                <div class="custom_card_syllabus">
                    <div class="inner_main">
                        <div class="section_head">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="chairman_text">
                                        <p>SIU has a separate large building used as central library which can accommodate more than three hundred students at a time. There is a separate chamber where about 30 teachers can study. The number of books in the library are about
                                            12 thousand which is beings continually increased. Also, the library is enriched by hundreds of scholarly journals, magazines, and CDs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <div class="card mr_t_30">
                    <div class="card_head_line">
                        <h4><span>Library Staff</span></h4>
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
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
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
@endpush