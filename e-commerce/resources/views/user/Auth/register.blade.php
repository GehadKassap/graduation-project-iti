
@include("user.layouts.firstnav")

<section>
	<div class="container">
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="{{asset('images/SignIn_Up/signUp.svg')}}" alt="signUp photo">
                </div>

                <div class="login__forms">

                    <form action="" class="login__create " id="form" >
                        <h1 class="login__title"> Create Account </h1>

                    <div class="form-group  col-md-12">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                            <!-- <i class="fa fa-check-circle"></i> -->
		                	<i class="fa fa-exclamation-circle"></i>
			                 <small>Error message</small>
                          </div>

                          <div class="form-group col-md-12">

                            <input type="email" class="form-control" id="email" placeholder=" Email">
                            <!-- <i class="fa fa-check-circle"></i> -->
			                <i class="fa fa-exclamation-circle"></i>
			                <small>Error message</small>
                          </div>

                          <div class="form-group col-md-12">

                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <!-- <i class="fa fa-check-circle"></i> -->
			                <i class="fa fa-exclamation-circle"></i>
			                <small>Error message</small>
                          </div>

                          <div class="form-group col-md-12">

                            <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
                            <!-- <i class="fa fa-check-circle"></i> -->
			                <i class="fa fa-exclamation-circle"></i>
			                <small>Error message</small>
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
