<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/account.css') }}">

    
    
</head>
<body>
@include("user.layouts.firstnav")

<section id="organizeStyle" >
    <div class="container py-5" id="user">
        <div class="row">
            <!------contain username and small nav for choice card/..-->
            <div class="col-md-3">
               <div class="row">
                   <!--for display user name-->
                   <div class=" col-md-12 my-5 py-3 text-center" >
                    <i class="fas fa-user fa-2x mr-2 mt-4 "></i>
                    <!--this icon will change if user man/women-->
                    <span>user Name</span>
                    <br>
                    <small class="ml-5 text-muted">xxx@xxx.com</small>
                   </div>
                   <!--for navbar of cards /favs and setting-->
                   <div class="col-md-12 usrNav py-2">
                    <ul class="navbar-nav mr-auto  ">
                        <li class="nav-item active userBorder ">
                          <a class="nav-link" href="#"><i class="fas fa-book mr-2"></i>My Orders <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active userBorder">
                          <a class="nav-link" href="#"><i class="fas fa-map-marker-alt mr-2"></i>Shipping Adresses</a>
                        </li>
                      
                      <li class="nav-item active userBorder">
                        <a class="nav-link" href="#"><i class="fas fa-heart mr-2"></i>Wish List</a>
                      </li>
                      <li class="nav-item active userBorder">
                        <a class="nav-link" href="#"><i class="fas fa-ribbon mr-2"></i>Recommended</a>
                      </li>
                   
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-user-cog mr-2"></i>Setting</a>
                      </li>
                    </ul>   
    
    
    
    
    
    
    
    
                   </div>
               </div>
            </div>
            <!----------------display cards/fav/ordersand track it---------------------------->
            <div class="col-md-8 mt-5 ml-5" >
              <div class="row">
                  <div class="col-md-4">
                    <div class="proudct-top">
                        <img src="{{asset('images/category/shop1.jpg')}}" class="w-100" alt="">
                        
                        <div class="overLay"> <!--over lay to the img-->
                            <button type="button" class="btn btn-secondary mb-2" title="quick shop">
                              <i class="fas fa-eye "></i>
                            </button>
                            <button type="button" class="btn btn-secondary mb-2" title="add to wish list">
                              <i class="far fa-heart"></i>
                            </button>
                            <button type="button" data-id="1" data-name="Watch" data-summery="summery1" data-price="300" data-quantity="1" data-image="../imgs/category/shop3.jpg"  class="btn btn-secondary mb-2" title="add to cart">
                              <i class="fas fa-shopping-cart"></i>
                            </button>
      
                        </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>


@include("user.layouts.footer")  
</body>
</html>