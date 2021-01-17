

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/fav.css') }}">
  
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/reset.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/niceselect.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.css') }}">
        
        <link rel="stylesheet" type="text/css" href="{{ url('/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/flex-slider.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/skitter.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/slicknav.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/card.css') }}">
    <style>
        .slider img {height:300px;}
        </style>


</head>
<body>
@include("user.layouts.firstnav")
<section class="my-5" id="card">
        <div class="container">
          <h3 class="mb-5 text-center font-italic">Favorite Products</h3>
            <div class="row">
 
                <div class="col-md-4">
                 <div class="proudct-top">
                 <img src="{{asset('images/category/shop3.jpg')}}" class="w-100" alt="">
                    <div class="overLay"> <!--over lay to the img-->
                        <button type="button" class="btn btn-secondary mb-2" title="quick shop">
                          <i class="fas fa-eye "></i>
                        </button>
                        <button type="button" class="btn btn-secondary mb-2" title="add to wish list">
                          <i class="far fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary mb-2" title="add to cart">
                          <i class="fas fa-shopping-cart"></i>
                        </button>
     
                    </div>
                 </div>
                 <!--for the bottom of the img-->
                 <div class="product-bottom text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="far fa-star"></i>
                  <h6 class="mb-1">Watch </h6>
                  <p class="mb-1">Lorem product summary for fav </p>
                  <span>300 L.E</span><span class="badge badge-danger ml-2 p-2 remove">Remove from cart</span>

     
                 </div>
             
      
            </div>
        </div>
         </section>
     
      <!-------------------------------->
      <section class="py-5 container slider">
		  <h3 class="my-3 font-italic">Suggested for you</h3>
		<div class="owl-carousel">
			<div> 
              <img src="{{asset('images/test.jpg')}}" >
			 </div>
			<div> 
              <img src="{{asset('images/category/slider2.jpg')}}" alt="">
			 </div>
			<div> 
               <img src="{{asset('images/kitchen/1225.jpg')}}" alt="">
			</div>
			<div> 
                <img src="{{asset('images/test.jpg')}}"  alt="">
				
			 </div>
			<div> 
                <img src="{{asset('images/category/slider2.jpg')}}" alt="">

			 </div>
			 <div>
                <img src="{{asset('images/kitchen/1225.jpg')}}" alt=""> 
				
			</div>
			<div> 
                <img src="{{asset('images/kitchen/blender-juice-machine (3).jpg')}}" alt=""> 
			</div>
			<div>  
                <img src="{{asset('images/test.jpg')}}" alt="">
			 </div>
			<div> 
                <img src="{{asset('images/category/slider2.jpg')}}" alt="">
			 </div>
			 <div> 
                <img src="{{asset('images/kitchen/1225.jpg')}}" alt="">
				
			</div>
	
		  </div>

      </section> 
      @include("user.layouts.footer")  
      
      <script type="text/javascript" src="{{ asset('js/fav.js') }}"></script>
     


<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/colors.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.skitter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slicknav.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/nicesellect.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/finalcountdown.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('js/flex-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/onepage-nav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/active.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homecategory.js') }}"></script>

</body>
</html>