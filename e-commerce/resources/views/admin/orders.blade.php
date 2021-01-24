<!DOCTYPE html>
<html>
    <head>
        <title>Admin|orders</title>
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-orders.css')}}" />
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")
<!-------------------------------------------------------end side menu-->

<!--start main-contenet---------------------------------------------------------->
<div class="content-wrapper">
  <div class="container-fluid">
      <!--start earnin area------------------------------------------------------------->
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card pull-up">
          <div class="card-body">
              <p class="mb-0 ">Earnings <span class="float-right badge badge-primary">Monthly</span></p>
               <div class="">
               <h4 class="mb-0 py-3 text-primary">{{$price}} LE<span class="float-right"><i class="fas fa-dollar-sign"></i></span></h4>
               </div>
               <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <div class="progress-bar bg-primary" style="width:60%"></div>
                 </div>
              </div>
              <p class="mb-0 mt-2 small-font">Compare to last month <span class="float-right">+15% <i class="fa fa-long-arrow-up"></i></span></p>
            </div>
          </div>
         </div>
    
         <div class="col-12 col-lg-6 col-xl-4">
          <div class="card pull-up">
          <div class="card-body">
              <p class="text-danger mb-0">Earnings <span class="float-right badge badge-danger">Weekly</span></p>
               <div class="">
               <h4 class="mb-0 py-3 text-danger">{{$maxPrice}} LE<span class="float-right"><i class="fas fa-dollar-sign"></i></span></h4>
               </div>
               <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <div class="progress-bar bg-danger" style="width:45%"></div>
                 </div>
              </div>
              <p class="mb-0 mt-2 small-font">Compare to last week <span class="float-right">+32% <i class="fa fa-long-arrow-up"></i></span></p>
            </div>
          </div>
         </div>

         <div class="col-12 col-lg-6 col-xl-4">
            <div class="card pull-up">
            <div class="card-body">
                <p class="text-success mb-0">Earnings <span class="float-right badge badge-success">Today</span></p>
                 <div class="">
                 <h4 class="mb-0 py-3 text-success">{{$minPrice}} LE<span class="float-right"><i class="fas fa-dollar-sign"></i></span></h4>
                 </div>
                 <div class="progress-wrapper">
                  <div class="progress" style="height:5px;">
                  <div class="progress-bar bg-success" style="width:80%"></div>
                   </div>
                </div>
                <p class="mb-0 mt-2 small-font">Compare to yesterday <span class="float-right">+43% <i class="fa fa-long-arrow-up"></i></span></p>
              </div>
            </div>
           </div>
    
       </div>
       <!-----------------------------------------------end of earning area-->
<!--start of recent orders-------------------------------------------------------------------->

  
   <div class="row">
    <div id="recent-transactions" class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                
            </div>            
            <div class="card-content">                
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">#Order Id</th>                                
                                <th class="border-top-0">Customer Name</th>
                                <th class="border-top-0">Products</th>
                                <th class="border-top-0">shipping</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Quantity</th>
                                <th class="border-top-0">AMOUNT</th>

                            </tr>
                        </thead>
                      @foreach($orders as $order)
                        <tbody>
                            <tr>
                                <td >
                                    <a href="{{route('orders.show',$order->id)}}" title="view details">
                                        <i class="fas fa-info-circle mr-2"></i></a>{{$order->id}}</td>
                                <td class="text-truncate">
                                   
                                    <span>{{$order->fullname}}</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset("product_images/$order->image")}}" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                @if($order->state =='deliver')
                                    <button type="button" class="btn btn-sm btn-outline-primary round">{{$order->state}}</button>
                                @elseif($order->state=='cancel')
                                <button type="button" class="btn btn-sm btn-outline-danger round">{{$order->state}}</button>
                                @else
                                <button type="button" class="btn btn-sm btn-outline-warning round">{{$order->state}}</button>
                                @endif
                                </td>
                                <td>
                                {{$order->created_at}}
                                </td>
                                <td>
                                {{$order->quantity}}
                                </td>
                                <td class="text-truncate">{{$order->total}}</td>
                            </tr>
                           
                        </tbody>
                        @endforeach

                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>


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