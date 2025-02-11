$(document).ready(function () {

    $(".age").on("input", function(e) {
        let inputAge=e.target.value.replace(/\D/g,'').slice(0,2);
        e.target.value=inputAge;
    });

    function updateRegistrationCategory() {
        var categorySelect = document.getElementById('regCat');
        var selectedValue = document.getElementById('countryId').value;

        // Clear existing options in the select element
        categorySelect.innerHTML = '';

        // Define registration categories

        let cat1 = "IOA MEMBER";
        let cat2 = "NON IOA MEMBER";
        let cat3 = "PG STUDENT";
        let cat4 = "FOREIGN DELEGATE";
        let cat5 = "SAARC DELEGATE";
        let cat6 = "GUEST NATIONAL DELEGATE";
        let cat7 = "TRADE DELAGATE";
        let cat8 = "SENIOR DELEGATE";

        // Add a default 'Select' option
        $("#regCat").attr("required", "required");
        var defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.text = 'Select';
        categorySelect.add(defaultOption);

        // Add registration categories based on the selected country
        if (selectedValue === 'India') {

            addRegistrationOption(cat1);
            addRegistrationOption(cat2);
            addRegistrationOption(cat3);
            addRegistrationOption(cat7);
            addRegistrationOption(cat8);
        } else if (selectedValue === 'Bangladesh' || selectedValue === 'Nepal' || selectedValue === 'Sri Lanka' || selectedValue === 'Maldives' || selectedValue === 'Bhutan' || selectedValue === 'Afghanistan' || selectedValue === 'Pakistan') {
            addRegistrationOption(cat5);
        } else {
            addRegistrationOption(cat4);
        }
    }

    function addRegistrationOption(category) {
        var option = document.createElement('option');
        option.value = category;
        option.text = category;
        document.getElementById('regCat').add(option);
    }


    // Attach the change event listener to the country dropdown
    document.getElementById('countryId').addEventListener('change', updateRegistrationCategory);

    // Trigger the initial execution of reg



    function regVal() {
        var dropdown = document.getElementById('regCat');
        dropdown.addEventListener('change', function () {
            // Get the selected value
            var selectedValue = dropdown.value;

            // Call the reg function with the selected value
            if (selectedValue == 'PG STUDENT') {
                $('.upload_pg').slideDown();
                $("#upload_pg").attr("required", "required");
                $('.pg_teach_pro').slideDown();
                $("#pg_teach_pro").attr("required", "required");
                $('#upload_pgmsg').html('Please upload HOD Letter');
                $("#mem_id").removeAttr("required");
                $('.mem_id').slideUp();
                 $('#mem_id').val('');
            } else if (selectedValue == 'SENIOR DELEGATE') {
                $('.upload_pg').slideDown();
                $("#upload_pg, #pg_teach_pro").removeAttr("required");
                $('.pg_teach_pro').slideUp();
                $('.mem_id').slideDown();
                $("#mem_id").attr("required", "required");
                $('#upload_pgmsg').html('Please upload Age Proof');

            } else if (selectedValue == 'IOA MEMBER') {
                $('.mem_id').slideDown();
                $('.upload_pg').slideUp();
                $('.pg_teach_pro').slideUp();
                $("#upload_pg, #pg_teach_pro").removeAttr("required");
                $("#mem_id").attr("required", "required");
            } else {
                $('.upload_pg').slideUp();
                $('#mem_id').val('');
                $('.mem_id').slideUp();
                $('.pg_teach_pro').slideUp();
                $("#upload_pg, #pg_teach_pro, #mem_id").removeAttr("required");
            }
            $('#upload_pg').on('change', function () {
                myfile = $(this).val();
                filesize = this.files[0].size;
                if (myfile != "") {
                    var ext = myfile.split('.').pop();
                    if (ext == "pdf" || ext == "PDF" || ext == "jpg" || ext ==
                        "jpeg" || ext == "JPG" || ext == "JPEG") {
                        if (filesize > 1024 * 1024 * 1) {
                            alert('File size below 1MB');
                            $('#upload_pg').val('');
                        }

                    } else {
                        alert(
                            'Sorry. File not accepted. Accept only PDF, jpg files only (File size 1MB)'
                        );
                        $('#upload_pg').val('');
                    }
                }
            });
        });

    }

    accPerson()
    regVal()

    var workshop = document.getElementById('workshop');

    workshop.addEventListener('change', function () {
        var workshopName = workshop.value;

        var workshopShow = document.getElementById('workshopShow');
        var  workshop_option_name = document.getElementById(' workshop_option_name');

        if (workshopName!= 'No') {
            workshopShow.style.display = 'block';
            fetchWorkshopOptions(workshopName);
        } else {
            workshopShow.style.display = 'none';
            workshop_option_name.value = '';
        }
    });


    function fetchWorkshopOptions(workshop) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'getWorkshopOptions.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var options = JSON.parse(xhr.responseText);

                var select = document.getElementById('workshop_option_name');
                select.innerHTML = '<option value="">Select</option>'; // clear existing options
                options.forEach(function (option) {
                    var opt = document.createElement('option');
                    opt.value = option;
                    opt.innerHTML = option;
                    select.appendChild(opt);
                });
            }
        };
        xhr.send('workshop=' + encodeURIComponent(workshop));
    }

    function accPerson() {
        var dropdown = document.getElementById('accPerson');

        dropdown.addEventListener('change', function () {
            var accPerson = dropdown.value;

            var accFee = $(this).attr('title');
            var accTot = accPerson * accFee;
            $('#acc_fee').val(accTot);
            if (accPerson > 0) {
                $('.accompany-details').slideDown();
            } else {
                $('.accompany-details').slideUp();
            }

            if (accPerson == 1) {

                $('#accRow_1').slideDown();
                $("#a1name, #a_banquet1, #cme1").attr("required", "required");
                $("#a2name, #a_banquet2, #cme2, #a3name, #a_banquet3, #cme3").removeAttr("required");
                $('#accRow_2,#accRow_3, #accRow_4').slideUp();

                $('#accRow_2 input[type=text],#accRow_3 input[type=text],#accRow_4 input[type=text]').val('');
                $('#accRow_2 input[type=date],#accRow_3 input[type=date],#accRow_4 input[type=date]').val('');
                $('#accRow_2 input[type=radio],#accRow_3 input[type=radio],#accRow_4 input[type=radio]')
                    .prop('checked', false);
                $('#accRow_2 select,#accRow_3 select,#accRow_4 select').val('');
            } else if (accPerson == 2) {

                $('#accRow_1,#accRow_2').slideDown();
                $('#accRow_3, #accRow_4').slideUp();
                $("#a1name, #a_banquet1, #cme1, #a2name, #a_banquet2, #cme2").attr("required", "required");
                $("#a3name, #a_banquet3, #cme3").removeAttr("required");
                $('#accRow_3 input[type=text],#accRow_4 input[type=text]').val('');
                $('#accRow_3 input[type=date],#accRow_4 input[type=date]').val('');
                $('#accRow_3 input[type=radio],#accRow_4 input[type=radio]').prop('checked', false);
                $('#accRow_3 select,#accRow_4 select').val('');

            } else if (accPerson == 3) {

                $('#accRow_1,#accRow_2,#accRow_3').slideDown();
                $('#accRow_4').slideUp();
                $("#a1name, #a_banquet1, #cme1, #a2name, #a_banquet2, #cme2, #a3name, #a_banquet3, #cme3").attr("required", "required");
                $('#accRow_4 input[type=text]').val('');
                $('#accRow_4 input[type=date]').val('');
                $('#accRow_4 input[type=radio]').prop('checked', false);
                $('#accRow_4 select').val('');

            } else {
                $('#accRow_1, #accRow_2, #accRow_3, #accRow_4').slideUp();
                $('#accRow_1 input[type=text],#accRow_2 input[type=text],#accRow_3 input[type=text],#accRow_4 input[type=text]')
                    .val('');
                $('#accRow_1 input[type=date],#accRow_2 input[type=date],#accRow_3 input[type=date],#accRow_4 input[type=date]')
                    .val('');
                $('#accRow_1 input[type=radio],#accRow_2 input[type=radio],#accRow_3 input[type=radio],#accRow_4 input[type=radio]')
                    .prop('checked', false);
                $('#accRow_1 select,#accRow_2 select,#accRow_3 select,#accRow_4 select').val('');
                $("#a1name, #a_banquet1, #cme1,#a2name, #a_banquet2, #cme2, #a3name, #a_banquet3, #cme3").removeAttr("required");
            }

        });

    }



});





