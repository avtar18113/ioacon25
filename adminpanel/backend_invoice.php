<?php include 'header.php';

$email = $_SESSION['email'];

if (empty($email)) {
    header('Location:index.php');
} else {
    $refid = $_SESSION['refid'];

    $sql = "SELECT * FROM registration_view WHERE del = '0' AND email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $fname = $row["fname"];
            
            $lname = $row["lname"];
            $title = $row["title"];
            
            $meal = $row["meal"];
            $mobile = $row["mobile"];
            $email = $row["email"];
            $regType = $row["regType"];
            $regCat = $row["regCat"];
            $pre_workshop = $row["pre_workshop"];
            $post_workshop = $row["post_workshop"];
            $rid = $row["rid"];
            $mcn = $row["mcn"];
            $memid = $row["mem_id"];
            $p_name = $row["p_name"];
            $p_age = $row["p_age"];
            $p_gender = $row["p_gender"];
            $accPerson = $row["accPerson"];
            $accName1 = $row["accName1"];
            $accGender1 = $row["accGender1"];
            $accAge1 = $row["accAge1"];
            $accMeal1 = $row["accMeal1"];
            $accName2 = $row["accName2"];
            $accGender2 = $row["accGender2"];
            $accAge2 = $row["accAge2"];
            $accMeal2 = $row["accMeal2"];
            $accName3 = $row["accName3"];
            $accGender3 = $row["accGender3"];
            $accAge3 = $row["accAge3"];
            $accMeal3 = $row["accMeal3"];
            $wshop_fee = $row["wrk_fee"];
            $reg_fee = $row["reg_fee"];
            $acc_total = $row["acc_total"];
            $total = $row["total"];
            $charges = $row["charges"];
            $gtotal = $row["gtotal"];
            $ref = $row["ref"];
            $p_status = $row["p_status"];
            $dateCreated = $row['dateCreated'];
        }
    }
    if ($reg_fee < 0) {
        header('Location:index.php');
    }
    $r_mode = 'Online';
}
?>

<!-- Invoice -->
<section class="section-1">
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-md-9">
                <div class="invoice-box">
                    <h2>Registration Detail</h2>
                    <div class="px-4">
                        <table class="table table-borderless" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td width="40%">Name</td>
                                <td width="42%">: <?php echo $title; ?> <?php echo $fname.' '.$lname; ?></td>
                            </tr>

                            <?php if ($meal !== '') { ?>
                            <tr>
                                <td>Food Preference </td>
                                <td>: <?php echo $meal; ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td>Email</td>
                                <td>: <?php echo $email; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>: <?php echo $mobile; ?></td>
                            </tr>
                            <?php if ($mcn !== '') { ?>
                            <tr>
                                <td>Medical Reg. No </td>
                                <td>: <?php echo $mcn; ?></td>
                            </tr>
                            <?php } ?>
                            <?php if ($memid !== '') { ?>
                            <tr>
                                <td>IADVL Membership Number </td>
                                <td>: <?php echo $memid; ?></td>
                            </tr>
                            <?php } ?>
                            <?php if ($p_name) { ?>
                            <tr>
                                <td>Accompany person</td>
                                <td>: <?php echo $p_name . " ($p_age)"; ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: <?php echo $p_gender; ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td>Registration Category</td>
                                <td>: <?php echo $regCat; ?></td>
                            </tr>
                            <tr>
                                <td>Workshop</td>
                                <td>: <?php if ($pre_workshop != '') {
                                            echo $pre_workshop;
                                        } else {
                                            echo 'NO';
                                        } ?></td>
                            </tr>

                            <?php if ($post_workshop != '') {?><tr>
                                <td>Post Workshop</td>
                                <td>: <?=$post_workshop?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td width="40%">Registration Mode</td>
                                <td width="60%">: <?php echo $r_mode; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td> : <?php echo $p_status; ?> </td>
                            </tr>
                            <tr>
                                <td>Registration Date</td>
                                <td colspan="3">:
                                    <?php echo $dateCreated = date("l, j F, Y", strtotime($dateCreated)); ?></td>
                            </tr>
                            <?php if ($accPerson > 0) { ?>
                            <tr class="bg-light">
                                <td colspan="2"><strong>Accompany Person(s)</strong>
                                    <table class="table table-borderless m-0" cellpadding="0" cellspacing="0" border="1"
                                        style="border: 1px solid #ccc; font-size:12px; line-height:18px;">
                                        <tr style="background: #ebebeb;">
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Food Preference</th>
                                        </tr>
                                        <tr class="bg-white">
                                            <td>1. <?php echo $accName1; ?></td>
                                            <td><?php echo $accGender1; ?></td>
                                            <td><?php echo $accAge1; ?></td>
                                            <td><?php echo $accMeal1; ?></td>
                                        </tr>
                                        <?php if ($accName2 != '') { ?>
                                        <tr>
                                            <td>2. <?php echo $accName2; ?></td>
                                            <td><?php echo $accGender2; ?></td>
                                            <td><?php echo $accAge2; ?></td>
                                            <td><?php echo $accMeal2; ?></td>
                                        </tr>
                                        <?php } ?>
                                        <?php if ($accName3 != '') { ?>
                                        <tr class="bg-white">
                                            <td>3. <?php echo $accName3; ?></td>
                                            <td><?php echo $accGender3; ?></td>
                                            <td><?php echo $accAge3; ?></td>
                                            <td><?php echo $accMeal3; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </table>

                                </td>

                            </tr>

                            <?php } ?>
                        </table>
                    </div>
                    <div class="bg-light">
                        <h2>Registration Summary</h2>
                        <div class="px-4 pb-4">
                            <table class="table table-borderless m-0" cellpadding="0" cellspacing="0" border="0">
                                <tr class="border-bottom">
                                    <td width="40%" colspan="3"><strong>Description</strong></td>
                                    <td width="60%"><strong>Amount</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Registration Fee</td>
                                    <td>: <?php echo $reg_fee; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Workshop Fee</td>
                                    <td>: <?php
                                            if ($wshop_fee != 0) {
                                                echo $wshop_fee;
                                            } else {
                                                echo 0;
                                            }
                                            ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Accompany Fee</td>
                                    <td>: <?php echo $acc_total; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td><strong>: <?php echo $total; ?></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><strong>Bank Charge @ 3%</strong></td>
                                    <td><strong>: <?php echo $charges; ?></strong></td>
                                </tr>
                                <tr style="color: #1a851e;">
                                    <td colspan="3"><strong>Grand Total</strong></td>
                                    <td><strong>: INR <?php echo $gtotal; ?></strong>
                                    </td>
                                </tr>
                                <?php
                                if ($p_status != 'success') {
                                ?>
                                <tr>
                                    <td colspan="4">
                                        <form action="backend_payment.php" method="post">
                                            <!-- <input type="hidden" name="amount" value="2"> -->
                                            <input type="hidden" name="amount" value="<?php echo $gtotal; ?>">
                                            <input type="hidden" name="productinfo" value="<?php echo $refid; ?>">
                                            <input type="hidden" name="firstname" value="<?php echo $fname; ?>">
                                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                                            <input type="hidden" name="phone" value="<?php echo $mobile; ?>">

                                            <input type="button" value="BACK" id="next-btn" class="btn btn-secondary"
                                                name="back-to" onClick="window.location='index.php';">
                                            <input type="submit" value="submit" id="next-btn" class="btn btn-success"
                                                name="invoice-to">
                                        </form>
                                    </td>
                                </tr>
                                <tr><a class="btn btn-success" href="https://concepttc.com/acp2023/registration/backend_index.php">Skip</a></tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include 'footer.php'; ?>