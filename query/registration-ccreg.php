<?php
include ('../db.php');
include ('../slab.php');
if (empty($_POST['email'])) {
    $email = '';
} else {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
}
if (!empty($email)) {
    (isset($_POST['regCat'])) ? $regCat = $_POST['regCat'] : $regCat = null;
        (isset($_POST['r_banquet'])) ? $r_banquet = $_POST['r_banquet'] : $r_banquet = null;
        (isset($_POST['r_banquet2'])) ? $r_banquet2 = $_POST['r_banquet2'] : $r_banquet2 = null;
        (isset($_POST['cme_reg'])) ? $cme_reg = $_POST['cme_reg'] : $cme_reg = null;
        (isset($_POST['workshop'])) ? $workshop = $_POST['workshop'] : $workshop = null;
        (isset($_POST['pg_teach_pro'])) ? $pg_teach_pro = $_POST['pg_teach_pro'] : $pg_teach_pro = null;
        (isset($_POST['mcn'])) ? $mcn = $_POST['mcn'] : $mcn = null;
        (isset($_POST['institute'])) ? $institute = $_POST['institute'] : $institute = null;
        (isset($_POST['gender'])) ? $gender = $_POST['gender'] : $gender = null;
        (isset($_POST['designation'])) ? $designation = $_POST['designation'] : $designation = null;
        (isset($_POST['address'])) ? $address = $_POST['address'] : $address = null;
        (isset($_POST['country'])) ? $country = $_POST['country'] : $country = null;
        (isset($_POST['state'])) ? $state = $_POST['state'] : $state = null;
        (isset($_POST['city'])) ? $city = $_POST['city'] : $city = null;
        (isset($_POST['pincode'])) ? $pincode = $_POST['pincode'] : $pincode = null;
        (isset($_POST['mem_id'])) ? $mem_id = $_POST['mem_id'] : $mem_id = null;
        (isset($_POST['accPerson'])) ? $total_accompany = $_POST['accPerson'] : $total_accompany = null;
        (isset($_POST['workshop_option_name'])) ? $workshop_option_name = $_POST['workshop_option_name'] : $workshop_option_name = null;
    // Fixing the condition for 'ICS/NCCP Members' and 'Non Member'
    if ($regCat == $cat1) {
        $reg_fee = $cat1_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme1_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq1_fee; }else{$banqFee=0;}
        if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    } else if($regCat == $cat2) {
        $reg_fee = $cat2_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme2_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq1_fee; }else{$banqFee=0;}
        if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    } else if($regCat == $cat3) {
        $reg_fee = $cat3_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme3_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq1_fee; }else{$banqFee=0;}
        if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    }else if($regCat == $cat4) {
        $reg_fee = $cat4_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme4_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq2_fee; }else{$banqFee=0;}
        if($r_banquet2>0){ $banqFee2=$banq2_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    }else if($regCat == $cat5) {
        $reg_fee = $cat5_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme5_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq3_fee; }else{$banqFee=0;}
        if($r_banquet2>0){ $banqFee2=$banq3_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    }else if($regCat == $cat6) {
        $reg_fee = $cat6_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme6_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq4_fee; }else{$banqFee=0;}
        if($r_banquet2>0){ $banqFee2=$banq4_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    }else if($regCat == $cat7) {
        $reg_fee = $cat7_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme2_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq1_fee; }else{$banqFee=0;}
         if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    }else if($regCat == $cat8) {
        $reg_fee = $cat8_fee;
        if($cme_reg =='Yes'){ $cmeFee=$cme1_fee; }else{$cmeFee=0;}
        if($r_banquet =='Yes'){ $banqFee=$banq1_fee; }else{$banqFee=0;}
         if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
        if($workshop ==$workshop1){ $wrk_fee=$wrk1_fee; } else if($workshop == $workshop2){ $wrk_fee=$wrk2_fee; }else{$wrk_fee=0;}
    }else if($regCat == 'Package Registration') {   
        $reg_fee = 15500;         
        $cme_reg ='Yes';
        $cmeFee=0;
        $r_banquet =='Yes';
        $banqFee=0;
        $wrk_fee=0;
        if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
    }else if($regCat == 'Only conference') {    
        $reg_fee = 10500;        
        $cme_reg ='No';
        $cmeFee=0;
        $r_banquet =='No';
        $banqFee=0;
        $wrk_fee=0;
        $workshop='';
        $cme_reg='';
        $r_banquet='';
        if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
    }else if($regCat=='Conf Registration plus banquet'){
        $reg_fee = 13000;        
        $cme_reg ='No';
        $cmeFee=0;
        $r_banquet =='Yes';
        $banqFee=0;
        $wrk_fee=0;
        $workshop='';
        $cme_reg='';
        $r_banquet='';
        if($r_banquet2>0){ $banqFee2=$banq1_fee*$r_banquet2; }else{$banqFee2=0;}
    }
    else {
        // header('Location:index.php');
        // exit();
        echo '<script>alert("Something Wrong"); </script>';
    }
    if($pg_teach_pro=='Yes'){ $pg_teach_fee=$pg_teach;  }else{$pg_teach_fee=0;}
    $a_banquet1=$_POST['a_banquet1'];
    $cme1=$_POST['cme1'];
    $a_banquet2=$_POST['a_banquet2'];
    $cme2=$_POST['cme2'];
    $a_banquet3=$_POST['a_banquet3'];
    $cme3=$_POST['cme3'];
	if ($total_accompany>0) {
		if ($regCat == $cat1) {  
            $acc_fee = $total_accompany*$acc_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq1_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq1_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq1_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;
        } else if($regCat == $cat2) {           
            $acc_fee = $total_accompany*$acc_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq1_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq1_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq1_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;        
        } else if($regCat == $cat3) {            
            $acc_fee = $total_accompany*$acc_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq1_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq1_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq1_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;          
        }else if($regCat == $cat4) {           
            $acc_fee = $total_accompany*$acc1_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme1_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme1_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme1_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq2_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq2_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq2_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;            
        }else if($regCat == $cat5) {          
            $acc_fee = $total_accompany*$acc1_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme1_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme1_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme1_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq3_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq3_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq3_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;             
        }else if($regCat == $cat6) {           
            $acc_fee = $total_accompany*$acc1_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme1_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme1_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme1_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq4_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq4_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq4_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3; 
        }else if($regCat == $cat7) {            
            $acc_fee = $total_accompany*$acc_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq1_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq1_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq1_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;
        }else if($regCat == $cat8) {            
            $acc_fee = $total_accompany*$acc_fee;          
            if($cme1 =='Yes'){ $accCmeFee1=$acc_cme_fee; }else{$accCmeFee1=0;}
            if($cme2 =='Yes'){ $accCmeFee2=$acc_cme_fee; }else{$accCmeFee2=0;}
            if($cme3 =='Yes'){ $accCmeFee3=$acc_cme_fee; }else{$accCmeFee3=0;}
            if($a_banquet1 =='Yes'){ $accBanqFee1=$banq1_fee; }else{$accBanqFee1=0;}
            if($a_banquet2 =='Yes'){ $accBanqFee2=$banq1_fee; }else{$accBanqFee2=0;}
            if($a_banquet3 =='Yes'){ $accBanqFee3=$banq1_fee; }else{$accBanqFee3=0;}
            $accCmeTotal=$accCmeFee1+$accCmeFee2+$accCmeFee3;
            $accBanqTotal=$accBanqFee1+$accBanqFee2+$accBanqFee3;             
        }
	}else{$acc_fee=0; $accCmeTotal=0;
        $accBanqTotal=0;}
        $accFee1=($acc_fee/$total_accompany);
    $acc_total= $acc_fee + $accCmeTotal + $accBanqTotal;
    $reg_total=$reg_fee+$cmeFee+$wrk_fee+$banqFee+$pg_teach_fee+$banqFee2;
    $total = $reg_total + $acc_total;
    $charges = 0;
    $gtotal = round($total + $charges);
    $tid = date('Ymdhis');
    $order_id = (rand(11111, 99999));
    $_SESSION['tid'] = $tid;
    $_SESSION['order_id'] = $order_id;
    $_SESSION['gtotal'] = $gtotal;
    $query = mysqli_query($conn, "SELECT srn, email FROM registration WHERE del = '0' AND email = '" . trim($email) . "'");
    $select = mysqli_num_rows($query);
    $sql_data = [
        "title" => $_POST['title'],        
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "mobile" => $_POST['mobile'],
        "email" => $_POST['email'],  
        "address" => $_POST['address'],
        "country" => $_POST['country'],
        "state" => $_POST['state'],
        "city" => $_POST['city'], 
        "pincode" => $_POST['pincode'],        
        "c_code" => $_POST['c_code'],
        "mem_id" => $_POST['mem_id'],
        "a1name" => $_POST['a1name'],
        "a1age" => $_POST['a1age'],
        "accFee1"=>$accFee1,
        "acc_cme1" => $cme1,
        "acc_cme1_fee"=>$accCmeFee1,
        "a_banquet1" => $a_banquet1,
        "a_banquet1_fee" => $a_banquet1_fee,
        "a2name" => $_POST['a2name'],
        "a2age" => $_POST['a2age'],
        "accFee2"=>$accFee1,
        "acc_cme2" => $cme2,
        "acc_cme2_fee"=>$accCmeFee2,
        "a_banquet2" => $a_banquet2,  
        "a_banquet2_fee" => $a_banquet2_fee,      
        "a3name" => $_POST['a3name'],
        "a3age" => $_POST['a3age'],
        "accFee3"=>$accFee1,
        "acc_cme3" => $cme3,
        "acc_cme3_fee"=>$accCmeFee3,
        "a_banquet3" => $a_banquet3,  
        "a_banquet3_fee" => $a_banquet3_fee,      
        "accompany_total_fee"=>$acc_total,        
        "banqFee" =>addslashes($banqFee),        
        "total_accompany" =>addslashes($total_accompany),
        "designation" =>addslashes($designation),
        "gender" => $gender,
        "institute"=>$institute,
        "r_banquet" => $r_banquet,
        "bnq_fee" => $banqFee,
        "pg_teach_pro"=>$pg_teach_pro,
        "pg_teach_fee"=>$pg_teach_fee,
        "reg_typ" => $_POST['reg_typ'],
        "regCat" => $regCat,
        "reg_fee" => $reg_fee,
        "workshop" => $workshop,
        "workshop_option_name"=>$workshop_option_name,
        "wrk_fee" => $wrk_fee,
        "cme_reg" => $cme_reg,
        "cmeFee" => $cmeFee,
        "total" => $total,
        "charges" => $charges,
        "gtotal" => $gtotal,
        "p_status" => 'Pending',
        "ref" => 'IOACON 2025',
        "sendmail" =>'0'
    ];
    $user_data = [   
        "title" => $_POST['title'],     
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "c_code" => $_POST['c_code'],
        "mobile" => $_POST['mobile'],
        "email" => $_POST['email'],  
        "address" => $_POST['address'],        
        "country" => $_POST['country'],
        "state" => $_POST['state'],
        "city" => $_POST['city'], 
        "pincode" => $_POST['pincode'], 
        "gender" => $gender,               
        "reg_status" =>'0'
    ];
    if ($select > 0) {
        $row = mysqli_fetch_array($query);
        $update_id = $row['srn'];
        $sql = "UPDATE registration SET " . implode(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($sql_data), $sql_data)) . " WHERE del = '0' AND email = '$email'";

        $sql_user = "UPDATE users SET " . implode(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($user_data), $user_data)) . " WHERE email = '$email'";

    } else {
        $sql = "INSERT INTO registration SET " . implode(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($sql_data), $sql_data));

        $sql_user = "INSERT INTO users SET " . implode(", ", array_map(fn($key, $value) => "$key = '$value'", array_keys($user_data), $user_data));
    }
    $upload_name = $_FILES['upload_pg']['name'];
    if ($upload_name != '' && $update_id != '') {
        $qry = '';
        $target = 'upload_pg/';
        if ($_FILES['upload_pg']['name'] != '') {
            $qry = '';
            $ext = pathinfo($_FILES['upload_pg']['name']);
            $path = $update_id . "_" . $upload_name;
            $qry .= "upload_pg = '" . $path . "',";
            $target_path = $target . $path;
            if (file_exists($target_path))
                unlink($target_path);
        }
        move_uploaded_file($_FILES['upload_pg']['tmp_name'], $target_path);
        if ($qry != '') {
            $qry = rtrim($qry, ",");
            mysqli_query($conn, "UPDATE registration SET " . $qry . " WHERE del='0' AND email ='$email'");
        }
    }
    $result = mysqli_query($conn, $sql);
    $result_user = mysqli_query($conn, $sql_user);
    
    if ($result && $result_user) {
        echo "<script>window.location.href='../pages/check-out.php';</script>";
    } else {
        echo 'Failed';
    }
}
