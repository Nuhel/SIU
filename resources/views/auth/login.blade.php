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
                    <h1>Sylhet International University</h1>
                  </div>
                  <p>Acquire a good degree accepted all over the world</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate" action="{{ route('login') }}">
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
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password</label>
                       @if ($errors->has('password'))
                               <span class="errorCustom" role="alert">
                                       {{ $errors->first('password') }}
                                    </span>
                                   
                                @endif
                    </div>
                        <button type="submit" class="btn btn-primary">Login</button>

                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                      <div style="margin-top: 15px" class="form-group terms-conditions">
                      <input id="register-agree" name="remember" type="checkbox" class="checkbox-template " {{ old('remember') ? 'checked' : '' }}>
                      <label for="register-agree">{{ __('Remember Me') }}</label>
                    </div>

                  </form>
     <br><small>Do not have an account? Request super admin to grant one</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Developed By <a href="https://nevadiatechnology.com"> Nevadia Technology</a>
 
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
  </body>
</html>