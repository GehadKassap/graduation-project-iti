<!DOCTYPE html>
<html>
    <head>
        <title>Admin|add-user</title>
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
<!--start add new user-------------------------------------------------------------->
<header class=" accent-3 relative mt-3">
  <div class="container-fluid ">
      <div class="row p-t-b-10 ">
          <div class="col">
              <h4>
                <i class="fas fa-user"></i>
                  add new user
              </h4>
          </div>
      </div>
  </div>
</header>
 
<!-----------------------------------------------------------------end add new user-->
<!--start add user------------------------------------------------------------>
<div class="container-fluid animatedParent animateOnce my-3">
    <div class="animated fadeInUpShort go">
       <div class="card">
       <div class="container">
       <form class="mt-5 mb-5" id="needs-validation" novalidate="" action="{{route('users.store')}}" method="post">
        @csrf

            <div class="row">
                <div class="col-md-8 ">
                    
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Name</label>
                            <input type="text" class="form-control" id="validationCustom01" name="fullname" placeholder="user Name" value="{{old('fullname')}}" required="">
                            <!-- <label class="text-danger"> {{$errors->first("fullname")}}</label> -->
                            <div class="invalid-feedback">
                                Please provide name.
                            </div>

                        </div>
                        <div class="col-md-6  mb-3">
                            <label for="validationCustom02">Email</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class=" form-control" id="validationCustom02" name="email" placeholder="user Email" value="{{old('email')}}" required="">
                            </div>
                            <!-- <label class="text-danger"> {{$errors->first("email")}}</label> -->
                            <div class="invalid-feedback">
                                Please provide email.
                            </div>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">password</label>
                            <input type="password" class="form-control" id="validationCustom03" name="password" placeholder="user password" value="{{old('password')}}" required="">
                            <!-- <label class="text-danger"> {{$errors->first("password")}}</label> -->
                            <div class="invalid-feedback">
                                Please provide password.
                            </div>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom04">Address</label>
                            <input type="text" class="form-control" id="validationCustom04" name="address" placeholder="user address" value="{{old('address')}}" required="">
                            <!-- <label class="text-danger"> {{$errors->first("address")}}</label> -->
                            <div class="invalid-feedback">
                                Please provide address.
                            </div>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom05">phone</label>
                            <input type="text" class="form-control" id="validationCustom05" name="phone" placeholder="user phone" value="{{old('phone')}}" required="">
                            <!-- <label class="text-danger"> {{$errors->first("phone")}}</label> -->
                            <div class="invalid-feedback">
                                Please provide phone.
                            </div>

                        </div>
                    
                    
                        <div class="col-md-6 mb-3">
                            <label for="role">User Role</label>
                           
                            <select id="role" class="custom-select form-control" name="role" value="{{old('role')}}" required="">
                                <option value="">Select user role..</option>
                                <option value="1">admin</option>
                                <option value="2">user</option>
                               
                            </select>
                            <!-- <label class="text-danger"> {{$errors->first("role")}}</label> -->
                            <div class="invalid-feedback">
                                Please provide user role.
                            </div>
                        </div>
                        
                        
                   
                    
                    
                    <div class=" bg-transparent">
                    <button class="btn btn-primary pull-up mr-2" type="submit">Submit</button>
                    <a href="{{route('users.index')}}" class="btn btn-danger pull-up" >cancel</a>
                </div>
                    
                    <script>
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