<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IOACON 2025 Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/iocon-logo.webp" />
  <style> 
.blink {
    animation: workblink 1s infinite;
}

@keyframes workblink {
    0% {
        /* No style changes at the start */
        color: #fff;
    }
    50% {
        color: yellow;
    }
    100% {
        /* Return to the original color at the end */
    }
}

  </style>
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->

    <?php 
     include_once('./db.php');
    include_once('./common-fatch-code.php');
    include_once('./common/topnav.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include_once('./common/sidenav.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2 d-none">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <p class="bg-primary text-white py-2 px-2">Registration Status - <?=$regPStatus?></p>                  
                </li>
                
                
                
              </ul>
            </nav>
          </div>
          <div class="row d-none">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">$ 15,0000</h2>
                  <h6 class="card-text">Increased by 60%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Weekly Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">45,6334</h2>
                  <h6 class="card-text">Decreased by 10%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">95,5741</h2>
                  <h6 class="card-text">Increased by 5%</h6>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
              <div class="col-md-12 grid-margin">
              <div class="card">
                
                     <!--<h5 class="alert alert-warning">If payment deducted from your bank/credit card but registration status isn't updated, please wait 24hrs. It will be resolved within this timeframe. Thank you for your patience.</h5>-->
                    
                </div>
             </div>    
            <div class="col-md-5 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Registration Guidelines</h4>
                  <ul class="list-unstyled">
                    <li> <i class="mdi mdi-arrow-right-bold-circle pe-1"></i>Certificate from HOD, Institution is mandatory to register as a PG Student</li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i>Senior residents / those having completed their orthopaedic qualification are not eligible to register as PGs</li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Registration fee is inclusive of 18% GST</li>
                    <!--<li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Child above 8 Years will have to be register</li>-->
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Children above 8 years will be registered</li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> <b>Senior Citizens</b></li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Kindly note that registration charges for senior citizen are applicable for only the conference registration.(It does not includes CME, Workshop and banquet) </li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Senior Citizens should be IOA Member, Above 65 Years. </li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Senior Citizens are requested to fill & send their completed registration form by 31st October, 2025</li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> All other charges for CME, Workshop & Banquet are the same as for IOA Members
</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Cancellation Policy</h4>
                  <ul class="list-unstyled">
                    <li> <i class="mdi mdi-arrow-right-bold-circle pe-1"></i>Substitutions: As with all IOACON events, registration is non-transferable that means it cannot be transferred to any other delegate as a substitute.</li>
                     <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> <b>Standard cancellation policy:</b>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i>Processing of refund: Refund will be processed within 45 working days post the conference.</li>
                    <ul class="list-unstyled">
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Refund of cancelled registration will be made only against a written request by email or a post submitted before 31st October, 2025</li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> From 31st October, 2025 onwards, no refund request will be entertained by the Secretariat.</li>
                    <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> 25% of the Registration fee would be deducted as processing charges and the rest will be refunded one month after completion of the conference.</li>
                    </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('./common/footer.php'); ?>