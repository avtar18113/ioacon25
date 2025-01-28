<div class="form-box">
   <h2 class="text-center text-large">User Profile</h2>
    <form action="" class="row g-3" id="profileForm" method="POST">
        <div class="col-md-2 mb-3">
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
        <div class="col-md-5 mb-3">
            <label for="fname">First Name <span class="text-danger">*</span></label>
            <input type="text" name="fname" id="fname" class="form-control" value="" required>
            <span class="text-danger error_code"></span>
        </div>
        <div class="col-md-5 mb-3">
            <label for="lname">Last Name <span class="text-danger"></span></label>
            <input type="text" name="lname" id="lname" class="form-control" value="" required>
            <span class="text-danger error_code"></span>
        </div>
        <div class="col-md-6 mb-3">
            <label for="lname">Full Name <span class="text-danger"></span></label>
            <input type="text" name="lname" id="lname" class="form-control" value="" required>
            <span class="text-danger error_code"></span>
        </div>
        <div class="col-md-2 mb-3">
            <label for="gender">Gender <span class="text-danger">*</span></label>
            <select name="title" name="gender" id="gender" class="form-select" required>
                <option value="">Select Title</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <span class="text-danger error_code"></span>
        </div>
        <div class="col-md-4 mb-3">
            <label for="email1">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" id="email1" class="form-control email-input" value="" required>
            <span class="text-danger error_code"></span>
        </div>
        <div class="col-md-1 mb-3">
            <label for="country_code">code <span class="text-danger">*</span></label>
            <input type="text" name="country_code" id="country_code" class="form-control country_code" value=""
                required>
            <span class="text-danger error_code"></span>
        </div>
        <div class="col-md-3 mb-3">
            <label for="mobile">Mobile <span class="text-danger">*</span></label>
            <input type="text" name="mobile" id="mobile" class="form-control mobile" minlength="12" placeholder="with Country code" value="" required>
            <span class="text-danger error_code"></span>
        </div>
        
        <div class="col-md-4 pe-2 mb-3">
            <label for="Country">Country <span class="text-danger">*</span></label>
            <select name="country" class="countries form-select" id="countryId" required>
                <option value="">Select Country</option>
            </select>
        </div>
        <div class="col-md-4 pe-2 mb-3">
            <label for="state">State <span class="text-danger">*</span></label>
            <select name="state" class="states form-select" id="stateId" required>
                <option value="">Select State</option>
            </select>
        </div>
        <div class="col-md-4 pe-2 mb-3">
            <label for="city">City <span class="text-danger"></span></label>
            <select name="city" class="cities form-select" id="cityId">
                <option value="">Select City</option>
            </select>
        </div>
        <div class="col-md-4 pe-2 mb-3">
            <label for="pincode">PIN/ZIP Code<span class="text-danger">*</span></label>
            <input type="text" name="pincode" id="pincode" class="form-control" required>
        </div>
        <div class="col-md-12 pe-2 mb-3">
            <label for="address">Postal Address </label>
            <textarea type="text" name="address" id="address" class="form-control" rows="3"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="profileUpdate">Save Profile</button>
        </div>
    </form>
</div>
