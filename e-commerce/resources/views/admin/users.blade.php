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
        <div class="card-header border-0">
           <div class="float-left"> <span>Recent Users</span> </div> 
           <div class="float-right"><a class="btn btn-outline-info" href="{{route('users.create')}}"><i class="fas fa-user mr-1"></i>Add User</a></div>  
        </div>      
           <div class="card-action">
              <div class="dropdown">
                <a  id="user-dropdown" class="collapse">
                  <i class="fas fa-ellipsis-h"></i>
                </a>
              </div>
           </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-hover">
              <thead>
                  <tr>
                    <!-- <th>Photo</th> -->
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
              </thead>

              <tbody>
                @foreach($users as $user)
                <tr>
                   
                  <td>{{$user->id}}</td>
                  <td>{{$user->fullname}}</td>
                  <td>
                   {{$user->email}}
                  </td>
                  <td>
                   {{$user->address}}
                  </td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->created_at}}</td>
                  <td>
                     <!-- <i class="far fa-trash-alt " title="delete"></i> -->
                      <form action="{{route('users.destroy',$user)}}" method="post">
                          @csrf
                          @method("delete")
                          <input type="submit" value="Delete" class="btn btn-outline-danger">
                      </form>
                   
                  </td>
                </tr>
                  
                   
                         
                  @endforeach

                   
         
              </tbody>
          </table>
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