<?php include 'db.php';
if (empty($_POST['srn'])) {$srn = '';} 
else {$srn = $_POST['srn']; $_SESSION['srn'] = $srn;}
	$sql = "UPDATE registration SET
        fname = '" . $_POST['fname'] . "',
		lname = '" . $_POST['lname'] . "',		
		title = '" . $_POST['title'] . "',		
		mobile = '" . $_POST['mobile'] . "',
		email = '" . $_POST['email'] . "',
		gender = '" . $_POST['gender'] . "',		
		meal = '" . $_POST['meal'] . "',
		institute = '" . addslashes($_POST['institute']) . "',
		mcn = '" . $_POST['mcn'] . "',
		desig = '" . addslashes($_POST['desig']) . "',
		address = '" . addslashes($_POST['address']) . "',
		state = '" . $_POST['state'] . "',
		city = '" . $_POST['city'] . "',
		pincode = '" . $_POST['pincode'] . "',
		country = '" . $_POST['country'] . "',			
        dateUpdated = '" . date('Y-m-d h:i:s') . "'  WHERE del='0' AND srn = '$srn'";	
	$result = mysqli_query($conn, $sql);
	if ($result) { echo "<script> alert('Record Update Sucessfuly'); window.location.href='backend_view.php';</script>";} else {echo 'Faild';}