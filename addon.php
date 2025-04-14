<?php 
include_once('config.php');
include_once('slab.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('./common/head.php'); ?>

<body>
    <div class="container-scroller">
        <?php  include_once('./db.php'); include_once('./common-fatch-code.php'); include_once('./common/topnav.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once('./common/sidenav.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Abstract Submission code here -->
                    <div class='row justify-content-center'>
                        <div class='col-md-12 stretch-card card p-0 overflow-hidden'>
                            <form action="./query/registration-addon.php" id="abs-form" method="post"
                                enctype="multipart/form-data" autocomplete="off">
                                <div class="form-box formbg">
                                    <img class="w-100" src="<?=$siteHeaderImage ?>" alt="IOACON Header Image">
                                    <h2 class="mb-0 text-center sub-heading">Addon in Registration</h2>
                                    <div class="row px-lg-5 p-3">
                                        <div class="col-md-4 my-2 mb-3">
                                            <label for="email1">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" id="email1"
                                                value="<?= $regData['email'] ?>" class="form-control email-input"
                                                required readonly>
                                            <p id="email1_error"></p>
                                        </div>
                                        <div class="col-md-4 my-2 mb-3">
                                            <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                            <input type="text" name="mobile"
                                                value="<?= $regData['c_code']. $regData['mobile'] ?>" id="mobile"
                                                class="form-control mobile" required readonly>
                                        </div>
                                        <div class="col-md-4 my-2 mb-3">
                                            <label for="rid">Conference Registration No <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="rid" id="rid" value="<?= $regData['rid'] ?>"
                                                class="form-control" readonly>                                                
                                        </div>

                                        <div class="col-md-3 my-2 mb-3">
                                            <label for="countryId">Country <span class="text-danger">*</span></label>                                          
                                            <input type="text" name="country" value="<?= $regData['country'] ?>"
                                                class="form-control" readonly>
                                        </div>
                                        <div class="col-md-3 my-2 mb-3">
                                            <label for="regCat">Registration Category <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="regCat" id="regCat" class="regCat form-control" value="<?= $regData['regCat'] ?>" readonly>        
                                           
                                        </div>

                                        <div class="col-md-6 my-2 mb-3">
                                            <label for="fname">Full Name <span class="text-danger">*</span></label>
                                            <input type="text" name="fname" id="fname"
                                                value="<?= $regData['title'].' '. $regData['fname'].' '. $regData['lname'] ?>"
                                                class="form-control" required readonly>
                                        </div>

                                        
                                        <div class="col-md-3 my-2 mb-3 mem_id" style="display: none; ">
                                            <label for="mem_id">Membership No <span class="text-danger"></span></label>
                                            <input type="input" name="mem_id" id="mem_id" class="form-control">
                                            <input type="hidden" name="reg_typ" id="reg_typ" value="Non Residential" class="form-control" readonly>
                                        </div>
                                        
                                        <!-- cme registration  -->
                                        <?php if($regData['cme_reg']=='No'){ ?> 
                                        <div class="col-md-3 my-2 mb-3 rshow">
                                            <label for="cme_reg">CME Registration *<span class="text-danger"></span></label>
                                            <select name="cme_reg" id="cme_reg" class="form-select" required>
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <?php } ?>
                                        <!-- workshop  -->
                                        <?php if($regData['workshop']=='No'){ ?>
                                        <div class="col-md-3 my-2 mb-3 workshop rshow" id="wo1">
                                            <label for="workshop">Workshop *<span class="text-danger"></span></label>
                                            <select name="workshop" id="workshop" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="<?= $workshop1; ?>"><?= $workshop1; ?></option>
                                                <option value="<?= $workshop2; ?>"><?= $workshop2; ?></option>
                                            </select>
                                        </div>
                                        <?php } ?>
                                        <?php if($regData['pg_teach_pro']=='No' && $regData['regCat']=='PG STUDENT'){ ?>
                                        <div class="col-md-3 ps-2 mb-3 pg_teach_pro">
                                            <!--<div class="col-md-3 ps-2 mb-3 d-none">-->
                                            <label for="pg_teach_pro">PG Teaching Program *<span class="text-danger"></span></label>
                                            <select name="pg_teach_pro" id="pg_teach_pro" class="form-select">
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <?php } ?>
                                        

                                        <div class="col-md-3 my-2 mb-3 d-none" id="workshopShow" style="display:none">
                                            <label for="workshop_option_name">select Workshop Option *<span
                                                    class="text-danger"></span></label>
                                            <select name="workshop_option_name" id="workshop_option_name" class="form-select">
                                                <option value="">Select</option>

                                            </select>
                                        </div>

                                        <!-- banquet  -->
                                        <?php if($regData['r_banquet']=='No'){ ?>
                                        <div class="col-md-3 my-2 mb-3 rshow" id="ba1">
                                            <label for="r_banquet">Banquet *<span class="text-danger"></span></label>
                                            <select name="r_banquet" id="r_banquet" class="form-select" required>
                                                <option value=''>Select</option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>
                                        <?php } ?>

                                        
                                        <div class="col-md-3 my-2 mb-3 rshow d-none" id="ba1">
                                            <label for="r_banquet2">Select Additional Banquet <span class="text-danger"></span></label>
                                            <select name="r_banquet2" id="r_banquet2" class="form-select">
                                                <option value=''>Select No. of Banquet</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        
                                        <?php if($regData['total_accompany']<3){ ?>
                                        <div class="col-md-3 my-2 mb-3 rshow" id="accPerson1">
                                            <label for="accPerson">Select No. of Accompany <span class="text-danger"></span></label>
                                            <input  id="acvalue" value="<?=$regData['total_accompany']?>" hidden>
                                            <select name="total_accompany" id="accPerson" class="form-select" title="2375">
                                                <option value="">No</option>
                                                <?php if($regData['total_accompany']==0){ 
                                                   echo '<option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>';
                                                }else if($regData['total_accompany']==1){ 
                                                    echo '<option value="1">1</option>
                                                     <option value="2">2</option>';
                                                 }else if($regData['total_accompany']==2){ 
                                                    echo '<option value="1">1</option>';
                                                 }
                                                ?>
                                                
                                            </select>
                                        </div> 
                                        <?php } ?>
                                        
                                        <div class="col-md-12">
                                        <div class="accompany-details col-12" style="display: none;">
                                                    <h4 class="alert alert-warning text-center"> Accompanying Details</h4>
                                                    <div class="row" id="accRow_1" style="display: none;">
                                                        <div class="col-md-4 my-2 px-2">
                                                            <label for="a1name">1. Accompanying Person Name <span class="accAge1 badge bg-secondary"></span></label>
                                                            <input type="text" name="a1name" id="a1name" class="form-control">
                                                        </div>

                                                        <div class="col-md-2 my-2 px-2">
                                                            <label for="a1age">Age <span class="accAge1 badge bg-secondary"></span></label>
                                                            <input type="text" name="a1age" id="a1age" class="form-control age">
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
                                                            <input type="text" name="a2age" id="a2age" class="form-control age">
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
                                                            <input type="text" name="a3age" id="a3age" class="form-control age">
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
                                    </div>
                                    
                                    
                                
                                    <div class="px-lg-5 px-3 pb-5">
                                        <input type="submit" name="submit" value="Submit" id="submit"
                                            class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?php include_once('./common/footer.php'); ?>
    <script type="text/javascript" src="<?=$BASE_URL?>/assets/js/addon-formjs.js" defer></script>
    
</body>

</html>