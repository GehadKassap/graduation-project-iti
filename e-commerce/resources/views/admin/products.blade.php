<!DOCTYPE html>
<html>
    <head>
        
        <title>Admin|products</title>
        
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-products.css')}}" />

        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")

<!----------------------------------------------------------------End Side menu-->

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
<!--start products details------------------------------------------------------------>
<div class="container-fluid animatedParent animateOnce my-3">
  <div class="animated fadeInUpShort go">
      <div class="row">
          <div class="col-md-12">
              <div class="card no-b shadow">
                  <div class="card-body p-0">
                      <div class="table-responsive">
                          <table class="table table-hover ">
                              <tbody>
                              <tr class="no-b">
                                  <td class="w-10">
                                      <img src="{{asset('images/admin/pro1.png')}}" alt="">
                                  </td>
                                  <td>
                                      <h6>Apple Product</h6>
                                      <small class="text-muted">Mobile Phones</small>
                                  </td>
                                  <td>$250</td>
                                  <td> <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button></td>
                                  <td>
                                      <span><i class="fas fa-info  btn-outline-info mr-1"></i></i>Product details</span><br>
                                      
                                  </td>
                                  <td>
                                      <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                                  </td>
                              </tr>
                              <tr class="no-b">
                                <td class="w-10">
                                    <img src="{{asset('images/admin/pro2.png')}}" alt="">
                                </td>
                                <td>
                                    <h6>Apple Product</h6>
                                    <small class="text-muted">Mobile Phones</small>
                                </td>
                                <td>$250</td>
                                <td> <button type="button" class="btn btn-sm btn-outline-danger round">Furniture</button></td>
                                <td>
                                    <span><i class="fas fa-info btn-outline-info mr-1"></i></i>Product details</span><br>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                                </td>
                            </tr>
                            <tr class="no-b">
                              <td class="w-10">
                                  <img src="{{asset('images/admin/pro3.png')}}" alt="">
                              </td>
                              <td>
                                  <h6>Apple Product</h6>
                                  <small class="text-muted">Mobile Phones</small>
                              </td>
                              <td>$250</td>
                              <td> <button type="button" class="btn btn-sm btn-outline-info round">cosmetics</button></td>
                              <td>
                                  <span><i class="fas fa-info btn-outline-info mr-1"></i></i>Product details</span><br>
                                  
                              </td>
                              <td>
                                  <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                              </td>
                          </tr>
                          <tr class="no-b">
                            <td class="w-10">
                                <img src="{{asset('images/admin/pro4.png')}}" alt="">
                            </td>
                            <td>
                                <h6>Apple Product</h6>
                                <small class="text-muted">Mobile Phones</small>
                            </td>
                            <td>$250</td>
                            <td> <button type="button" class="btn btn-sm btn-outline-danger round">books</button></td>
                            <td>
                                <span><i class="fas fa-info btn-outline-info mr-1"></i></i>Product details</span><br>
                                
                            </td>
                            <td>
                                <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                            </td>
                        </tr>
                        <tr class="no-b">
                          <td class="w-10">
                              <img src="{{asset('images/admin/pro1.png')}}" alt="">
                          </td>
                          <td>
                              <h6>Apple Product</h6>
                              <small class="text-muted">Mobile Phones</small>
                          </td>
                          <td>$250</td>
                          <td> <button type="button" class="btn btn-sm btn-outline-success round">fashion</button></td>
                          <td>
                              <span><i class="fas fa-info btn-outline-info mr-1"></i></i>Product details</span><br>
                              
                          </td>
                          <td>
                              <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                          </td>
                      </tr>
                      <tr class="no-b">
                        <td class="w-10">
                            <img src="{{asset('images/admin/pro5.png')}}" alt="">
                        </td>
                        <td>
                            <h6>Apple Product</h6>
                            <small class="text-muted">Mobile Phones</small>
                        </td>
                        <td>$250</td>
                        <td> <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button></td>
                        <td>
                            <span><i class="fas fa-info btn-outline-info mr-1"></i></i>Product details</span><br>
                            
                        </td>
                        <td>
                            <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                        </td>
                    </tr>
                    <tr class="no-b">
                      <td class="w-10">
                          <img src="{{asset('images/admin/pro1.png')}}" alt="">
                      </td>
                      <td>
                          <h6>Apple Product</h6>
                          <small class="text-muted">Mobile Phones</small>
                      </td>
                      <td>$250</td>
                      <td> <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button></td>
                      <td>
                          <span><i class="fas fa-info  btn-outline-info mr-1"></i></i>Product details</span><br>
                          
                      </td>
                      <td>
                          <a class="btn btn-fab-sm "><i class="far fa-edit mr-2 btn-outline-primary"></i><i class="far fa-trash-alt btn-outline-danger"></i></a>
                      </td>
                  </tr>
                              
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <nav class="pt-3" aria-label="Page navigation">
          <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">Next</a>
              </li>
          </ul>
      </nav>
  </div>
</div>
<!---------------------------------------------------------------------end products details-->

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