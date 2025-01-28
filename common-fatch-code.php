<?php 
$_SESSION['userId']=2;
if (empty($_SESSION['userId'])) {
    header('Location: ../login.php');
    exit();
}
$userId = $_SESSION['userId']=2;
$email = $_SESSION['email']='avtar18113@gmail.com';

// Fetch user data from the database
$userQuery = "SELECT * FROM users WHERE userId='$userId'";
$userResult = $conn->query($userQuery);
if(mysqli_num_rows($userResult) > 0) $userData = $userResult->fetch_assoc();

// Fetch user data from the database
$regDetails = "SELECT * FROM registration WHERE userId='$userId' && email='$email'";
$regResult = $conn->query($regDetails);
if(mysqli_num_rows($regResult) > 0) $regData = $regResult->fetch_assoc();
    
    
    

?>