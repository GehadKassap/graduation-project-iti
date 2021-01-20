<!DOCTYPE html>
<html>

<head>

    <title>Admin|products</title>

    <!--*************Internal style sheet****************-->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-products.css')}}" />


</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
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
                                <a class="nav-link active" href="{{route('products.index')}}"><i
                                        class="fas fa-layer-group"></i></i>All Products</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('products.create')}}"><i
                                        class="fas fa-plus-circle"></i> Add New Product</a>
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
                                            <thead>
                                                <tr>
                                                    <th>
                                                        image
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        price
                                                    </th>
                                                    <th>
                                                        discout
                                                    </th>
                                                    <th>
                                                        category
                                                    </th>
                                                    <th>
                                                        description
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $product)
                                                <tr class="no-b">
                                                    <td class="w-10">
                                                        <img src="{{asset("product_images/$product[image]")}}" alt="">
                                                    </td>
                                                    <td>
                                                        <h6>{{$product["name"]}}</h6>
                                                        <small class="text-muted">quantity :
                                                            {{$product["quantity"]}}</small>
                                                    </td>
                                                    <td>${{$product["price"]}}</td>
                                                    <td>discount : %{{$product["discount"]}}</td>
                                                    <td> <button type="button"
                                                            class="btn btn-sm btn-outline-warning round">{{$product["category"]}}</button>
                                                    </td>
                                                    <td>
                                                        <span><i
                                                                class="fas fa-info  btn-outline-info mr-1"></i></i>{{$product["description"]}}
                                                        </span><br>

                                                    </td>
                                                    <td>
                                                        <a href="{{route('products.edit',$product)}}"
                                                            class="btn btn-fab-sm ">
                                                            <i class="far fa-edit mr-2 btn-outline-primary"></i>


                                                        </a>
                                                        <form class="btn btn-fab-sm "
                                                            action="{{route('products.destroy',$product)}}"
                                                            method="Post">
                                                            @csrf
                                                            @method("delete")
                                                            <button type="submit"
                                                                class="far fa-trash-alt mr-2 btn-outline-danger"></button>


                                                        </form>
                                                    </td>
                                                    <!-- <form>
                                                       
                                                        <input type="summit">delete</input>

                                                    </form> -->
                                                </tr>
                                                @endforeach
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