$(document).ready(function () {
    $('#fname,#lname').on('input', function () {
      $(this).val($(this).val().toUpperCase());        
    });

    $('#mobile,#whatsapp_no').on("input", function (e) {
        let inputMobile = e.target.value.replace(/\D/g, '').slice(0,12);
        e.target.value = inputMobile;
    });

    $('#pincode').on("input", function (e) {
        let inputPincode = e.target.value.replace(/\D/g, '').slice(0, 6);
        e.target.value = inputPincode;
    });

});