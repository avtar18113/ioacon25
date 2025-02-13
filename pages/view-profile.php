<?php 
include_once('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('../common/head.php'); ?>

<body>
    <div class="container-scroller">
        <?php  include_once('../db.php'); include_once('../common-fatch-code.php'); include_once('../common/topnav.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once('../common/sidenav.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <?php include_once('../common/sub-menu.php'); ?>
                    </div>
                    <div class="page-header m-0">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2 d-none">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <p class="bg-primary text-white py-2 px-2">Registration Status-
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="row card">
                        <div class="form-box">
                            <h2 class="text-center text-large">User Profile</h2>
                            <form action="" class="row g-3" id="profileForm" method="POST">                                
                                <div class="col-md-6 mb-3">
                                    <label for="lname">Full Name <span class="text-danger"></span></label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="<?php  echo $regData['title'].' '.  $regData['fname'].' '.  $regData['lname']; ?>" readonly>
                                    <span class="text-danger error_code"></span>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="gender">Gender <span class="text-danger">*</span></label>
                                    <input type="gender" name="gender" id="gender1" class="form-control gender-input"
                                        value="<?=$regData['gender'] ?>" readonly>
                                    
                                    <span class="text-danger error_code"></span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email1">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email1" class="form-control email-input"
                                        value="<?= $regData['email'] ?>" readonly>
                                    <span class="text-danger error_code"></span>
                                </div>
                                <div class="col-md-1 mb-3">
                                    <label for="country_code">code <span class="text-danger">*</span></label>
                                    <input type="text" name="country_code" id="country_code"
                                        class="form-control country_code" value="<?= $regData['c_code'] ?>" readonly>
                                    <span class="text-danger error_code"></span>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                    <input type="text" name="mobile" id="mobile" class="form-control mobile"
                                        minlength="12" placeholder="with Country code" value="<?= $regData['mobile'] ?>" readonly>
                                    <span class="text-danger error_code"></span>
                                </div>

                                <div class="col-md-4 pe-2 mb-3">
                                    <label for="Country">Country <span class="text-danger">*</span></label>
                                    <input name="country" class="countries form-control" id="countryId" value="<?= $regData['country'] ?>" readonly>
                                    
                                </div>
                                <div class="col-md-4 pe-2 mb-3">
                                    <label for="state">State <span class="text-danger">*</span></label>
                                    <input name="state" class="states form-control" id="stateId" value="<?= $regData['state'] ?>" readonly>
                                   
                                </div>
                                <div class="col-md-4 pe-2 mb-3">
                                    <label for="city">City <span class="text-danger"></span></label>
                                    <input name="city" class="cities form-control" id="cityId" value="<?= $regData['city'] ?>" readonly>
                                    
                                </div>
                                <div class="col-md-4 pe-2 mb-3">
                                    <label for="pincode">PIN/ZIP Code<span class="text-danger">*</span></label>
                                    <input type="text" name="pincode" id="pincode" class="form-control" value="<?= $regData['pincode'] ?>" readonly>
                                </div>
                                <div class="col-md-12 pe-2 mb-3">
                                    <label for="address">Postal Address </label>
                                    <textarea type="text" name="address" id="address" class="form-control"
                                        rows="3" readonly><?= $regData['address'] ?></textarea>
                                </div>
                                <div class="col-12 d-none">
                                    <button type="submit" class="btn btn-primary" id="profileUpdate">Save
                                        Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include_once('../common/footer.php'); ?>
</body>

</html>