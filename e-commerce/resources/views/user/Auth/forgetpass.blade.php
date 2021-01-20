
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgetPassword</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/SignIn_SignUp_ForgetPass.css') }}">
</head>
<body>
<div class="container">
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="{{asset('images/SignIn_Up/Forgot password-pana .svg')}}" alt="forget password img">
                </div>


                <div class="login__forms">
                        <form action="" class="login__forget  " id="Forget_Pass">
                            <h1 class="login__title"> Forgot your password? </h1>
                            <div class="form-group col-md-12">

                                <input type="email" class="form-control" name='email' placeholder="Enter your Email">
                              </div>
                              <div class="form-group col-md-12">

                               <input name='password' type="password" class="form-control"  placeholder="Enter your new password">
                            </div>
                                   <p class=""> If you’ve forgotten your password, please enter
                                     your registered email address.We’ll send you a link to reset your password.
                                    </p>
                                    <button type="submit" class="btn btn-primary " id="login__button">Continue</button>

                               <div>
                                <span class="login__account">Remember your password?</span>
                              <a href="/signin">  <span class="login__signin" id="sign-in"> Sign In</span></a>
                            </div><br>
                            <a href="home.html" class="login__home" id="Forget"> Back to Home >> </a>
                        </form>
                </div>
            </div>
        </div>

    </div>
    <!---------------->
</body>
</html>

