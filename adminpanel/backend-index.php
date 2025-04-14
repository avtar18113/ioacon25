<?php include 'header.php'; ?>

<section class="section">
    <div class="container">
        <!-- <div id="particles-js"></div> -->
        <form action="backend_registration-ccreg.php" id="reg-form" method="post" enctype="multipart/form-data">
            <div class="row g-0 justify-content-center">
                <div class="col-md-9">
                    <div class="form-box">
                        <h1 class="m-0">Online Registration Form</h1>
                        <div class="py-3 px-3 px-md-4 mb-4 bg-warning bg-opacity-10">
                            <!-- <h5>Please Fill in BLOCK LETTERS</h5> -->
                            <p class="text-danger fs-5 fw-light text-center fst-italic m-0">(*It is important that you
                                provide an email & mobile number so that future communications can be sent to you via
                                SMS/ e-mail)</p>
                        </div>
                        <div class="row px-4 jusify-content-between">
                            <div class="col-md-6 mb-3">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <select name="title" class="form-select">
                                    <option value="">Select Title</option>
                                    <option value="Prof.">Prof.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="fname">First Name <span class="text-danger">*</span></label>
                                <input type=" text" name="fname" id="fname" class="form-control">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="lname">Last Name <span class="text-danger"></span></label>
                                <input type="text" name="lname" id="lname" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="institute">Institute/ Hospital <span class="text-danger">*</span></label>
                                <input type="text" name="institute" id="institute" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="desig">Designation <span class="text-danger">*</span></label>
                                <input type="text" name="desig" id="desig" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mcn">MCI No</label>
                                <input type="text" name="mcn" id="mcn" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="meal">Food Preference</label>
                                <select name="meal" id="meal" class="form-select">
                                    <option value="">Select</option>
                                    <option value="Veg">Veg</option>
                                    <option value="Non Veg">Non Veg</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="address">Postal Address</label>
                                <textarea type="text" name="address" id="address" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="Country">Country <span class="text-danger">*</span></label>
                              
                                <select name="country" class="countries form-control" id="countryId" required>
                                    <option value="">Select Country</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="state">State <span class="text-danger">*</span></label>
                                <select name="state" class="states form-control" id="stateId" required>
                                    <option value="">Select State</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="city">City <span class="text-danger">*</span></label>
                                <select name="city" class="cities form-control" id="cityId" required>
                                    <option value="">Select City</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="pincode">PIN/ZIP Code<span class="text-danger"></span></label>
                                <input type="text" name="pincode" id="pincode" class="form-control">
                            </div>




                        </div>

                        <h2>Non Residential Registration</h2>
                        <div class="reg-table mt-1 mb-3 px-0 px-md-4 REG_RESIDENTIAL">
                            <div class="row">
                                <div class="col-lg-12">
                                    

                                    <input type="hidden" name="regType" id="regType" value="Non Residential Registration">

                                    <div class="non-residential">
                                        <table class="table">
                                            <tr valign="middle">
                                                <td>
                                                    <label for="regCat1"> <strong style="color: #404096;">ACP Life Member Delegate</strong></label>
                                                </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat1" value="Delegate" class="form-check-input regCat" title="5000"> <strong class="text-dark">INR 5000</strong>
                                                </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat1" value="Delegate" class="form-check-input regCat" title="6000"> <strong class="text-dark">INR 6000</strong>
                                                </td>
                                                
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat1" value="Delegate" class="form-check-input regCat" title="0"> <strong class="text-dark">INR 0</strong>
                                                </td>
                                                
                                            </tr>
                                            <tr valign="middle">
                                                <td><label for="regCat5"> <strong style="color: #404096;">Non-Member Delegate</strong></label>
                                                </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat5" value="Non-Member Delegate" class="form-check-input regCat" title="6000">
                                                    <strong class="text-dark">INR 6000</strong>
                                                </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat5" value="Non-Member Delegate" class="form-check-input regCat" title="7500">
                                                    <strong class="text-dark">INR 7500</strong>
                                                </td>
                                               
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat5" value="Non-Member Delegate" class="form-check-input regCat" title="0">
                                                    <strong class="text-dark">INR 0</strong>
                                                </td>
                                            </tr>

                                            <tr valign="middle">

                                                <td><label for="regCat2"> <strong style="color: #404096;">PG Student</strong><br></label> </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat2" value="PG Student" class="form-check-input regCat" title="1000"> 
                                                    <strong class="text-dark">INR 1000</strong>
                                                </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat2" value="PG Student" class="form-check-input regCat" title="2000"> 
                                                    <strong class="text-dark">INR 2000</strong>
                                                </td><td>
                                                    <input type="radio" name="regCat" id="regCat2" value="PG Student" class="form-check-input regCat" title="0"> 
                                                    <strong class="text-dark">INR 0</strong>
                                                </td>
                                            </tr>
                                            <tr><td colspan='4'><h2>Residential Registration</h2></td></tr>
                                            <tr valign="middle">

                                                <td><label for="regCat2"> <strong style="color: #404096;">Twin Sharing Basis</strong><br></label> </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat2" value="Twin Sharing Basis" class="form-check-input regCat" title="1000"> 
                                                    <strong class="text-dark">INR 1000</strong>
                                                </td>
                                                <td>
                                                    <input type="radio" name="regCat" id="regCat2" value="PG Student" class="form-check-input regCat" title="2000"> 
                                                    <strong class="text-dark">INR 2000</strong>
                                                </td><td>
                                                    <input type="radio" name="regCat" id="regCat2" value="PG Student" class="form-check-input regCat" title="0"> 
                                                    <strong class="text-dark">INR 0</strong>
                                                </td>
                                            </tr>
                                        </table>


                                    </div>
                                    
                                </div>

                            </div>


                            <div class="my-3 mem_id" style="display: none; ">
                                <label for="mem_id">Membership Number <span class="text-danger">*</span></label>
                                <input type="text" name="mem_id" id="mem_id" class="form-control">
                            </div>

                            <div class="my-3 mcn" style="display: none; ">
                                <label for="mcn">Medical Reg. No/ Year/ State Medical Council <span class="text-danger">*</span></label>
                                <input type="text" name="mcn" id="mcn" class="form-control">
                            </div>

                            <div class="mb-3 pg_uploadDiv" style="display: none;">
                                <label for="upload_pg">Confirmation Certificate duly signed by HOD </label>
                                <input type="file" name="upload_pg" id="upload_pg" class="form-control">
                            </div>
                        </div>


                        <h2 id="demo1">Accompany Person's Details - INR <span class="text-white"></span></h2>
                        <div class="accompany-details px-3">
                            <select name="accFee" id="accFee" class="form-select mb-3">
                                <option value="">Select Number of Accompany Person</option>
                                <option value="6000">6000</option>
                                <option value="7500">7500</option>
                               
                                <option value="0">0</option>
                            </select>
                            <select name="accPerson" id="accPerson" class="form-select mb-3">
                                <option value="">Select Number of Accompany Person</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 Persons</option>
                                <option value="3">3 Persons</option>
                            </select>
                            <ul>
                                <li id="accRow_1" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="accName1">1. Accompanying Person Name <span class="mendetary">*</span></label>
                                            <input type="text" name="accName1" id="accName1" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="accGender1">Gender <span class="mendetary">*</span></label>
                                            <select name="accGender1" class="form-select">
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li id="accRow_2" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="accName2">2. Accompanying Person Name <span class="mendetary">*</span></label>
                                            <input type="text" name="accName2" id="accName2" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="accGender2">Gender <span class="mendetary">*</span></label>
                                            <select name="accGender2" class="form-select">
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                </li>

                                <li id="accRow_3" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="accName3">3. Accompanying Person Name <span class="mendetary">*</span></label>
                                            <input type="text" name="accName3" id="accName3" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="accGender3">Gender <span class="mendetary">*</span></label>
                                            <select name="accGender3" class="form-select">
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="my-3 partner" style="display: none;">

                            <h3>Accompany person Detail</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="p_name">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="p_name" id="p_name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="p_age">Age <span class="text-danger">*</span></label>
                                    <input type="text" name="p_age" id="p_age" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="p_gender">Gender <span class="text-danger">*</span></label>
                                    <select name="p_gender" id="p_gender" class="form-select">
                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <br><br>
                        <div class="offer px-3">
                            <select name="offer" id="offer" class="form-select mb-3 ">
                                <option value="">Select Payment Mode</option>
                                <option value="Complimentary">Complimentary</option>
                                <option value="offline">offline</option>
                            </select>
                            <ul>
                                <li id="offer_1">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ref">Reference Name<span class="mendetary">*</span></label>
                                            <input type="text" name="ref" id="ref" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="p_id">Payment Id or Cheque No. <span class="mendetary">*</span></label>
                                            <input type="text" name="p_id" id="p_id" class="form-control">
                                            <input type="hidden" name="accAge1" id="accAge1">
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <br><br>
                        <p><strong style="background-color: azure; border: 1px dashed grey;padding: 10px;margin:10px;">
                                For
                                registration related query call Rahul: +91 9810399003 </strong></p>

                        <div class="p-4">

                            <input type="hidden" name="reg_fee" id="reg_fee" value="0">                            
                            <input type="hidden" name="acc_total" id="acc_total" value="0">

                            <input type="submit" name="submit" id="submit" class="btn btn-primary"><br>
                            <span class="mendetary"><em>* Registration amount is inclusive of GST.</em></span>

                        </div>





                    </div>

                </div>

        </form>

    </div>



