@extends('layout.app')

<title>@yield('pageTitle') Academic</title>


@push('css')

@endpush


@section('content')
   <div class="main main-raised cst_main_rsd">
       <section class="academic_area" style="padding: 30px">
           <div class="container">
             <div class="row">
               <div class="col-md-4 col-lg-4">
                 <div class="academic_content_left">
                   <a href="#">
                     <div class="aca_person_img">
                       <img src="{{asset('siu/img/academic/person1.jpg')}}" alt="">
                     </div>
                   </a>
                   <div class="persona_soci_link">
                     <ul>
                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                       <li><a href="#"><i class="fab fa-skype"></i></a></li>
                       <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     </ul>
                   </div>
                   <div class="person_address">
                     <ul>
                       <li><i class="fas fa-envelope-open"></i> <a href="mailto:"> hussain@siu.edu.bd</a></li>
                       <li><i class="fas fa-phone"></i> <a href="tel:"> +880179532652</a></li>
                       <li><i class="fas fa-location-arrow"></i> <span>Teachers Room, Academic Building, SIU</span></li>
                     </ul>
                   </div>
                   <div class="download_btn">
                     <a href="#">download CV<i class="fas fa-file-pdf"></i></a>
                   </div>
                 </div>
               </div>
               <div class="col-md-8 col-lg-8">
                  <div class="academic_contant_right">
                     <div class="academic_peron_details">
                       <h2>Abid Hussain, MSc</h2>
                       <h4>Professor</h4>
                     </div>


                 <div class="md_screen">
                   <div class="aca_details">
                        <h3>Biography</h3>
                        <p>Accounting can be divided into several fields including financial accounting, management accounting, external auditing, tax accounting and cost accounting. Accounting information systems are designed to support accounting functions and related activities. Financial accounting focuses on the reporting of an organization’s financial information, including the preparation of financial statements, to the external users of the information, such as investors.</p>
                        <p>Currently, Professor John is focusing his research on individual investor behavior and company incentives to better understand how disclosure affects stock returns and to uncover possible mispricing. Nevertheless, John is conducting an new way of examination of analyst access to information, and he is investigating market reactions to natural issues and the impact that would occur on individual firms.</p>
                     </div>
                     <div class="aca_details">
                        <h3>Education</h3>
                        <ul>
                          <li><i class="far fa-dot-circle"></i> Ph.D., Accounting & Finance, University of Strathclyde, Scotland</li>
                          <li><i class="far fa-dot-circle"></i> M.S.F., Finance, Boston College, Chestnut Hill, MA, 2006</li>
                          <li><i class="far fa-dot-circle"></i> M.B.A., Taxation, Golden Gate University, San Francisco, CA, 1983</li>
                        </ul>
                     </div>
                     <div class="aca_details">
                        <h3>Publications</h3>
                        <ul>
                          <li><i class="far fa-hand-point-right"></i> Ph.D., Accounting & Finance, University of Strathclyde, Scotland</li>
                          <li><i class="far fa-hand-point-right"></i> M.S.F., Finance, Boston College, Chestnut Hill, MA, 2006</li>
                          <li><i class="far fa-hand-point-right"></i> M.B.A., Taxation, Golden Gate University, San Francisco, CA, 1983</li>
                        </ul>
                     </div>
                     <div class="aca_details">
                         <h3>Course Taken</h3>
                         <ul>
                             <li><i class="far fa-dot-circle"></i>Discrete Mathematics</li>
                             <li><i class="far fa-dot-circle"></i>Fiber Optics</li>
                             <li><i class="far fa-dot-circle"></i>Digital Logic Design</li>
                             <li><i class="far fa-dot-circle"></i>Electrical Circuit</li>
                             <li><i class="far fa-dot-circle"></i>Electronics Devices</li>
                             <li><i class="far fa-dot-circle"></i>Numerical Analysis</li>
                             <li><i class="far fa-dot-circle"></i>Semi Conductor</li>
                             <li><i class="far fa-dot-circle"></i>Electromagnetic Fields and Wave</li>










                         </ul>
                     </div>
                 </div>
                  </div>
               </div>
             </div>
           </div>
       </section>
   </div>
@endsection



@push('js')
    <script src="{{asset('siu/js/jquery.barfiller.js')}}"></script>
@endpush
