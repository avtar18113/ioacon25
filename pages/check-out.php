<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
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
        <?php require_once('../db.php');
       
        include_once('../common-fatch-code.php');
        $_SESSION['srnReg'] = $regData['srn'];
        $_SESSION['description'] = $regData['description'];
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
    <td>: <?php {$regData['rid'];} ?></td>
</tr>
<tr>
    <td>Name</td>
    <td>: <?php  echo $regData['title'].' '.  $regData['fname'].' '.  $regData['lname']; ?> </td>
</tr>
<tr>
    <td>Email</td>
    <td>: <?php echo $regData['email']; ?></td>
</tr>
<tr>
    <td>Mobile</td>
    <td>: <?php echo $regData['mobile']; ?></td>
</tr>
<tr>
    <td>Registration Category</td>
    <td>: <?php echo $regData['regCat']; ?></td>
</tr>
<?php if($regData['regCat']=='Packege Registration'){
    echo '<tr>
    <td>CME</td>
    <td>: Yes</td>
</tr><tr>
<td>Banquet</td>
<td>: Yes</td>
</tr>';
} ?>
<?php if ($regData['r_banquet'] !='') { ?>
    <tr>
        <td>Banquet:</td>
        <td><?php echo $regData['r_banquet']; ?></td>
    </tr>
<?php } ?>
<?php if ($regData['cme_reg'] !='') { ?>
    <tr>
        <td>CME:</td>
        <td><?php echo $regData['cme_reg']; ?></td>
    </tr>
<?php } ?>
<?php if ($regData['pg_teach_pro'] != '') { ?>
    <tr>
        <td>PG Teaching Program</td>
        <td>: <?= $regData['pg_teach_pro'] ?></a></td>
    </tr>
<?php } ?>
<?php if ($regData['workshop'] != '') { ?>
    <tr>
        <td>Workshop</td>
        <td>: <?= $regData['workshop'] ?></a></td>
    </tr>
<?php } ?>
<?php if ($regData['upload_pg'] != '') { ?>
    <tr>
        <td>Upload File</td>
        <td>: <a href="../upload_pg/<?= $regData['upload_pg'] ?>">View File</a></td>
    </tr>
<?php } ?>
<?php if ($regData['mem_id'] != '') { ?>
    <tr>
        <td>Membership No. </td>
        <td>: <?= $regData['mem_id'] ?></td>
    </tr>
<?php } ?>
<?php if ($regData['total_accompany'] > 0) { ?>
    <tr>
        <td>Number of Accompany person </td>
        <td>: <?= $regData['total_accompany'] ?></td>
    </tr>
    <tr class="bg-light">
        <td colspan="2"><strong><center>Accompany Person(s)</center> </strong><br>
            <table class="table table-borderless m-0" cellpadding="1" cellspacing="0" border="1" style="border: 1px solid #ccc; font-size:12px; line-height:18px;">
                <tr style="background: #ebebeb;">
                    <th>Name</th>
                    <th>Banquet</th>
                    <th>CME</th>
                </tr>
                <?php if ($regData['a1name'] != '') { ?>
                    <tr>
                        <td><?php echo $regData['a1name']; ?></td>
                        <td><?php echo $regData['a_banquet1']; ?></td>
                        <td><?php echo $regData['acc_cme1']; ?></td>
                    </tr>
                <?php } ?>
                <?php if ($regData['a2name'] != '') { ?>
                    <tr>
                        <td><?php echo $regData['a2name']; ?></td>
                        <td><?php echo $regData['a_banquet2']; ?></td>
                        <td><?php echo $regData['acc_cme2']; ?></td>
                    </tr>
                <?php } ?>
                <?php if ($regData['a3name'] != '') { ?>
                    <tr>
                    <td><?php echo $regData['a3name']; ?></td>
                        <td><?php echo $regData['a_banquet3']; ?></td>
                        <td><?php echo $regData['acc_cme3']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </td>
    </tr>
<?php } ?>
</table>
<table class="table table-borderless d-block d-md-none p-0" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td>Registration ID</td>
    <td>: <?php {$regData['rid'];} ?></td>
</tr>
<tr>
    <td>Name</td>
    <td>: <?= $fullname; ?> </td>
</tr>
<tr>
    <td>Email</td>
    <td>: <?= $email; ?></td>
</tr>
<tr>
    <td>Mobile</td>
    <td>: <?php echo $mobile ?></td>
</tr>
<tr>
    <td>Registration Category</td>
    <td>: <?php echo $regData['regCat']; ?></td>
</tr>
<?php if ($regData['r_banquet'] !='') { ?>
    <tr>
        <td>Banquet:</td>
        <td><?php echo $regData['r_banquet']; ?></td>
    </tr>
<?php } ?>
<?php if ($regData['r_banquet2'] !='') { ?>
    <tr>
        <td>Additional Banquet:</td>
        <td><?php echo $regData['r_banquet2']; ?></td>
    </tr>
<?php } ?>

<?php if ($regData['pg_teach_pro'] != '') { ?>
    <tr>
        <td><b>PG Teaching Program</b>: <?= $regData['pg_teach_pro'] ?></a></td>
    </tr>
<?php } ?>
<?php if ($regData['workshop'] != '') { ?>
    <tr>
        <td><b>Workshop:</b> <?php echo $regData['workshop']; ?></a></td>
    </tr>
<?php } ?>
<?php if ($regData['upload_pg'] != '') { ?>
    <tr>
        <td><b>Upload File:</b> <a href="../upload_pg/<?php echo $regData['upload_pg']; ?>">View File</a></td>
    </tr>
<?php } ?>
<?php if ($regData['mem_id'] != '') { ?>
    <tr>
        <td><b>Membership No.:</b> <?= $regData['mem_id'] ?></td>
    </tr>
<?php } ?>
<?php if ($regData['total_accompany'] > 0) { ?>
    <tr>
        <td><b>Number of Accompany person:</b> <?= $regData['total_accompany'] ?></td>
    </tr>
    <tr class="bg-light">
        <td><center><strong>Accompany Person(s) </strong></center></td>
    </tr>
    <tr class="bg-light">
        <td colspan="2"><br>
            <table class="table table-borderless m-0" cellpadding="1" cellspacing="0" border="1" width="90%" style="border: 1px solid #ccc; font-size:12px; line-height:18px;">
                <?php if ($regData['a1name'] != '') { ?>
                    <tr><td><center><b>Accompany person: 1</b></center></td></tr>
                    <tr><td><?php echo '<strong>Name: </strong>'.$regData['a1name']; ?></td></tr>
                    <tr><td><?php echo '<strong>Banquet: </strong>'.$regData['a_banquet1']; ?></td></tr>
                    <tr><td><?php echo '<strong>CME: </strong>'.$regData['acc_cme1']; ?></td></tr>
                <?php } ?>
                <?php if ($regData['a2name'] != '') { ?>
                <tr><td><center><b>Accompany person: 2</b></center></td></tr>
                    <tr><td><?php echo '<strong>Name: </strong>'.$regData['a2name']; ?></td></tr>
                    <tr><td><?php echo '<strong>Banquet: </strong>'.$regData['a_banquet2']; ?></td></tr>
                    <tr><td><?php echo '<strong>CME: </strong>'.$regData['acc_cme2']; ?></td></tr>
                <?php } ?>
                <?php if ($regData['a3name'] != '') { ?>
                <tr><td><center><b>Accompany person: 3</b></center></td></tr>
                    <tr><td><?php echo '<strong>Name: </strong>'.$regData['a3name']; ?></td></tr>
                    <tr><td><?php echo '<strong>Banquet: </strong>'.$regData['a_banquet3']; ?></td></tr>
                    <tr><td><?php echo '<strong>CME: </strong>'.$regData['acc_cme3']; ?></td></tr>
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
                                                    <td>: <?php echo $regData['reg_fee']; ?></td>
                                                </tr>
                                                <?php if ($regData['wrk_fee'] > 0) { ?>
                                                    <tr>
                                                        <td>Workshop Fee</td>
                                                        <td>: <?php echo $regData['wrk_fee']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($regData['pg_teach_fee'] > 0) { ?>
                                                    <tr>
                                                        <td>PG Teaching Program Fee</td>
                                                        <td>: <?php echo $regData['pg_teach_fee']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($regData['banqFee2'] > 0) { ?>
                                                    <tr>
                                                        <td>Additional Banquet Fee</td>
                                                        <td>: <?php echo $regData['banqFee2']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                               

                                                <?php if ($regData['cmeFee'] > 0) { ?>
                                                    <tr>
                                                        <td>CME Fee</td>
                                                        <td>: <?php echo $regData['cmeFee']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($regData['bnq_fee'] > 0) { ?>
                                                    <tr>
                                                        <td>Banquet Fee</td>
                                                        <td>: <?php echo $regData['bnq_fee']; ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ($regData['registration_total'] > 0) { ?>
                                                    <tr>
                                                        <td><b>Registration Total Fee</b></td>
                                                        <td>: <b><?php echo $regData['registration_total']; ?></b></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if ((int)($regData['accFee1']+(int)$regData['accFee2']+(int)$regData['accFee3']) > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying Fee</td>
                                                        <td>: <?php echo ((int)$regData['accFee1']+(int)$regData['accFee2']+(int)$regData['accFee3']); ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if (((int)$regData['acc_cme1_fee']+(int)$regData['acc_cme2_fee']+(int)$regData['acc_cme3_fee']) > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying CME Fee</td>
                                                        <td>: <?php echo ((int)$regData['acc_cme1_fee']+(int)$regData['acc_cme2_fee']+(int)$regData['acc_cme3_fee']); ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if (((int)$regData['a_banquet1_fee']+(int)$regData['a_banquet2_fee']+(int)$regData['a_banquet3_fee']) > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying Banquet Fee</td>
                                                        <td>: <?php echo ((int)$regData['a_banquet1_fee']+(int)$regData['a_banquet2_fee']+(int)$regData['a_banquet3_fee']); ?></td>
                                                    </tr>
                                                <?php } ?>
                                                 <?php if ($regData['accompany_total_fee'] > 0) { ?>
                                                <tr>
                                                    <td><b>Accompanying Fee</b></td>
                                                    <td><b>: <?php echo $regData['accompany_total_fee']; ?></b></td>
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
                                                if ($regData['p_status'] != 'success') {
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
    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="../https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Developed By:</a> Concept Conferences Pvt. Ltd.</span>
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
<script src="./assets/js/countrystatecity.js"></script>
<script type="text/javascript" src="../assets/js/formjs.js"></script>
<script type="text/javascript" src="../assets/js/multistep.js"></script>
<!-- End custom js for this page -->
</body>
</html>