<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/account.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/fav.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
@include("user.layouts.firstnav")
</header>
@if(session::has('user'))
<section id="organizeStyle" >
    <div class="container py-5" id="user">
        <div class="row">
            <!------contain username and small nav for choice card/..-->

               <div class="col-md-4">
               </div>

            <div class="col-md-3">
               <div class="row">
                   <!--for display user name-->
                   <div class=" col-md-12 my-5 py-3 text-center" >
                      <i class="fas fa-user fa-2x mr-2 mt-4 "></i>
                      <!--this icon will change if user man/women-->
                      <span>{{session('user.fullname')}}</span>
                      <br>
                      <small class="ml-5 text-muted">{{session('user.email')}}</small>
                   </div>
                   <!--for navbar of cards /favs and setting-->
                  <div class="col-md-12 usrNav py-2">
                    <ul class="navbar-nav mr-auto  ">
                        <li class="nav-item active userBorder ">
                          <a class="nav-link" href="/cartdetails"><i class="fas fa-book mr-2"></i>My Card </a>
                        </li>
                        <li class="nav-item active userBorder">
                          <a class="nav-link" href=""><i class="fas fa-map-marker-alt mr-2"></i>Shipping Adresses</a>
                        </li>

                        <li class="nav-item active userBorder">
                          <a class="nav-link" href="/favdetails"><i class="fas fa-heart mr-2"></i>Wish List</a>
                        </li>
                        <li class="nav-item active userBorder">
                         <a class="nav-link" href=""><i class="fas fa-ribbon mr-2"></i>Recommended</a>
                        </li>

                        <li class="nav-item active">
                          <a class="nav-link" href=""><i class="fas fa-user-cog mr-2"></i>Setting</a>
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
            @endif
            <!----------------display cards/fav/ordersand track it---------------------------->


        </div>
    </div>
    </div>
</section>


@include("user.layouts.footer")

<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.skitter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homecategory.js') }}"></script>
</body>
</html>
