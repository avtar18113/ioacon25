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
                        <?php 
                        // include_once('../common/sub-menu.php');
                        include_once('../query/abstract-list.php');
                        ?>
                    </div>


                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='invoice-box'>
                                <h2 class='text-center my-2'>Abstract List</h2>
                                <div class='table-responsive'>
                                    <table class="table d-md-block table-striped" cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                            <th>srn</th>
                                            <th>Abstract ID</th>
                                            <th>Topic</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>presenter Name</th>
                                            <th>presenter Affiliate</th>
                                            <th>presenter Desig</th>
                                            <th>presenter Email</th>
                                        </thead>
                                        <tbody>
                                        <?php echo $absHTML; ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include_once('../common/footer.php');
    ?>
</body>

</html>