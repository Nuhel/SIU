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





{{-- ==============new nav intigration======================= --}}



        <link rel="stylesheet" type="text/css" href="{{ asset('siu/navfile/demo.css') }}">
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.0/jquery.mmenu.all.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.0/jquery.mmenu.all.js"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('siu/navfile/jquery.mhead.css') }}">
        <script type="text/javascript" src="{{ asset('siu/navfile/jquery.mhead.js') }}"></script>

        <style type="text/css">
            .mh-head {
                background: #00a0b6;
                color: #fff;
            }
            .mh-text {
                font-size: 16px;
                font-weight: bold;
            }
            .mh-head .mh-form .fa {
                color: #4bb5ef;
            }
        </style>

        <script type="text/javascript">
            $(function() {

                //  create the menus
                $('#menu').mmenu();
                $('#shoppingbag').mmenu({
                    extensions: [ 'position-right' ],
                    navbar: {
                        title: 'Shoppingbag'
                    }
                });

                //  fire the plugin
                $('.mh-head.first').mhead({
                    scroll: {
                        hide: 200
                    }
                });
                $('.mh-head.second').mhead({
                    scroll: false
                });

                //  for demo only
                $('a[href^="#/"]').click(function() {
                    alert( 'Thank you for clicking, but that\'s a demo link.' );
                    return;
                })
            });
        </script>


{{-- ====================end intigration=================== --}}




    @stack('css')

</head>

<body>
<!-- =========NAV SECTION STARTED======= -->

