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
                                        <table class="table align-items-center table-flush table-hover">
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
                                                        sub category
                                                    </th>
                                                    <th>
                                                        description
                                                    </th>
                                                    <th>
                                                        Action
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
                                                    <td>{{$product["price"]}} LE</td>
                                                    <td> %{{$product["discount"]}}</td>
                                                    <td> 
                                                    @if($product["category"]=='Electronics')
                                                           <button type="button" class="btn btn-sm btn-outline-danger round">{{$product["category"]}}</button>
                                                    @elseif($product["category"]=='Books')
                                                           <button type="button" class="btn btn-sm btn-outline-info round">{{$product["category"]}}</button>
                                                    @elseif($product["category"]=='fashion')
                                                           <button type="button" class="btn btn-sm btn-outline-warning round">{{$product["category"]}}</button>
                                                    @elseif($product["category"]=='cosmetics')
                                                           <button type="button" class="btn btn-sm btn-outline-primary round">{{$product["category"]}}</button>
                                                    @else
                                                         <button type="button" class="btn btn-sm btn-outline-info round">{{$product["category"]}}</button>
                                                    @endif
                                                    </td>
                                                    <td> 
                                                    @if($product["sub_category"]=='Women')
                                                           <button type="button" class="btn btn-sm btn-outline-info round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Men')
                                                           <button type="button" class="btn btn-sm btn-outline-info round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Makup')
                                                           <button type="button" class="btn btn-sm btn-outline-primary round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Haircare')
                                                           <button type="button" class="btn btn-sm btn-outline-warning round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Chairs')
                                                           <button type="button" class="btn btn-sm btn-outline-warning round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Tables')
                                                           <button type="button" class="btn btn-sm btn-outline-danger round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Laptops')
                                                           <button type="button" class="btn btn-sm btn-outline-primary round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Mobiles')
                                                           <button type="button" class="btn btn-sm btn-outline-warning round">{{$product["sub_category"]}}</button>
                                                    @elseif($product["sub_category"]=='Novels')
                                                           <button type="button" class="btn btn-sm btn-outline-info round">{{$product["sub_category"]}}</button>
                                                    @else
                                                           <button type="button" class="btn btn-sm btn-outline-primary round">{{$product["sub_category"]}}</button>
                                                    @endif
                                                    </td>
                                                    <td>
                                                        <span>{{$product["description"]}}</span><br>
                                                    </td>
                                                    <td>
                                                        <a class="edit"style="text-decoration:none;" href="{{route('products.edit',$product)}}">
                                                        <!-- <i class="fas fa-pencil-alt  btn-outline-info"></i> -->
                                                        <button type="submit" class="btn btn-sm btn-outline-info round"><i class="fas fa-pencil-alt"></i></button>

                                                        </a>
                                                        <form class="btn btn-fab-sm "
                                                            action="{{route('products.destroy',$product)}}"
                                                            method="Post">
                                                            @csrf
                                                            @method("delete")
                                                            <!-- <button type="submit"
                                                                class="far fa-trash-alt  btn-outline-danger"></button> -->
                                                                <button type="submit" class="btn btn-sm btn-outline-danger round"><i class="far fa-trash-alt"></i></button>

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