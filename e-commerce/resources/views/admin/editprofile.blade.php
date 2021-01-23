<!DOCTYPE html>
<html>
    <head>
        
        <title>Admin|profile</title>
      
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-edit-profile.css')}}" />
        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")

<!----------------------------------------------------------------End Side menu-->
<!--start nav bar header-------------------------------------------------->

   
  <!--start content-->     
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="content ">
                <div class="row mt-3">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="title mr-3 mt-3"> Edit Profile</h5>
                      </div>
                      <div class="card-body">
                        <form action="{{route('users.update',$User)}}" method="post">
                             @csrf
                             @method("put")
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label> Name</label>
                                          <input type="text" name="fullname" class="form-control"  placeholder="New name" value="{{$User['fullname']}}">
                                                                  </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-7 pr-1">
                                <div class="form-group">
                                  <label for="exampleInputEmail1"> Email address</label>
                                  <input type="email" name="email" class="form-control" placeholder="New email" value="{{$User['email']}}">
                                                      </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-7 pr-1">
                                <div class="form-group ">
                                  <label> New password</label>
                                  <input class="form-control " placeholder="New Password" type="password" name="password" value="{{$User['password']}}">
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-7 pr-1">
                                <div class="form-group ">
                                  <label> New Address</label>
                                  <input class="form-control " placeholder="New address" type="text" name="address" value="{{$User['address']}}">
                                </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-7 pr-1">
                                <div class="form-group ">
                                  <label> New phone</label>
                                  <input class="form-control " placeholder="New phone" type="text" name="phone" value="{{$User['phone']}}">
                                </div>
                              </div>
                          </div>
                          <div class="card-footer ">
                            <button type="submit" class="btn btn-danger pull-up save btn-round">Save</button>
                          </div>
                        </form>
                      </div>
                   
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card card-user">
                      <div class="image">
                        <img src="{{asset('images/admin/bg5.jpg')}}" alt="...">
                      </div>
                      <div class="card-body">
                        <div class="author">
                          <a href="#">
                            <img class="avatar border-gray pull-up" src="{{asset('images/admin/avatar-s-12.jpg')}}" alt="...">
                            <h5 class="title">{{session('admin.fullname')}}</h5>
                          </a>
                          <p class="description">
                          {{session('admin.email')}}
                          </p>
                        </div>
                      </div>
                      <hr>
                      <div class="button-container">
                        <button href="#" class="btn btn-neutral pull-up  btn-icon btn-round btn-lg">
                          <i class="fab fa-facebook-square"></i>
                        </button>
                        <button href="#" class="btn btn-neutral pull-up  btn-icon btn-round btn-lg">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-neutral pull-up  btn-icon btn-round btn-lg">
                          <i class="fab fa-google-plus-square"></i>
                        </button>
                      </div>
                    </div>
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