$(document).ready(function () {
    function regVal1() {
        var dropdown1 = document.getElementById('regCat1');
        dropdown1.addEventListener('change', function () {
            var selectedValue1 = dropdown1.value;
            // alert(selectedValue1);
            if (selectedValue1 == 'Package Registration') {
                
                $('.upload_pg').slideUp();
                $('.pshowsms').show();
                $('.mem_id').slideUp();
                $('.pg_teach_pro').slideUp();
                $('.rshow, #wo1, #ba1').slideDown();
                $("#cme_reg, #workshop, #r_banquet").attr("required", "required");
                $("#upload_pg, #pg_teach_pro, #mem_id").removeAttr("required");
            } else if (selectedValue1 == 'Only conference') {
                $('.upload_pg').slideUp();
                $('.mem_id').slideUp();
                 $('.pshowsms').hide();
                 $('#workshopShow').slideUp();
                $('.rshow, #wo1, #ba1').slideUp();
                $("#upload_pg, #pg_teach_pro, #mem_id, #cme_reg, #workshop, #r_banquet").removeAttr("required"); $("#upload_pg, #pg_teach_pro, #mem_id, #cme_reg, #workshop, #r_banquet").val("");
            }else if (selectedValue1 == 'Conf Registration plus banquet') {
               $('.upload_pg').slideUp();
                $('.mem_id').slideUp();
                $('.pg_teach_pro').slideUp();
                $('#workshopShow').slideUp();
                $('.rshow, #wo1, #ba1').slideUp();
                $("#r_banquet").attr("required", "required");
                $('.pshowsms').hide();
                $("#upload_pg, #pg_teach_pro, #mem_id, #cme_reg, #workshop").removeAttr("required");
                $("#upload_pg, #pg_teach_pro, #mem_id, #cme_reg, #workshop").val("");
            }else{
                 $('.pshowsms').hide();
                 $("#upload_pg, #pg_teach_pro, #mem_id, #cme_reg, #workshop").val("");
            }
        });
    }
    regVal1();
    
     var workshop = document.getElementById('workshop');

    workshop.addEventListener('change', function () {
        var workshopName = workshop.value;

        var workshopShow = document.getElementById('workshopShow');
        var  workshop_option_name = document.getElementById(' workshop_option_name');

        if (workshopName!= 'No') {
            workshopShow.style.display = 'block';
            fetchWorkshopOptions(workshopName);
        } else {
            workshopShow.style.display = 'none';
            workshop_option_name.value = '';
        }
    });
    
    function fetchWorkshopOptions(workshop) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'getWorkshopOptions.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var options = JSON.parse(xhr.responseText);

                var select = document.getElementById('workshop_option_name');
                select.innerHTML = '<option value="">Select</option>'; // clear existing options
                options.forEach(function (option) {
                    var opt = document.createElement('option');
                    opt.value = option;
                    opt.innerHTML = option;
                    select.appendChild(opt);
                });
            }
        };
        xhr.send('workshop=' + encodeURIComponent(workshop));
    }
});





