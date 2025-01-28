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
                    
                <?php include_once('./pages/profile.php'); ?>
                    
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
            </div>
        </div>
    </div>
    
    <?php include_once('./common/footer.php'); ?>
    <script src="assets/js/profile.js"></script>
</body>
</html>