<!-- navbar started -->


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


    <div class="container-fluid nav_background">
        <div class="row">
          <nav class="navbar navbar-default navbar-static navbar-expand-xl">
            <div class="navbar-header">
              
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse" id="my-navbar-collapse">

                
              <ul class="nav navbar-nav">
                <li class="dropdown dropdown-large">
                  <a href="/">Home</a>
                </li>
                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                      <li><a href="{{route('academic.school')}}">School</a></li>
                      <li><a href="{{route('academic.syllabus')}}">Syllabus</a></li>
                      <li><a href="{{route('academic.calendar')}}">Academic Calendar</a></li>
                      <li><a href="{{route('academic.library')}}">Library</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Authority <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                    <li><a href="{{route('authority.bot')}}">Board of Trustees</a></li>
                    <li><a href="{{route('authority.bot')}}">Syndicate</a></li>
                    <li><a href="{{route('authority.bot')}}">Academic Council</a></li>
                    <li><a href="{{route('authority.bot')}}">Finance Committee</a></li>
                    <li><a href="{{route('authority.bot')}}">Disciplinary Committee</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Register</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Proctor</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Controller of Examination</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Treasurer</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Chairman</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Vice Chancellor</a></li>
                    <li><a href="{{route('authority.bot')}}">Office Of The Public Relation</a></li>
                    <li><a href="{{route('authority.bot')}}">Library Office</a></li>
                    <li><a href="{{route('authority.bot')}}">Departmental Officers</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments<b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                      <li>
                          <a href="{{route('dept.cse')}}">
                              Computer Science and Engineering
                          </a>
                      </li>
                      <li>
                          <a href="{{route('dept.csi')}}">
                              Computer Science and Informatics
                          </a>
                      </li>
                      <li>
                          <a href="{{route('dept.ece')}}">
                              Electronics and Communication Engineering
                          </a>
                      </li>
                      <li>
                          <a href="{{route('dept.english')}}">
                              English
                          </a>
                      </li>
                      <li>
                          <a href="{{route('dept.law')}}">
                              Law
                          </a>
                      </li>
                      <li>
                          <a href="{{route('dept.bba')}}">
                              Business Administration
                          </a>
                      </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                      <li>
                          <a href="{{route('admission.tuition_fees')}}">
                              Tuition Fees
                          </a>
                      </li>
                      <li>
                          <a href="{{route('admission.waiver_information')}}">
                              Waiver Information
                          </a>
                      </li>
                      <li>
                          <a href="{{route('admission.graduate')}}">
                              Graduate
                          </a>
                      </li>
                      <li>
                          <a href="{{route('admission.undergraduate')}}">
                              Undergraduate
                          </a>
                      </li>
                      <li>
                          <a href="{{route('admission.accommodation')}}">
                              Accommodation
                          </a>
                      </li>
                  </ul>
                </li>
                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                      <li><a href="{{route('software_lab')}}">Software Lab</a></li>
                      <li><a href="">Computer Lab</a></li>
                      <li><a href="">Browsing Lab</a></li>
                      <li><a href="">Electronics Lab</a></li>
                      <li><a href="">Electronics Machine Lab</a></li>
                      <li><a href="">Moot Court Room</a></li>
                      <li><a href="">CRTC</a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Societies <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                      <li>
                          <a href="{{route('society.cse')}}">
                              CSE Society
                          </a>
                      </li>
                      <li>
                          <a href="{{route('society.alumni')}}">
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

                  <li><a href="/g_suite">G-Suite</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>

                <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student Portal <b class="caret"></b></a>
                  <ul class="dropdown-menu dropdown-menu-large row hover_before">
                      @if(!empty(Session::get('VNzLf4w8uRnXOy1SroBBuyYJpdVP8kA2mrzN4a')))

                          <li><a href="/studentProfile">Profile</a></li>
                          <li><a href="/studentLogout">Logout</a></li>
                      @else
                          <li><a href="/studentLogin">Login</a></li>
                      @endif
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
      </div>
    </div>





        <div id="page">
            <div class="mh-head second">
                <div class="mh-head first Sticky">
                    <span class="mh-btns-left">
                        <a class="fa fa-bars" href="#menu"></a>
                    </span>
                </div>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="#">Home </a></li>
                    <li><span>Academic</span>
                        <ul>
                            <li><a href="{{route('academic.school')}}">School</a></li>
                            <li><a href="{{route('academic.syllabus')}}">Syllabus</a></li>
                            <li><a href="{{route('academic.calendar')}}">Academic Calendar</a></li>
                            <li><a href="{{route('academic.library')}}">Library</a></li>
                        </ul>
                    </li>
                    <li><span>Authority</span>
                        <ul>
                            <li><a href="{{route('authority.bot')}}">Board of Trustees</a></li>
                            <li><a href="{{route('authority.bot')}}">Syndicate</a></li>
                            <li><a href="{{route('authority.bot')}}">Academic Council</a></li>
                            <li><a href="{{route('authority.bot')}}">Finance Committee</a></li>
                            <li><a href="{{route('authority.bot')}}">Disciplinary Committee</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Register</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Proctor</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Controller of Examination</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Treasurer</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Chairman</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Vice Chancellor</a></li>
                            <li><a href="{{route('authority.bot')}}">Office Of The Public Relation</a></li>
                            <li><a href="{{route('authority.bot')}}">Library Office</a></li>
                            <li><a href="{{route('authority.bot')}}">Departmental Officers</a></li>
                        </ul>
                    </li>
                    <li><span>Departments</span>
                        <ul>
                            <li>
                                <a href="{{route('dept.cse')}}">
                                    Computer Science and Engineering
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dept.csi')}}">
                                    Computer Science and Informatics
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dept.ece')}}">
                                    Electronics and Communication Engineering
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dept.english')}}">
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dept.law')}}">
                                    Law
                                </a>
                            </li>
                            <li>
                                <a href="{{route('dept.bba')}}">
                                    Business Administration
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><span>Admission</span>
                        <ul>
                            <li>
                                <a href="{{route('admission.tuition_fees')}}">
                                    Tuition Fees
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admission.waiver_information')}}">
                                    Waiver Information
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admission.graduate')}}">
                                    Graduate
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admission.undergraduate')}}">
                                    Undergraduate
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admission.accommodation')}}">
                                    Accommodation
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><span>Resources</span>
                        <ul>
                            <li><a href="{{route('software_lab')}}">Software Lab</a></li>
                            <li><a href="">Computer Lab</a></li>
                            <li><a href="">Browsing Lab</a></li>
                            <li><a href="">Electronics Lab</a></li>
                            <li><a href="">Electronics Machine Lab</a></li>
                            <li><a href="">Moot Court Room</a></li>
                            <li><a href="">CRTC</a></li>
                        </ul>
                    </li>
                    <li><span>Societies</span>
                        <ul>
                            <li>
                                <a href="{{route('society.cse')}}">
                                    CSE Society
                                </a>
                            </li>
                            <li>
                                <a href="{{route('society.alumni')}}">
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
                    <li><a href="/g_suite">G-Suite</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><span>Student Portal</span>
                        <ul>
                        
            
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
                </ul>
            </nav>
        </div>



















<!-- navbar started end-->


<!-- =========NAV SECTION END=========== -->


<div class="from_program_div" style="display: none">
    <a href="#" id="close">
        <i class="fas fa-times"></i>
    </a>
    <label for="select_pro">I'm looking for:</label>
    <div>
        <select data-trigger="" name="lookingfor" id="lookingfor">
            <option value="Chose from list" >Chose from list</option>
            <option value="Graduate">Graduate</option>
            <option value="Undergraduate" >Undergraduate</option>
        </select>
        <div class="after_select">

        </div>

    </div>
</div>



