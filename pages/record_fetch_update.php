<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IOACON 2025 Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style1.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/iocon-logo.webp" />
</head>

<body>
    <div class="container-scroller">
        <?php require_once('../db.php');
        include_once('../common-fatch-code.php');
        ?>
        <!-- partial -->
        <div class="container-fluid">
            <div class="main-panel1">
                <div class="content-wrapper p-1">
                    <section class="section bg-white">
                        <div class="container mt-5 p-0">
                            <div class="row justify-content-center">
                                <div class='col-md-12'>
                                    <div class='invoice-box'>
                                        <h2 class='text-center my-2'>Record Update processing please wait untill the processing</h2>
                                        <div class='table-responsive'>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                    </section>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <!--<span class="text-muted d-block text-center text-sm-start d-sm-inline-block">IOACON 2025</span>-->
                        <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="../https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Developed By:</a> Concept Conferences Pvt. Ltd.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <?php 
        
     
        // include_once('common-fatch-code.php');
     
        try {
           
            if ($addonData['p_status'] == 'success' && $regData['addon']!='1') {
                $record_update = [];
                if ($addonData['workshop'] != 'No'){ $record_update[] = "workshop = '" . $addonData["workshop"] . "'";} 

                if ($addonData['wrk_fee'] > 1) $record_update[] = "wrk_fee = " . $addonData['wrk_fee'];

                if ($addonData['cme_reg'] == 'Yes') $record_update[] = "cme_reg = 'Yes'";
                if ($addonData['cmeFee'] > 1) $record_update[] = "cmeFee = " . $addonData['cmeFee'];

                if ($addonData['pg_teach_pro'] == 'Yes') $record_update[] = "pg_teach_pro = 'Yes'";
                if ($addonData['pg_teach_fee'] > 1) $record_update[] = "pg_teach_fee = " . $addonData['pg_teach_fee'];

                if ($addonData['r_banquet'] == 'Yes') $record_update[] = "r_banquet = 'Yes'";
                if ($addonData['bnq_fee'] > 1) $record_update[] = "bnq_fee = " . $addonData['bnq_fee'];

                if ($addonData['total_accompany'] > 0) $record_update[] = "total_accompany = " . ($regData['total_accompany'] + $addonData['total_accompany']);
                if ($addonData['accompany_total_fee'] > 0) $record_update[] = "accompany_total_fee = " . ($regData['accompany_total_fee'] + $addonData['accompany_total_fee']);
                if ($addonData['total'] > 0) $record_update[] = "total = " . ((int)$regData['total'] + (int)$addonData['total']);
                
                if ($addonData['credit'] > 0) $record_update[] = "credit = " . ((int)$regData['credit'] + (int)$addonData['credit']);
                
                $record_update[] = "addon = '1'";
              
                // Additional person details
                for ($i = 1; $i <= 3; $i++) {
                    if (!empty($addonData["a{$i}name"])) {
                        $record_update[] = "a{$i}name = '" . $addonData["a{$i}name"] . "'";
                        $record_update[] = "a{$i}age = " . $addonData["a{$i}age"];
                        $record_update[] = "acc_cme{$i} = '" . $addonData["acc_cme{$i}"] . "'";
                        $record_update[] = "a_banquet{$i} = '" . $addonData["a_banquet{$i}"] . "'";
                        $record_update[] = "accFee{$i} = '" . ((int)$regData["accFee{$i}"] + (int)$addonData["accFee{$i}"]."'");
                        $record_update[] = "acc_cme{$i}_fee = '" . ((int)$regData["acc_cme{$i}_fee"] + (int)$addonData["acc_cme{$i}_fee"]."'");
                        $record_update[] = "a_banquet{$i}_fee = '" . ((int)$regData["a_banquet{$i}_fee"] + (int)$addonData["a_banquet{$i}_fee"]."'");
                    }
                }
                    
                // Update record in registration table
                if (!empty($record_update)) {
                    $fields_sql = implode(', ', $record_update);
                   
                    $update_sql = "UPDATE registration SET $fields_sql WHERE email = ? AND addon !=1";
                    print_r($update_sql);
                    
                    $stmt_update = $conn->prepare($update_sql);
                    $stmt_update->bind_param("s", $email);
                    // die();
                    $stmt_update->execute();
                    if ($stmt_update->affected_rows > 0) {
                        echo 'reccord update';
                        // die();
                        // include 'email_script.php';
                        echo "<script>window.location.href='../query/email_script.php';</script>";
                    } else {
                        throw new Exception("Update failed.");
                    }
                    $stmt_update->close();
                }
            }
            // Commit transaction
            $conn->commit();
        } catch (Exception $e) {
            // Rollback transaction if any error occurs
            $conn->rollback();
            echo "Error: " . $e->getMessage();
        } 
        ?>
        
        
        
        
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>   
   
    
    <!-- End custom js for this page -->
</body>

</html>