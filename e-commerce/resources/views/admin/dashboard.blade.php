<!DOCTYPE html>
<html>
    <head>
        <title>Admin|Home</title>
        <!--************** Plugins******* -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.css">
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-home.css')}}" />
    </head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    @include("admin.layouts.sidenav")
    <!--start main-contenet---------------------------------------------------------->
<div class="content-wrapper">
  <div class="container-fluid">
<!--start of dash board-------------------------------------------------------------------->
    <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3 ">
          <div class="card gradient-deepblue pull-up">
            <div class="card-body">
               <h5 class="text-white mb-0">{{$orders}}<span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
                 <div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width:55%"></div>
                 </div>
              <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="fas fa-long-arrow-alt-up"></i></span></p>
             </div>
          </div> 
        </div>
      <div class="col-12 col-lg-6 col-xl-3">
        <div class="card gradient-orange pull-up">
          <div class="card-body">
             <h5 class="text-white mb-0">{{$products}} <span class="float-right"><i class="fas fa-dollar-sign"></i></span></h5>
               <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
               </div>
             <p class="mb-0 text-white small-font">Total Products <span class="float-right">+1.2% <i class="fas fa-long-arrow-alt-up"></i></span></p>
           </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-3">
        <div class="card gradient-ohhappiness pull-up">
           <div class="card-body">
             <h5 class="text-white mb-0">{{$users}} <span class="float-right"><i class="far fa-user"></i></span></h5>
               <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
               </div>
             <p class="mb-0 text-white small-font">Total Users <span class="float-right">+5.2% <i class="fas fa-long-arrow-alt-up"></i></span></p>
           </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-3">
        <div class="card gradient-ibiza pull-up">
           <div class="card-body">
             <h5 class="text-white mb-0">{{$messages}} <span class="float-right"><i class="fas fa-feather-alt"></i></span></h5>
               <div class="progress my-3" style="height:3px;">
                  <div class="progress-bar" style="width:55%"></div>
               </div>
             <p class="mb-0 text-white small-font">Total Messages <span class="float-right">+2.2% <i class="fas fa-long-arrow-alt-up"></i></span></p>
           </div>
        </div>
      </div>
    </div>
<!----------------------------------------------------------------------------end of dash board-->
<!--start site chart----------------------------------------------------------------------------->
<div class="row">
  <div class="col-12 col-lg-8 col-xl-8 ">
   <div class="card">
  <div class="card-header">Site Traffic
  </div>
  <div class="card-body">
     <ul class="list-inline">
     <li class="list-inline-item"><i class="fa fa-circle mr-2" style="color: #14abef"></i>old Visitor</li>
     <li class="list-inline-item"><i class="fa fa-circle mr-2" style="color: #ade2f9"></i>new Visitor</li>
   </ul>
   <div class="chart-container-1"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
       <canvas id="chart1" width="592" height="325" class="chartjs-render-monitor" style="display: block; height: 260px; width: 474px;"></canvas>
   </div>
  </div>
  
  <div class="row m-0 row-group text-center border-top border-light-3">
    <div class="col-12 col-lg-4">
      <div class="p-3">
        <h5 class="mb-0">{{$users}}</h5>
      <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i> 2.43%</span></small>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="p-3">
        <h5 class="mb-0">{{$products}}</h5>
      <small class="mb-0">Overall products <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="p-3">
        <h5 class="mb-0">{{$reviews}}</h5>
      <small class="mb-0">Overall reviews <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
      </div>
    </div>
  </div>
  
 </div>
</div>

  <div class="col-12 col-lg-4 col-xl-4">
     <div class="card">
        <div class="card-header">Weekly sales
        </div>
        <div class="card-body">
           <div class="chart-container-2">
             <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
              <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                </div>
              </div>
              <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                </div>
              </div>
            </div>
          <canvas id="chart2" width="256" height="235" class="chartjs-render-monitor" style="display: block; height: 188px; width: 205px;"></canvas>
     </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center">
            <tbody>
              <tr>
                <td><i class="fa fa-circle mr-2" style="color: #14abef"></i> Sales</td>
                <td>{{$orders}}</td>
                <td>+55%</td>
              </tr>
              <tr>
                <td><i class="fa fa-circle mr-2" style="color: #02ba5a"></i>Products</td>
                <td>{{$products}}</td>
                <td>+25%</td>
              </tr>
              <tr>
                <td><i class="fa fa-circle mr-2" style="color: #d13adf"></i>Users</td>
                <td>{{$users}}</td>
                <td>+15%</td>
              </tr>
              <tr>
                <td><i class="fa fa-circle mr-2" style="color: #fba540"></i>Reviews</td>
                <td>{{$reviews}}</td>
                <td>+5%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
