<!DOCTYPE html>
<html>
    <head>
        <title>Admin|users</title>
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-users.css')}}" />
        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")
<!-------------------------------------------------------end side menu-->

<!--start main-contenet---------------------------------------------------------->
<div class="content-wrapper">
  <div class="container-fluid">
      <!--start users traffic------------------------------------------------------------->
      <div class="row mt-3">
		<div class="col-12 col-lg-4 col-xl-4">
			<div class="card bg-primary  pull-up">
				<div class="card-body">
					<div class="media">
						<div class="media-body text-left">
							<h4 class="text-white mb-0">45240</h4>
							<span class="text-white">Total Likes</span>
						</div>
						<div class="align-self-center w-circle-icon rounded border border-white">
							<i class="far fa-heart text-white"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-4 col-xl-4">
			<div class="card bg-success  pull-up">
				<div class="card-body">
					<div class="media">
						<div class="media-body text-left">
							<h4 class="text-white mb-0">78,325</h4>
							<span class="text-white">Comments</span>
						</div>
						<div class="align-self-center w-circle-icon rounded border border-white">
							<i class="far fa-comments text-white"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-4 col-xl-4">
			<div class="card bg-danger  pull-up">
				<div class="card-body">
					<div class="media">
						<div class="media-body text-left">
							<h4 class="text-white mb-0">25,354</h4>
							<span class="text-white">Total Shares</span>
						</div>
						<div class="align-self-center w-circle-icon rounded border border-white">
							<i class="far fa-star text-white"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
       <!-----------------------------------------------end of users traffic area-->
<!--start of recent orders-------------------------------------------------------------------->
 <div class="row">
    <div class="col-12 col-lg-12">
      <div class="card">
        <div class="card-header border-0">Recent Users 
         <div class="card-action">
            <div class="dropdown">
            <a  id="user-dropdown" class="collapse">
                <i class="fas fa-ellipsis-h"></i>
            </a>
             
             </div>
            </div>
        </div>
          <div class="table-responsive">
                <table class="table align-items-center table-flush table-hover">
                 <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>#ID</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
          <tbody><tr>
                   <td>
                     <img alt="Image placeholder" src="{{asset('images/admin/avatar-s-1.png')}}"  class="product-img">
                   </td>
                   <td>john adam</td>
                   <td>123</td>
                   <td>
                     aa@a.com
                   </td>
                   <td>
                       cairo
                   </td>
                   <td>0109-552-221</td>
                  <td>10 July 2018</td>
                  <td><i class="far fa-trash-alt " title="delete"></i> <i class="fas fa-plus-circle" title="edit"></i></td>
                  </tr>
                  <tr>
                    <td>
                      <img alt="Image placeholder" src="{{asset('images/admin/avatar-s-11.jpg')}}" class="product-img">
                    </td>
                    <td>chris evan</td>
                    <td>123</td>
                    <td>
                      gg@g.com
                    </td>
                    <td>
                        Alex
                    </td>
                    <td>0109-552-221</td>
                   <td>10 July 2019</td>
                   <td><i class="far fa-trash-alt" title="delete"></i> <i class="fas fa-plus-circle" title="edit"></i></td>
                   </tr>
                   <tr>
                    <td>
                      <img alt="Image placeholder" src="{{asset('images/admin/avatar-s-10.jpg')}}" class="product-img">
                    </td>
                    <td>sara sami</td>
                    <td>333</td>
                    <td>
                      vv@v.com
                    </td>
                    <td>
                        cairo
                    </td>
                    <td>0109-552-221</td>
                   <td>10 July 2020</td>
                   <td><i class="far fa-trash-alt" title="delete"></i> <i class="fas fa-plus-circle" title="edit"></i></td>
                   </tr>
                   <tr>
                    <td>
                      <img alt="Image placeholder" src="{{asset('images/admin/avatar-s-5.jpg')}}" class="product-img">
                    </td>
                    <td>john smith</td>
                    <td>444</td>
                    <td>
                      dd@d.com
                    </td>
                    <td>
                        cairo
                    </td>
                    <td>0109-552-221</td>
                   <td>10 june 2020</td>
                   <td><i class="far fa-trash-alt" title="delete"></i> <i class="fas fa-plus-circle" title="edit"></i></td>
                   </tr>
                   <tr>
                    <td>
                      <img alt="Image placeholder" src="{{asset('images/admin/avatar-s-4.jpg')}}" class="product-img">
                    </td>
                    <td> mari jack</td>
                    <td>555</td>
                    <td>
                      ss@s.com
                    </td>
                    <td>
                        cairo
                    </td>
                    <td>0109-552-221</td>
                   <td>5 July 2018</td>
                   <td><i class="far fa-trash-alt " title="delete"></i> <i class="fas fa-plus-circle " title="edit"></i></td>
                   </tr>
                   <tr>
                    <td>
                      <img alt="Image placeholder" src="{{asset('images/admin/avatar-s-4.jpg')}}" class="product-img">
                    </td>
                    <td>nora sam</td>
                    <td>321</td>
                    <td>
                      mm@m.com
                    </td>
                    <td>
                        giza
                    </td>
                    <td>0109-552-221</td>
                   <td>10 July 2019</td>
                   <td><i class="far fa-trash-alt " title="delete"></i> <i class="fas fa-plus-circle " title="edit"></i></td>
                   </tr>
                   
         
                </tbody></table>
              </div>
      </div>
    </div>
   </div> 
  
  

<!------------------------------------------------------------------------end of users-->


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