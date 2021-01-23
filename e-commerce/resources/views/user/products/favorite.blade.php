
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourites</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/fav.css') }}">

      <link rel="stylesheet" type="text/css" href="{{ url('/css/all.min.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ url('/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('/css/skitter.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/card.css') }}">

    <style>
        .slider img {height:300px;}
        </style>


</head>

@include("user.layouts.firstnav")
</header>
<section class="my-5" id="card">
        <div class="container">
          <h3 class="mb-5 text-center font-italic">Favorite Products</h3>
            <div class="row">
            <?php $i=0; 
						 ?>
            @foreach($products as $pro)
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                  <div class="proudct-top">
                 <img src="{{ asset('product_images/' . $pro->image)}}" class="w-100" alt="">
                    <div class="overLay">
                     <!--over lay to the img-->
                        <!-- <button type="button" class="btn btn-secondary mb-2" title="quick shop">
                          <i class="fas fa-eye "></i>
                        </button>
                        <button type="button" class="btn btn-secondary mb-2" title="add to wish list">
                          <i class="far fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-secondary mb-2" title="add to cart">
                          <i class="fas fa-shopping-cart"></i>
                        </button> -->
     
                    </div>
                 </div>
                 <!--for the bottom of the img-->
                 <div class="product-bottom text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="far fa-star"></i>
                  <h6 class="mb-1">{{$pro->name}} </h6>
                  <p class="mb-1">{{$pro->description}}</p>
                  <span>{{$pro->price}}$</span><a href="removefav/{{$fav[$i]['id']}}"><span class="badge badge-danger ml-2 p-2 remove">Remove</span></a><br>
                  <p><a href="removeall/{{$pro->id}}"><i class="ti-trash remove-icon fa-7x"></i></a></p>
     
                 </div>
             
                 
      
            </div>
            <?php $i++; ?>
            @endforeach
        </div>
         </section>
        
     
      <!-------------------------------->
      <section class="py-5 container slider">
		  <h3 class="my-3 font-italic">Suggested for you</h3>
		<div class="owl-carousel">
    @foreach($suggest as $prod)
			<div> 
           <a href="{{url('/details' ,$pro->id)}}"><img src="{{ asset('product_images/' . $prod->image)}}" ></a>
			 </div>
       @endforeach
			<!-- <div> 
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
				
			</div> -->
	
		  </div>

      </section> 

     
 @include("user.layouts.footer")  
      
<script type="text/javascript" src="{{ asset('js/homecategory.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fav.js') }}"></script>


</html>