<!DOCTYPE html>
<html>
    <head>
        
        <title>Admin|Prmotion</title>
    
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-prmotion.css')}}" />

        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")

<!----------------------------------------------------------------End Side menu-->


<!--start main-contenet---------------------------------------------------------->
<div class="content-wrapper">
  <div class="container-fluid">
      <!--start ------------------------------------------------------------->
      <div class="row mt-5 mb-5">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header"> 
              <h5>Promotions</h5>
            </div>
            <div class="card-body row ">
              <div class="col-md-4 col-sm-6">
                <div class="pricingtable pull-up">
                  <!-- <div class="price-value"><span class="currency">$</span><span class="amount">10</span><span class="duration">/mo</span></div> -->
                  <svg x="0" y="0" viewBox="0 0 360 220">
                    <g>
                      <path fill="#7e37d8" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                    </g>
                    <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="60">$10</text>
                    <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                    <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                  </svg>
                  <ul class="pricing-content mt-4">
                    <h3 class="font-primary">New Year</h3>

                    <li>50GB Disk Space</li>
                    <li>50 Email Accounts</li>
                    <li>Maintenance</li>
                    <li>15 Subdomains</li>
                  </ul>
                  <div class="pricingtable-signup"><a class="btn btn-primary btn-lg pull-up" href="#" data-original-title="" title="">Applay</a></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="pricingtable pull-up">
                  <svg x="0" y="0" viewBox="0 0 360 220">
                    <g>
                      <path fill="#7e37d8" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                    </g>
                    <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="60">$20</text>
                    <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                    <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                  </svg>
                  <!-- <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span class="duration">/mo</span></div> -->
                  <ul class="pricing-content mt-4">
                    <h3 class="font-primary">Black Friday</h3>

                    <li>10% on all product</li>
                    <li>50 Email Accounts</li>
                    <li>Maintenance</li>
                    <li>15 Subdomains</li>
                  </ul>
                  <div class="pricingtable-signup"><a class="btn btn-primary btn-lg pull-up" href="#" data-original-title="" title="">Applay</a></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="pricingtable pull-up">
                  <svg x="0" y="0" viewBox="0 0 360 220">
                    <g>
                      <path fill="#7e37d8" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061                                          c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243                                          s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48                                          L0.732,193.75z"></path>
                    </g>
                    <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="60">$30</text>
                    <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                    <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                  </svg>
                  <!-- <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span class="duration">/mo</span></div> -->
                  <ul class="pricing-content mt-4">
                    <h3 class="font-primary">White Friday</h3>
                    <li>Upload 50 product</li>
                    <li>50 Email Accounts</li>
                    <li>Maintenance</li>
                    <li>15 Subdomains</li>
                  </ul>
                  <div class="pricingtable-signup"><a class="btn btn-primary btn-lg pull-up" href="#" data-original-title="" title="">Applay</a></div>
                </div>
              </div>
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