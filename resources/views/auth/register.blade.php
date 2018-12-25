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

                      <form class="form-validate" method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-group">
                      
                      <input id="name" type="text"  data-msg="Please enter your name" class="input-material {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                
                                    <span class="errorCustom" role="alert">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                      <label for="name" class="label-material">{{ __('Name') }}</label>
                    </div>
                    <div class="form-group">
                   
                       <input id="email" type="email"  data-msg="Please enter a valid email address" class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                
                                    <span class="errorCustom" role="alert">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                      <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>
                    </div>
                    <div class="form-group">
                      
                                <input id="password"  data-msg="Please enter your password" type="password" class="input-material {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="errorCustom" role="alert">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                      <label for="password" class="label-material">{{ __('Password') }}</label>
                    </div>
                    <div class="form-group">
                      
                         <input id="password-confirm"  data-msg="Please confirm your password" class="input-material" type="password" name="password_confirmation" required>

                               
                     <label for="password-confirm" class="label-material">{{ __('Confirm Password') }}</label>
                    </div>

                    <div class="form-group">
                      <label for="accesscode" class="label-material" style="color: #AEAEAE">Admin Type</label>
                      <select class="form-control input-material"  data-msg="Please select admin type" id="accesscode" name="accesscode" equired>
                                    
                                    
                                    <option value="">Select Type</option>
                                    <option value="Authority">Authority</option>
                                    <option value="CSE Departmental">CSE Departmental</option>
                                    <option value="BBA Departmental">BBA Departmental</option>
                                    <option value="LLB Departmental">LLB Departmental</option>
                                    <option value="English Departmental">English Departmental</option>
                                    <option value="ECE Departmental">ECE Departmental</option>
                      </select> 
                      @if ($errors->has('accesscode'))
                                    <span class="errorCustom" role="alert">
                                        {{"Select Admin Type"}}
                                    </span>
                                @endif    
                    
                    </div>
                    

                    <div class="form-group">
                      <button id="regidter" type="submit" name="registerSubmit" class="btn btn-primary">{{ __('Register') }}</button>
                    </div>
                  </form><small>Already have an account? </small><a href="{{url('/login')}}" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
 <p>Developed By <a href="https://nevadiatechnology.com"> Nevadia Technology</a>
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