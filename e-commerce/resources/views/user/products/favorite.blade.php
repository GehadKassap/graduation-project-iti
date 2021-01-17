

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/fav.css') }}">
  
    
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
      
      <script type="text/javascript" src="{{ asset('js/fav.js') }}"></script>
      @include("user.layouts.footer")  
</body>
</html>