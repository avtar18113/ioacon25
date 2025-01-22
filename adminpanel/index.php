<?php include 'header.php';
// include 'db.php'; 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    function selectStatus() {
        var x = document.getElementById('fatch-id').value;
        $.ajax({
            url: "backend_showdetails.php",
            method: "POST",
            data: {
                id: x
            },
            success: function(data) {
                $("#ans").html(data);
            }
        })
    }
</script>
<section class="section-1 bg-white container">
    <img src="regsubmit-old/assets/img/header1.webp" class="w-100" alt="">
    <div class="row justify-content-md-center bg-white">
        <div class="col-md-6">
            <label for="price" class="control-label col-sm-3 col-sm-offset-2">Filter By Status: </label>
            <div class="col-sm-8">
                <select class="form-control" id="fatch-id" onchange="selectStatus()">
                    <option>---Select---</option>
                    <option value="success">success</option>
                    <option value="Pending">Pending</option>
                    <option value="failure">Failure</option>
                    <option value="all">all</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="ans"></div>
    </div>
</section>