<?php 
$_SESSION['userId']=2;
if (empty($_SESSION['userId'])) {
    header('Location: ../login.php');
    exit();
}

$userId = $_SESSION['userId']=1;
$email = $_SESSION['email']='avtar18113@gmail.com';

// Fetch user data from the database
$userQuery = "SELECT * FROM users WHERE userId='$userId'";
$userResult = $conn->query($userQuery);
$userData = $userResult->fetch_assoc();

// $email='xxss@gmail.com';
// $addDetails = "SELECT * FROM addon WHERE userId='$userId' && email='$email'";
// $addResult = $conn->query($addDetails);
// if(mysqli_num_rows($addResult) > 0){
// $addData = $addResult->fetch_assoc();

// }else{
// echo 'record not found';
// }
// echo 'USERID'.$userId;
// Fetch Registration data from the database
$regDetails = "SELECT * FROM registration WHERE userId='$userId' && email='$email'";
// echo $regDetails;
// die();
$regResult = $conn->query($regDetails);
if(mysqli_num_rows($regResult) > 0){
$regData = $regResult->fetch_assoc();
$regPStatus= $regStatus= $regData['p_status'];

}else{
$regStatus='undefine';
$regPStatus= 'Pending';
}

$defStatus='undefine';
?>