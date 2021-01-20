

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/SignIn_SignUp_ForgetPass.css') }}">
</head>
<body>

<section>
	<div class="container">
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="{{asset('images/SignIn_Up/signUp.svg')}}" alt="signUp photo">
                </div>

                <div class="login__forms">

                    <form action="register" method="post" class="login__create " id="form" >

                        <h1 class="login__title"> Create Account </h1>

                    <div class="form-group  col-md-12">
                    @csrf

                            <input name="fullname" type="text" class="form-control" id="username" placeholder="Username">
                            <!-- <i class="fa fa-check-circle"></i> -->
		                	<i class="fa fa-exclamation-circle"></i>
                             <span class="text-muted">Your Name should between 5 to 100 character</span>
                     
                          </div>

                          <div class="form-group col-md-12">

                            <input  name="email" type="email" class="form-control" id="email" placeholder=" Email">
                            <!-- <i class="fa fa-check-circle"></i> -->
			                <i class="fa fa-exclamation-circle"></i>
			                
                       
                          </div>

                          <div class="form-group col-md-12">

                            <input  name="password" type="password" class="form-control" id="password" placeholder="Password">
                            <!-- <i class="fa fa-check-circle"></i> -->
			                <i class="fa fa-exclamation-circle"></i>
			                <span class="text-muted">Password should between 3 to 30 character</span>

                        
                          </div>



                          <button type="submit" class="btn btn-primary " id="login__button">Sign Up</button>


                        <div>
                            <span class="login__account">Already have an Account?</span>
                            <a class="login__signup" id="sign-in" href="/signin"> Sign In</a>
                        </div>

                        <div class="login__social">
                            <a href="#" class="login__social-icon"><i class='bx bxl-facebook' ></i></a>
                            <a href="#" class="login__social-icon"><i class='bx bxl-twitter' ></i></a>
                            <a href="#" class="login__social-icon"><i class='bx bxl-google' ></i></a>
                            <a href="#" class="login__social-icon"><i class='bx bxl-linkedin' ></i></a>
                        </div><br>
                        <a href="home.html" class="login__home" id="Forget"> Back to Home >> </a>
                    </form>

                </div>
            </div>
        </div>

    </div>


</section>




<!----->
<!-- <script type="text/javascript" src="{{ asset('js/SignUp.js') }}"></script> -->
</body>
</html>
