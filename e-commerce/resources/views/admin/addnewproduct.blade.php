<!DOCTYPE html>
<html>
    <head>
        <title>Admin|add-product</title>
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-add-product.css')}}" />
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
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
                  <a class="nav-link active" href="admin-products.html"><i class="fas fa-layer-group"></i></i>All Products</a>
              </li>
              <li>
                  <a class="nav-link" href="admin-add-product.html"><i class="fas fa-plus-circle"></i> Add New Product</a>
              </li>
              
          </ul>
      </div>
  </div>
</header>
 
<!-----------------------------------------------------------------end of products nav-->
<!--start add product------------------------------------------------------------>
<div class="container-fluid animatedParent animateOnce my-3">
    <div class="animated fadeInUpShort go">
        <form id="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Product Name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Product Name" value="Apple Iphone 8" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Product Brand</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Apple" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="category">Category</label>
                           
                            <select id="category" class="custom-select form-control" required="">
                                <option value="">Select Product Category</option>
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
                            <label for="validationCustom04">Price</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="$ 250" required="">
                            <div class="invalid-feedback">
                                Please provide a valid price.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="sku">EGP</label>
                            <input type="text" class="form-control" id="sku" placeholder="EGP-1029-5998" required="">
                            <div class="invalid-feedback">
                                Please provide a valid EGP.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productDetails">Product Details</label>
                        <textarea id="productDetails" name="productDetails" class="form-control"></textarea>
                        <div class="invalid-feedback">
                            Please provide a product details.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputGroupFile01">Product Photo Upload</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" class="form-control">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                    <div class=" bg-transparent">
                    <button class="btn btn-primary pull-up" type="submit">Publish</button>
                </div>
                    
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            "use strict";
                            window.addEventListener("load", function () {
                                var form = document.getElementById("needs-validation");
                                form.addEventListener("submit", function (event) {
                                    if (form.checkValidity() == false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                    var editorElement = document.getElementById("productDetails");
                                    if (editorElement.value == '') {
                                        editorElement.parentNode.classList.add("is-invalid");
                                        editorElement.parentNode.classList.remove("is-valid");
                                    } else {
                                        editorElement.parentNode.classList.remove("is-invalid");
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