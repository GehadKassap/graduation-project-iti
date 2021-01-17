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
               <h4 class="mb-0 py-3 text-primary">$92,403 <span class="float-right"><i class="fas fa-dollar-sign"></i></span></h4>
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
               <h4 class="mb-0 py-3 text-danger">$15,456 <span class="float-right"><i class="fas fa-dollar-sign"></i></span></h4>
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
                 <h4 class="mb-0 py-3 text-success">$7,803 <span class="float-right"><i class="fas fa-dollar-sign"></i></span></h4>
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
                                <th class="border-top-0">Categories</th>
                                <th class="border-top-0">Shipping</th>
                                <th class="border-top-0">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate"><a href="admin-order-details.html" title="view details"><i class="fas fa-info-circle mr-2"></i></a>3212</td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="{{asset('images/admin/avatar-s-1.png')}}" alt="avatar">
                                    </span>
                                    <span>Walter R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro2.png')}}" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro4.png')}}" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro5.png')}}" alt="Avatar">
                                        </li>
                                        
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger round">books</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="admin-order-details.html" title="view details"><i class="fas fa-info-circle mr-2"></i></a>4332</td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="{{asset('images/admin/avatar-s-10.jpg')}}" alt="avatar">
                                    </span>
                                    <span>Doris R.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro1.png')}}" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro4.png')}}" alt="Avatar">
                                        </li>                                        
                                        
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-warning round">Electronics</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1850.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="admin-order-details.html" title="view details"><i class="fas fa-info-circle mr-2"></i></a>7654</td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="{{asset('images/admin/avatar-s-4.jpg')}}" alt="avatar">
                                    </span>
                                    <span>Megan S.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro6.png')}}" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro5.png')}}" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-success round">fashion</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 3200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="admin-order-details.html" title="view details"><i class="fas fa-info-circle mr-2"></i></a>8765</td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="{{asset('images/admin/avatar-s-5.jpg')}}" alt="avatar">
                                    </span>
                                    <span>Andrew D.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro4.png')}}" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro3.png')}}" alt="Avatar">
                                        </li>
                                        
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-info round">cosmetics</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 4500.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate"><a href="admin-order-details.html" title="view details"><i class="fas fa-info-circle mr-2"></i></a>2589</td>
                                <td class="text-truncate">
                                    <span class="avatar avatar-xs">
                                        <img class="box-shadow-2" src="{{asset('images/admin/avatar-s-12.jpg')}}" alt="avatar">
                                    </span>
                                    <span>Elizabeth W.</span>
                                </td>
                                <td class="text-truncate p-1">
                                    <ul class="list-unstyled users-list m-0">                                               
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro2.png')}}" alt="Avatar">
                                        </li>
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                            <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/admin/pro1.png')}}" alt="Avatar">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-danger round">Furniture</button>
                                </td>
                                <td>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-truncate">$ 1500.00</td>
                            </tr>
                        </tbody>
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