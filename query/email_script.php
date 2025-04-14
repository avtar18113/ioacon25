<?php
include_once '../config.php';
include_once '../db.php';
include_once '../smtp/PHPMailerAutoload.php';
// $siteURL = 'https://ioacon2025guwahati.com';
// $regPath = 'https://concepttc.com/registration/ioacon25/regsubmit';



if($_SESSION['email']!=''){
    $email=$_SESSION['email'];
}else{
    $email='';
}
function fetchRegistrationData($conn,$email) {
   $query = "SELECT * FROM registration WHERE p_status='success' AND email= '$email'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Error fetching records: ' . mysqli_error($conn));
    }
    return $result;
}
function generateEmailBody($row, $siteURL, $regPath) {
    $headerImage = "$regPath/assets/images/ioacon-mailer-header.webp";   
    $details = [
        'Registration ID' => $row['rid'],
        'Name' => $row['title'] . ' ' . $row['fname'] . ' ' . $row['lname'],
        'Email' => $row['email'],
        'Mobile' => $row['mobile'],
        'Registration Category' => $row['regCat'],
    ];

    $additionalInfo = '';
    $dateaccess='<tr><td><b>Conference:</b> 18 to 20 Dec 2025</td></tr>';
    if (!empty($row['pg_teach_pro'])) {
        $additionalInfo .= "<tr><td>PG Teaching Program</td><td>{$row['pg_teach_pro']}</td></tr>";
       
    }
    if ($row['pg_teach_pro']=='Yes') {
        
        $dateaccess .= "<tr><td><b>PG Teaching Program:</b> 15 Dec 2025</td></tr>";
    }
    if (!empty($row['mem_id'])) {
        $additionalInfo .= "<tr><td>Membership No. </td><td>{$row['mem_id']}</td></tr>";
    }
    if (!empty($row['workshop'])) {
        $additionalInfo .= "<tr><td>Workshop</td><td>{$row['workshop']}</td></tr>";
        
    }
    if ($row['workshop']!='No') {
       
        $dateaccess .= "<tr><td><b>Workshop:</b> 16 Dec 2025</td></tr>";
    }
    
    if (!empty($row['workshop_category'])) {
        $additionalInfo .= "<tr><td>Workshop Category</td><td>{$row['workshop_category']}</td></tr>";
    }
    if (!empty($row['cme_reg'])) {
        $additionalInfo .= "<tr><td>CME</td><td>{$row['cme_reg']}</td></tr>";
    }
    if (($row['cme_reg']=='Yes' || $row['acc_cme1']=='Yes' || $row['acc_cme2']=='Yes' || $row['acc_cme3']=='Yes' )) {
        $dateaccess .= "<tr><td><b>CME:</b> 17 Dec 2025</td></tr>";
    }
    if (!empty($row['r_banquet'])) {
        $additionalInfo .= "<tr><td>Banquet</td><td>{$row['r_banquet']}</td></tr>";
    }

    // if (($row['r_banquet']=='Yes' || $row['a_banquet1']=='Yes' || $row['a_banquet2']=='Yes' || $row['a_banquet3']=='Yes' )) {
    //     $dateaccess .= "<tr><td><b>Banquet:</b> 18 Dec 2025</td></tr>";
    // }
    
    
    
    if (!empty($row['total_accompany']) > 0 ) {
        $additionalInfo .= "<tr class='bg-light'><td colspan='2'>
                      <table cellpadding='0' cellspacing='0' border='1' width='700' style='border: 1px solid #ccc; font-size:12px; line-height:18px;'>
                      <tr style='background: #ebebeb;'><th>Name</th><th>Age</th><th>Banquet</th> <th>CME</th></tr>";
        if (!empty($row['a1name'])) {
            $additionalInfo .= "<tr class='bg-white'><td>1. {$row['a1name']}</td> <td>{$row['a1age']}</td><td>{$row['a_banquet1']}</td><td>{$row['acc_cme1']}</td></tr>";
        }
        if (!empty($row['a2name'])) {
            $additionalInfo .= "<tr class='bg-white'><td>1. {$row['a2name']}</td> <td>{$row['a2age']}</td><td>{$row['a_banquet2']}</td><td>{$row['acc_cme2']}</td></tr>";
        }
        if (!empty($row['a3name'])) {
            $additionalInfo .= "<tr class='bg-white'><td>1. {$row['a3name']}</td> <td>{$row['a3age']}</td><td>{$row['a_banquet3']}</td><td>{$row['acc_cme3']}</td></tr>";
        }
        $additionalInfo .= "</table></td></tr>";
    }
    $feeDetails = "";
// ===================
    
    if ($row['credit'] > 0 ) {
        $feeDetails = "<tr><td>Registration Fee</td><td>{$row['reg_fee']}</td></tr>";
        if ($row['wrk_fee'] > 0) {
            $feeDetails .= "<tr><td>Workshop Fee</td><td>{$row['wrk_fee']}</td></tr>";
        }
        if ($row['pg_teach_fee'] > 0) {
            $feeDetails .= "<tr><td>PG Teaching Program Fee</td><td>{$row['pg_teach_fee']}</td></tr>";
        }
        if ($row['r_banquet2'] > 0) {
            $feeDetails .= "<tr><td>Additional Banquet Fee</td><td>{$row['r_banquet2']}</td></tr>";
        }
        if ($row['cmeFee'] > 0) {
            $feeDetails .= "<tr><td>CME Fee</td><td>{$row['cmeFee']}</td></tr>";
        }  
       
        if ($row['bnq_fee'] > 0) {
            $feeDetails .= "<tr><td>Banquet Fee</td><td>{$row['bnq_fee']}</td></tr>";
        }
        if ($row['registration_total'] > 0) {
            $feeDetails .= "<tr><td><b>Registration Total Fee</b></td><td><b>{$row['registration_total']}</b></td></tr>";
        }
        if (($row['accFee1']+$row['accFee2']+$row['accFee3']) > 0) {
            $accompanying_fee=($row['accFee1']+$row['accFee2']+$row['accFee3']);
            $feeDetails .= "<tr><td>Accompanying Fee</td><td>{$accompanying_fee}</td></tr>";
        }
        if (((int)$row['acc_cme1_fee']+(int)$row['acc_cme2_fee']+(int)$row['acc_cme3_fee']) > 0) {
            $acc_cme_fee=((int)$row['acc_cme1_fee']+(int)$row['acc_cme2_fee']+(int)$row['acc_cme3_fee']);
            $feeDetails .= "<tr><td>Accompanying CME Fee</td><td>{$acc_cme_fee}</td></tr>";
        }
        if (((int)$row['a_banquet1_fee']+(int)$row['a_banquet2_fee']+(int)$row['a_banquet3_fee']) > 0) {
            $acc_banq=((int)$row['a_banquet1_fee']+(int)$row['a_banquet2_fee']+(int)$row['a_banquet3_fee']);
            $feeDetails .= "<tr><td>Accompanying Banquet Fee</td><td>{$acc_banq}</td></tr>";
        }
        if ($row['accompany_total_fee'] > 0) {
            $feeDetails .= "<tr><td><b>Accompanying Total Fee</b></td><td><b>{$row['accompany_total_fee']}</b></td></tr>";
        }
    
    }
    
    // ====================
    return "<table cellpadding='5' border='0'>
                <tr>
                    <a href='$siteURL' target='_blank'>
                        <img src='$headerImage' width='700'>
                    </a><br><br>
                </tr>
                <tr>
                    <td>Thank you for registering for IOACON 2025. Please find below your registration details:</td>
                </tr>
                <tr>
                    <td>
                        <table border='1' cellspacing='0' cellpadding='5' width='700'>
                            <tr><td colspan='2' align='center'><strong>Registration Details</strong></td></tr>
                            " . implode('', array_map(fn($key, $value) => "<tr><td>$key</td><td>$value</td></tr>", array_keys($details), $details)) . "
                            $additionalInfo
                            <tr><td colspan='2' align='center'><strong>Fee Details</strong></td></tr>
                            $feeDetails
                            <tr><td><strong>Payable Amount</strong></td><td><strong>INR {$row['total']}</strong></td></tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Paid Amount: <strong>{$row['credit']}</strong><br>
                        Payment Status: <strong>{$row['p_status']}</strong><br>
                        Transaction ID: <strong>{$row['razorpay_payment_id']}</strong>
                    </td>
                </tr>
                <tr><td><b>You can attend conference on below dates as per your selected registration choices</b></td></tr>
                $dateaccess
                
                <tr>
                    <td>
                        <br><strong>Regards,<br>
                        IOACON 2025<br>
                        Conference Secretariat:</strong><br>
                        Surya Business Centre<br>
                        503, Orion Towers,<br> GS Road,
                        Guwahati 781005, Assam<br>
                        Email: ioacon2025guwahati@gmail.com<br>
                        <br><strong>For Registration Query Contact:</strong><br>
                        Mr. Rahul Kanojiya<br> +91 9810399003<br>
                        Email: rahul@concepttc.com
                    </td>
                </tr>
            </table>";
}
function sendEmail($email, $subject, $body) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'localhost';
    $mail->Port = '465';
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'registration@ioacon2025guwahati.com';
    $mail->Password = 'Vr$W6BSSXQH';
    $mail->SetFrom('registration@ioacon2025guwahati.com', 'IOACON 2025 Conference');
    $mail->addReplyTo('registration@concepttc.com', 'Rahul');
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($email);
    $mail->AddCC('registration@concepttc.com', 'Rahul');;
    $mail->AddCC('ioacon2025guwahati@gmail.com');
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];
    return $mail->Send();
}
function updateSendMailStatus($conn, $rid, $status) {
    $updateSQL = "UPDATE registration SET sendmail=$status WHERE rid='$rid'";
    if (!mysqli_query($conn, $updateSQL)) {
        error_log("Error updating sendmail status for RID $rid: " . mysqli_error($conn));
    }
}

$result = fetchRegistrationData($conn, $email);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $emailBody = generateEmailBody($row, $siteURL, $regPath);
    //   echo $row['email'];
        $emailSent = sendEmail($row['email'], 'IOACON 2025 Conference Registration', $emailBody);
        updateSendMailStatus($conn, $row['rid'], $emailSent ? 1 : 0);
    }
    echo "<script>alert('Emails sent successfully!'); window.location.href='$regPath/home';</script>";
} else {
    echo "<script>alert('No records found to send emails.'); window.location.href='$regPath/logout.php';</script>";
}
mysqli_close($conn);
