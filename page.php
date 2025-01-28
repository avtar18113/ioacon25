<?php 
include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('./common/head.php'); ?>

<body>
    <div class="container-scroller">
        <?php  include_once('./db.php'); include_once('./common-fatch-code.php'); include_once('./common/topnav.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once('./common/sidenav.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="row">
                        <div class="col-md-12 m-0">
                            <div class="card bg-gradient-danger">
                                <div class="card-body p-2 m-0">
                                    <a href="#" class="btn btn-danger">Reciept</a>
                                    <a href="#" class="btn btn-danger">Invitation Letter</a>
                                    <a href="#" class="btn btn-danger">Upload CV</a>
                                    <a href="#" class="btn btn-danger">View Program</a>
                                    <a href="#" class="btn btn-danger">Download Reciept</a>
                                </div>
                            </div>
                        </div>
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
                    <?php

                       $id = $_GET['id'];
                       
                        if($id=='view-application'){ include_once('./pages/view-application.php');}
                        else if($id=='view-profile'){ include_once('./pages/view-profile.php');}  
                        else if($id=='view-abstract'){ include_once('./pages/view-abstract.php');}                         
                        ?>   
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php include_once('./common/footer.php'); ?>
</body>
</html>