</section>

<script type="text/javascript">
    $(document).ready(function() {

        /******regCat******/

        $('#memCat').change(function() {
            $('#mem_id').val('');
            $('.memidDiv').slideUp();
            memCat = $(this).val();
            if (memCat == 'Yes') {
                $('.memidDiv').slideDown();
            }
        });



        $('.regCat').click(function() {
            regCat = $(this).val();
            reg_fee = $(this).attr('title');

            $('#reg_fee').val(reg_fee);
            $('#upload_pg,#mem_id,#mcn').val('');
            $('.mem_id,.mcn,.pg_uploadDiv').slideUp();

            if (regCat == 'Delegate') {
                $('.mem_id').slideDown();
                $('.pg_uploadDiv').slideUp();
            }

            if (regCat == 'Post Graduate') {
                $('.pg_uploadDiv').slideDown();
                $('.mem_id').slideUp();
            }

             else {
                $('.partner input').val('');
                $('.partner').slideUp();
                $('.mem_id').slideUp();
                $('.pg_uploadDiv').slideUp();
            }


        });



        $('#accFee').change(function() {
            accFee = $(this).val();
        });

        $('#accPerson').change(function() {

            accPerson = $(this).val();
            // accFee = $(this).attr('title');
            acc_total = accPerson * accFee;

            //alert(acc_total);
            document.getElementById("demo1").innerHTML = "Accompany Person's Details - INR " + acc_total;
            $('#acc_total').val(acc_total);

            if (accPerson == 1) {
                $('#accRow_1').slideDown();
                $('#accRow_2,#accRow_3, #accRow_4').slideUp();
                $('#accRow_2 input[type=text],#accRow_3 input[type=text],#accRow_4 input[type=text]').val('');
                $('#accRow_2 input[type=date],#accRow_3 input[type=date],#accRow_4 input[type=date]').val('');
                $('#accRow_2 input[type=number],#accRow_3 input[type=number],#accRow_4 input[type=number]').val('');
                $('#accRow_2 input[type=checkbox],#accRow_3 input[type=checkbox],#accRow_4 input[type=checkbox]').prop('checked', false);
                $('#accRow_2 select,#accRow_3 select,#accRow_4 select').val('');

            } else if (accPerson == 2) {

                $('#accRow_1,#accRow_2').slideDown();
                $('#accRow_3, #accRow_4').slideUp();
                $('#accRow_3 input[type=text],#accRow_4 input[type=text]').val('');
                $('#accRow_3 input[type=date],#accRow_4 input[type=date]').val('');
                $('#accRow_3 input[type=number],#accRow_4 input[type=number]').val('');
                $('#accRow_3 input[type=checkbox],#accRow_4 input[type=checkbox]').prop('checked', false);
                $('#accRow_3 select,#accRow_4 select').val('');

            } else if (accPerson == 3) {
                $('#accRow_1,#accRow_2 ,#accRow_3').slideDown();
                $('#accRow_4').slideUp();
                $('#accRow_4 input[type=text]').val('');
                $('#accRow_4 input[type=number]').val('');
                $('#accRow_4 input[type=date]').val('');
                $('#accRow_4 input[type=checkbox]').prop('checked', false);
                $('#accRow_4 select').val('');

            } else {
                $('#accRow_1, #accRow_2, #accRow_3, #accRow_4').slideUp();
                $('#accRow_1 input[type=text],#accRow_2 input[type=text],#accRow_3 input[type=text],#accRow_4 input[type=text]').val('');
                $('#accRow_1 input[type=date],#accRow_2 input[type=date],#accRow_3 input[type=date],#accRow_4 input[type=date]').val('');
                $('#accRow_1 input[type=checkbox],#accRow_2 input[type=checkbox],#accRow_3 input[type=checkbox],#accRow_4 input[type=checkbox]').prop('checked', false);
                $('#accRow_1 select,#accRow_2 select,#accRow_3 select,#accRow_4 select').val('');
            }

        });




        $('#upload_pg').on('change', function() {



            myfile = $(this).val();

            filesize = this.files[0].size;



            if (myfile != "") {

                var ext = myfile.split('.').pop();



                if (ext == "pdf" || ext == "PDF" || ext == "docx" || ext == "doc" || ext == "jpg" || ext ==

                    "jpeg" || ext == "JPG" || ext == "JPEG" || ext ==

                    "ppt" || ext == "pptx" || ext == "png" || ext == "PNG") {



                    if (filesize > 2001000) {

                        alert('File size below 2MB');

                        $('#upload_pg').val('');

                    }



                } else {



                    alert(

                        'Sorry. File not accepted. Accept only doc, docx, jpg files only (File size 2MB)'

                    );

                    $('#upload_pg').val('');

                }

            }

        });



    });
</script>

<?php include 'footer.php'; ?>