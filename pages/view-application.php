<?php 
include_once('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../common/head.php'); ?>

<body>
    <div class="container-scroller">
        <?php  include_once('../db.php'); include_once('../common-fatch-code.php'); include_once('../common/topnav.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once('../common/sidenav.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <?php include_once('../common/sub-menu.php'); ?>
                    </div>
                    <div class="page-header m-0">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2 d-none">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <p class="bg-primary text-white py-2 px-2">Registration Status-
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="row">
                    <!-- ========== Add code =========== -->
                    <div class="col-md-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">View Application</h2>
            <ul class="list-unstyled">
                <li> <i class="mdi mdi-arrow-right-bold-circle pe-1"></i>Certificate from HOD,
                    Institution is mandatory to register as a PG Student</li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i>Senior residents / those
                    having completed their orthopaedic qualification are not eligible to
                    register as PGs</li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Registration fee is
                    inclusive of 18% GST</li>
                <!--<li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Child above 8 Years will have to be register</li>-->
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Children above 8 years
                    will be registered</li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> <b>Senior Citizens</b>
                </li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Kindly note that
                    registration charges for senior citizen are applicable for only the
                    conference registration.(It does not includes CME, Workshop and banquet)
                </li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Senior Citizens should
                    be IOA Member, Above 65 Years. </li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> Senior Citizens are
                    requested to fill & send their completed registration form by 31st October,
                    2025</li>
                <li><i class="mdi mdi-arrow-right-bold-circle pe-1"></i> All other charges for
                    CME, Workshop & Banquet are the same as for IOA Members
                </li>
            </ul>
        </div>
    </div>
</div>
                </div>
                
            </div>
        </div>
    </div>
    <?php include_once('../common/footer.php'); ?>
</body>
</html>



