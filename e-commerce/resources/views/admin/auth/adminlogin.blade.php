<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, shrink-to-fit=no ">
    <title>Admin|Login</title>
    <link rel="icon" type="imgs/logo.png" href="imgs/favicon.png">

<!--***************styel sheets and bootstrap*******-->
<link rel="stylesheet" href="{{ url('/css/admin/all.min.css') }}">
<link rel="stylesheet" href="{{ url('/css/admin/bootstrap.min.css') }}">
    <!--************** Web Fonts******* -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-login.css')}}" />
</head>
<body>    
    <div id="main-wrapper" class="login">
      <div class="hero-wrap min-vh-100">
        <div class="hero-mask opacity-4 bg-secondary"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ asset('images/admin/bg-login.jpg')}}')"></div><!--change imge-->
        <div class="hero-content d-flex min-vh-100">
          <div class="container my-auto">
            <div class="row">
              <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                <div class="hero-wrap rounded shadow-lg p-4 py-sm-5 px-sm-5 my-4">
                  <div class="hero-mask opacity-9 bg-dark"></div>
                  <div class="hero-content">
                    <div class="logo mb-4"><h2 class="d-flex justify-content-center"><i class="fas fa-user-cog text-white mr-2"></i>Admin LogIn</h2> </div>
                    <form id="loginForm" class="form-dark" method="post">
                      <div class="form-group icon-group">
                        <input type="email" class="form-control" id="emailAddress" required placeholder="Email Address">
                        <span class="icon-inside"><i class="fas fa-envelope"></i></span> </div>
                      <div class="form-group icon-group">
                        <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                        <span class="icon-inside"><i class="fas fa-lock"></i></span> </div>
                      <button class="btn btn-primary btn-block shadow-none mt-4 mb-3" type="submit">Sign In</button>
                      <div class="row text-2 mt-4">
                        <div class="col-sm">
                          <div class="form-check custom-control custom-checkbox">
                            <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                            <label class="custom-control-label text-light" for="remember-me">Remember Me</label>
                          </div>
                        </div>
                        <div class="col-sm text-right"><a class="btn-link text-light" href="/forgetpass">Forgot Password ?</a></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--***************javascript**********-->
    <script type="text/javascript" src="{{ asset('js/admin/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/bootstrap.bundle.js')}}"></script>
</body>
</html>