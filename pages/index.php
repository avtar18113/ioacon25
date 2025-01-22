<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IOACON 2025 Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style1.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/iocon-logo.webp" />
  <style>
        /* .panel-default{border: 1px solid black;} */
        .inactive_tab1 {
            background-color: #fff;
            color: #333;
            
            cursor: not-allowed;
        }

        .active_tab1 {
            background-color: #273D30;
            color: #fff;
            font-weight: 600;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }

        .is-invalid {
            border-color: red;
        }

        .is-invalid::after {
            content: 'red rew';
        }

        .row {
            margin-right: 0px;
            margin-left: 0px;
        }
        label{margin-bottom: 3px;}
    </style>
</head>

<body>
  <div class="container">

    <!-- partial:partials/_navbar.html -->

    <?php
// session_start();
require_once('db.php');

?>
<!-- // Check if session is empty, redirect to login page if necessary -->


    <!-- partial -->
    <div class="container">
      <!-- partial:partials/_sidebar.html -->
     
      <!-- partial -->
      <div class="main-panel1">
        <div class="content-wrapper p-0">
          
        <div class="container-fluid p-0">
        <br />
       
        <?php include('slab.php'); ?>
        <h2 class="text-center">IOACON 2025 Registration</h2><br />

        <form action="registration-ccreg.php" method="post" enctype="multipart/form-data" id="register_form">
            <ul class="nav nav-tabs justify-content-center" id="nav">
                <li class="nav-item">
                    <a class="nav-link active active_tab1" style="border:1px solid #ccc" id="list_login_details">Personal Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Address Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Registration</a>
                </li>
            </ul>
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active step" id="login_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Personal Details</div>
                        <div class="panel-body">
                            <div class="row justify-content-center">
                           
                                <div class="col-md-4 mb-3">
                                
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <select name="title" class="form-select" required>
                                        <option value="">Select Title</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mrs.">Mrs.</option>
                                    </select>
                                    <span class="text-danger error_code"></span>

                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="fname">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" id="fname" class="form-control" value="" required>
                                    <span class="text-danger error_code"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="lname">Last Name <span class="text-danger"></span></label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="" required>
                                    <span class="text-danger error_code"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="gender">Gender <span class="text-danger">*</span></label>
                                    <input type="text" name="gender" id="gender" class="form-control" value="" required>
                                    
                                    <span class="text-danger error_code"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="email1">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email1" class="form-control email-input" value="" required>
                                    <span class="text-danger error_code"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                    <input type="text" name="mobile" id="mobile" class="form-control mobile" value="" required>
                                    <span class="text-danger error_code"></span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="designation">Designation <span class="text-danger"></span></label>
                                    <input type="text" name="designation" id="designation" class="form-control designation">
                                    <span class="text-danger error_code"></span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="institute">Institute/ Hospital<span class="text-danger">*</span></label>
                                    <input type="text" name="institute" id="institute" class="form-control institute" required>
                                    <span class="text-danger error_code"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="mcn">Medical Council No <span class="text-danger">*</span></label>
                                    <input type="text" name="mcn" id="mcn" class="form-control mcn" required>
                                    <span class="text-danger error_code"></span>
                                </div>
                                

                            </div>
                            <br />

                            <div class="text-center">
                                <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-primary btn-lg my-2">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="personal_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Fill Address Details</div>
                        <div class="panel-body">
                            <div class="row jusify-content-between">

                                <div class="col-md-10 pe-2 mb-3">
                                    <label for="address">Postal Address </label>
                                    <textarea type="text" name="address" id="address" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="col-md-5 pe-2 mb-3">
                                    <label for="Country">Country <span class="text-danger">*</span></label>
                                    <select name="country" class="countries form-select" id="countryId" onchange="updateRegistrationCategory()" required>
                                        <option value="">Select Country</option>
                                    </select>
                                </div>
                                <div class="col-md-5 pe-2 mb-3">
                                    <label for="state">State <span class="text-danger">*</span></label>
                                    <select name="state" class="states form-select" id="stateId" required>
                                        <option value="">Select State</option>
                                    </select>
                                </div>

                                <div class="col-md-5 pe-2 mb-3">
                                    <label for="city">City <span class="text-danger"></span></label>
                                    <select name="city" class="cities form-select" id="cityId">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                                <div class="col-md-5 pe-2 mb-3">
                                    <label for="pincode">PIN/ZIP Code<span class="text-danger">*</span></label>
                                    <input type="text" name="pincode" id="pincode" class="form-control" required>
                                </div>
                            </div>
                            <br />
                            <div class="text-center">
                                <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-warning btn-lg my-2">Previous</button>
                                <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-primary btn-lg my-2">Next</button>
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="contact_details">
                    <div class="panel panel-default">
                        <div class="panel-heading">Select Registration Slab</div>
                        <div class="panel-body">
                            <div class="row jusify-content-between">
                                <div class="col-md-3 ps-2 mb-3 d-none">
                                    <!--<label for="RegType">Registration Type <span class="text-danger"></span></label>-->
                                    <!--<input type="hidden" name="reg_typ" id="reg_typ" value="NON RESIDENT" class="form-control" readonly>-->

                                </div>
                                <div class="col-md-3 ps-2 mb-3">
                                    <label for="regCat">Registration Category <span class="text-danger">*</span></label>
                                   
    
                                    <select name="regCat" id="regCat" class="regCat form-select" onchange="regVal()" required> 
                                    <option value=''>Select</option>
                                </select>
                                </div>


                                <div class="col-md-3 ps-2 mb-3 mem_id" style="display: none; ">
                                    <label for="mem_id">Membership No <span class="text-danger"></span></label>
                                    <input type="input" name="mem_id" id="mem_id" class="form-control">
                                    <input type="hidden" name="reg_typ" id="reg_typ" value="Non Residential" class="form-control" readonly>
                                </div>
                                <div class="col-md-3 ps-2 mb-3 pg_teach_pro" style="display:none">
                                    <!--<div class="col-md-3 ps-2 mb-3 d-none">-->
                                    <label for="pg_teach_pro">PG Teaching Program *<span class="text-danger"></span></label>
                                    <select name="pg_teach_pro" id="pg_teach_pro" class="form-select">
                                        <option value=''>Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3 ps-2 mb-3 upload_pg" style="display: none; ">
                                <!--<div class="col-md-3 ps-2 mb-3 d-none">-->
                                    <label for="upload_pg" id="upload_pgmsg">HOD Letter <span class="text-danger"></span></label>
                                    <input type="file" name="upload_pg" id="upload_pg" class="form-control">
                                </div>
                                <!-- Accompanying Person  -->

                                <!-- banquet  -->

                                <!-- cme registration  -->
                                <div class="col-md-3 ps-2 mb-3 rshow">
                                    <label for="cme_reg">CME Registration *<span class="text-danger"></span></label>
                                    <select name="cme_reg" id="cme_reg" class="form-select" required>
                                        <option value=''>Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                                <!-- workshop  -->
                                <div class="col-md-3 ps-2 mb-3 workshop rshow" id="wo1">
                                    <label for="workshop">Workshop *<span class="text-danger"></span></label>
                                    <select name="workshop" id="workshop" class="form-select" >
                                        <option value=''>Select</option>
                                        <option value="No">No</option>                                       
                                        <option value="<?=$workshop1; ?>"><?=$workshop1;?></option>
                                        <option value="<?=$workshop2; ?>"><?=$workshop2;?></option>
                                    </select>
                                </div>
                                <div class="col-md-3 ps-2 mb-3 d-none" id="workshopShow" style="display:none">
                                                    <label for="workshop_option_name">select Workshop Option *<span
                                                            class="text-danger"></span></label>
                                                    <select name="workshop_option_name" id="workshop_option_name" class="form-select">
                                                        <option value="">Select</option>
                                                        
                                                    </select>
                                                </div>
                                <!-- banquet  -->
                                <div class="col-md-3 ps-2 mb-3 rshow" id="ba1">
                                    <label for="r_banquet">Banquet *<span class="text-danger"></span></label>
                                    <select name="r_banquet" id="r_banquet" class="form-select" required>
                                        <option value=''>Select</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                                <div class="col-md-3 ps-2 mb-3 rshow d-none" id="ba1">
                                    <label for="r_banquet2">Select Additional Banquet <span class="text-danger"></span></label>
                                    <select name="r_banquet2" id="r_banquet2" class="form-select">
                                        <option value=''>Select No. of Banquet</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-3 ps-2 mb-3 rshow" id="accPerson1">
                                    <label for="accPerson">Select No. of Accompany <span class="text-danger"></span></label>
                                    <select name="accPerson" id="accPerson" class="form-select" title="2375">
                                        <option value="">No</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                               


                            </div>
                            <div class="row jusify-content-between">
                                <!-- ========== accompanying details ================= -->
                                <div class="accompany-details col-12" style="display: none;">
                                    <h4 class="alert alert-warning text-center"> Accompanying Details</h4>
                                    <div class="row" id="accRow_1" style="display: none;">
                                        <div class="col-md-4 my-2 px-2">
                                            <label for="a1name">1. Accompanying Person Name <span class="accAge1 badge bg-secondary"></span></label>
                                            <input type="text" name="a1name" id="a1name" class="form-control">
                                        </div>

                                        <div class="col-md-2 my-2 px-2">
                                            <label for="a1age">Age <span class="accAge1 badge bg-secondary"></span></label>
                                            <input type="text" name="a1age" id="a1age" class="form-control">
                                        </div>
                                        <div class="col-md-2 my-2 px-2">
                                            <label for="a_banquet1" class="mr-2">BANQUET *</label>
                                            <select name="a_banquet1" id="a_banquet1" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-2 my-2 px-2">
                                            <label for="cme1" class="mr-2">CME *</label>
                                            <select name="cme1" id="cme1" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>

                                        </div>
