<?php include 'db.php';

if (empty($_POST['email'])) {
	$email = '';
} else {
	$email = $_POST['email'];
	$_SESSION['email'] = $email;
}

if (!empty($email)) {

	//var_dump($_POST);
	$total = $reg_fee = 0;

	$suc_check = mysqli_query($conn, "select p_status from registration where email = '$email'");
	$sc_row1 = mysqli_fetch_array($suc_check);

	if ($sc_row1['p_status'] == 'success' || $sc_row1['p_status'] == 'processing') {
		header('Location:invoice.php');
		exit();
	}

	if (!empty($_POST['reg_fee'])) {
		$reg_fee = $_POST['reg_fee'];
	} else {
		$reg_fee = 0;
	}

	

	if (!empty($_POST['acc_total'])) {
		$acc_total = $_POST['acc_total'];
	} else {
		$acc_total = 0;
	}



	/*Total*/

	$total = $reg_fee + $acc_total;
	$charges ='0';
	$gtotal = round($total + $charges);

	function refID()
	{
		$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	$refID = refID();

	$_SESSION['refid'] = $refID;

	$suc_check = mysqli_query($conn, "select p_status from registration where email = '$email'");
	$sc_row1 = mysqli_fetch_array($suc_check);

	if ($sc_row1['p_status'] == 'success') {
		header('Location:backend_invoice.php');
		exit();
	}
	$select = mysqli_num_rows($query = mysqli_query($conn, "SELECT srn,email FROM registration WHERE del='0' and email = '" . trim($email) . "'"));

	if ($select > 0) {

		$row = mysqli_fetch_array($query);
		$update_id = $row['srn'];

		$sql = "UPDATE registration SET
        fname = '" . $_POST['fname'] . "',
		lname = '" . $_POST['lname'] . "',		
		title = '" . $_POST['title'] . "',		
		mobile = '" . $_POST['mobile'] . "',
		email = '" . $_POST['email'] . "',
		gender = '" . $_POST['gender'] . "',
		dob = '" . $_POST['dob'] . "',
		meal = '" . $_POST['meal'] . "',
		institute = '" . addslashes($_POST['institute']) . "',
		mcn = '" . $_POST['mcn'] . "',
		desig = '" . addslashes($_POST['desig']) . "',
		address = '" . addslashes($_POST['address']) . "',
		state = '" . $_POST['state'] . "',
		city = '" . $_POST['city'] . "',
		pincode = '" . $_POST['pincode'] . "',
		country = '" . $_POST['country'] . "',
		regType = '" . $_POST['regType'] . "',
		regCat = '" . $_POST['regCat'] . "',
		
		memCat = '" . $_POST['memCat'] . "',
        offer = '" . $_POST['offer'] . "',
        ref = '" . $_POST['ref'] . "',
        p_id = '" . $_POST['p_id'] . "',
		mem_id = '" . $_POST['mem_id'] . "',
		p_name = '" . $_POST['p_name'] . "',
		p_age = '" . $_POST['p_age'] . "',
		p_gender = '" . $_POST['p_gender'] . "',
		accPerson = '" . $_POST['accPerson'] . "',
		accName1 = '" . $_POST['accName1'] . "',
		accGender1 = '" . $_POST['accGender1'] . "',
		accAge1 = '" . $_POST['accDob1'] . "',
		accMeal1 = '" . $_POST['accMeal1'] . "',
		accName2 = '" . $_POST['accName2'] . "',
		accGender2 = '" . $_POST['accGender2'] . "',
		accAge2 = '" . $_POST['accDob2'] . "',
		accMeal2 = '" . $_POST['accMeal2'] . "',
		accName3 = '" . $_POST['accName3'] . "',
		accGender3 = '" . $_POST['accGender3'] . "',
		accAge3 = '" . $_POST['accDob3'] . "',
		accMeal3 = '" . $_POST['accMeal3'] . "',
	
		reg_fee = '$reg_fee',
		acc_total = '$acc_total',
		total = '$total',
		charges = '$charges',
		gtotal = '$gtotal',
		p_status= '$Pending',
		
        dateUpdated = '" . date('Y-m-d h:i:s') . "'  WHERE del='0' AND email = '$email'";

		//echo $sql;die;
		$result = mysqli_query($conn, $sql);
	} else {

		$sql = "INSERT INTO registration SET

		fname = '" . $_POST['fname'] . "',
		lname = '" . $_POST['lname'] . "',
		
		title = '" . $_POST['title'] . "',
		
		mobile = '" . $_POST['mobile'] . "',
		email = '" . $_POST['email'] . "',
		gender = '" . $_POST['gender'] . "',
		dob = '" . $_POST['dob'] . "',
		meal = '" . $_POST['meal'] . "',
		institute = '" . addslashes($_POST['institute']) . "',
		mcn = '" . $_POST['mcn'] . "',
		desig = '" . addslashes($_POST['desig']) . "',
		address = '" . addslashes($_POST['address']) . "',
		state = '" . $_POST['state'] . "',
		city = '" . $_POST['city'] . "',
		pincode = '" . $_POST['pincode'] . "',
		country = '" . $_POST['country'] . "',
		regType = '" . $_POST['regType'] . "',
		regCat = '" . $_POST['regCat'] . "',
		
		memCat = '" . $_POST['memCat'] . "',
        offer = '" . $_POST['offer'] . "',
        ref = '" . $_POST['ref'] . "',
        p_id = '" . $_POST['p_id'] . "',
		mem_id = '" . $_POST['mem_id'] . "',
		p_name = '" . $_POST['p_name'] . "',
		p_age = '" . $_POST['p_age'] . "',
		p_gender = '" . $_POST['p_gender'] . "',
		accPerson = '" . $_POST['accPerson'] . "',
		accName1 = '" . $_POST['accName1'] . "',
		accGender1 = '" . $_POST['accGender1'] . "',
		accAge1 = '" . $_POST['accDob1'] . "',
		accMeal1 = '" . $_POST['accMeal1'] . "',
		accName2 = '" . $_POST['accName2'] . "',
		accGender2 = '" . $_POST['accGender2'] . "',
		accAge2 = '" . $_POST['accDob2'] . "',
		accMeal2 = '" . $_POST['accMeal2'] . "',
		accName3 = '" . $_POST['accName3'] . "',
		accGender3 = '" . $_POST['accGender3'] . "',
		accAge3 = '" . $_POST['accDob3'] . "',
		accMeal3 = '" . $_POST['accMeal3'] . "',
	
		reg_fee = '$reg_fee',
		acc_total = '$acc_total',
		total = '$total',
		charges = '$charges',
		gtotal = '$gtotal',
		p_status= 'Pending',
		
		
		dateCreated = '" . date('Y-m-d h:i:s') . "'";
		//echo $sql; die;
		$result = mysqli_query($conn, $sql);
		$update_id = mysqli_insert_id($conn);
	}

	$upload_name = $_FILES['upload_pg']['name'];

	if ($upload_name != '' && $update_id != '') {

		/*upload*/
		$qry = '';
		$target = 'upload_pg/';
		//echo $target; die;
		if ($_FILES['upload_pg']['name'] != '') {

			/***********************************File1 Upload Start**********************************/
			$qry = '';
			$ext = pathinfo($_FILES['upload_pg']['name']);
			$path = $update_id . "_" . $upload_name;
			$qry .= "upload_pg = '" . $path . "',";
			$target_path = $target . $path;

			if (file_exists($target_path))
				unlink($target_path); //for delete previously upload file

		}
		move_uploaded_file($_FILES['upload_pg']['tmp_name'], $target_path);

		/***********************************File1 Upload End**********************************/

		if ($qry != '') {
			$qry = rtrim($qry, ",");
			mysqli_query($conn, "update registration SET " . $qry . " WHERE del='0' AND email ='$email'");
		}
		/*upload*/
	}
	if ($result) { echo "<script> alert('Form Submited Sucessfuly'); window.location.href='backend_index.php';</script>";} else {echo 'Faild';}	
}