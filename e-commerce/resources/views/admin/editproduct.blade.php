<!DOCTYPE html>
<html>

<head>
    <title>Admin|edit-product</title>
    <!--*************Internal style sheet****************-->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-add-product.css')}}" />
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
    <!--start side menue--------------------------------------------------------->
    @include("admin.layouts.sidenav")

    <!--------------------------------------end side menu-->

    <!--start main-contenet---------------------------------------------------------->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!--start products nav------------------------------------------------------------->
            <header class=" accent-3 relative mt-3">
                <div class="container-fluid ">
                    <div class="row p-t-b-10 ">
                        <div class="col">
                            <h4>
                                <i class="fas fa-tshirt"></i>
                                Products
                            </h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <ul class="nav responsive-tab nav-material nav-material-white">
                            <li>
                                <a class="nav-link active" href="{{route("products.index")}}"><i
                                        class="fas fa-layer-group"></i></i>All Products</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route("products.create")}}"><i
                                        class="fas fa-plus-circle"></i> Add
                                    New Product</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </header>

            <!-----------------------------------------------------------------end of products nav-->
            <!--start add product------------------------------------------------------------>
            <div class="container-fluid animatedParent animateOnce my-3">
                <div class="animated fadeInUpShort go">
                    <form id="needs-validation" action="{{route("products.update",$product)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Product Name</label>
                                        <input value="{{$product['name']}}" type="text" class="form-control"
                                            id="validationCustom01" placeholder="Product Name" name="product_name"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please provide a product name.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="category">Size</label>

                                        <select id="size" class="custom-select form-control" name="product_size"
                                            required="">
                                            <option value="">{{$product['sizes']}}</option>
                                            <option value="1">xl</option>
                                            <option value="2">xxl</option>
                                            <option value="3">large</option>
                                            <option value="4">small</option>
                                            <option value="5">medium</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid Size.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="category">Category</label>
                                        <select id="category" class="custom-select form-control" name="product_category"
                                            required="">
                                            <option value="">{{$product['category']}}</option>
                                            <option value="1">Electronics</option>
                                            <option value="2">Books</option>
                                            <option value="3">fashion</option>
                                            <option value="4">cosmetics</option>
                                            <option value="5">Furniture</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid category.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="price">Price</label>
                                        <input value="{{$product['price']}}" class=" form-control" id="price"
                                            name="product_price" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid price.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="discount">discount</label>
                                        <input value="{{$product['discount']}}" type="number" class="form-control"
                                            id="discount" name="Product_discount">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Colors">Colors</label>
                                        <select id="Colors" class="custom-select form-control" name="product_color"
                                            required="">
                                            <option value="">{{$product['colors']}}</option>
                                            <option value="1">red</option>
                                            <option value="2">white</option>
                                            <option value="3">green</option>
                                            <option value="4">babyblue</option>
                                            <option value="5">blue</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid colors.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="quantity">quantity</label>
                                        <input value="{{$product['quantity']}}" required="" type="number"
                                            class="form-control" id="quantity" name="Product_quantity">
                                        <div class="invalid-feedback">
                                            Please provide a valid quantity.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Product description</label>
                                    <input value="{{$product['description']}}" required="" id="productDescription"
                                        name="product_description" class="form-control"></input>
                                    <div class="invalid-feedback">
                                        Please provide a product description.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputGroupFile01">Product Photo Upload</label>
                                    <div class="form-group">
                                        <input value="{{$product['image']}}" type="file" name="image">
                                    </div>
                                </div>
                                <div class=" bg-transparent">
                                    <button class="btn btn-primary pull-up" type="submit">Publish</button>
                                </div>

                                <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function() {
                                    "use strict";
                                    window.addEventListener("load", function() {
                                        var form = document.getElementById("needs-validation");
                                        form.addEventListener("submit", function(event) {
                                            if (form.checkValidity() == false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add("was-validated");
                                            var editorElement = document.getElementById(
                                                "productDescription");
                                            if (editorElement.value == '') {
                                                editorElement.parentNode.classList.add(
                                                    "is-invalid");
                                                editorElement.parentNode.classList.remove(
                                                    "is-valid");
                                            } else {
                                                editorElement.parentNode.classList.remove(
                                                    "is-invalid");
                                                editorElement.parentNode.classList.add("is-valid");
                                            }

                                        }, false);
                                    }, false);
                                }());
                                </script>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!---------------------------------------------------------------------end add products -->

        </div>

    </div>
    <!-------------------------------------------------------------------------end main-contenet-->
    <!--start footer------------------------------------------------------------------------------>
    @include("admin.layouts.footer")

    <!--------------------------------------------------------------------------------end footer-->
    </div>

    <!-----------------------------------------------------------end of main main page wrapper----------------------------------------->


</body>

</html>