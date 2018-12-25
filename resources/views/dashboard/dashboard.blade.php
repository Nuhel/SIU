        
               @if(!empty(Session::get('accesscode'))) 
   
     @php

          $userRole=Session::get('accesscode');
      @endphp
      @endif
        
        {{--Header--}}
        @include('dashboard/dash_inc.topbar')

        {{-- Logic Of LeftBar per admin --}}

      @if ($userRole=='AU133'||$userRole=='CSE133'||$userRole=='BBA133'||$userRole=='LLB133'||$userRole=='ENG133'||$userRole=='ECE133'||$userRole=='LLB133')
          @include('dashboard/dash_inc.leftbar')
             {{-- dashboard --}}
          @include('dashboard/dash_inc.dashboard')
      @endif

   
          {{--Footer--}}
          @include('dashboard/dash_inc.footerbar')