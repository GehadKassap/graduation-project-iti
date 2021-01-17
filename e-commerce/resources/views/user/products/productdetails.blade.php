<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/single_product.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/nivo-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/resp.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style-starter.css') }}">
    


</head>
<body>
@include("user.layouts.firstnav")
   <!-- header -->
   <section class="page_title_area sectionp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page_title">
                        <h3>
                            <a href="home.html">home</a>
                            <span>/</span>
                            <a href="homeCategories.html">shop</a>
                            <span>/</span>
                            <a class="active-pr" href="product_single.html">Product</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title  -->
    <!-- single page content area start -->
    <section class="single_prodduct_page_area sectionp">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="single_page_img">
                        <img src="{{asset('images/category/1.jpg')}}" alt="">
                    </div>
                    <div class="img_thumbnail">
                        <div class="single_thumb">
                          <img src="{{asset('images/category/1.jpg')}}" alt="">
                            
                        </div>
                        <div class="single_thumb">
                           <img src="{{asset('images/category/3.jpg')}}" alt="">
                            
                        </div>
                        <div class="single_thumb">
                            <img src="{{asset('images/category/9.jpg')}}" alt="">
                        </div>
                        <div class="single_thumb">
                           <img src="{{asset('images/category/14.jpg')}}" alt="">
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="single_page_content">
                        <div class="single_page_top_content">
                            <h2>Standard Shoes</h2>
                            <span>$30.00</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum animi nobis ex labore fuga esse vero dignissimos nemo facilis possimus suscipit quia, iusto quisquam dolores accusamus blanditiis eius ipsa itaque.</p>
                        </div>
                        <div class="single_page_top_middle">
                            <div class="pro_ref">
                                <p><span>Availability:</span><span>In Stock</span></p>
                                <p><span>Categories:</span><span>Cloth, Shoes, Perfume</span></p>
                                <p><span>Model:</span><span>2mr30</span></p>
                                <p><span>Tags:</span><span>Cloth, Shoes, Perfume</span></p>
                            </div>
                            <form action="#" class="f_num">
                                <label for="numbaric">Quantity</label>
                                <input type="number" id="numbaric" class="number" min="1" value="1">
                            </form>
                        </div>
                        <div class="single_page_footer">
                            <a href="#" class="add_btn">add to cart</a>
                            <a href="fav.html" class="add_btn">whishlist</a>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque cumque consequuntur beatae temporibus voluptates voluptas sint architecto incidunt omnis iste tempora placeat sequi, illum, iure ullam similique modi veritatis quia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque cumque consequuntur beatae temporibus voluptates voluptas sint architecto incidunt omnis iste tempora placeat sequi, illum, iure ullam similique modi veritatis quia!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque cumque consequuntur beatae temporibus voluptates voluptas sint architecto incidunt omnis iste tempora placeat sequi, illum, iure ullam similique modi veritatis quia!</p>
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
                    <div class="single_product">
                        <div class="single_img_slide">
                            <div class="sng_im_p">
                                <a href="#">
                                    <div class="front_img"><img src="{{asset('images/category/1.jpg')}}" alt=""></div>
                                    <div class="back_img"><img src="{{asset('images/category/2.jpg')}}" alt=""></div>
                                </a>
                            </div>
                            <div class="si_img_ic prod_content_area">
                                <div class="prod_content">
                                    <p>$3000</p>
                                    <p>Lorem ipsum dolor.</p>
                                </div>
                                <div class="sic_icon">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Product details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="single_img_slide">
                            <div class="sng_im_p">
                                <a href="#">
                                    <div class="front_img"><img src="{{asset('images/category/1.jpg')}}" alt=""></div>
                                    <div class="back_img"><img src="{{asset('images/category/1.jpg')}}" alt=""></div>
                                </a>
                            </div>
                            <div class="si_img_ic prod_content_area">
                                <div class="prod_content">
                                    <p>$3000</p>
                                    <p>Lorem ipsum dolor.</p>
                                </div>
                                <div class="sic_icon">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Product details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single product -->
                    <div class="single_product">
                        <div class="single_img_slide">
                            <div class="sng_im_p">
                                <a href="#">
                                    <div class="front_img"><img src="{{asset('images/category/3.jpg')}}" alt=""></div>
                                    <div class="back_img"><img src="{{asset('images/category/4.jpg')}}" alt=""></div>
                                </a>
                            </div>
                            <div class="si_img_ic prod_content_area">
                                <div class="prod_content">
                                    <p>$3000</p>
                                    <p>Lorem ipsum dolor.</p>
                                </div>
                                <div class="sic_icon">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Product details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="offer_st">-10%</span>
                    </div>

                    <!-- single product -->
                    <div class="single_product">
                        <div class="single_img_slide">
                            <div class="sng_im_p">
                                <a href="#">
                                    <div class="front_img"><img src="{{asset('images/category/5.jpg')}}" alt=""></div>
                                    <div class="back_img"><img src="{{asset('images/category/6.jpg')}}" alt=""></div>
                                </a>
                            </div>
                            <div class="si_img_ic prod_content_area">
                                <div class="prod_content">
                                    <p>$3000</p>
                                    <p>Lorem ipsum dolor.</p>
                                </div>
                                <div class="sic_icon">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Product details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="single_img_slide">
                            <div class="sng_im_p">
                                <a href="#">
                                    <div class="front_img"><img src="{{asset('images/category/7.jpg')}}" alt=""></div>
                                    <div class="back_img"><img src="{{asset('images/category/8.jpg')}}" alt=""></div>
                                </a>
                            </div>
                            <div class="si_img_ic prod_content_area">
                                <div class="prod_content">
                                    <p>$3000</p>
                                    <p>Lorem ipsum dolor.</p>
                                </div>
                                <div class="sic_icon">
                                    <a href="#" data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" title="Product details">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                            </div>
                            <span class="offer_st">sale</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- .single_slide_area end -->
    <!-- subscrive section area start -->
    <section class="subscrive_section sectionp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscrive_content">
                        <h2>Sign Up To Newsletter</h2>
                        <div class="prod_search">
                            <input type="text" placeholder="Enter Your Email Address">
                            <button class="btnn  sub_search ">
                                subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscrive section area end -->

    @include("user.layouts.footer") 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/owl-carousel.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/owl-carousel.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    


</body>
</html>