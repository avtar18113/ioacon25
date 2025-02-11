<?php 
include_once('config.php');
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
            <form action="./controller/AbstractController.php" id="abs-form" method="post" enctype="multipart/form-data">
                <div class="form-box formbg">
                    <img class="w-100" src="<?= $siteHeaderImage ?>" alt="IOACON Header Image">
                    <h2 class="mb-0 text-center sub-heading">Abstract Submission</h2>
                    <div class="row px-lg-5 p-3">
                    <div class="col-md-4 my-2 mb-3">
                            <label for="email1">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email1" class="form-control email-input" required>
                            <p id="email1_error"></p>

                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="mobile">Mobile <span class="text-danger">*</span></label>
                            <input type="text" name="mobile" id="mobile" class="form-control mobile" required>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="reg_no">Conference Registration No <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="reg_no" id="reg_no" class="form-control" readonly>
                        </div>
                        <div class="col-md-2 my-2 mb-3">
                            <input type="hidden" name="userId" id="userId" class="form-control"
                                value="">
                            <label for="title">Title<span class="text-danger">*</span></label>
                            <select name="title" class="form-control form-select" required>
                                <option value="">Select Title</option>
                                <option value="Prof.">Prof.</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="fname">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="fname" id="fname" class="form-control" required>
                        </div>
                        <div class="col-md-2 my-2 mb-3">
                            <label for="gender">Gender <span class="text-danger">*</span></label>
                            <select name="gender" class="form-control form-select" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>

                            </select>

                        </div>
                        
                        <div class="col-md-4 my-2 mb-3">
                            <label for="age">Age<span class="text-danger">*</span></label>
                            <input type="text" name="age" id="age" class="form-control age" required>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="designation">Designation <span class="text-danger">*</span></label>
                            <input type="text" name="designation" id="designation" class="form-control"
                                required>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="institute">Institute <span class="text-danger">*</span></label>
                            <input type="text" name="institute" id="institute" class="form-control" required>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="yearof_mbbs">Year of Passing MBBS <span class="text-danger">*</span></label>
                            <input type="text" name="yearof_mbbs" id="yearof_mbbs" class="form-control yearof_mbbs"
                                required>
                        </div>
                        <div class="col-md-12 my-2 mb-3 d-none">
                            <label for="address">Address <span class="text-danger">*</span></label>
                            <textarea type="text" name="address" id="address" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row px-lg-5 p-3 justify-content-between">
                        <div class="col-md-4 my-2 mb-3">
                            <label for="Country">Country <span class="text-danger">*</span></label>
                            <select name="country" class="countries form-control form-select" id="countryId" required>
                                <option value="">Select Country</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="state">State <span class="text-danger">*</span></label>
                            <select name="state" class="states form-control form-select" id="stateId" required>
                                <option value="">Select State</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2 mb-3">
                            <label for="city">City <span class="text-danger"></span></label>
                            <select name="city" class="cities form-control form-select" id="cityId">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2 mb-3 d-none">
                            <label for="pincode">PIN/ZIP Code</label>
                            <input type="text" name="pincode" id="pincode" class="form-control">
                        </div>
                    </div>
                    <div class="sub-heading">
                        <h4 class="mb-4 text-center">Co Authors Details</h4>
                        <!-- <p>Please Select any one co-author for Presenting Abstract</p> -->
                    </div>
                    <div class="row px-lg-5 px-3">
                        <div class="col-md-6 my-2">
                            <label for="a_name1">1. Co Author Name </label>
                            <input type="text" name="co_author1_name" id="a_name1" class="form-control" />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="a_affiliation1">Institution</label>
                            <input type="text" name="co_author1_affiliation" id="a_affiliation1" class="form-control" />
                        </div>
                        <div class="col-md-4 my-2 d-none">
                            <label for="a_institution1">Institution Address</label>
                            <input type="text" name="a_institution1" id="a_institution1" class="form-control" />
                        </div>
                        <div class="col-md-12 my-2">
                            <button type="button" name="1" id="add_1" class="add mdi mdi-plus"><i class="fa-solid fa-square-plus"></i></button>
                        </div>
                    </div>
                    <div class="row px-lg-5 px-3" id="row2" style="display:none;">
                        <div class="col-md-6 my-2">
                            <label for="a_name2">2. Co Author Name </label>
                            <input type="text" name="co_author2_name" id="a_name2" class="form-control" />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="a_affiliation2">Institution</label>
                            <input type="text" name="co_author2_affiliation" id="a_affiliation2" class="form-control" />
                        </div>
                        <div class="col-md-4 my-2 d-none">
                            <label for="a_institution2">Institution Address</label>
                            <input type="text" name="a_institution2" id="a_institution2" class="form-control" />
                        </div>
                        <div class="col-md-12 my-2">
                            <button type="button" name="2" id="add_2" class="add mdi mdi-plus"><i class="fa-solid fa-square-plus"></i></button>
                            <button type="button" name="2" id="del_2" class="delete mdi mdi-minus"><i class="fa-solid fa-square-minus"></i></button>
                        </div>
                    </div>
                    <div class="row px-lg-5 px-3" id="row3" style="display: none;">
                        <div class="col-md-6 my-2">
                            <label for="a_name3">3. Co Author Name </label>
                            <input type="text" name="co_author3_name" id="a_name3" class="form-control" />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="a_affiliation3">Institution</label>
                            <input type="text" name="co_author3_affiliation" id="a_affiliation3" class="form-control" />
                        </div>
                        <div class="col-md-4 my-2 d-none">
                            <label for="a_institution3">Institution Address</label>
                            <input type="text" name="a_institution3" id="a_institution3" class="form-control" />
                        </div>
                        <div class="col-md-12 my-2">
                            <button type="button" name="3" id="add_3" class="add mdi mdi-plus"><i class="fa-solid fa-square-plus"></i></button>
                            <button type="button" name="3" id="del_3" class="delete mdi mdi-minus"><i class="fa-solid fa-square-minus"></i></button>
                        </div>
                    </div>
                    <div class="row px-lg-5 px-3" id="row4" style="display: none;">
                        <div class="col-md-6 my-2">
                            <label for="a_name4">4. Co Author Name </label>
                            <input type="text" name="co_author4_name" id="a_name4" class="form-control" />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="a_affiliation4">Institution</label>
                            <input type="text" name="co_author4_affiliation" id="a_affiliation4" class="form-control" />
                        </div>
                        <div class="col-md-4 my-2 d-none">
                            <label for="a_institution4">Institution Address</label>
                            <input type="text" name="a_institution4" id="a_institution4" class="form-control" />
                        </div>
                        <div class="col-md-12 my-2"> <button type="button" name="4" id="add_4" class="add mdi mdi-plus"><i class="fa-solid fa-square-plus"></i></button>
                            <button type="button" name="4" id="del_4" class="delete mdi mdi-minus"><i class="fa-solid fa-square-minus"></i></button>
                        </div>
                    </div>
                    <div class="row px-lg-5 px-3" id="row5" style="display: none;">
                        <div class="col-md-6 my-2">
                            <label for="a_name5">5. Co Author Name </label>
                            <input type="text" name="co_author5_name" id="a_name5" class="form-control" />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="a_affiliation5">Institution</label>
                            <input type="text" name="co_author5_affiliation" id="a_affiliation5" class="form-control" />
                        </div>
                        <div class="col-md-4 my-2 d-none">
                            <label for="a_institution5">Institution Address</label>
                            <input type="text" name="a_institution5" id="a_institution5" class="form-control" />
                        </div>
                        <div class="col-md-12 my-2">
                            <!-- <button type="button" name="5" id="add_5" class="add mdi mdi-plus"><i class="mdi mdi-plus"></i></button> -->
                            <button type="button" name="5" id="del_5" class="delete mdi mdi-minus"><i class="fa-solid fa-square-minus"></i></button>
                        </div>
                    </div>
                    <div class="sub-heading">
                        <h4 class="text-center">Presenting Author</h4>
                        <p class="text-center">(Please ensure that the Presenting Author must be registered at the conference otherwise your abstract will be rejected by the reviewer)</p>
                    </div>
                    <div class="row justify-content-center px-lg-5 px-3">
                        <div class="col-md-6 my-2">
                            <label for="presentAuthor">Presenting Author Name <span class="text-danger">*</span></label>
                            <input type="text" name="presenting_author_name" id="presentAuthor" class="form-control" required />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="presentAffiliat">Institution <span class="text-danger">*</span></label>
                            <input type="text" name="presenting_author_institution" id="presentAffiliat" class="form-control"
                                required />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="presentDesig">Designation <span class="text-danger">*</span></label>
                            <input type="text" name="presenting_author_designation" id="presentDesig" class="form-control"
                                required />
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="presentEmail">E-mail <span class="text-danger">*</span></label>
                            <input type="email" name="presenting_author_email" id="presentEmail" class="form-control"
                                required />
                            <p id="email_error"></p>
                        </div>
                        <div class="col-md-12 my-2">
                            <p class="">Check Presenting Author Registration status <span class="text-primary" id="emailValid" onclick="validateEmail()">Click Here</span></p>

                        </div>
                    </div>
                    <h4 class="mb-4 text-center sub-heading">Abstract Details</h4>
                    <div class="row px-lg-5 p-3">
                        <div class="col-md-4 my-2">
                            <label for="presentation">Type of Presentation <span
                                    class="text-danger">*</span></label>
                            <select name="type_of_presentation" id="abs-presentation" class="form-control form-select" required>
                                <option value="">Choose...</option>
                                <option value="Free Paper">Free Paper</option>
                                <option value="Award Paper">Award Paper</option>
                                <option value="Poster">Poster</option>
                                <option value="Video Presentation">Video Presentation</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2" id="memberSection" style="display:none">
                            <label for="memberOption">Are You Member<span class="text-danger">*</span></label>
                            <select name="member_option" id="memberOption" class="form-control form-select">
                                <option value="">Choose...</option>
                                <option value="No">No</option>
                                <option value="Life Member">Life Member</option>
                                <option value="Associate Member">Associate Member</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2" id="membershipSection" style="display:none">
                            <label for="mci_no">Membership No. <span class="text-danger">*</span></label>
                            <input type="text" name="membership_no" id="mci_no" class="form-control">
                            <p id="mci_no_error"></p>
                        </div>
                        <div class="col-md-4 my-2">
                            <label for="categorySelect">Category <span class="text-danger">*</span></label>
                            <select name="category" id="categorySelect" class="form-control form-select" required>
                                <option value="">Select category</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2">
                            <label for="subcategorySelect">Sub Category <span class="text-danger textreq">*</span></label>
                            <select name="subcategory" id="subcategorySelect" class="form-control form-select">
                                <option value="">Select Subcategory</option>
                            </select>
                        </div>
                        <div class="col-md-4 my-2" id="apawardSection" style="display:none">
                            <label for="awardApp">Apply for Award <span
                                    class="text-danger">*</span></label>
                            <select name="apply_for_award" id="awardApp" class="form-control form-select">
                                <option value="">Choose...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        
                        
                        <div class="col-md-4 my-2" id="awardSection" style="display:none">
                            <label for="awards">Award Category <span
                                    class="text-danger"></span></label>
                            <select name="award_category" id="awards" class="form-control form-select">
                                <option value="">Choose...</option>
                                
                            </select>
                        </div>
                        
                        <div class="col-md-4 my-2" id="uploadAbs" style="display:none">
                            <label for="upload_abs">Upload Abstract File <span
                                    class="text-danger">*</span></label>
                            <input type="file" name="abstract_file_path" id="upload_abs" class="form-control">
                            <p>Upload PDF only</p>
                        </div>
                        <div class="col-md-4 my-2" id="insertLinks" style="display:none">
                            <label for="vlink">Insert Video Link <span class="text-danger">*</span></label>
                            <input type="text" name="video_link" id="vlink" class="form-control">
                        </div>
                        <div class="col-md-8 my-2">
                            <label for="topic">Abstract Topic <span class="text-danger">*</span></label>
                            <input type="text" name="abstract_topic" id="topic" class="form-control" required>
                            <p id="topic_error"></p>
                        </div>

                        <div class="col-md-12 my-2 mb-0">
                            <label for="abstract">Abstract <span class="text-danger">*</span></label>
                            <textarea name="abstract_text" id="abstract" cols="30" rows="10" class="form-control"
                                required></textarea>
                            <p class="fst-italic text-end m-lg-0"><span id="characters"
                                    class="fw-bold">250</span>
                                Words Left out of <span>250</span></p>
                        </div>
                    </div>
                    <div class="px-lg-5 px-3 pb-5">
                        <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary">
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
    <script src="<?=$BASE_URL?>/assets/js/abstract.js"></script>
</body>

</html>