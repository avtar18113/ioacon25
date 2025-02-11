<?php
include_once('../config.php');
?>
<!DOCTYPE html>
<html lang='en'>
<?php include_once('../common/head.php');
?>

<body>
    <div class='container-scroller'>
        <?php include_once('../db.php');
        include_once('../common-fatch-code.php');
        include_once('../common/topnav.php');
        ?>
        <!-- partial -->
        <div class='container-fluid page-body-wrapper'>
            <?php include_once('../common/sidenav.php');
            ?>
            <!-- partial -->
            <div class='main-panel'>
                <div class='content-wrapper'>
                    <div class='row'>
                        <?php include_once '../common/sub-menu.php';
                       
                        ?>
                    </div>


                    <div class='row'>
                        <div class='col-md-12 card vh-90'>
                        <iframe src="<?=$BASE_URL?>/query/generate-receipt.php" width="100%" height="100%" title="OpenAI Website" c></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include_once '../common/footer.php';
    ?>
</body>

</html>