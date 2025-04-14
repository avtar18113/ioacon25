<?php 
include_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('./common/head.php'); ?>

<body>
    <div class="container-scroller">
        <?php  include_once('./db.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <!-- <div class="main-panel"> -->
            <div class="content-wrapper">
                <div class="row justify-content-center">
                    <!-- ========== Add code =========== -->
                    <div class='col-md-6 grid-margin stretch-card'>
                        <div class="card overflow-hidden">
                            <img class="w-100" src="<?=$siteHeaderImage ?>">
                            <div class="formbox my-3 px-5">
                            <form action="" id="login-form" method="POST">
                                <div class="row">
                                <div class="col-md-8 my-2 mb-3">
                                    <label for="emailValidate">Enter Registered Email <span class="text-danger">*</span></label>
                                    <input type="email" name="emailValidate" id="emailValidate" class="form-control email-input" required>
                                    
                                </div>
                                <div class="col-md-2 my-2 mb-3">
                                <label for="emailValidate"><span class="text-danger"></span></label>
                                    <button class="btn btn-primary" onclick="validateemail()">Validate</button>                                    
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    

<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['emailValidate'];
    
    // Prevent SQL injection
    $email = $conn->real_escape_string($email);
    
    $sql = "SELECT * FROM registration WHERE email='$email' AND p_status='success'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['email'] = $user['email'];
        echo "<script>alert('E-mail Verified'); window.location.href='./home'; </script>";
        exit();
    } else {
        echo "<script>
            var action = confirm('Invalid email or you are not registered. Do you want to register?');
            if (action) {
                window.location.href = './register-now'; // Redirect to register page
            } else {
                window.location.href = './login'; // Stay on the same page
            }
        </script>";
    }
}
?>

    
</body>

</html>