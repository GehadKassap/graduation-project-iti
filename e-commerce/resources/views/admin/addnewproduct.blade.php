<!DOCTYPE html>
<html>

<head>
    <title>Admin|add-product</title>
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
                    <form id="needs-validation" action="{{route("products.store")}}" novalidate="" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Product Name</label>
                                        <input type="text" class="form-control" id="validationCustom01"
                                            placeholder="Product Name" name="product_name" required="">
                                        <div class="invalid-feedback">
                                            Please provide a product name.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="size">Size</label>

                                        <select id="size" class="custom-select form-control" name="product_size"
                                            required="">
                                            <option value="">Select Product Size</option>
                                            <option value="xl">xl</option>
                                            <option value="xxl">xxl</option>
                                            <option value="large">large</option>
                                            <option value="small">small</option>
                                            <option value="medium">medium</option>
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
                                            <option value="">Select Product Category</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Books">Books</option>
                                            <option value="fashion">fashion</option>
                                            <option value="cosmetics">cosmetics</option>
                                            <option value="Furniture">Furniture</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid category.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="price">Price</label>
                                        <input class=" form-control" id="price" name="product_price" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid price.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="discount">discount</label>
                                        <input type="number" class="form-control" id="discount" name="Product_discount">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="Colors">Colors</label>
                                        <select id="Colors" class="custom-select form-control" name="product_color"
                                            required="">
                                            <option value="">Select Color</option>
                                            <option value="red">red</option>
                                            <option value="white">white</option>
                                            <option value="green">green</option>
                                            <option value="babyblue">babyblue</option>
                                            <option value="blue">blue</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid colors.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="quantity">quantity</label>
                                        <input required="" type="number" class="form-control" id="quantity"
                                            name="Product_quantity">
                                        <div class="invalid-feedback">
                                            Please provide a valid quantity.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="sub_category">Sub Category</label>
                                        <select id="sub_category" class="custom-select form-control" name="sub_category"
                                            required="">
                                            <option value="">Select sub category</option>
                                            <option value="Women">Women </option>
                                            <option value="Men">Men </option>
                                            <option value="Makup">Makup</option>
                                            <option value="Haircare">Haircare</option>
                                            <option value="Chairs">Chairs</option>
                                            <option value="Tables">Tables</option>
                                            <option value="Laptops">Laptops</option>
                                            <option value="Mobiles">Mobiles</option>
                                            <option value="Novels">Novels</option>
                                            <option value="Stories">Stories</option>

                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid Sub category.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Product description</label>
                                    <textarea required="" id="productDescription" name="product_description"
                                        class="form-control"></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a product description.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputGroupFile01">Product Photo Upload</label>
                                    <div class="form-group">
                                        <input type="file" name="image" required>
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