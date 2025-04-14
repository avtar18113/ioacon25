<?php include_once('./config.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$siteTitle?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title"
        content="70th Annual National Conference of the Indian Orthopaedic Association - IOACON 2025 Guwahati">
    <meta name="description"
        content="Join us in Guwahati for the Platinum Jubilee Conference celebrating seven decades of orthopaedic excellence at IOACON 2025. Engage with thought leaders, explore cutting-edge research, and experience the vibrant culture of Northeast India.">
    <meta name="keywords"
        content="IOACON 2025, IOACON 2025 Guwahati, Indian Orthopaedic Association, Platinum Jubilee Conference, Orthopaedic Excellence, Guwahati Conference, Orthopaedic Research, Medical Conference 2025, Northeast India, Seven Sisters, Orthopaedic Care">
    <meta name="author" content="IOACON 2025 Organizing Committee">
    <meta property="og:title"
        content="Annual National Conference of the Indian Orthopaedic Association - IOACON 2025 Guwahati">
    <meta property="og:description"
        content="Experience the Platinum Jubilee Celebration of Orthopaedic Excellence at IOACON 2025 in Guwahati. A premier event for knowledge sharing, innovation, and networking in orthopaedics.">
    <meta property="og:image" content="<?=$siteLogo ?>">
    <meta property="og:url" content="<?=$siteURL?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="<?=$siteLogo ?>">
    <meta name="twitter:title" content="<?=$metaTitle ?>">
    <meta name="twitter:description"
        content="Celebrate seven decades of orthopaedic excellence at IOACON 2025 in Guwahati. Join us for knowledge sharing, innovation, and cultural experiences.">
    <meta name="twitter:image" content="<?=$siteLogo ?>" />
    <link rel="shortcut icon" href="<?=$siteLogo ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <form class="row g-3">
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
                <div class="col-md-4 mb-3">
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
                    <input type="text" name="country_code" id="country_code" class="form-control country_code" value="" required>
                    <span class="text-danger error_code"></span>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="mobile">Mobile <span class="text-danger">*</span></label>
                    <input type="text" name="mobile" id="mobile" class="form-control mobile" value="" required>
                    <span class="text-danger error_code"></span>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="whatsapp_no">WhatsApp No <span class="text-danger">*</span></label>
                    <input type="text" name="whatsapp_no" id="whatsapp_no" class="form-control whatsapp_no" value="" required>
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
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./assets/js/countrystatecity.js"></script>
</body>
</html>