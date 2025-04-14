
<?php 
include('../db.php');

if (isset($_POST['ACTION']) && $_POST['ACTION'] == 'EMAIL_FIND') {

    // Get the email from POST data
    $email = $_POST['email'];
// $email='dinesh.tryambake@ths.tas.gov.au';
    // Securely handle the email input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query to find the record
    $query = "SELECT p_status, rid FROM registration WHERE p_status='success' AND email='$email'";
    $result = mysqli_query($conn, $query);

    // Check the number of rows matching the query
    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        echo 'verify:Success:'.$row['rid'];
    } else {
        echo 'verify:Failure';
    }
}
?>
