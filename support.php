<?php 
include_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('./common/head.php'); ?>

<body>
    <div class="container-scroller">
        <?php  include_once('./db.php'); include_once('./common-fatch-code.php'); include_once('./common/topnav.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include_once('./common/sidenav.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <?php 
                        // include_once('./common/sub-menu.php'); 
                        ?>
                    </div>
                    <div class="page-header m-0">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2 d-none">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <p class="bg-primary text-white py-2 px-2">Registration Status- <?= $regData['p_status'];?>
                                    </p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="row">
                            <!-- ========== Add code =========== -->
                            <div class='col-md-11 grid-margin stretch-card'>
            <div class='card'>

                <div class='card-body'>
                    
                    <div class="position-absolute top-0 end-0"><a href="https://api.whatsapp.com/send?phone=919810399003&text=Hi,%20please%20help%20me%20regarding%20IOACON%20Registration"><img class="w-md-100 w-50" src="assets/images/WhatsApp_icon.webp" alt="image"></a></div>
                    
                     <h4 class='card-title strong text-center'>Registration Support!</h4>                    
                    <table class="table-responsive">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>
                                    Rahul
                                </td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td>
                                    <a href="tel:9810399003">+91 9810399003</a>
                                </td>
                            </tr>
                            <tr>
                                <th>E-mail:</th>
                                <td>
                                <a href="mailto:rahul@concepttc.com">rahul@concepttc.com</a>
                                </td>
                            </tr>
                            <!--<tr>-->
                            <!--    <th>Whatsapp:</th>-->
                            <!--    <td>-->
                            <!--    <a href="https://api.whatsapp.com/send?phone=919810399003&text=Hi,%20please%20help%20me%20regarding%20IOACON%20Registration"><i class="mdi mdi-whatsapp"></i>Connect with Whatsapp</a>-->
                            <!--    </td>-->
                            <!--</tr>-->
                            
                            <tr>
                                <th>Supporting timings</th>
                                <td> 
                                    10:00 AM To 06:30 PM <b>-Monday To Friday</b>
                                </td>
                            </tr>
                           
                        </tbody>
                       
                    </table>
                    
                </div>
                
                <div class='card-body'>
                    <blockquote class='blockquote blockquote-primary'>

                        <p>An email with your registration status has been sent to your inbox. If you don't see it in your inbox, please check your spam/junk folder.</p>

                        <p>If you need any clarification or assistance, please don't hesitate to contact our support team</p>

                    </blockquote>
                </div>
               
            </div>
        </div>
        <div class='col-md-4 grid-margin stretch-card d-none'>
            <div class='card'>
                <div class='card-body'>
                    <h4 class='card-title strong text-center'>Registration Support!</h4>   
                   
                    <table class="">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>
                                    Mr. Rahul
                                </td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td>
                                    <a href="tel:9810399003">+91 9810399003</a>
                                </td>
                            </tr>
                            <tr>
                                <th>E-mail:</th>
                                <td>
                                <a href="mailto:rahul@concepttc.com">rahul@concepttc.com</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Whatsapp:</th>
                                <td>
                                <a href="https://api.whatsapp.com/send?phone=919810399003&text=Hi,%20please%20help%20me%20regarding%20IOACON%20Registration"><i class="mdi mdi-whatsapp"></i>Connect with Whatsapp</a>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>Supporting timings</th>
                                <td> 
                                    10:00 AM To 06:30 PM <b>-Monday To Friday</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('./common/footer.php'); ?>
</body>

</html>