<!------------------------------------------------------------------------end of charts-->
<!--start social interaction----------------------------------------------------------->
<div class="row">
	<div class="col-12 col-lg-6 col-xl-3">
	   <div class="card pull-up">
	     <div class="card-body">
		   <div class="media align-items-center">
		     
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Facebook Followers</h6>
			   <small class="mb-0">0% <i class="fa fa-arrow-up"></i> Last Week</small>
			 </div>
			 <i class="fab fa-facebook-f text-facebook text-right fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="col-12 col-lg-6 col-xl-3">
	   <div class="card pull-up">
	     <div class="card-body">
		   <div class="media align-items-center">
		     
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Twitter Tweets</h6>
			   <small class="mb-0">0% <i class="fa fa-arrow-up"></i> Last Week</small>
			 </div>
			 <i class="fab fa-twitter text-twitter text-right fa-2x"></i>
		   </div>
		 </div>
	   </div>
	 </div>
	 <div class="col-12 col-lg-6 col-xl-3">
	   <div class="card pull-up">
	     <div class="card-body">
		   <div class="media align-items-center">
			 <div class="media-body ml-3">
			   <h6 class="mb-0">Youtube Subscribers</h6>
			   <small class="mb-0">0% <i class="fa fa-arrow-up"></i>  Last Week</small>
			 </div>
			 <i class="fab fa-youtube text-youtube fa-2x"></i>
		   </div>
		 </div>
	   </div>
   </div>
   <div class="col-12 col-lg-6 col-xl-3">
    <div class="card pull-up">
      <div class="card-body">
      <div class="media align-items-center">
      <div class="media-body ml-3">
        <h6 class="mb-0">pinterest Followers</h6>
        <small class="mb-0">0% <i class="fa fa-arrow-up"></i> Last Week</small>
      </div>
      <i class="fab fa-pinterest-p text-youtube fa-2x"></i>
      </div>
    </div>
    </div>
  </div>
  </div>
 
<!--start footer------------------------------------------------------------------------------>
@include("admin.layouts.footer")

<!--------------------------------------------------------------------------------end footer-->
</div>
<!-----------------------------------------------------------end of main main page wrapper----------------------------------------->

</div>

</div>

<!-------------------------------------------------------------------------end main-contenet-->
<script>
$(function() {
    "use strict";

     // chart 1
	 
		  var ctx = document.getElementById('chart1').getContext('2d');
		
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May","jun", "jul"],
					datasets: [{
						label: 'old Visitor',
						data: ['{{$users}}','{{$products}}','{{$orders}}','{{$reviews}}','{{$messages}}','{{$favs}}'],
						backgroundColor: '#14abef',
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 3
					}, {
						label: 'new vistors',
						data: [7, 5, 14, 7, 12, 6, 10, 6, 11, 5],
						backgroundColor: "rgba(20, 171, 239, 0.35)",
						borderColor: "transparent",
						pointRadius :"0",
						borderWidth: 1
					}]
				},
			options: {
				maintainAspectRatio: false,
				legend: {
				  display: false,
				  labels: {
					fontColor: '#585757',  
					boxWidth:40
				  }
				},
				tooltips: {
				  displayColors:false
				},	
			  scales: {
				  xAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#585757'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(0, 0, 0, 0.05)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#585757'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(0, 0, 0, 0.05)"
					},
				  }]
				 }

			 }
            });
            
			// chart 2
		

		var ctx = document.getElementById("chart2").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["sales", "products", "users", "reviews"],
                datasets: [{
                    backgroundColor: [
                        "#14abef",
                        "#02ba5a",
                        "#d13adf",
                        "#fba540"
                    ],
                    data: ['{{$orders}}','{{$products}}','{{$users}}','{{$reviews}}'],
                    borderWidth: [0, 0, 0, 0]
                }]
            },
        options: {
            maintainAspectRatio: false,
           legend: {
             position :"bottom",	
             display: false,
                labels: {
                  fontColor: '#ddd',  
                  boxWidth:15
               }
            }
            ,
            tooltips: {
              displayColors:false
            }
           }
        });



});


</script>
<script type="text/javascript" src="{{ asset('js/admin/home-admin.js')}}"></script>

</body>
</html>