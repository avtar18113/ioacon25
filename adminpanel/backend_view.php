<?php include 'header.php';

if($_GET['srn']){
    $srn = $_GET['srn'];
    $_SESSION['srn']=$srn;
}else{
    $srn=$_SESSION['srn'];
   
}
// $srn=24;

$sql = "SELECT * FROM registration where srn='$srn' AND del = '0'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    while ($row = mysqli_fetch_assoc($result)) {		
        $fname = $row['fname'];
		$lname = $row['lname'];		
		$title = $row['title'];		
		$mobile = $row['mobile'];
		$email = $row['email'];
		$gender = $row['gender'];		
		$meal = $row['meal'];
		$institute = $row['institute'];
		$mcn = $row['mcn'];
		$desig = $row['desig'];
		$address = $row['address'];
		$state = $row['state'];
		$city = $row['city'];
		$pincode = $row['pincode'];
		$country = $row['country'];	 
            
	} 
}
?>
<section class="section">
    <div class="container">
        <!-- <div id="particles-js"></div> -->
        <form action="backend_update.php" id="reg-form" method="post" enctype="multipart/form-data">
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
                            <div class="col-6 mb-3">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input type=" text" name="title" id="title" class="form-control" value="<?=$title?>">
                                <select name="title" class="form-select d-none">
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
                                <input type=" text" name="fname" id="fname" class="form-control" value="<?=$fname?>">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="lname">Last Name <span class="text-danger"></span></label>
                                <input type="text" name="lname" id="lname" class="form-control" value="<?=$lname?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                <input type=" text" name="gender" id="gender" class="form-control" value="<?=$gender?>">
                                <select name="gender" id="gender" class="form-select d-none">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="institute">Institute/ Hospital <span class="text-danger">*</span></label>
                                <input type="text" name="institute" id="institute" class="form-control" value="<?=$institute?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="desig">Designation <span class="text-danger">*</span></label>
                                <input type="text" name="desig" id="desig" class="form-control" value="<?=$desig?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mcn">MCI No</label>
                                <input type="text" name="mcn" id="mcn" class="form-control" value="<?=$mcn?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" value="<?=$email?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="mobile">Mobile <span class="text-danger">*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-control" value="<?=$mobile?>">
                            </div>

                            <div class="col-12 mb-3">
                                <label for="address">Postal Address</label>
                                <textarea type="text" name="address" id="address" class="form-control" rows="3"><?=$address?></textarea> 
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="city">City <span class="text-danger">*</span></label>
                                <input type="text" name="city" id="city" class="form-control" value="<?=$city?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pincode">PIN/ZIP Code</label>
                                <input type="text" name="pincode" id="pincode" class="form-control" value="<?=$pincode?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="state">State <span class="text-danger">*</span></label>
                                <input type="text" name="state" id="state" class="form-control" value="<?=$state?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="city">Country <span class="text-danger">*</span></label>
                                <input type="text" name="country" id="country" class="form-control" value="<?=$country?>">                               
                            </div>
                           
                        </div>

                        <div class="p-4">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary"
                                style="display:none">
                                <input type="hidden" name="srn" id="srn" value="<?=$srn?>">
                               
                            <span class="mendetary"><em>* Registration amount is inclusive of GST.</em></span>
                        </div>
                    </div>

                </div>
            </div>

        </form>
        <button onclick="myFunction1()" class="btn btn-primary">Edit Form</button>
    </div>



</section>


<script>
$("input").prop('disabled', true);
$("select").prop('disabled', true);
$("textarea").prop('disabled', true);

function myFunction1() {
    $("input").prop('disabled', false);
    $("select").prop('disabled', false);
    $("textarea").prop('disabled', false);
    document.getElementById("submit").style = "display:block";
}
</script>

<?php include 'footer.php'; ?>