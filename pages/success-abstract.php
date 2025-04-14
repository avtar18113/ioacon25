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

                    <div class="row card">
                        <div class="form-box">
                            <h2 class="text-center text-large">Thank You !!!</h2>
                            <p class="text-center text-large"> You have successfully submitted your abstract and a confirmation mail has been sent to your email
                    id.</p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include_once('../common/footer.php'); ?>
</body>

</html>