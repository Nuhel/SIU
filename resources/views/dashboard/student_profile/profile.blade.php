

     @extends('dashboard/dash_inc.adjust')


@push('css')
     <style>
    	.listing .listing-event .data li {
    		list-style: none;
    	}
    	.info ul li{
    		list-style: none;
    	}


        
/*======================================================================================================*/


.cst_nav_pill > li{
	float: none;
	margin-left: 0;
}
.cst_nav_pill{
	margin-top: 0;
	background-color: #f5f5f5;
}

.cst_nav_pill > li.active > a, .cst_nav_pill > li.active > a:focus, .cst_nav_pill > li.active > a:hover {
	background-color: #009FB5;
	color: #FFFFFF !important;
}
.active i{
    color: #fff !important;
}

.cst_nav_pill > li > a {
	min-width: 153px;
	line-height: 18px;
	padding: 17px 4px 45px !important;
	font-size: 18px;
}
.img-profile {
	position: relative;
}
.img-profile img{
	max-width: 100%;
	height: auto;
}
.img-profile .name-profile {
	padding: 5px;
	background: #3f3f3f;
}

.t-center {
	text-align: center;
}
.img-profile .name-profile h5 {
	color: #e8e8e8;
	font-weight: 700;
	font-size: 16px;
	display: block;
	font-family: "Roboto Slab","Helvetica","Arial",sans-serif;
	margin-top: 0;
	margin-bottom: 0;
}
.profile_main{
	background-color: #fff;
}
.cst_nav_pill:not(.cst_nav_pill-icons) > li > a {
	border-radius: 0px;
	border-left: 0;
	font-size: 20px;
}
.main-title h1 {
	font-size: 40px;
	margin-bottom: 0;
	font-weight: 400;
}
.main-title h3{
	margin-top: 0;
}
.cst_nav_pill>li+li {
	margin-left: 0;
}
.cst_nav_item,.active{
	transition: all 0.5s ease-in-out;
}

