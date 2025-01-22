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
    <link rel="stylesheet" href="assets/css/style1.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/iocon-logo.webp" />
    <style>
        .razorpay-payment-button {
            color: #fff;
            background-color: #042f66;
            padding: 5px;
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require_once('db.php');
        include_once('fatch-details.php');
        $_SESSION['srnReg'] = $srnReg;
        $_SESSION['description'] = $description;
        $gtotal=$_SESSION['gtotal'];
        // $gtotal=2;
        ?>
        <!-- partial -->
        <div class="container-fluid">
            <!-- partial:partials/_sidebar.html -->
            <!-- partial -->
            <div class="main-panel1">
                <div class="content-wrapper p-1">
                    <section class="section bg-white">
                        <div class="container mt-5 p-0">
                            <div class="row justify-content-center">
                                 <div class='col-md-6'>
                    <div class='invoice-box'>
                        <h2 class='text-center my-2'>Registration Detail</h2>
                        <div class='table-responsive'>
                        <table class="table table-borderless d-none d-md-block" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td>Registration ID</td>
    <td>: <?php echo $rid; ?></td>
</tr>
<tr>
    <td>Name</td>
    <td>: <?php echo $title; ?> <?php echo $fname; ?> <?php echo $lname; ?></td>
</tr>
<tr>
    <td>Email</td>
    <td>: <?php echo $email; ?></td>
</tr>
<tr>
    <td>Mobile</td>
    <td>: <?php echo $mobile; ?></td>
</tr>
<tr>
    <td>Registration Category</td>
    <td>: <?php echo $regCat; ?></td>
</tr>
<?php if($regCat=='Packege Registration'){
    echo '<tr>
    <td>CME</td>
    <td>: Yes</td>
</tr><tr>
<td>Banquet</td>
<td>: Yes</td>
</tr>';
} ?>
<?php if ($pg_teach_pro != '') { ?>
    <tr>
        <td>PG Teaching Program</td>
        <td>: <?= $pg_teach_pro ?></a></td>
    </tr>
<?php } ?>
<?php if ($workshop != '') { ?>
    <tr>
        <td>Workshop</td>
        <td>: <?= $workshop ?></a></td>
    </tr>
<?php } ?>
<?php if ($upload_pg != '') { ?>
    <tr>
        <td>Upload File</td>
        <td>: <a href="upload_pg/<?= $upload_pg ?>">View File</a></td>
    </tr>
<?php } ?>
<?php if ($mem_id != '') { ?>
    <tr>
        <td>Membership No. </td>
        <td>: <?= $mem_id ?></td>
    </tr>
<?php } ?>
<?php if ($accPerson > 0) { ?>
    <tr>
        <td>Number of Accompany person </td>
        <td>: <?= $accPerson ?></td>
    </tr>
    <tr class="bg-light">
        <td colspan="2"><strong><center>Accompany Person(s)</center> </strong><br>
            <table class="table table-borderless m-0" cellpadding="1" cellspacing="0" border="1" style="border: 1px solid #ccc; font-size:12px; line-height:18px;">
                <tr style="background: #ebebeb;">
                    <th>Name</th>
                    <th>Banquet</th>
                    <th>CME</th>
                </tr>
                <?php if ($a1name != '') { ?>
                    <tr>
                        <td><?php echo $a1name; ?></td>
                        <td><?php echo $a_banquet1; ?></td>
                        <td><?php echo $acc_cme1; ?></td>
                    </tr>
                <?php } ?>
                <?php if ($a2name != '') { ?>
                    <tr>
                        <td><?php echo $a2name; ?></td>
                        <td><?php echo $a_banquet2; ?></td>
                        <td><?php echo $acc_cme2; ?></td>
                    </tr>
                <?php } ?>
                <?php if ($a3name != '') { ?>
                    <tr>
                        <td><?php echo $a3name; ?></td>
                        <td><?php echo $a_banquet3; ?></td>
                        <td><?php echo $acc_cme3; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>
<?php } ?>
</table>
<table class="table table-borderless d-block d-md-none p-0" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td><b>Registration ID:</b> <?php echo $rid; ?></td>
</tr>
<tr>
    <td><b>Name:</b> <?php echo $title; ?> <?php echo $fname; ?> <?php echo $lname; ?></td>
</tr>
<tr>
    <td><b>Email:</b> <?php echo $email; ?></td>
</tr>
<tr>
    <td><b>Mobile:</b> <?php echo $mobile; ?></td>
</tr>
<?php if ($r_banquet2 > 0) { ?>
    <tr>
        <td>Additional Banquet:</td>
        <td><?php echo $r_banquet2; ?></td>
    </tr>
<?php } ?>
<tr>
    <td><b>Registration Category:</b> <?php echo $regCat; ?></td>
</tr>
<?php if ($pg_teach_pro != '') { ?>
    <tr>
        <td><b>PG Teaching Program</b>: <?= $pg_teach_pro ?></a></td>
    </tr>
<?php } ?>
<?php if ($workshop != '') { ?>
    <tr>
        <td><b>Workshop:</b> <?= $workshop ?></a></td>
    </tr>
<?php } ?>
<?php if ($upload_pg != '') { ?>
    <tr>
        <td><b>Upload File:</b> <a href="upload_pg/<?= $upload_pg ?>">View File</a></td>
    </tr>
<?php } ?>
<?php if ($mem_id != '') { ?>
    <tr>
        <td><b>Membership No.:</b> <?= $mem_id ?></td>
    </tr>
<?php } ?>
<?php if ($accPerson > 0) { ?>
    <tr>
        <td><b>Number of Accompany person:</b> <?= $accPerson ?></td>
    </tr>
    <tr class="bg-light">
        <td><center><strong>Accompany Person(s) </strong></center></td>
    </tr>
    <tr class="bg-light">
        <td><br>
            <table class="table table-borderless m-0" cellpadding="1" cellspacing="0" border="1" width="100%" style="border: 1px solid #ccc; font-size:12px; line-height:18px;">
                <?php if ($a1name != '') { ?>
                    <tr><td><center><b>Accompany person: 1</b></center></td></tr>
                    <tr><td><?php echo '<strong>Name: </strong>'.$a1name; ?></td></tr>
                    <tr><td><?php echo '<strong>Banquet: </strong>'.$a_banquet1; ?></td></tr>
                    <tr><td><?php echo '<strong>CME: </strong>'.$acc_cme1; ?></td></tr>
                <?php } ?>
                <?php if ($a2name != '') { ?>
                <tr><td><center><b>Accompany person: 2</b></center></td></tr>
                    <tr><td><?php echo '<strong>Name: </strong>'.$a2name; ?></td></tr>
                    <tr><td><?php echo '<strong>Banquet: </strong>'.$a_banquet2; ?></td></tr>
                    <tr><td><?php echo '<strong>CME: </strong>'.$acc_cme2; ?></td></tr>
                <?php } ?>
                <?php if ($a3name != '') { ?>
                <tr><td><center><b>Accompany person: 3</b></center></td></tr>
                    <tr><td><?php echo '<strong>Name: </strong>'.$a3name; ?></td></tr>
                    <tr><td><?php echo '<strong>Banquet: </strong>'.$a_banquet3; ?></td></tr>
                    <tr><td><?php echo '<strong>CME: </strong>'.$acc_cme3; ?></td></tr>
                <?php } ?>
            </table>
        </td>
    </tr>
<?php } ?>
</table>
                        </div>
                    </div>
                </div>
                                <div class="col-md-6">
                                    <div class="invoice-box">
                                        <h2 class="text-center my-2">Payment Summary</h2>
                                        <div class="pb-4">
                                            <table class="table table-borderless m-0" cellpadding="0" cellspacing="0" border="0">
                                                <tr class="border-bottom">
                                                    <td width="48%"><strong>Description</strong></td>
                                                    <td width="48%"><strong>Amount</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Registration Fee</td>
                                                    <td>: <?php echo $reg_fee; ?></td>
                                                </tr>
                                                <?php if ($wrk_fee > 0) { ?>
                                                    <tr>
                                                        <td>Workshop Fee</td>
                                                        <td>: <?php echo $wrk_fee; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($pg_teach_fee > 0) { ?>
                                                    <tr>
                                                        <td>PG Teaching Program Fee</td>
                                                        <td>: <?php echo $pg_teach_fee; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($r_banquet2 > 0) { ?>
                                                    <tr>
                                                        <td>Additional Banquet Fee</td>
                                                        <td>: <?php echo $banqFee2; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($cmeFee > 0) { ?>
                                                    <tr>
                                                        <td>CME Fee</td>
                                                        <td>: <?php echo $cmeFee; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($banqFee > 0) { ?>
                                                    <tr>
                                                        <td>Banquet Fee</td>
                                                        <td>: <?php echo $banqFee; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                 <?php if ($acc_fee > 0) { ?>
                                                <tr>
                                                    <td>Accompanying Fee</td>
                                                    <td>: <?php echo $acc_fee; ?></td>
                                                </tr>
                                                <?php } ?>
                                                <?php if ($accCmeTotal > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying CME Fee</td>
                                                        <td>: <?php echo $accCmeTotal; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($accBanqTotal > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying Banquet Fee</td>
                                                        <td>: <?php echo $accBanqTotal; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <tr class="border-top">
                                                    <td><strong>Total</strong></td>
                                                    <td><strong>: <?php echo $total; ?></strong></td>
                                                </tr>
                                                <?php if ($charges > 0) { ?>
                                                <tr>
                                                    <td><strong>Processing Charges</strong></td>
                                                    <td><strong>: <?php echo $charges; ?></strong></td>
                                                </tr>
                                                <?php } ?>
                                                <tr style="color: #1a851e;">
                                                    <td><strong>Grand Total</strong></td>
                                                    <td><strong>: INR <?php echo $gtotal; ?></strong>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                     <?php
                                                if ($p_status != 'success') {
                                                ?> <div class="row">
                                            <div class="col-6 my-2"> 
                                                <input type="button" value="BACK & Edit" id="next-btn" class="btn btn-danger" name="back-to" onclick="history.back()"> </td>  
                                            </div>
                                            <div class="col-6 my-2">
                                                    <?php include('pay.php'); ?>
                                                </div>
                                                    <?php } ?>
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
    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Developed By:</a> Concept Conferences Pvt. Ltd.</span>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="./assets/js/countrystatecity.js"></script>
<script type="text/javascript" src="./assets/js/formjs.js"></script>
<script type="text/javascript" src="./assets/js/abstract.js"></script>
<script type="text/javascript" src="./assets/js/multistep.js"></script>
<!-- End custom js for this page -->
</body>
</html>