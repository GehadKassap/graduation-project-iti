<!DOCTYPE html>
<html>
    <head>
        
        <title>Admin|offers</title>
        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")

<!----------------------------------------------------------------End Side menu-->


<!--start main-contenet---------------------------------------------------------->
<div class="content-wrapper">
  <div class="container-fluid">
<!--start add offers------------------------------------------------------------->
<div class="container-fluid">
    <div class="row mt-5 mb-5">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="form theme-form">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Product Name</label>
                   <input class="form-control" type="text" placeholder="Enter product name" data-original-title="" title="" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input class="form-control" type="text" placeholder="Enter category name" data-original-title="" title="" >

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Offer Name</label>
                    <input class="form-control" type="text" placeholder="Enter offer name" data-original-title="" title="">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Offer </label>
                    <input type="number" class="form-control" placeholder="Enter offer ">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Offer Type</label>
                    <select class="form-control">
                      <option>Enter offer type</option>
                      <option>Friday</option>
                      <option>weekly</option>
                      <option>monthly</option>

                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Starting date</label>
                    <input class="datepicker-here form-control" type="text" data-language="en" data-original-title="" title="">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Ending date</label>
                    <input class="datepicker-here form-control" type="text" data-language="en" data-original-title="" title="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label>Enter some Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group mb-0"><a class="btn btn-success mr-3 pull-up" href="#" data-original-title="" title="">Add</a><a class="btn btn-danger pull-up" href="#" data-original-title="" title="">Cancel</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!------------------------------------------------------------------------end add offers-->


  </div>

</div>
<!-------------------------------------------------------------------------end main-contenet-->
<!--start footer------------------------------------------------------------------------------>
@include("admin.layouts.footer")

<!-----------------------------------------------------------end of main main page wrapper----------------------------------------->

</body>
</html>