<?php
// Fetch Registration data from the database

$email=$_SESSION['email'];
$sql = "SELECT * FROM registration WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $fname = $row["fname"];
        $lname = $row["lname"];
        $title = $row["title"];
        $fullname = $title . ' ' . $fname . ' ' . $lname;
        $mobile = $row["mobile"];
        $email = $row["email"];
        $wrk_fee = $row["wrk_fee"];
        $cmeFee = $row["cmeFee"];
        $accBanqTotal = $row["accBanqTotal"];
        $workshop=$row['workshop'];
        $reg_typ = $row["reg_typ"];
        $regCat = $row["regCat"];
        $wshop_cat = $row["wshop_cat"];
        $rid = $row["rid"];
        $panno = $row["panno"];
        $reg_fee = $row["reg_fee"];
        $mem_id  = $row["mem_id"];
        $upload_pg  = $row["upload_pg"];
        $bnq_fee = $row["bnq_fee"];
        $banqFee = $row["banqFee"];
        $acc_fee = $row["acc_fee"];
        $gst = $row["gst"];
        $accCmeTotal = $row['accCmeTotal'];
        $accPerson = $row["accPerson"];
        $HotelName = $row['HotelName'];
        $HtNight = $row['HtNight'];
        $a1name = $row["a1name"];
        $a1age = $row["a1age"];
        $a_banquet1 = $row["a_banquet1"];
        $acc_cme1 = $row["acc_cme1"];
        $a2name = $row["a2name"];
        $a2age = $row["a2age"];
        $a_banquet2 = $row["a_banquet2"];
        $acc_cme2 = $row["acc_cme2"];
        $a3name = $row["a3name"];
        $a3age = $row["a3age"];
        $a_banquet3 = $row["a_banquet3"];
        $acc_cme3 = $row["acc_cme3"];
        $a_banquet_fee = $row["a_banquet_fee"];
        $acc_total = $row["acc_total"];
        $total = $row["total"];
        $gtotal = $row["gtotal"];
        $charges = $row["charges"];
        $ref = $row["ref"];
        $p_status = $row["p_status"];
        $dateCreated = $row['dateCreated'];
        $pg_teach_pro= $row['pg_teach_pro'];
        $pg_teach_fee = $row['pg_teach_fee'];
        $OrderID = $row['OrderID'];
        $credit = $row['credit'];
        $txnid=$row['TransactionID'];
        $r_banquet2=$row['r_banquet2'];
        $banqFee2=$row['banqFee2'];
        $srnReg = $row["srn"];
        $description=$row['description'];
        $workshop_option_name=$row['workshop_option_name'];
       
    }
}
if ($reg_fee <= 0) {
    header('Location:index.php');
}

?>