<?php 
include('../db.php');
if (isset($_POST['ACTION']) && $_POST['ACTION'] == 'TOPIC_FIND') {
    $topic = $_POST['topic'];
    $topic = mysqli_real_escape_string($conn, $topic);
    // $topic='FDFD ABSTRACT TOPIC';
   $data1= mysqli_query($conn, "SELECT * FROM abstract WHERE topic='$topic'");
    $matchRow =  mysqli_num_rows($data1);

    if ($matchRow == 1) {
        echo 'Success';
      
    } else {
        echo 'Failure';
    }
}

?>