.cst_nav_pill > li.active > a, .cst_nav_pill > li.active > a:focus, .cst_nav_pill > li.active > a:hover {
	box-shadow:none;
}
p.lead-intro {
	padding: 0 80px;
	font-weight: 400;
	font-size: 16px;
	line-height: 27px;
}
.mb-40 {
	margin-bottom: 40px !important;
}
.sub-title h2 {
	font-size: 15px;
	font-weight: 700;
	display: inline-block;
	position: relative;
}
.sub-title h2:after {
	content: "";
	height: 2px;
	left: 48%;
	position: absolute;
	top: 22px;
	width: 28%;
	transform: translate3d(-50%,0,0);
	-webkit-transform: translate3d(-50%,0,0);
	-ms-transform: translate3d(-50%,0,0);
	-ms-transform: translate(-50%,0);
	-o-transform: translate(-50%,0);
	background-image: linear-gradient(to right, #0c1834, #042a46, #003c57, #004f64, #06626f);
}
.mb-100 {
	margin-top: 50px !important;
}
.cst_table_ctrl > thead > tr > th, .cst_table_ctrl > tbody > tr > th, .cst_table_ctrl > tfoot > tr > th, .cst_table_ctrl > thead > tr > td, .cst_table_ctrl > tbody > tr > td, .cst_table_ctrl > tfoot > tr > td {
	text-align: left;
}
.table_header h3{
	background-color: #009FB5;
	color: #fff;
	border-bottom: 3px solid #c7c7c7;
}
.cst_table_ctrl,.table > thead > tr > th {
	border-bottom-width: 1px;
	font-size: 15px;
	font-weight: 700;
}
.cst_table_ctrl,.table > thead > tr > td {
	border-bottom-width: 1px;
	font-size: 15px;
	font-weight: 300;
}

.listing {
	padding: 40px 0;
	position: relative;
    padding-left: 35%;
}
.listing-inner:before {
	background: #00b3c0;
	top: -20px;
	content: " ";
	height: 12px;
	border-radius: 50%;
	left: 57.2%;
	position: absolute;
	width: 12px;
	z-index: 0;
}
.listing .listing-event {
	position: relative;
	z-index: 2;
}
.listing .listing-event .data.left {
	float: left;
	margin-left: -25%;
	padding-right: 20px;
	position: relative;
	text-align: right;
	width: 53%;
}
.listing .listing-event .data.right {
	margin-left: 40%;
	padding-left: 38px;
	position: relative;
	text-align: left;
	width: 71%;
}
.listing .listing-event .data li {
	 font-size: 15px;
	 font-weight: 400;
	 line-height: 26px;
 }
.clr_1{
	color: #2a2a2a;
}

.main-title h1,.main-title h3,.sub-title h2{
    margin-right: 23%;
}
.listing-inner:after {
	background: #ffd42d;
	bottom: -20px;
	content: " ";
	height: 12px;
	left: 57.2%;
	border-radius: 50%;
	position: absolute;
	width: 12px;
	z-index: 0;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #009fb5;
}
.listing:after {
	content: " ";
	height: 100%;
	left: 58.2%;
	position: absolute;
	top: 0;
	width: 2px;
	z-index: 0;
	background-image: linear-gradient(to bottom, #dada11, #80d557, #0dc589, #00b0a8, #0497ac);
}

.info {
	border: 1px solid #eaeaea;
	padding: 60px 0;
	font-size: 15px;
	margin-bottom: 25px;
	text-align: left;
}
.info a{
	color: #b2abb5;
}
.info i {
	font-size: 30px;
}
.cst_nav_pill > li > a {
	transition:none;
	color: #3f3f3f;
}
.info p {
	color: #999999;
	font-family: initial;
}
.info {
    max-width: 100%;
    margin: 0 auto;
    padding: 21px 0;
    height: 245px;
}
.block-info h5{
	border-bottom: 1px solid #ededed;
}
.info,.ico i, h5{
	text-align: center;
}
.info ul li{
	text-align: left;
	padding: 3px;
	letter-spacing: 0.5px;
}
.img-profile h5{
	border-bottom: none;
}
li.cst_nav_item.active:after {
	margin-left: 120px;
}
.cst_nav_pill i{
	margin-left: 16px;
    margin-top: 25px;
    padding: 6px;
    font-size: 20px;
    color: #3f3f3f;
}

@media (max-width:767.98px) { 

li.cst_nav_item.active:after {
	display: none;
}
.info {
    max-width: 100%;
    margin: 0 auto;
    padding: 21px 0;
    height: 245px;
}
.cst_nav_pill > li {
    float: left;
    margin-left: 0;
}
.cst_nav_pill > li > a {
    min-width: 160px;
    line-height: 18px;
    padding: 0px 4px 18px !important;
    font-size: 18px;
}
.listing .listing-event {
    position: relative;
    z-index: 2;
    margin-left: 20%;
}
.listing-inner:before {
    left: 48.3%;
}
.listing-inner:after {
    left: 48.3%;
}
.cst_nav_pill i {
    margin-left: 0;
    margin-top: 25px;
    padding: 12px;
    font-size: 20px;
    color: #3f3f3f;
}
.listing:after {
    content: " ";
    height: 100%;
    left: 49.2%;
    position: absolute;
    top: 0;
    width: 2px;
    z-index: 0;
    background-image: linear-gradient(to bottom, #dada11, #80d557, #0dc589, #00b0a8, #0497ac);
}
 }
 @media (max-width:991.98px){
 	.cst_nav_pill > li {
    float: left;
    margin-left: 0;
}
.cst_nav_pill i {
    margin-left: 0;
    margin-top: 25px;
    padding: 12px;
    font-size: 20px;
    color: #3f3f3f;
}
.info {
    max-width: 100%;
    margin: 0 auto;
    padding: 21px 0;
    height: 245px;
}
li.cst_nav_item.active:after {
	display: none;
}

 }
 @media (max-width:1199.98px){
 .cst_nav_pill > li > a {
    min-width: 110px;
    line-height: 18px;
    padding: 7px 4px 38px !important;
    font-size: 15px !important;
}
.cst_nav_pill i {
    margin-left: 0;
    margin-top: 25px;
    padding: 12px;
    font-size: 20px;
    color: #3f3f3f;
}
.info {
    max-width: 100%;
    margin: 0 auto;
    padding: 21px 0;
    height: 245px;
}
li.cst_nav_item.active:after {
    margin-left: 120px !important;
}
}
    </style>

@endpush


     @section('content')

        <div class="content-inner">
          <!-- Page Header-->
             <div class="container contents"   style="padding-top: 30px">
            <div class="profile_main">
                <div class="row">
                    <div class="col-md-2">
                        <div class="img-profile">
                            <img src="/storage/uploaded/students/{{$StudentInfo->picture}}" alt="">
                            <div class="name-profile t-center">
                                <h5 class="uppercase">{{$StudentInfo->student_name}}</h5>
                            </div>
                        </div>
                        <ul class="nav nav-pills cst_nav_pill flex-column">
                            <li class="nav-item cst_nav_item  hvr-bounce-to-right">
                                <a class="nav-link" href="#tab2" data-toggle="tab"><i class="fas fa-clipboard-list"></i>Results</a>
                            </li>
                            <li class="nav-item cst_nav_item  hvr-bounce-to-right">

                                <a class="nav-link" href="#tab1" data-toggle="tab"><i class="fas fa-user-alt"></i>About</a>
                            </li>
                            <li class="nav-item cst_nav_item hvr-bounce-to-right">
                                <a class="nav-link" href="#tab3" data-toggle="tab"><i class="fas fa-phone"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content">
                            <div class="tab-pane" id="tab1">
                                <div class="row">
                                    <div class="col-md-12  ">
                                        <div class="main-title text-center">
                                            <h1>{{$StudentInfo->student_name}}</h1>
                                    <h3>{{$StudentInfo->discipline}}</h3>
                                            <div class="block-content">
                                                <div class="row">
                                                    <div class="col-md-12  ">
                                                        <div class="sub-title mb-40">
                                                            <h2 class="uppercase">Basic Informations</h2>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">

                                                    <!--Listing-->
                                                    <div class="listing mt-40">

                                                        <div class="listing-inner">
                                                            <div class="listing-event">
                                                                <ul class="data left">
                                                                    <li class="clr_1">Student Name</li>
                                                                    <li class="clr_1">Father's Name</li>
                                                                    <li class="clr_1">Mother's Name</li>
                                                                    <li class="clr_1">Date of birth</li>
                                                                </ul>
                                                                <ul class="data right">
                                                                    <li>{{$StudentInfo->student_name}}</li>
                                                                    <li>{{$StudentInfo->fathers_name}}</li>
                                                                    <li>{{$StudentInfo->mothers_name}}</li>
                                                                    <li>{{$StudentInfo->dob}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content ">
                                                <div class="row">
                                                    <div class="col-md-12  ">
                                                        <div class="sub-title mb-40">
                                                            <h2  class="uppercase" style="margin-top: 35px;">Academic Informations</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">
                                                    <div class="listing mt-40" style="margin-bottom: 50px">

                                                        <div class="listing-inner">
                                                            <div class="listing-event">
                                                                <ul class="data left">
                                                                    <li class="clr_1">Registration No.</li>
                                                                    <li class="clr_1">Academic Year</li>
                                                                    <li class="clr_1">Discipline</li>
                                                                    <li class="clr_1">Roll No.</li>
                                                                    <li class="clr_1">Date Of Admission</li>
                                                                </ul>
                                                                <ul class="data right">
                                                                    <li>{{$StudentInfo->registration_number}}</li>
                                                                    <li>{{$StudentInfo->academic_year}}</li>
                                                                    <li>{{$StudentInfo->discipline}}</li>
                                                                    <li>{{$StudentInfo->roll_number}}</li>
                                                                    <li>{{$StudentInfo->created_at}}</li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-content ">
                                                <div class="row">
                                                    <div class="col-md-12  ">
                                                        <div class="sub-title mb-40">
                                                            <h2 class="uppercase">Legal Guardian</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-md-offset-3  col-sm-8 col-sm-offset-3 ">
                                                    <div class="listing mt-40" style="margin-bottom: 50px">

                                                        <div class="listing-inner">
                                                            <div class="listing-event">
                                                                <ul class="data left">
                                                                    <li class="clr_1">Guardian's Name</li>
                                                                    <li class="clr_1">Guardian's Address</li>
                                                                    <li class="clr_1">Guardian's Phone No.</li>
                                                                </ul>
                                                                <ul class="data right">
                                                                    <li>{{$StudentInfo->legal_guardian_name}}</li>
                                                                    <li>{{$StudentInfo->legal_guardian_address}}</li>
                                                                    <li>{{$StudentInfo->legal_guardian_phone_number}}</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane active" id="tab2">
                                <div class="main-title text-center">
                                    <h1>{{$StudentInfo->student_name}}</h1>
                                    <h3>{{$StudentInfo->discipline}}</h3>

                                     @php
                                        $cnt=0;
                                    @endphp
  
                            @foreach ($exam_result as $key => $value)
                                
                         

                                    <div class="block-content mb-100 padd_15">
                                        <div class="table-responsive">

                                            

                                             <h3 class="pull-left">{{$key}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$value[$cnt]['semester']}}</h3>
                                            <table class="table table-striped cst_table_ctrl">
                                                <thead>
                                                <tr>
                                                    <th>Course Code</th>
                                                    <th>Course Title</th>
                                                    <th>Credit</th>
                                                    <th>GPA</th>
                                                    <th>Grade</th>
                                                    <th>Remarks</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($value as $subValue)
                                                   
                                                    <tr>
                                                        <td>{{$subValue->course_code}}</td>
                                                        <td>{{$subValue->course_title}}</td>
                                                        <td>{{$subValue->course_credit}}</td>
                                                        <td>{{$subValue->gpa}}</td>
                                                        <td>{{$subValue->grade}}</td>
                                                        <td>{{$subValue->remarks}}</td>
                                                        <td>{{$subValue->status}}</td>
                                                    </tr>
                                                      @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                       @endforeach
                                       @php
                                             $cnt+=1;
                                     @endphp
                                </div>
                            </div>

                            <div class="tab-pane" id="tab3">
                                <div class="main-title text-center">
                                    <h1>{{$StudentInfo->student_name}}</h1>
                                    <h3>{{$StudentInfo->discipline}}</h3>
                                    <div class="block-content mb-100 ">
                                        <div class="row">
                                            <div class="col-md-12  ">
                                                <div class="sub-title mb-40">
                                                    <h2 class="uppercase">Contact Informations</h2>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row"  style="margin: 5px;">
                                        
                                                <div class="col-md-5">
                                                    <div class="info">
                                                        <div class="ico mb-20">
                                                            <i class="fas fa-portrait" style="color:#009FB5 !important"></i>
                                                        </div>
                                                        <h5 class="mb-20">Contact Informations</h5>
                                                        <ul>
                                                            <li><strong>Present Address: </strong>{{$StudentInfo->mailing_address}}<br></li>
                                                            <li><strong>Permanent Address: </strong>{{$StudentInfo->permanent_address}}<br></li>
                                                            
                                                            <li><strong>Present Address Phone No:</strong>{{$StudentInfo->mailing_address_number}}<br></li>
                                                            <li><strong>Permanent Address Phone No:</strong>{{$StudentInfo->permanent_address_number}}<br></li>
                                                            <li><strong>Emargency Contact No:</strong>{{$StudentInfo->emargency_contact_number}}<br></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="info">
                                                        <div class="ico mb-20">
                                                            <i class="fas fa-mobile-alt" style="color:#009FB5 !important"></i>
                                                        </div>
                                                        <h5 class="mb-20">Student's Email Information</h5>
                                                        <ul>
                                                            <li><strong>Personal Email :</strong> {{$StudentInfo->personal_email}}<br></li>
                                                            <li><strong>Academic Email :</strong> {{$StudentInfo->authorized_email}}<br></li>
                                                            <br>
                                                        </ul>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    @endsection