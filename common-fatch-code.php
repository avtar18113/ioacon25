<?php 
$_SESSION['userId']=2;
if (empty($_SESSION['userId'])) {
    header('Location: ../login.php');
    exit();
}
$userId = $_SESSION['userId']=2;
$email = $_SESSION['email']='rajesh.concepttc@gmail.com';

// Fetch user data from the database
$userQuery = "SELECT * FROM users WHERE email='$email'";
$userResult = $conn->query($userQuery);
if(mysqli_num_rows($userResult) > 0) $userData = $userResult->fetch_assoc();

// Fetch user data from the database
$regDetails = "SELECT * FROM registrationnew WHERE email='$email'";
$regResult = $conn->query($regDetails);
if(mysqli_num_rows($regResult) > 0) $regData = $regResult->fetch_assoc();
    
    
    

?>