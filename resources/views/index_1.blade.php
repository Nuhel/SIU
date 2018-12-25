@extends('layout.app')



@section('content')
        <!-- ====================jQUERY SLIDER SECTION STARTED=============== -->

<div class="big_screen_slider">

        @include('front_page.slider')

        <!-- ====================jQUERY SLIDER SECTION END=============== -->
        <div class="slider_main_raised">
            <!-- ================ADMISSION GOING ON SECTION STARTED============== -->
        {{--@include('front_page.admission_going_on')--}}
        <!-- ================ADMISSION GOING ON SECTION END============== -->


            <!-- ==================NOTICE BOARD SECTION STARTED================ -->
        @include('front_page.notice_board')
        <!-- ==================NOTICE BOARD SECTION STARTED================ -->



            <!-- ====================RESIDENTIAL CAMPUS===================== -->
        @include('front_page.residentaial_part')
        <!-- ====================RESIDENTIAL CAMPUS END===================== -->



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