</div>

                                    <div class="row" id="accRow_2" style="display: none;">
                                        <div class="col-md-4 my-2 px-2">
                                            <label for="a2name">2. Accompanying Person Name <span class="accAge2 badge bg-secondary"></span></label>
                                            <input type="text" name="a2name" id="a2name" class="form-control">
                                        </div>

                                        <div class="col-md-2 my-2 px-2">
                                            <label for="a2age">Age <span class="accAge2 badge bg-secondary"></span></label>
                                            <input type="text" name="a2age" id="a2age" class="form-control">
                                        </div>

                                        <div class="col-md-2 my-2 px-2">
                                            <label for="a_banquet2" class="mr-2">BANQUET *</label>
                                            <select name="a_banquet2" id="a_banquet2" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-2 my-2 px-2">
                                            <label for="cme2" class="mr-2">CME *</label>
                                            <select name="cme2" id="cme2" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>

                                        </div>
</div>

                                    <div class="row" id="accRow_3" style="display: none;">
                                        <div class="col-md-4 my-2 px-2">
                                            <label for="a3name">3. Accompanying Person Name <span class="accAge3 badge bg-secondary"></span></label>
                                            <input type="text" name="a3name" id="a3name" class="form-control">
                                        </div>

                                        <div class="col-md-2 my-2 px-2">
                                            <label for="a3age">Age <span class="accAge3 badge bg-secondary"></span></label>
                                            <input type="text" name="a3age" id="a3age" class="form-control">
                                        </div>

                                        <div class="col-md-2 my-2 px-2">
                                            <label for="a_banquet3" class="mr-2">BANQUET *</label>
                                            <select name="a_banquet3" id="a_banquet3" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>

                                        </div>
                                        <div class="col-md-2 my-2 px-2">
                                            <label for="cme3" class="mr-2">CME *</label>
                                            <select name="cme3" id="cme3" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>

                                        </div>
</div>
</div>

                            </div>
                            <br />
                            <div align="center">
                                <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-warning btn-lg my-2">Previous</button>
                                <!-- <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button> -->
                                <input type="submit" name="submit" value="Proceed to Payment" id="submit" class="btn btn-primary btn-lg my-2">
                            </div>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <!--<span class="text-muted d-block text-center text-sm-start d-sm-inline-block">IOACON 2025</span>-->
    <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Developed By:</a> Concept Conferences Pvt. Ltd.</span>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->

<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>


<script src="./assets/js/countrystatecity.js"></script>
<script type="text/javascript" src="./assets/js/formjs.js"></script>
<script type="text/javascript" src="./assets/js/abstract.js"></script>
<script type="text/javascript" src="./assets/js/multistep.js"></script>
<!-- End custom js for this page -->
</body>

</html>
    