<?php include('db.php');

if($_GET['srn']){
	$srn = $_GET['srn'];
	$_SESSION['srn']=$srn;
	}else{
	$srn = $_SESSION['srn'];
	}
											

$status = 'success';


	$checkCount = mysqli_num_rows($checkQry = mysqli_query($conn, "SELECT * FROM registration WHERE del='0' AND srn= '$srn'"));


if ($checkCount > 0) {
	$row = mysqli_fetch_array($checkQry);

	if ($row['p_status'] == 'success') {
		echo "<script>window.location.href='invoice.php';</script>";
	}
}

$reg_sql = mysqli_query($conn, "SELECT MAX(reg_no) As reg_no FROM registration WHERE del=0");
$row1 = mysqli_fetch_array($reg_sql);
$reg_no = $row1['reg_no'] + 1;
$reg_id_length = strlen((string) $reg_no);
if ($reg_id_length == 1) {
        $rid = "CCDSICON00" . $reg_no;
    } elseif ($reg_id_length == 2) {
        $rid = "CCDSICON0" . $reg_no;
    } else {
        $rid = "CCDSICON" . $reg_no;
    } 

if ($status != 'success') {
	$rid = "";
}


$pay_rg_update = "update registration set reg_no = '$reg_no', rid = '$rid', p_status='$status' where del=0 AND srn = '$srn' AND reg_no ='0'";
$result = mysqli_query($conn, $pay_rg_update);

	if ($result) { echo "<script> alert('Record Update Sucessfuly'); window.location.href='backend_email_script.php';</script>";} else {echo 'Faild';}


  