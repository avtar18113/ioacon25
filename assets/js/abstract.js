
// jQuery

$('#emailValid').click(function() {
    validateEmail();
});


function validateEmail() {
    let email = $('#presentEmail').val();
    console.log(email);
    if (email !== '') {
        $('#email_error').html('Please wait...');
        $.post('ajax-absaction.php', {
            ACTION: "EMAIL_FIND",
            email: email
        }, function(data) {
            if (data == 'Success') {
                $('#email_error').html('Presenting Author is registered');
            } else {
                var msg = 'Presenting Author is not registered';
                $('#email_error').html(msg);
            }
        });
    }
}


$('#topic').blur(function() {
    let topic = $(this).val();
    if (topic != '') {
        $('#topic_error').html('Please wait...');
        // $('#submit').attr('disabled', true);
        $.post('ajax-abstopic.php', {
            ACTION: "TOPIC_FIND",
            topic: topic
        }, function(data) {
            if (data == 'Success') {
                
                var msg = 'Avoid repeating the same abstract topic Or topic already submitted.';
                $('#topic_error').html(msg);
                $('#submit').attr('disabled', true);
                // $('#submit').removeAttr('disabled', true);

            } else {
                $('#topic_error').html('');
                $('#submit').removeAttr('disabled', true);
            }
        });
    }
});


$(document).ready(function(){
    $('#submit').click(function(event){
        var isValid = true;
        $('#abs-form :input[required]').each(function(){
            if ($.trim($(this).val()) === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
       
        $('#abs-form :select[required]').each(function(){
            if ($.trim($(this).val()) === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        $('#abs-form textarea[required]').each(function(){
            if ($.trim($(this).val()) === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        if (!isValid) {
            event.preventDefault();
            // alert('Please fill in all required fields.');
        }
    });
});

$(document).ready(function () {

    
    const absPresentation = $('#abs-presentation');
    const uploadAbsDiv = $('#uploadAbs');
    const insertLinksDiv = $('#insertLinks');
    const awardSectionDiv = $('#awardSection');
    const apawardSectionDiv= $('#apawardSection');
    

    absPresentation.on('change', presentationMode);
    uploadAbsDiv.hide();
            insertLinksDiv.hide();
            awardSectionDiv.hide();
            apawardSectionDiv.hide();
    function presentationMode() {
        let presentation = this.value;

        if (presentation == 'Video Presentation') {
            insertLinksDiv.show();
           uploadAbsDiv.hide();
            
            awardSectionDiv.hide();
            apawardSectionDiv.hide();
            $('#awards').remove('required', 'required');
            $('#awards').val('');
            $('#awardApp').val('');
        }else if (presentation == 'Award Paper') {
            insertLinksDiv.hide();
            uploadAbsDiv.hide();
            
            apawardSectionDiv.hide();
            awardSectionDiv.show();
           $('#awards').attr('required', 'required');
           $('#awardApp').val('');
        }else if (presentation == 'Poster') {
            // alert(presentation);
            uploadAbsDiv.hide();
            insertLinksDiv.hide();
            awardSectionDiv.hide();
            $('#awards').remove('required', 'required');
            apawardSectionDiv.show();
             $('#awards').val('');
        }else{
            uploadAbsDiv.hide();
            insertLinksDiv.hide();
            awardSectionDiv.hide();
            $('#awards').remove('required', 'required');
            apawardSectionDiv.hide();
            $('#awardApp').val('');
             $('#awards').val('');
        }
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
    console.log(topic);
    $('#topic').on('input', function () {
        topic= $(this).val($(this).val().toUpperCase());
        console.log('rdcfgc');
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

    $("#abstract").on('keyup', function() {
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

    $('#upload_abs').on('change', function() {
        myfile = $(this).val();
        filesize = this.files[0].size;
        if (myfile != "") {
            var ext = myfile.split('.').pop();
            alert(ext);
            var maxfilesize = (1024 * 1024 * 2);
            if (ext == "docx" || ext == "doc" || ext == "pdf" || ext == "ppt" || ext == "pptx") {
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

$(document).ready(function() {
    // Populate topic select options
    $.ajax({
        url: 'fetch_topics.php',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#categorySelect').empty().append('<option value="">Select category</option>');
            $.each(response, function(index, category) {
                $('#categorySelect').append('<option value="' + category + '">' + category + '</option>');
            });
        }
    });

    // Handle topic select change
    $('#categorySelect').change(function() {
        var selectedcategory = $(this).val();
        if (selectedcategory !== '') {
            // Fetch and populate subcategory select options based on selected 
            console.log(selectedcategory);

                if(selectedcategory === 'Minimally Invasive Surgery' || 
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
                url: 'fetch_subtopics.php',
                method: 'POST',
                data: { category: selectedcategory },
                dataType: 'json',
                success: function(response) {
                    $('#subcategorySelect').empty().append('<option value="">Select Subcategory</option>');
                    $.each(response, function(index, subcategory) {
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
