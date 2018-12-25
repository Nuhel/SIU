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
                    <h1>Student Profile Log in</h1>
                  </div>
                  <h2>Sylhet International University</h2>
                  <br><br> <br><br>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              
              <div class="form d-flex align-items-center">
               
                <div class="content">
                   
                  <form method="post" class="form-validate" action="{{ route('studentLoginConfirm') }}">
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
                      <input id="password" type="password" min="0" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">password</label>
                       @if ($errors->has('password'))
                               <span class="errorCustom" role="alert">
                                       {{ $errors->first('password') }}
                                    </span>
                                   
                                @endif
                    </div>
  
                        <button type="submit" class="btn btn-primary">Login</button>
  

                  </form>
                  <a href="{{ route('passwordReset') }}" style="padding-top:10px;">Forgot Password</a>

     <br><small>Do not have an account? Request Authority to grant one</small>
                </div>
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
    <script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('js/front.js')}}"></script>
<script src="{{asset('js/sweetalert.js')}}"></script>


      @if(isset($lateRequest))
      <script>
      swal({
      title: "Opps You Are Late!",
      text: "{{$details}}",
      icon: "warning",
      button: "Ok!",
      });
      </script>
      @endif
      @if(!empty(Session::get('passwordReseted')))
          <script>
              swal({
                  title: "Your Password has been reseted!",
                  text: "Now you can login with your new password!",
                  icon: "success",
                  button: "Ok!",
              });
          </script>
        @php

        Session::forget('passwordReseted') 
        @endphp
      @endif
      
  </body>
</html>