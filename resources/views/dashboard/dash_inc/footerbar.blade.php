      <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Nevadia Technology &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://nevadiatechnology.com">Nevadian</a></p>

                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    {{-- <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script> --}}
    <script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    {{-- <script src="{{asset('js/charts-home.js')}}"></script>
       <script src="{{asset('js/charts-custom.js')}}"></script> --}}
    <!-- Main File-->

    <script src="{{asset('js/front.js')}}"></script>
    <script src="{{asset('js/sweetalert.js')}}"></script>


@stack('custom-scripts')


      @if(Session::has('eventCreateSuccess'))
          <script>
              swal({
                  title: "Successfully Added!",
                  text: "You just Added an Event!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
      @endif

      @if(Session::has('noticeSuccessUpdate'))
          <script>
              swal({
                  title: "Successfully Updated!",
                  text: "You just Updated a Notice!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
      @endif


      @if(Session::has('eventSuccessUpdate'))
          <script>
              swal({
                  title: "Successfully Updated!",
                  text: "You just Updated an Event!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
      @endif


      @if(Session::has('teacherSuccessUpdate'))
          <script>
              swal({
                  title: "Successfully Updated!",
                  text: "You just Updated a Teacher!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
      @endif

      @if(Session::has('addTeacher'))
          <script>
              swal({
                  title: "Successfully Added!",
                  text: "You just added a Teacher!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
      @endif

          @if(Session::has('studentSuccess'))
                <script>
                  swal({
                        title: "Successfully Added!",
                        text: "You just added a student!",
                        icon: "success",
                        button: "Ok!",
                      });
                </script>

            @endif
      @if(Session::has('noticeSuccess'))
          <script>
              swal({
                  title: "Successfully Added!",
                  text: "You just added a Notice!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>

      @endif
             @if(Session::has('subjectSuccess'))
                <script>
                  swal({
                        title: "Successfully Added!",
                        text: "You just added a subject!",
                        icon: "success",
                        button: "Ok!",
                      });
                </script>
              
            @endif
            @if(Session::has('ResultSuccess'))
                <script>
                  swal({
                        title: "Result Successfully Declared!",
                        text: "You just declared a student result!",
                        icon: "success",
                        button: "Ok!",
                      });
                </script>
              
            @endif
                  @if(Session::has('studentUpdateSuccess'))
                    <script>
                      swal({
                            title: "Successfully Updated!",
                            text: "You just updated a student's Info!",
                            icon: "success",
                            button: "Ok!",
                          });
                    </script>
                  
                @endif
                @if(Session::has('SubjectUpdateSuccess'))
                    <script>
                      swal({
                            title: "Successfully Updated!",
                            text: "You just updated a subject!",
                            icon: "success",
                            button: "Ok!",
                          });
                    </script>
                  
                @endif
                @if(Session::has('NoSubject'))
                    <script>
                      swal({
                            title: "Select Semester And Add Result!",
                            text: "You have made a fail attempt!",
                            icon: "warning",
                            button: "Ok!",
                          });
                    </script>
                  
                @endif

            <script>


            $(document).on('click', '.showNoticeDescription', function() {
                      var desc=$(this).data('description');
                      swal({
                  title: "Description",
                  text: desc,
                  icon: "warning",
                })
               
               });



          $(document).on('click', '.showTeacherDescription', function() {
                      var name=$(this).data('name');
                      var fb=$(this).data('facebook');
                      var ld=$(this).data('linkedin');
                      var ph=$(this).data('phone');
                      var em=$(this).data('email');
                      var desc="Phone: "+ph+"\nEmail: "+em+"\nFacebook: "+fb+"\nLinkedIn: "+ld;
                      swal({
                  title: name,
                  text: desc,
                  icon: "warning",
                })
               
               });



              $(document).on('click', '.deleteTeacherinfo', function() {
                   
                      var sname=$(this).data('name');
                      swal({
                  title: "Delete "+sname+"?",
                  text: "Once deleted, you will not be able to recover this teachers information!",
                  icon: "error",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                        type: 'post',
                        url: '/deleteTeacher',
                        data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $(this).data('id'),
                        'picture': $(this).data('pic'),
                        },
                        success: function(data) {
                          swal("Poof! This Teacher information has been deleted!")
                          .then((value) => {
                            location.reload();
                          });

                        }
                        });

                    
                  } else {
                    swal("This Teacher information is safe!");
                  }
                });
               });




              $(document).on('click', '.delete-student-info', function() {
                      var sid=$(this).data('id');
                      var sname=$(this).data('name');
                      swal({
                  title: "Delete "+sname+"?",
                  text: "Once deleted, you will not be able to recover this student information!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                        type: 'post',
                        url: '/deleteStudentInformation',
                        data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $(this).data('id'),
                        'picture': $(this).data('pic'),
                        },
                        success: function(data) {
                          swal("Poof! This student information has been deleted!")
                          .then((value) => {
                            location.reload();
                          });

                        }
                        });

                    
                  } else {
                    swal("This student information is safe!");
                  }
                });
               });




                $(document).on('click', '.delete-subject', function() {
                      var sid=$(this).data('id');
                      var sname=$(this).data('code');
                      swal({
                  title: "Delete "+sname+"?",
                  text: "Once deleted, you will not be able to recover this subject!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                        type: 'post',
                        url: '/deleteSubject',
                        data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $(this).data('id'),
                        },
                        success: function(data) {
                          swal("Poof! This subject has been deleted!")
                          .then((value) => {
                            location.reload();
                          });

                        }
                        });

                    
                  } else {
                    swal("This subject is safe!");
                  }
                });
               });



            $(document).on('click', '.deleteNotice', function() {
                      var sname=$(this).data('name');
                      swal({
                  title: "Delete "+sname+"?",
                  text: "Once deleted, you will not be able to recover this notice!",
                  icon: "error",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                        type: 'post',
                        url: '/deleteNotice',
                        data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $(this).data('id'),
                        'picture': $(this).data('pic'),
                        },
                        success: function(data) {
                          swal("Poof! This Notice has been deleted!")
                          .then((value) => {
                            location.reload();
                          });

                        }
                        });

                    
                  } else {
                    swal("This Notice is safe!");
                  }
                });
               });


               $(document).on('click', '.deleteEvent', function() {
                      var sname=$(this).data('name');
                      swal({
                  title: "Delete "+sname+"?",
                  text: "Once deleted, you will not be able to recover this event!",
                   icon: "error",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                        type: 'post',
                        url: '/deleteEvent',
                        data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $(this).data('id'),
                        'picture': $(this).data('pic'),
                        },
                        success: function(data) {
                          swal("Poof! This Event has been deleted!")
                          .then((value) => {
                            location.reload();
                          });

                        }
                        });

                    
                  } else {
                    swal("This Event is safe!");
                  }
                });
               });






            </script>



<script>
        $('#ButtonRefresh').click(function(){
            location.reload();

        });
</script>




  </body>
</html>