$(document).ready(function () {
    accPerson()
    function accPerson() {
        var dropdown = document.getElementById('accPersonID'); 
        // var dropdown = document.getElementById('accPersonID');    
        var accPersondropdown =  document.getElementById('accPersonOld');
        dropdown.addEventListener('change', function () {
            var accPerson = dropdown.value;
            var accPersonOld = accPersondropdown.value;
           
            var accFee = $(this).attr('title');
            var accTot = accPerson * accFee;
            $('#acc_fee').val(accTot);
            if (accPerson > 0) {
                $('.accompany-details').slideDown();
            } else {
                $('.accompany-details').slideUp();
            }
            if (accPersonOld==0 && accPerson == 1) {
                $('#accRow_1').slideDown();
                $("#a1name, #a_banquet1, #cme1").attr("required","required");
                $("#a2name, #a_banquet2, #cme2, #a3name, #a_banquet3, #cme3").removeAttr("required");
                $('#accRow_2,#accRow_3').slideUp();
                $('#accRow_2 input[type=text],#accRow_3 input[type=text]').val('');
                $('#accRow_2 input[type=date],#accRow_3 input[type=date]').val('');
                $('#accRow_2 input[type=radio],#accRow_3 input[type=radio]')
                    .prop('checked', false);
                $('#accRow_2 select,#accRow_3 select').val('');
            } else if (accPersonOld==0 && accPerson == 2) {
                $('#accRow_1,#accRow_2').slideDown();
                $('#accRow_3').slideUp();
                $("#a1name, #a_banquet1, #cme1, #a2name, #a_banquet2, #cme2").attr("required","required");
                $("#a3name, #a_banquet3, #cme3").removeAttr("required");
                $('#accRow_3 input[type=text]').val('');
                $('#accRow_3 input[type=date]').val('');
                $('#accRow_3 input[type=radio]').prop('checked', false);
                $('#accRow_3 select').val('');
            } else if (accPersonOld==0 && accPerson == 3) {
                $('#accRow_1,#accRow_2,#accRow_3').slideDown();
                $("#a1name, #a_banquet1, #cme1, #a2name, #a_banquet2, #cme2, #a3name, #a_banquet3, #cme3").attr("required","required");              
            } else if (accPersonOld== 1 && accPerson == 1) {
                $('#accRow_2').slideDown();
                $("#a2name, #a_banquet2, #cme2").attr("required","required");
                $("#a1name, #a_banquet1, #cme1, #a3name, #a_banquet3, #cme3").removeAttr("required");
                $('#accRow_1,#accRow_3').slideUp();
                $('#accRow_1 input[type=text],#accRow_3 input[type=text]').val('');
                $('#accRow_1 input[type=date],#accRow_3 input[type=date]').val('');
                $('#accRow_1 input[type=radio],#accRow_3 input[type=radio]')
                    .prop('checked', false);
                $('#accRow_2 select,#accRow_3 select').val('');
            }else if (accPersonOld== 1 && accPerson == 2) {
                $('#accRow_3,#accRow_2').slideDown();
                $('#accRow_1').slideUp();
                $("#a3name, #a_banquet3, #cme3, #a2name, #a_banquet2, #cme2").attr("required","required");
                $("#a1name, #a_banquet1, #cme1").removeAttr("required");
                $('#accRow_1 input[type=text]').val('');
                $('#accRow_1 input[type=date]').val('');
                $('#accRow_1 input[type=radio]').prop('checked', false);
                $('#accRow_1 select').val('');
            }else if (accPersonOld== 2 && accPerson == 1) {
                $('#accRow_3').slideDown();
                $("#a3name, #a_banquet3, #cme3").attr("required","required");
                $("#a1name, #a_banquet1, #cme1, #a2name, #a_banquet2, #cme2").removeAttr("required");
                $('#accRow_1,#accRow_2').slideUp();
                $('#accRow_1 input[type=text],#accRow_2 input[type=text]').val('');
                $('#accRow_1 input[type=date],#accRow_2 input[type=date]').val('');
                $('#accRow_1 input[type=radio],#accRow_2 input[type=radio]')
                    .prop('checked', false);
                $('#accRow_2 select,#accRow_3 select').val('');
            }else {
                $('#accRow_1, #accRow_2, #accRow_3').slideUp();
                $('#accRow_1 input[type=text],#accRow_2 input[type=text],#accRow_3 input[type=text]')
                    .val('');
                $('#accRow_1 input[type=date],#accRow_2 input[type=date],#accRow_3 input[type=date]')
                    .val('');
                $('#accRow_1 input[type=radio],#accRow_2 input[type=radio],#accRow_3 input[type=radio]')
                    .prop('checked', false);
                $('#accRow_1 select,#accRow_2 select,#accRow_3 select').val('');
                $("#a1name, #a_banquet1, #cme1,#a2name, #a_banquet2, #cme2, #a3name, #a_banquet3, #cme3").removeAttr("required");
            }
        });
    }

    
});

// document.addEventListener('DOMContentLoaded', function() {
//     var workshopName = document.getElementById('workshopName').value;
   
//     if (workshopName) {
//         fetchWorkshopOptions(workshopName);
//     }
// });
document.addEventListener('DOMContentLoaded', function () {
    var workshop = document.getElementById('workshopName');

    workshop.addEventListener('change', function () {
        var workshopName = workshop.value;
        var workshopShow = document.getElementById('workshopShow');
        var workshopOptionSelect = document.getElementById('workshop_option_name');

        if (workshopName !== 'No') {
            workshopShow.style.display = 'block';
            fetchWorkshopOptions(workshopName);
        } else {
            workshopShow.style.display = 'none';
            workshopOptionSelect.innerHTML = '<option value="">Select</option>'; // Reset options
        }
    });

    function fetchWorkshopOptions(workshop) {
        // Log what is being sent
        console.log('Sending request with workshop:', workshop);

        fetch('getWorkshopOptions.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'workshop=' + encodeURIComponent(workshop),
        })
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Log what is received (the raw response)
            console.log('Raw response received:', response);
            return response.json(); // Parse the JSON from response
        })
        .then(function (data) {
            // Log the parsed JSON data received
            console.log('Parsed options received:', data);

            var select = document.getElementById('workshop_option_name');
            select.innerHTML = '<option value="">Select</option>'; // Clear existing options

            data.forEach(function (option) {
                var opt = document.createElement('option');
                opt.value = option;
                opt.innerHTML = option;
                select.appendChild(opt);
            });
        })
        .catch(function (error) {
            console.error('There has been a problem with your fetch operation:', error);
        });
    }
});

