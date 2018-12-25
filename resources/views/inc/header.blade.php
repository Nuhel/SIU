<!doctype html>
<html lang="en">

<head>
    <!--

                  ******
    $$$$$$$$		|| 		 $$$$$$$$
    $$$$$$$$     ===||===    $$$$$$$$
    $$$$$$$$    ==  ||  ==	 $$$$$$$$
    $$$$$$$$     == ||     	 $$$$$$$$
    $$$$$$$$        || ===	 $$$$$$$$
    $$$$$$$$   == ****** ==	 $$$$$$$$
     $$$$$$$    == 	    ==	 $$$$$$$
      $$$$$$     ========	 $$$$$$
       $$$$$$				$$$$$$
         $$$$$$			  $$$$$$
            $$$$$$$$$$$$$$$$$



   Developed By:
                 1/ Syed Wajadul Iqbal Nuhel /nuheljft@gmail.com
                 2/ Nazmus Sakib Ohee /sakibohee@gmail.com
                 3/ Rasel Ahmed /raselqac77@gmail.com
            -->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    @section('pageTitle', 'Sylhet International University')

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <!-- LOGO -->
    <link rel="shortcut icon" href="{{ asset('siu/img/logo.png') }}" sizes="16x16" >
    <!-- CSS Files -->
    <link href="{{asset('siu/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('siu/css/material-kit.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('siu/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/hover.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('siu/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/nreset.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/nstyle.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('siu/css/selectric.css')}}">
    @stack('css')

</head>

<body>
<!-- =========NAV SECTION STARTED======= -->

<div class="header_top">

    <div class="nav_right_search">
        <form action="">
            <ul>
                <li class="select_box" id="select_box">
                    <a href="#" id="select_box">Find a Program</a>
                </li>

                <div class="dropdown">
                    <button class="jump_to dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                        Jump To
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu jump_to_dropdown" aria-labelledby="dropdownMenu1">
                        {{--<li class="hvr-forward"><a href="#">All Notice<div class="ripple-container"></div></a></li>--}}
                        {{--<li class="hvr-forward"><a href="#">All Events</a></li>--}}
                        {{--<li class="hvr-forward"><a href="#">Library</a></li>--}}
                        {{--<li class="hvr-forward"><a href="#">CSE Society</a></li>--}}
                        {{--<li class="hvr-forward"><a href="#">Syllabus</a></li>--}}
                        {{--<li class="hvr-forward"><a href="#">Schools</a></li>--}}
                        {{--<li class="hvr-forward"><a href="#">Alumni</a></li>--}}



                        <li class="mouse_on"><a href="#">All Notice<div class="ripple-container"></div></a></li>
                        <li class="mouse_on"><a href="#">All Events</a></li>
                        <li class="mouse_on"><a href="#">Library</a></li>
                        <li class="mouse_on"><a href="#">CSE Society</a></li>
                        <li class="mouse_on"><a href="#">Syllabus</a></li>
                        <li class="mouse_on"><a href="#">Schools</a></li>
                        <li class="mouse_on"><a href="#">Alumni</a></li>


                    </ul>
                </div>

                <li class="hover_box">
                    <a href="#"><i class="fas fa-search" id="search_ico"></i></a>
                </li>
                <div class="search_input">
                    <input type="text" class="input_box" placeholder="Search">
                </div>
            </ul>
        </form>
    </div>


    <div class="header_top_inner">
        <div class="logoCenter">
            <div class="centerInner">
                <div class="img">
                    <img src="{{asset('siu/img/logo.png')}}" alt="" width="70" height="70">
                </div>
                <div class="text_beside_logo">
                    <h3>Sylhet International University</h3>
                    <div class="header_line"></div>
                    <p>Acquire a good degree accepted all over the world</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hr_line"></div>
<header class="cd-main-header"  id="sticky_nav">

    <ul class="cd-header-buttons">
        <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
        <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
    </ul> <!-- cd-header-buttons -->
</header>

<main class="cd-main-content">
    <!-- your content here -->

    <div class="cd-overlay"></div>
</main>

