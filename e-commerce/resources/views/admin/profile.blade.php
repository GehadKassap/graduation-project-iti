<!DOCTYPE html>
<html>
    <head>
    
        <title>Admin|profile</title>   
     <!--*************Internal style sheet****************-->
     <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-profile.css')}}" />
        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")

<!----------------------------------------------------------------End Side menu-->
<!--start nav bar header-------------------------------------------------->

  <!--start content-->     
    <div class="content-wrapper">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-6 mt-3 mb-3">
              <h3>{{session('admin.fullname')}} Profile</h3>
            </div>
          </div>

          <div class="card hovercard text-center">
            <div class="cardheader" style="background-image:url('{{ asset('images/admin/bg5.jpg')}}')"></div>
            <div class="user-image">
              <div class="avatar"><img alt="" src="{{asset('images/admin/avatar-s-12.jpg')}}" class="pull-up" data-original-title="" title=""></div>
              <!-- <div class="icon-wrapper"><a href="admin-profile-edit.html"><i class="fas fa-pencil-alt"></i></a></div> -->
            </div>
            <div class="info">
              <div class="row">
                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-left">
                        <h6><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;Email</h6><span>{{session('admin.email')}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-left">
                        <h6><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Hire Date</h6><span>{{session('admin.created_at')}}</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                  <div class="user-designation">
                    <div class="title"><a target="_blank" href="#" data-original-title="" title="">{{session('admin.fullname')}}</a></div>
                    <div class="desc mt-2">designer</div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-left">
                        <h6><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Contact Us</h6><span>EGYPT {{session('admin.phone')}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-left">
                        <h6><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;Location</h6><span>{{session('admin.address')}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="social-media">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fab fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fab fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fab fa-github"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fab fa-linkedin"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-original-title="" title=""><i class="fa fa-rss"></i></a></li>
                </ul>
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

</body>
</html>