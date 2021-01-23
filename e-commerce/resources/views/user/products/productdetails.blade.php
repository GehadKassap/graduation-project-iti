<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @section('title')
   product details
    @endsection -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/nivo-slider.css') }}">
    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/owl.carousel.min.css') }}">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <!-- jquery ui -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- bootstrap link -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <!-- reset link -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/reset_single_product.css') }}">
    <!-- style _css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/single_product.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/resp.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style-starter.css') }}">
    <!-- <link rel="icon" type="..imgs/favicon.png" href="../imgs/favicon.png"> -->
    <style>
        .btnss:hover
        {
            background-color:white ;
            color:black;
        }
    </style>
</head>

<body>
    <!-- header -->
    @include("user.layouts.firstnav")
    <div class="header-inner">
                <div class="container">
                    <div class="cat-nav-head">
                        <div class="row">
                            <div class="col-lg-3">

                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="menu-area">
                                    <!-- Main Menu -->
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="navbar-collapse">
                                            <div class="nav-inner">
                                                <ul class="nav main-menu menu navbar-nav">
                                                    <li class="active"><a href="#">Home</a></li>
                                                    <li><a href="/allcategories">Products</a></li>
                                                    <li><a >Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                        <ul class="dropdown">
                                                            <li><a href="/cartdetails">Cart</a></li>
                                                            <li><a href="/favdetails">Favorite</a></li>
                                                        </ul>
                                                    </li>


                                                    <li><a href="/contactus">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Header Inner -->
        </header>
    <!-- header -->

    <!-- single page content area start -->
    <section class="single_prodduct_page_area sectionp">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">

                    <div class="single_page_img">
                        <img src="{{ asset('product_images/' . $product->image)}}" alt="">
                    </div>

                    <div class="img_thumbnail">
                    @foreach($products as $prod)

                        <div class="single_thumb">

                     <img style="width:200px;height:140px;" class="pic-1 img-fluid" src="{{ asset('product_images/' . $prod->image)}}">


                        </div>

                        @endforeach


                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="single_page_content">
                        <div class="single_page_top_content">
                            <h2>{{$product->name}}</h2>
                            <span>{{$product->price}}$</span>
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="single_page_top_middle">
                            <div class="pro_ref">
                                <p><span>Availability:</span><span>In Stock</span></p>
                                <p><span>Categories:</span><span>{{$product->category}}</span></p>
                                <!-- <p><span>Model:</span><span>2mr30</span></p> -->
                                <p><span>Tags:</span><span>Cloth, Shoes, Perfume</span></p>
                            </div>
                            <!-- <form action="#" class="f_num">
                                 <label for="numbaric">Quantity</label>
                                <input type="number" id="numbaric" class="number" min="1" value="1">
                            </form> -->
                        </div>

                        <div class="single_page_footer row">

                            <a style="color: gray; border:none; border-radius:3px;" href="/cart" class="add_btn ">add to cart</a>
                            <a style="color: gray; border:none; border-radius:3px; " href="/favorite" class="add_btn">whishlist</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single page content area end -->
    <!-- single page table area start -->
    <section class="single_page_table_area">
        <div id="exTab1" class="container">
            <ul class="nav nav-pills tab_list">
                <li class="active">
                    <a href="#1a" data-toggle="tab">Description</a>
                </li>
                <li><a href="#2a" data-toggle="tab">reviews</a>
                </li>

            </ul>
            <div class="tab-content clearfix  tab_body">
                <div class="tab-pane active" id="1a">
                    <div class="tab_one_c">
                              <p>{{$product->description}}</p>

                    </div>
                </div>
                <div class="tab-pane" id="2a">
                    <div class="review_area">
                        <div class="rev_title">
                            <h4>Review By Koisk</h4>
                        </div>
                        <ul class="review_list">
                            <li><span>Quality: </span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                            <li><span>price: </span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                            <li><span>value: </span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <h6>Write A Review</h6>
                        <form action="#" class="review_from">

                            <label for="r_name">name</label>
                            <input type="text" id="r_name" class="c_name name r_name">
                            <label for="r_sum">summary</label>
                            <input type="emial" id="r_sum" class="c_email email">
                            <label for="r_rev">review</label>
                            <textarea name="c_from" id="r_rev" class="c_m rev r_rev"></textarea>
                            <button class="btnn wr_c_btn c_btn reb_btn">Sumbit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- table area end -->

    <!-- .single_slide_area start -->
    <section class="sectionp single_pr_slide_area">
        <div class="container">
            <div class="single_page_slide">
                <h2>Related Product</h2>
                <div class="products_area sing_page_pr_slide">
                    <!-- single-product -->
                   @foreach($relatedproducts as $produ)

                    <div class="single_product">
                        <div class="single_img_slide">
                            <div class="sng_im_p">
                                <a href="{{url('/details' ,[$produ->id , $produ->category])}}">
                                    <div class="front_img"><img style="width:280px;height:240px;" src="{{ asset('product_images/' . $produ->image)}}" ></div>
                                    <div class="back_img"><img style="width:280px;height:240px;" src="{{ asset('product_images/' . $produ->image)}}" ></div>
                                </a>
                            </div>
                            <div class="si_img_ic prod_content_area">
                                <div class="prod_content">
                                    <p>{{$produ->price}} L.E</p>
                                    <p>{{$produ->name}}</p>
                                </div>
                                <div class="sic_icon">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="{{url('/details' ,[$produ->id , $produ->category])}}" data-toggle="tooltip" title="Product details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
            </div>
        </div>
    </section>
    <!-- .single_slide_area end -->
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->

    @include("user.layouts.footer")
    <!-- js section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.skitter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/homecategory.js') }}"></script>
</body>

</html>
