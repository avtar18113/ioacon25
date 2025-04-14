<?php 
$_SESSION['userId']=2;
if (empty($_SESSION['userId'])) {
    header('Location: ../login.php');
    exit();
}

$email = $_SESSION['email'];

// Fetch user data from the database
// $userQuery = "SELECT * FROM users WHERE email='$email'";
// $userResult = $conn->query($userQuery);
// if(mysqli_num_rows($userResult) > 0) $userData = $userResult->fetch_assoc();

// Fetch user data from the database
$regDetails = "SELECT * FROM addon WHERE email='$email'";
$regResult = $conn->query($regDetails);
if(mysqli_num_rows($regResult) > 0) $regData = $regResult->fetch_assoc();
    
    
$fullname=$regData['title'].' '.  $regData['fname'].' '.  $regData['lname'];
$mobile=$regData['mobile'];
$srnReg=$regData['srn'];
?>