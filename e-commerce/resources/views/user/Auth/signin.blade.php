

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/SignIn_SignUp_ForgetPass.css') }}">

</head>
<body >

<div class="container">
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="{{asset('images/SignIn_Up/Payment Information-amico.svg')}}"alt="signin photo">
                </div>

                <div class="login__forms">

                    <form action="" class="login__registre " id="form">

                        <h1 class="login__title"> Sign In </h1>

                        <div class="form-group col-md-12">
                            <div class="input-icons">
                            <input type="text" class="form-control" id="username" placeholder="Enter your Username">
                            <!-- <i class="fa fa-check-circle"></i> -->
                            <i class="fa fa-exclamation-circle"></i>
                            <small>Error message</small>    </div>

                          </div>
                          <div class="form-group col-md-12">

                            <input type="email" class="form-control" id="email" placeholder="Enter your Email">
                            <!-- <i class="fa fa-check-circle"></i> -->
		                	<i class="fa fa-exclamation-circle"></i>
			                 <small>Error message</small>
                          </div>

                          <div class="form-group form-check  ml-4 row">
                            <input type="checkbox" class="form-check-input login__remember" id="exampleCheck1">
                            <label class="form-check-label login__remember" for="exampleCheck1">Remember me</label>
                           </div>
                 <br>
                           <a href="/forgetpass" class="login__remember ml-4" id="Forget"> Forgot Password ?</a>

                        <button type="submit" class="btn btn-primary " id="login__button">Sign In</button>

                        <div>
                            <span class="login__account">Don't have an Account?</span>
                           <a class="login__signin" id="sign-up" href="/register"> Sign Up</a>

                        </div><br>

                        <a href="home.html" class="login__home" id="Forget"> Back to Home >> </a>
                    </form>





                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript" src="{{ asset('js/SignIn.js') }}"></script>
</body>
</html>
