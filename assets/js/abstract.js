$('#emailValid').click(function () {
    let email = $('#presentEmail').val();
    validateEmail(email);
});

function validateEmail(email) {
    if (email !== '') {
        console.log(email);
        $('#email_error').html('Please wait...');
        $.post('./controller/ajax-validation.php', {
            ACTION: "EMAIL_FIND",
            email: email
        }, function (data) {
            if (data == 'Success') {
                $('#email_error').html('Presenting Author is registered');
            } else {
                var msg = 'Presenting Author is not registered';
                $('#email_error').html(msg);
            }
        });
    }
}

$(document).ready(function () {

        // Validate email on blur
  let isTopicValid = false;
    let isEmailValid = false;

    function updateSubmitButtonState() {
        if (isTopicValid && isEmailValid) {
            $('#submit').prop('disabled', false);
        } else {
            $('#submit').prop('disabled', true);
        }
    }

   
    $('#topic').blur(function() {
        let topic = $(this).val();
        if (topic !== '') {
            $('#topic_error').html('Please wait...');
            $.post('./controller/ajax-abs-topic.php', {
                ACTION: "TOPIC_FIND",
                topic: topic
            })
            .done(function(data) {
                if (data === 'Success') {
                    $('#topic_error').html('Do not repeat the same abstract topic twice.');
                    isTopicValid = false;
                } else {
                    $('#topic_error').html('');
                    isTopicValid = true;
                }
                updateSubmitButtonState();
            })
            .fail(function() {
                $('#topic_error').html('An error occurred. Please try again.');
                isTopicValid = false;
                updateSubmitButtonState();
            });
        } else {
            isTopicValid = false;
            updateSubmitButtonState();
        }
    });

    $('#email1').blur(function() {
        let email = $(this).val();
        if (email !== '') {
            $('#email1_error').html('Please wait...');
            $.post('./controller/ajax-action.php', {
                ACTION: "EMAIL_FIND",
                email: email
            })
            .done(function(data) {
                console.log(data);
                 let ststusdata = data.split(':')[1].trim();
                     console.log(reg_no);
                     console.log( ststusdata);
                if (ststusdata=='Success') {
                    let reg_no = data.split(':')[2].trim();
                    $('#email1_error').html('');
                    $('#reg_no').val(reg_no);
                    isEmailValid = true;
                } else {
                    $('#reg_no').val('');
                    $('#email1_error').html('You have entered the wrong email or you are not registered.');
                    isEmailValid = false;
                }
                updateSubmitButtonState();
            })
            .fail(function() {
                $('#email1_error').html('An error occurred. Please try again.');
                $('#reg_no').val('');
                isEmailValid = false;
                updateSubmitButtonState();
            });
        } else {
            $('#reg_no').val('');
            isEmailValid = false;
            updateSubmitButtonState();
        }
    });

    // Initially disable the submit button
    updateSubmitButtonState();

   
    $('.yearof_mbbs').on("input", function (e) {
        let inputYearpass = e.target.value.replace(/\D/g, '').slice(0, 4);
        let currentYear = new Date().getFullYear();
        
        // Ensure the input year is not greater than the current year
        if (inputYearpass > currentYear) {
            inputYearpass = currentYear;
        }
    
        e.target.value = inputYearpass;
    });
    
    $('#mobile').on("input", function (e) {
        let inputMobile = e.target.value.replace(/\D/g, '').slice(0, 12);
        e.target.value = inputMobile;
    });
    $('#mobile').on("input", function (e) {
        let inputMobile = e.target.value.replace(/\D/g, '').slice(0, 12);
        e.target.value = inputMobile;
    });
    $(".age").on("input", function(e) {
        let inputAge=e.target.value.replace(/\D/g,'').slice(0,2);
        e.target.value=inputAge;
    });
    $('#submit').click(function (event) {
        var isValid = true;
        $('#abs-form :input[required]').each(function () {
            if ($.trim($(this).val()) === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        $('#abs-form :select[required]').each(function () {
            if ($.trim($(this).val()) === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        $('#abs-form textarea[required]').each(function () {
            if ($.trim($(this).val()) === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        if (!isValid) {
            event.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
});
$(document).ready(function () {
    const absPresentation = $('#abs-presentation');
    const uploadAbsDiv = $('#uploadAbs');
    const insertLinksDiv = $('#insertLinks');
    const awardSectionDiv = $('#awardSection'); //Apply for Award
    const apawardSectionDiv = $('#apawardSection');
    const membershipSectionDiv = $('#membershipSection');
    const memberSectionDiv = $('#memberSection'); // Are You Member
    absPresentation.on('change', presentationMode);
    uploadAbsDiv.slideUp(); // Upload Abstract File
    insertLinksDiv.slideUp(); // Insert Video Link
    awardSectionDiv.slideUp(); // Award Category
    apawardSectionDiv.slideUp(); // Apply for Award option yes or no
    membershipSectionDiv.slideUp(); // Membership No.
    memberSectionDiv.slideUp(); // membership type
   
    function presentationMode() {
        $('#awardApp').val(''); // Apply for Award
        $('#memberOption').val(''); //Are You Member
        $('#awards').val(''); // Award Category
        $('#mci_no').val(''); // Membership No.
        $('#upload_abs').val(''); // Upload Abs file.
        $('#vlink').val(''); // Upload Abs file.
        $('#awardApp,#memberOption,#awards,#mci_no,#upload_abs,#vlink').removeAttr('required');
        let presentation = this.value;
        if (presentation == 'Video Presentation') {
            insertLinksDiv.slideDown();
            uploadAbsDiv.slideUp();
            awardSectionDiv.slideUp();
            apawardSectionDiv.slideUp();
            membershipSectionDiv.slideUp();            
            $("#vlink").attr("required", "true");
            // $('#awardApp,#memberOption,#awards,#mci_no,#upload_abs').removeAttr('required');
        } else if (presentation == 'Award Paper') {
            insertLinksDiv.slideUp();
            uploadAbsDiv.slideDown();            
            apawardSectionDiv.slideUp();
            awardSectionDiv.slideDown();
            membershipSectionDiv.slideDown();
            memberSectionDiv.slideDown(); // membership type
            $('#memberOption').on('change', memberType);
            $("#awards,#memberOption,#mci_no,#uploadAbs").attr("required", "true");
            
        } else if (presentation == 'Poster') {
            uploadAbsDiv.slideDown();
            insertLinksDiv.slideUp();
            awardSectionDiv.slideUp();                       
            apawardSectionDiv.slideDown();
            $("#awardApp,#mci_no").attr("required", "true");
            $('#awardApp').on('change', function () {
                let awardAppValue = $(this).val();
                if(awardAppValue=='Yes'){
                    membershipSectionDiv.slideDown();
                    $("#mci_no,#uploadAbs").attr("required", "true");
                }else{
                    membershipSectionDiv.slideUp();
                    memberSectionDiv.slideUp();
                    $("#mci_no").removeAttr("required", "true");
                }
            });
            // alert(presentation);
        } else {
            uploadAbsDiv.slideDown();
            insertLinksDiv.slideUp();
            membershipSectionDiv.slideUp();
            awardSectionDiv.slideUp();            
            apawardSectionDiv.slideUp();
            memberSectionDiv.slideUp();
        }
    }
    function memberType() {
        let memberSelectType = this.value;
        const awards = document.getElementById("awards");
        const allAwards = [
            { value: "DR. AA MEHTA GOLD MEDAL SESSION", text: "DR. AA MEHTA GOLD MEDAL SESSION" },
            { value: "DR. KT DHOLAKIA GOLD MEDAL SESSION", text: "DR. KT DHOLAKIA GOLD MEDAL SESSION" },
            { value: "DR. RC RALLAN GOLD MEDAL SESSION", text: "DR. RC RALLAN GOLD MEDAL SESSION" },
            { value: "DR. SS YADAV GOLD MEDAL SESSION", text: "DR. SS YADAV GOLD MEDAL SESSION" },
            { value: "DR. P TEJESWAR RAO GOLD MEDAL SESSION", text: "DR. P TEJESWAR RAO GOLD MEDAL SESSION" },
            { value: "DR. DP BAKSI GOLD MEDAL SESSION", text: "DR. DP BAKSI GOLD MEDAL SESSION" },
            { value: "Dr. S.P. Mandal Gold Medal", text: "Dr. S.P. Mandal Gold Medal" },
            { value: "DR. JOY PATANKAR GOLD MEDAL SESSION", text: "DR. JOY PATANKAR GOLD MEDAL SESSION" },
            { value: "Sushrut Award", text: "Sushrut Award" },
            { value: "Dr Prashant Kanabar gold medal", text: "Dr Prashant Kanabar gold medal" },
            { value: "HKT Raja Gold medal", text: "HKT Raja Gold medal" },
            { value: "Dr PK Mullafiroze Medal Session", text: "Dr PK Mullafiroze Medal Session" },
        ];
        const lifeMemberAwards = allAwards.filter(award => award.value !== "DR. P TEJESWAR RAO GOLD MEDAL SESSION");
        const associateMemberAwards = allAwards.filter(award => 
            award.value === "DR. P TEJESWAR RAO GOLD MEDAL SESSION"
        ); 
        // Show award section only if memberOption has a valid value
        // awardSectionDiv.style.display = memberSelectType ? "block" : "none";
        // Reset and populate the awards dropdown
        awards.innerHTML = `<option value="">Choose...</option>`;
        let awardsToShow = [];
        
        if (memberSelectType == 'Life Member') {
            awardsToShow = lifeMemberAwards;
        } else if (memberSelectType == 'Associate Member') {
            awardsToShow = associateMemberAwards;
        }else if(memberSelectType == 'No'){
            alert('You Are Not Elegible for Award Paper')
        } 
        awardsToShow.forEach(award => {
            const option = document.createElement("option");
            option.value = award.value;
            option.textContent = award.text;
            awards.appendChild(option);
        });
    }
    $('#member').change(function () {
        // Your member change event handler here
        member = $(this).val();
        $('.memberDiv').slideUp();
        $('.memberDiv input,.memberDiv select').val('');
        if (member == 'Yes') {
            $('.memberDiv').slideDown();
        }
    });
    //Abstract topic convert to uppercase
    const topic = $('#topic');
    
    $('#topic').on('input', function () {
        topic = $(this).val($(this).val().toUpperCase());
        
    });
    // Add New Author 
    $('.add').click(function () {
        // Your add click event handler here
        var row_no = parseInt($(this).attr('name'));
        for (i = 2; i <= row_no + 1; i++) {
            $('#row' + i).slideDown();
            $('#add_' + row_no).slideUp();
            $('#del_' + row_no).slideUp();
        }
    });
    // remove Author 
    $('.delete').click(function () {
        // Your delete click event handler here
        var row = parseInt($(this).attr('name'));
        var get_count = row - 1;
        $('#a_name' + row).val('');
        $('#a_affiliation' + row).val('');
        $('#a_institution' + row).val('');
        $('#add_' + get_count).slideDown();
        $('#del_' + get_count).slideDown();
        for (row; row <= 10; row++) {
            $('#row' + row).slideUp();
        }
    });
    $("#abstract").on('keyup', function () {
        var words = this.value.match(/\S+/g).length;
        if (words > 250) {
            // Split the string on first 200 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 250).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        } else {
            $('#characters').text(250 - words);
        }
    });
    $('#upload_abs').on('change', function () {
        myfile = $(this).val();
        filesize = this.files[0].size;
        if (myfile != "") {
            var ext = myfile.split('.').pop();
           
            var maxfilesize = (1024 * 1024 * 2);
            if (ext == "pdf" || ext == "PDF") {
                if (filesize > maxfilesize) {
                    alert('Max file size allowed 2MB');
                    $('#upload_abs').attr('required', 'required');
                }
            } else {
                alert('Sorry. File not accepted. Accept only doc, docx files only.');
                $('#upload_abs').val('');
            }
        }
    });
});
$(document).ready(function () {
    // Populate topic select options
    $.ajax({
        url: './controller/fetch-category.php',
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            $('#categorySelect').empty().append('<option value="">Select category</option>');
            $.each(response, function (index, category) {
                $('#categorySelect').append('<option value="' + category + '">' + category + '</option>');
            });
        }
    });
    // Handle topic select change
    $('#categorySelect').change(function () {
        var selectedcategory = $(this).val();
        if (selectedcategory !== '') {
            // Fetch and populate subcategory select options based on selected 
            
            if (selectedcategory === 'Minimally Invasive Surgery' ||
                selectedcategory === 'Orthopaedic Oncology' ||
                selectedcategory === 'Infections' ||
                selectedcategory === 'Others') {
                $('#subcategorySelect').removeAttr('required');
                $('.textreq').html('');
            } else {
                $('#subcategorySelect').attr('required', 'required');
                $('.textreq').html('*');
            }
            $.ajax({
                url: './controller/fetch-subcategory.php',
                method: 'POST',
                data: { category: selectedcategory },
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $('#subcategorySelect').empty().append('<option value="">Select Subcategory</option>');
                    $.each(response, function (index, subcategory) {
                        $('#subcategorySelect').append('<option value="' + subcategory + '">' + subcategory + '</option>');
                    });
                }
            });
        } else {
            // Clear subcategory select options if no category is selected
            $('#subcategorySelect').empty().append('<option value="">Select Subcategory</option>');
        }
    });
});
