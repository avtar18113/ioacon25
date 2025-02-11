<?php 
include('../db.php');
if (isset($_POST['ACTION']) && $_POST['ACTION'] == 'EMAIL_FIND') {
    $email = $_POST['email'];
   $data1= mysqli_query($conn, "SELECT * FROM registration WHERE p_status='success' AND email='$email'");
    $matchRow =  mysqli_num_rows($data1);

    if ($matchRow == 1) {
        echo 'Success';
      
    } else {
        echo 'Failure';
    }
}

?>