<nav class="cd-nav">
    <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li><a href="/">Home</a></li>
        <li class="has-children">
            <a href="">Academic</a>

            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                <li><a href="/schools">School</a></li>
                <li><a href="/syllabus">Syllabus</a></li>
                <li><a href="/academic_calendar">Academic Calendar</a></li>
                <li><a href="/library">Library</a></li>

                <ul class="is-hidden">
                    <li class="go-back"><a href="#0">Clothing</a></li>
                    <li><a href="/schools">School</a></li>
                    <li><a href="/syllabus">Syllabus</a></li>
                    <li><a href="/academic_calendar">Academic Calendar</a></li>
                    <li><a href="/library">Library</a></li>
                </ul>
                </li>
            </ul>
        </li>

        <li class="has-children">
            <a href="">Authority</a>

            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                <li>
                    <a href="/board_of_trustees">
                        Board of Trustees
                    </a>
                </li>
                <li>
                    <a href="">
                        Syndicate
                    </a>
                </li>
                <li>
                    <a href="">
                        Academic Council
                    </a>
                </li>
                <li>
                    <a href="">
                        Finance Committee
                    </a>
                </li>
                <li>
                    <a href="">
                        Disciplinary Committee
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Register
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Proctor
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Controller of Examination
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Treasurer
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Chairman
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Vice Chancellor
                    </a>
                </li>
                <li>
                    <a href="">
                        Office Of The Public Relation
                    </a>
                </li>
                <li>
                    <a href="">
                        Library Office
                    </a>
                </li>
                <li>
                    <a href="">
                        Departmental Officers
                    </a>
                </li>

                <ul class="is-hidden">
                    <li class="go-back"><a href="#0">Clothing</a></li>
                    <li>
                        <a href="/board_of_trustees">
                            Board of Trustees
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Syndicate
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Academic Council
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Finance Committee
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Disciplinary Committee
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Register
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Proctor
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Controller of Examination
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Treasurer
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Chairman
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Vice Chancellor
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Office Of The Public Relation
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Library Office
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Departmental Officers
                        </a>
                    </li>
                </ul>
                </li>
            </ul>
        </li>
        <li class="has-children">
            <a href="">Departments</a>
            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                <li>
                    <a href="/dept_of_cse">
                        Computer Science and Engineering
                    </a>
                </li>
                <li>
                    <a href="/dept_of_csi">
                        Computer Science and Informatics
                    </a>
                </li>
                <li>
                    <a href="/dept_of_ece">
                        Electronics and Communication Engineering
                    </a>
                </li>
                <li>
                    <a href="/dept_of_eng">
                        English
                    </a>
                </li>
                <li>
                    <a href="/dept_of_law">
                        Law
                    </a>
                </li>
                <li>
                    <a href="/dept_of_bba">
                        Business Administration
                    </a>
                </li>

                <ul class="is-hidden">
                    <li class="go-back"><a href="#0">Clothing</a></li>
                    <li>
                        <a href="/dept_of_cse">
                            Computer Science and Engineering
                        </a>
                    </li>
                    <li>
                        <a href="/dept_of_csi">
                            Computer Science and Informatics
                        </a>
                    </li>
                    <li>
                        <a href="/dept_of_ece">
                            Electronics and Communication Engineering
                        </a>
                    </li>
                    <li>
                        <a href="/dept_of_eng">
                            English
                        </a>
                    </li>
                    <li>
                        <a href="/dept_of_law">
                            Law
                        </a>
                    </li>
                    <li>
                        <a href="/dept_of_bba">
                            Business Administration
                        </a>
                    </li>
                </ul>
                </li>
            </ul>
        </li>

        <li class="has-children">
            <a href="">Admision</a>

            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                <li>
                    <a href="/tuition_fees">
                        Tuition Fees
                    </a>
                </li>
                <li>
                    <a href="/waiver_information">
                        Waiver Information
                    </a>
                </li>
                <li>
                    <a href="/graduate">
                        Graduate
                    </a>
                </li>
                <li>
                    <a href="undergraduate">
                        Undergraduate
                    </a>
                </li>
                <li>
                    <a href="/accommodation">
                        Accommodation
                    </a>
                </li>

                <ul class="is-hidden">
                    <li class="go-back"><a href="#0">Clothing</a></li>
                    <li>
                        <a href="/tuition_fees">
                            Tuition Fees
                        </a>
                    </li>
                    <li>
                        <a href="/waiver_information">
                            Waiver Information
                        </a>
                    </li>
                    <li>
                        <a href="/graduate">
                            Graduate
                        </a>
                    </li>
                    <li>
                        <a href="/undergraduate">
                            Undergraduate
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation">
                            Accommodation
                        </a>
                    </li>
                </ul>
                </li>
            </ul>
        </li>
        <li class="has-children">
            <a href="">Resources</a>

            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                <li><a href="/single_lab">Software Lab</a></li>
                <li><a href="/single_lab">Computer Lab</a></li>
                <li><a href="/single_lab">Browsing Lab</a></li>
                <li><a href="/single_lab">Electronics Lab</a></li>
                <li><a href="/single_lab">Electronics Machine Lab</a></li>
                <li><a href="">Moot Court Room</a></li>
                <li><a href="">CRTC</a></li>


                <ul class="is-hidden">
                    <li><a href="/single_lab">Software Lab</a></li>
                    <li><a href="/single_lab">Computer Lab</a></li>
                    <li><a href="/single_lab">Browsing Lab</a></li>
                    <li><a href="/single_lab">Electronics Lab</a></li>
                    <li><a href="/single_lab">Electronics Machine Lab</a></li>
                    <li><a href="">Moot Court Room</a></li>
                    <li><a href="">CRTC</a></li>
                </ul>
                </li>
            </ul>
        </li>

        <li class="has-children">
            <a href="">Societies</a>

            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                <li>
                    <a href="/cse_society">
                        CSE Society
                    </a>
                </li>
                <li>
                    <a href="">
                        Alumni Association
                    </a>
                </li>
                <li>
                    <a href="">
                        BNCC SIU Platoon
                    </a>
                </li>
                <li>
                    <a href="">
                        Photography Society
                    </a>
                </li>
                <li>
                    <a href="">
                        Rotaract Club
                    </a>
                </li>
                <li>
                    <a href="">
                        Debate Club
                    </a>
                </li>
                <li>
                    <a href="">
                        Cultural Club
                    </a>
                </li>
                <li>
                    <a href="">
                        Blood Donation Club
                    </a>
                </li>
                <li>
                    <a href="">
                        English Literary Club
                    </a>
                </li>

                <ul class="is-hidden">
                    <li class="go-back"><a href="#0">Clothing</a></li>
                    <li>
                        <a href="/cse_society">
                            CSE Society
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Alumni Association
                        </a>
                    </li>
                    <li>
                        <a href="">
                            BNCC SIU Platoon
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Photography Society
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Rotaract Club
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Debate Club
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Cultural Club
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Blood Donation Club
                        </a>
                    </li>
                    <li>
                        <a href="">
                            English Literary Club
                        </a>
                    </li>
                </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="/g_suite">G-Suite</a>
        </li>
        <li><a href="/gallery">Gallery</a></li>
        <li class="has-children">
            <a href="">Student Portal</a>

            <ul class="cd-secondary-nav is-hidden">
                <li class="go-back"><a href="#0">Back</a></li>
                <li class="has-children">
                    @if(!empty(Session::get('VNzLf4w8uRnXOy1SroBBuyYJpdVP8kA2mrzN4a')))
                <li><a href="/studentProfile">Profile</a></li>
                <li><a href="/studentLogout">Logout</a></li>
                    @else
                    <li><a href="/studentLogin">Login</a></li>
                    @endif
                <ul class="is-hidden">
                    <li class="go-back"><a href="#0">Clothing</a></li>
                        @if(!empty(Session::get('VNzLf4w8uRnXOy1SroBBuyYJpdVP8kA2mrzN4a')))
                        
                <li><a href="/studentProfile">Profile</a></li>
                <li><a href="/studentLogout">Logout</a></li>
                    @else
                    <li><a href="/studentLogin">Login</a></li>
                    @endif
                </ul>
                </li>
            </ul>
        </li>

    </ul> <!-- primary-nav -->
</nav> <!-- cd-nav -->

<div id="cd-search" class="cd-search">
    <form>
        <input type="search" placeholder="Search...">
    </form>
</div>
<!-- =========NAV SECTION END=========== -->


<div class="from_program_div" style="display: none">
    <a href="#" id="close">
        <i class="fas fa-times"></i>
    </a>
    <label for="select_pro">I'm looking for:</label>
    <form action="">
        <select data-trigger="" name="choices-single-defaul">
            <option value="Chose from list" >Chose from list</option>
            <option value="Graduate">Graduate</option>
            <option value="Undergraduate" >Undergraduate</option>
        </select>
        <label for="select_pro">Find your Program:</label>
        <select data-trigger="" name="choices-single-defaul" class="choices-single-defaul">
            <option value="AL">Computer Sceince And Enginnering</option>
            <option value="AL">Electrical And Electronics Enginnering</option>
            <option value="AL">Department of Law</option>
        </select>
        <button type="submit" class="btn btn-info btn_ctrl">Search</button>
    </form>
</div>



