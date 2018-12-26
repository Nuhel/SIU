@extends('layout.app')

<title>@yield('pageTitle') SIU | G-Suite</title>

@section('content')
    <section class="suite_banner">
        <div class="container">
            <div class="row">
                <div class="s_banner_content">
                    <h1>g suite @ Sylhet International University</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="main-raised cst_main_rsd">
        <section class="main_desc_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="desc_content">
                            <div class="suite_edu_area">
                                <div class="suite_headline">
                                    <h4>G Suite for Education</h4>
                                    <p>SIU University offers G Suite for Education (formerly Google Apps for Education) to all faculty members, students, staff and alumni. G Suite for Education includes web-based messaging and collaboration tools that offer enhanced emailing, calendaring, and collaboration tools through Gmail, Google Calendar, Google Drive and other Google applications. </p>
                                </div>
                            </div>
                            <div class="icon_link_box text-center" style="">
                                <div class="col-md-4">
                                    <div class="single_i_box">
                                        <div class="i_img">
                                            <img  src="{{asset('siu/img/suite_icon/icon1.png')}}" alt="">
                                        </div>
                                        <div class="i_details">
                                            <p>[ <a href="#">SIU Email</a> ] - Faculty & Staff</p>
                                            <p>[ <a href="#">SIU Email</a> ] - Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_i_box">
                                        <div class="i_img">
                                            <img  src="{{asset('siu/img/suite_icon/icon2.png')}}" alt="">
                                        </div>
                                        <div class="i_details">
                                            <p>[ <a href="#">SIU Email</a> ] - Faculty & Staff</p>
                                            <p>[ <a href="#">SIU Email</a> ] - Students</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_i_box">
                                        <div class="i_img">
                                            <img  src="{{asset('siu/img/suite_icon/icon3.png')}}" alt="">
                                        </div>
                                        <div class="i_details">
                                            <p>[ <a href="#">SIU Email</a> ] - Faculty & Staff</p>
                                            <p>[ <a href="#">SIU Email</a> ] - Students</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="suite_user_area">
                                <div class="suite_headline">
                                    <h4>Intended Users</h4>
                                    <p>This service is available to the following:</p>
                                </div>
                                <div class="suite_ul">
                                    <li>Faculty</li>
                                    <li>Staff</li>
                                    <li>Alumni</li>
                                    <li>Students</li>
                                </div>
                            </div>

                            <div class="suite_requirements_area">
                                <div class="suite_headline">
                                    <h4>Requirements</h4>
                                    <p>Must be SIU University faculty member, researcher, staff, student or alumni.</p>
                                </div>
                            </div>

                            <div class="suite_features_area">
                                <div class="suite_headline">
                                    <h4>Key Features and Benefits</h4>
                                    <h5>G Suite for Education includes:</h5>
                                </div>
                                <div class="features_box">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="25%">
                                                <p>
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon1.png')}}" alt="">
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon2.png')}}" alt="">
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon3.png')}}" alt="">
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon4.png')}}" alt="">
                                                </p>
                                            </td>
                                            <td>Reach your colleagues/students wherever they are</td>
                                        </tr>
                                        <tr>
                                            <td width="25%">
                                                <p>
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon5.png')}}" alt="">
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon6.png')}}" alt="">
                                                </p>
                                            </td>
                                            <td>Everything you need to bring your project to life</td>
                                        </tr>
                                        <tr>
                                            <td width="25%">
                                                <p>
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon7.png')}}" alt="">
                                            </td>
                                            <td>Store files and find what you need instantly</td>
                                        </tr>
                                        <tr>
                                            <td width="25%">
                                                <p>
                                                    <img  src="{{asset('siu/img/suite_icon/sm_icon/icon8.png')}}" alt="">
                                                </p>
                                            </td>
                                            <td>A great tool to create, share, learning materials, and assignment to make a streamlined class. This help faculty organized classes & improve communication with student</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="suite_info_area">
                                <div class="suite_headline">
                                    <h4>Help Information</h4>
                                    <h5>For information on the core applications, visit the following web pages:</h5>
                                    <br>

                                    <h5>G Suite Learning Centre: <a href="">https://gsuite.google.com/learning-center/products</a></h5>
                                    <h5>Videos: <a href="#">https://www.youtube.com/user/GoogleApps</a></h5>
                                </div>
                                <p>Overview of Google Apps:</p>
                                <iframe src="https://www.youtube.com/embed/QBcHT0XJRP8?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" width="630" height="354" frameborder="0"></iframe>
                            </div>

                            <div class="suite_question_area">
                                <div class="suite_headline">
                                    <h4>Frequently Asked Question</h4>
                                </div>

                                <p>Q. What is Google Apps for Education?</p>
                                <p>Google Apps for Education is a suite of web-based messaging and collaboration applications that include Google Mail (Gmail), Google Calendar, Google Drive, and more. Google Apps provides you with unlimited online storage for your email and any documents that you store/share online.</p>
                                <p>Q. I already use Google for my personal email and calendar. What is the difference between G Suite for Education and the personal email and calendar services provided by Google?</p>
                                <p>Google Suite for Education and the personal email and calendar services provided by Google are similar. However, students and staff who will be using the Google Suite for Education version will have more features, unlimited space for their emails and documents, more support, and an uptime guarantee.</p>
                                <p>Q. How do I log into my G Suite account?</p>
                                <p>To access G Suite for Education, you must have access credential. G Suite login pages are available (Faculty & staff) at the following URLs:</p>


                                <h5>Faculty and Staff:</h5>
                                <ul class="faculty_stuff">
                                    <li>Email: <a href="#">https://mail.google.com/a/siu.edu.bd</a></li>
                                    <li>Drive: <a href="#">https://drive.google.com/a/siu.edu.bd</a></li>
                                    <li>Calendar: <a href="#">https://www.google.com/calendar/hosted/siu.edu.bd</a></li>
                                </ul>
                                <h5>Students:</h5>
                                <ul class="faculty_stuff">
                                    <li>Email: <a href="#">https://mail.google.com/a/siu.edu.bd</a></li>
                                    <li>Drive: <a href="#">https://drive.google.com/a/siu.edu.bd</a></li>
                                    <li>Calendar: <a href="#">https://www.google.com/calendar/hosted/siu.edu.bd</a></li>
                                </ul>
                                <br>
                                <span class="noti">Note: If you have separate Google Account logged in, you may need to click the Add Account button to sign in with your @siu.edu.bd account.</span>

                                <p>Q. Will my email address change?</p>
                                <p>Faculty and staff email addresses will NOT change.</p>
                                <p>Q. Will there be advertising on the University Google Apps page?</p>
                                <p>There will be no advertising within the email, calendaring and other services in G Suite for Education. You will only see advertising when using the Google search engine and other consumer services.</p>
                                <p>Q. How much storage space does Google drive and Gmail offer?</p>
                                <p>Google offers unlimited storage space for G Suite for Education. All faculty, staff and students have unlimited storage capacity as long as they are affiliated with Sylhet International University.</p>
                                <p>Q. Are there any concerns about privacy and data protection when using G Suite for Education?</p>
                                <p>Information about Google Apps privacy and data protection is available <a href="#">here in detail:</a></p>
                            </div>


                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="g_suite_support_area">
                            <div class="g_suite_heading">
                                <h3>privacy and data protection</h3>
                            </div>
                            <div class="suite_headline">
                                <h4 style="margin-left: 15px;">G Suite Support </h4>
                            </div>
                            <div class="single_suite_contact">
                                <h4>Phone/Email :</h4>
                                <ul>
                                    <li>gsuite-help@g.SIU.ac.bd</li>
                                    <li>+880-2-9844051-4 (Ext. 4055)</li>
                                </ul>
                            </div>
                            <div class="single_suite_contact">
                                <h4>Walk-In :</h4>
                                <ul>
                                    <li>Prefer to talk face-to-face?SIU University</li>
                                    <li>Visit University Building # 2</li>
                                    <li>Level 18</li>
                                    <li>+880-2-9844051-4 (Ext. 4055)</li>
                                </ul>
                            </div>
                            <div class="single_suite_contact">
                                <h4>Regular Office Hours :</h4>
                                <ul>
                                    <li>9:00 a.m. – 5 p.m.</li>
                                    <li>Saturday to Thursday</li>
                                    <li>Closed on Friday & University Holidays</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection


