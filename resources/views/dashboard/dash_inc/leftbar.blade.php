             @if(!empty(Session::get('accesscode'))) 
   
            @php

          $userRole=Session::get('accesscode');

          @endphp
          @endif
                   @if(!empty(Session::get('username'))) 
   
         @php

              $username=Session::get('username');
          @endphp
          @endif
           @if(!empty(Session::get('discipline')))

         @php

              $discipline=Session::get('discipline');
          @endphp
          @endif
      
      
     @if ($userRole=='AU133')
<div class="page-content d-flex align-items-stretch"> 
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="/img/admin.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{$username}}</h1>
              <p>{{base64_decode($discipline)}}</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="/dashboard"> <i class="icon-home"></i>Home </a></li>
                      <li><a href="#studentDropDown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-user-graduate"></i>Students</a>
                      <ul id="studentDropDown" class="collapse list-unstyled ">
                        <li><a href="{{ url('/dashboard/addStudentInformation') }}">Add Student Info</a></li>
                        <li><a href="{{ url('/dashboard/allStudents') }}">All Students</a></li>
                      </ul>
                    </li>
                 
                     <li><a href="#subjectDropdown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-book"></i>Subjects</a>
                      <ul id="subjectDropdown" class="collapse list-unstyled ">
                        <li><a href="{{ url('/dashboard/addSubject') }}">Add Subjects</a></li>
                         <li><a href="{{ url('/dashboard/allSubjects') }}">Registered Subjects</a></li>
                      </ul>
                    </li>
                    <li><a href="#resultDropdown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-poll-h"></i>All Results</a>
                      <ul id="resultDropdown" class="collapse list-unstyled ">
                        <li><a href="{{ url('/dashboard/DepartmentalResult/'.base64_encode('CSE').'/') }}">CSE</a></li>
                        <li><a href="{{ url('/dashboard/DepartmentalResult/'.base64_encode('ECE').'/') }}">ECE</a></li>
                        <li><a href="{{ url('/dashboard/DepartmentalResult/'.base64_encode('BBA').'/') }}">BBA</a></li>
                        <li><a href="{{ url('/dashboard/DepartmentalResult/'.base64_encode('LLB').'/') }}">LLB</a></li>
                        <li><a href="{{ url('/dashboard/DepartmentalResult/'.base64_encode('ENG').'/') }}">ENG</a></li>
                        <li><a href="{{ url('/dashboard/DepartmentalResult/'.base64_encode('EEE').'/') }}">EEE</a></li>

                      </ul>
                    </li>
                      <li><a href="#teachersDropdown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-poll-h"></i>Teachers</a>
                  <ul id="teachersDropdown" class="collapse list-unstyled ">
                      <li><a href="{{route('create.teacher')}}">Add New Teacher</a></li>
                      <li><a href="{{route('show.all_teacher')}}">All Teachers</a></li>
                  </ul>
              </li>
{{-- 
                    <li><a href="{{ url('/dashboard/tables') }}"> <i class="icon-grid"></i>Tables </a></li>
                    <li><a href="{{url('/dashboard/charts')}}"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                    <li><a href="{{url('/dashboard/forms')}}"> <i class="icon-padnote"></i>Forms </a></li>

                    <li><a href="{{url('/login')}}"> <i class="icon-interface-windows"></i>Login page </a></li>
                    <li><a href="{{url('/register')}}"> <i class="icon-interface-windows"></i>Register page </a></li> --}}
          </ul>
          <span class="heading">End</span>
         {{-- <ul class="list-unstyled">
            <li><a href="{{ url('/register') }}"><i class="fas fa-user-tie"></i>Register New Admin</a>
          </ul>  --}}
        </nav>
   
        
      @endif
       @if ($userRole=='CSE133'||$userRole=='BBA133'||$userRole=='LLB133'||$userRole=='ENG133'||$userRole=='ECE133'||$userRole=='LLB133')
         <div class="page-content d-flex align-items-stretch"> 
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="/img/admin.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
               <h1 class="h4">{{$username}}</h1>
           <p>{{base64_decode($discipline)}}</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
            <span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="/dashboard"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="{{ url('/dashboard/DepartmentalStudents/'.$discipline.'/') }}"><i class="fas fa-user-graduate"></i>Departmental Students</a></li>

              <li><a href="#noticeDropdown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-poll-h"></i>Notice</a>
                  <ul id="noticeDropdown" class="collapse list-unstyled ">
                      <li><a href="{{route('create.notice')}}">Add New Notice</a></li>
                      {{--<li><a href="{{ url('/dashboard/addNotice/'.base64_encode('CSE').'/') }}">Add New Notice</a></li>--}}
                      <li><a href="{{route('show.all_notice')}}">All Notice</a></li>
                  </ul>
              </li>

              <li><a href="#eventDropdown" aria-expanded="false" data-toggle="collapse"><i class="fas fa-poll-h"></i>Event</a>
                  <ul id="eventDropdown" class="collapse list-unstyled ">
                      <li><a href="{{route('create.event')}}">Add New Event</a></li>
                      <li><a href="{{route('show.all_event')}}">All Event</a></li>
                  </ul>
              </li>

            




                {{--
                    <li><a href="{{ url('/dashboard/tables') }}"> <i class="icon-grid"></i>Tables </a></li>
                    <li><a href="{{url('/dashboard/charts')}}"> <i class="fa fa-bar-chart"></i>Charts </a></li>
                    <li><a href="{{url('/dashboard/forms')}}"> <i class="icon-padnote"></i>Forms </a></li>
                    <li><a href="{{url('/login')}}"> <i class="icon-interface-windows"></i>Login page </a></li>
                    <li><a href="{{url('/register')}}"> <i class="icon-interface-windows"></i>Register page </a></li>
                --}}
          </ul>
          <span class="heading">End</span>
   
        </nav>
   
      @endif


      