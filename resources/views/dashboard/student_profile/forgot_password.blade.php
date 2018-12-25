<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin|SIU</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="home_bar" style="background-color: #796ce3ed;">
                <span><i class="fa fa-arrow-left" style="margin-left: 19px;
                color: #fff;"></i><a href="/" class="btn btn-primary" style="color:#fff;padding:5px;">Back to home</a></span>
              </div>
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Password Reset For Student</h1>
                  </div>
                  <h2>Sylhet International University</h2>
                  <br><br> <br><br>
                </div>
                
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              
              <div class="form d-flex align-items-center">

                @if(isset($details))

               
                <div class="content">
                     <h6 style="color:red">{{$details}}</h6>
                   
                  <form method="post" class="form-validate" action="{{ route('passwordResetConfirm') }}">
                     @csrf
                    <br>
                     <div class="form-group">
                      <input id="confirmation_code" type="text" name="confirmation_code" required data-msg="Please enter your code" class="input-material">
                      <label for="confirmation_code" class="label-material">Confirmation Code</label>
                       @if ($errors->has('confirmation_code'))
                               <span class="errorCustom" role="alert">
                                       {{ $errors->first('confirmation_code') }}
                                    </span>
                                   
                                @endif
                    </div>
                 
  
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        
  

                  </form>
                </div>
              @elseif(isset($message))
                  <div class="content">
                     <h6 style="color:red">{{$message}}</h6>
                   
                  <form method="post" class="form-validate" action="{{ route('passwordResetConfirmPass') }}">
                     @csrf
                    <br>
                     <div class="form-group">
                      <input id="new_pass" type="password"  name="new_pass" required data-msg="Please enter your new password" class="input-material">
                      <label for="new_pass" class="label-material">New Password</label>
                       @if ($errors->has('new_pass'))
                               <span class="errorCustom" role="alert">
                                       {{ $errors->first('new_pass') }}
                                    </span>
                                   
                                @endif
                    </div>
                     <div class="form-group">
                      <input id="confirmation_pass" type="password" name="confirmation_pass" required data-msg="Please Confirm Password" class="input-material">
                      <label for="confirmation_pass" class="label-material">Confirm Password</label>
                       @if ($errors->has('confirmation_pass'))
                               <span class="errorCustom" role="alert">
                                       {{ $errors->first('confirmation_pass') }}
                                    </span>
                                   
                                @endif
                    </div>
                 
  
                       <button type="submit" class="btn btn-primary">Reset</button>
                        
  

                  </form>
                </div>
              @else
               
                <div class="content">
                   
                  <form method="post" class="form-validate" action="{{ route('passwordResetConfirm') }}">
                     @csrf
                    <div class="form-group">
                      <input id="email" type="email" name="email" required data-msg="Please enter your email" class="input-material">
                      <label for="email" class="label-material">Your Email</label>
                          @if ($errors->has('email'))
                                  <span class="errorCustom" role="alert">
                                       {{ $errors->first('email') }}
                                    </span>
                                @endif
                    </div>
                     <div class="form-group">
                      <input id="registration_number" type="number" min="0" name="registration_number" required data-msg="Please enter your registration number" class="input-material">
                      <label for="registration_number" class="label-material">Registration Number</label>
                       @if ($errors->has('registration_number'))
                               <span class="errorCustom" role="alert">
                                       {{ $errors->first('registration_number') }}
                                    </span>
                                   
                                @endif
                    </div>
                 
  
                        <button type="submit" class="btn btn-primary">Send Reset Request</button>
                         <br><br><small>A confirmation code will be send to your valid email address</small>
  

                  </form>
                </div>
                @endif

                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Developed By <a href="#"> Dept. Of CSE, SIU</a>
 
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('js/front.js')}}"></script>
     <script src="{{asset('js/sweetalert.js')}}"></script>

        @if(isset($requestedCode))
          <script>
              swal({
                  title: "Successfully Requested!",
                  text: "{{$details}}",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
      @endif
         @if(isset($incorrect))
          <script>
              swal({
                  title: "Opps Wrong Code!",
                  text: "{{$details}}",
                  icon: "warning",
                  button: "Ok!",
              });
          </script>
      @endif


      
      
      @if(!empty(Session::get('SessionExpired')))
          <script>
              swal({
                  title: "OOps your Session Expired!",
                  text: "Retry again!",
                  icon: "warning",
                  button: "Ok!",
              });
          </script>
        @php

        Session::forget('SessionExpired') 
        @endphp
      @endif
  </body>
</html>