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
                    <div class="card">
                    <div class="row">
                    <!-- ========== Add code =========== -->
                    <div class='col-md-6 border'>
                    <div class='invoice-box'>
                        <h2 class='text-center my-2'>Registration Detail</h2>
                        <div class='table-responsive'>
                        <table class="table table-borderless d-none d-md-block w-100" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td>Registration ID</td>
    <td>: <?= $regData['rid'];?></td>
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
        <td>: <?= $pg_teach_pro ?></a></td>
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
        <td><b>PG Teaching Program</b>: <?= $pg_teach_pro ?></a></td>
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
                                                <?php if (($regData['accFee1']+$regData['accFee2']+$regData['accFee3']) > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying Fee</td>
                                                        <td>: <?php echo ($regData['accFee1']+$regData['accFee2']+$regData['accFee3']); ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if (($regData['acc_cme1_fee']+$regData['acc_cme2_fee']+$regData['acc_cme3_fee']) > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying CME Fee</td>
                                                        <td>: <?php echo ($regData['acc_cme1_fee']+$regData['acc_cme2_fee']+$regData['acc_cme3_fee']); ?></td>
                                                    </tr>
                                                <?php } ?>
                                                <?php if (($regData['a_banquet1_fee']+$regData['a_banquet2_fee']+$regData['a_banquet3_fee']) > 0) { ?>
                                                    <tr>
                                                        <td>Accompanying Banquet Fee</td>
                                                        <td>: <?php echo ($regData['a_banquet1_fee']+$regData['a_banquet2_fee']+$regData['a_banquet3_fee']); ?></td>
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
                                                    <td><strong>: INR <?=$regData['credit'] ?></strong>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    
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



