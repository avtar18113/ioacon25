<?php
$crlf = '\r\n';
$message = "
<table cellpadding='0' cellspacing='0' border='0'
style='font-family: sans-serif; font-size:14px; line-height:18px; color:#505050; background:#f8f9fa; width:100%; max-width:720px; margin:3em auto;border-collapse:collapse;'>
<tr>
<td width='100%'><img src='$siteHeaderImage' alt='IOACON Header Image' width='100%' /></td>
</tr>
<tr>
<td width='100%' style='padding: 20px;'>
<table cellpadding='0' cellspacing='0' border='1'
style=' width:100%; border-collapse:collapse; border: 1px solid #e8e8e8;'>
<tr style='margin: 0; background: #3f3e93; text-align: center; color: #fff;'>
<td colspan='2' style='padding: 5px 10px;'>
<h3 style='margin: 0; '>Abstract Submission Details</h3>
</td>
</tr>
<tr>
<td width='30%' style='padding: 10px;'>Abstract ID</td>
<td style='padding: 10px;'>$abs_id</td>
</tr>
<tr>
<td width='30%' style='padding: 10px;'>Presenting Author Name</td>
<td style='padding: 10px;'>$title $fname </td>
</tr>
<tr>
<td width='30%' style='padding: 10px;'>Gender</td>
<td style='padding: 10px;'>$gender</td>
</tr>
";
if ($reg_no) {
    $message .= "<tr><td width='30%' style='padding: 10px;'>Registration No.</td><td style='padding: 10px;'>$reg_no</td></tr>";
}
if ($member) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Member</td>
<td style='padding: 10px;'>$member</td>
</tr>";
}
if ($memno) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Membership No</td>
<td style='padding: 10px;'>$memno</td>
</tr>";
}
if ($institute) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Institute</td>
<td style='padding: 10px;'>$institute</td>
</tr>";
}
if ($designation) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Designation </td>
<td style='padding: 10px;'>$designation</td>
</tr>
";
}
if ($yearof_mbbs) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Year of Passing MBBS </td>
<td style='padding: 10px;'>$yearof_mbbs</td>
</tr>
";
}
if ($email) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Email </td>
<td style='padding: 10px;'>$email</td>
</tr>
";
}
if ($mobile) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Mobile </td>
<td style='padding: 10px;'>$mobile</td>
</tr>
";
}
if ($address) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Address </td>
<td style='padding: 10px;'>$address</td>
</tr>
";
}
if ($city) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>City  </td>
<td style='padding: 10px;'>$city</td>
</tr>
";
}
if ($pincode) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>PIN/ZIP Code</td>
<td style='padding: 10px;'>$pincode</td>
</tr>
";
}
if ($state) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>State </td>
<td style='padding: 10px;'>$state</td>
</tr>
";
}
if ($country) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Country </td>
<td style='padding: 10px;'>$country</td>
</tr>
";
}
if ($co_author1_name) {
    $message .= "<tr style=''>
<td width='30%' style='padding: 10px;'>1. Co Author Name</td>
<td style='padding: 10px;'>$co_author1_name</td>
</tr>
<tr style=''>
<td width='30%' style='padding: 10px;'>Affiliation </td>
<td style='padding: 10px;'>$co_author1_affiliation</td>
</tr>
";
}
if ($co_author2_name) {
    $message .= "<tr style=''>
<td width='30%' style='padding: 10px;'>2. Co Author Name</td>
<td style='padding: 10px;'>$co_author2_name</td>
</tr>
<tr style=''>
<td width='30%' style='padding: 10px;'>Affiliation </td>
<td style='padding: 10px;'>$co_author2_affiliation</td>
</tr>
";
}
if ($co_author3_name) {
    $message .= "<tr style=''>
<td width='30%' style='padding: 10px;'>3. Co Author Name</td>
<td style='padding: 10px;'>$co_author3_name</td>
</tr>
<tr style=''>
<td width='30%' style='padding: 10px;'>Affiliation </td>
<td style='padding: 10px;'>$co_author3_affiliation</td>
</tr>
";
}
if ($co_author4_name) {
    $message .= "<tr style=''>
<td width='30%' style='padding: 10px;'>4. Co Author Name</td>
<td style='padding: 10px;'>$co_author4_name</td>
</tr>
<tr style=''>
<td width='30%' style='padding: 10px;'>Affiliation </td>
<td style='padding: 10px;'>$co_author4_affiliation</td>
</tr>
";
}
if ($co_author5_name) {
    $message .= "<tr style=''>
<td width='30%' style='padding: 10px;'>5. Co Author Name</td>
<td style='padding: 10px;'>$co_author5_name</td>
</tr>
<tr style=''>
<td width='30%' style='padding: 10px;'>Affiliation </td>
<td style='padding: 10px;'>$co_author5_affiliation</td>
</tr>
";
}
if ($type_of_presentation) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Type of Presentation</td>
<td style='padding: 10px;'>$type_of_presentation</td>
</tr>";
}
if ($presenting_author_name) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Presenting Author Name </td>
<td style='padding: 10px;'>$presenting_author_name</td>
</tr>
<tr>
<td width='30%' style='padding: 10px;'>Presenter Affiliate </td>
<td style='padding: 10px;'>$presenting_author_institution</td>
</tr>
<tr>
<td width='30%' style='padding: 10px;'>Presenter Designation </td>
<td style='padding: 10px;'>$presenting_author_designation</td>
</tr>
<tr>
<td width='30%' style='padding: 10px;'>Presenter Email </td>
<td style='padding: 10px;'>$presenting_author_email</td>
</tr>";
}
if ($category) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Category </td>
<td style='padding: 10px;'>$category</td>
</tr>";
}
if ($subcategory) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Sub Category </td>
<td style='padding: 10px;'>$subcategory</td>
</tr>";
}
if ($apply_for_award) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Apply for Award </td>
<td style='padding: 10px;'>$apply_for_award</td>
</tr>";
}
if ($membership_no) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Membership No </td>
<td style='padding: 10px;'>$membership_no</td>
</tr>";
}

if ($award_category) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Award Category </td>
<td style='padding: 10px;'>$award_category</td>
</tr>";
}

if ($abstract_topic) {
    $message .= " <tr>
<td width='30%' style='padding: 10px;'>Abstract Topic </td>
<td style='padding: 10px;'>$abstract_topic</td>
</tr>";
}

if ($filepath) {
    $message .= "
<tr>
<td width='30%' style='padding: 10px;'>Abstract File </td>
<td style='padding: 10px;'><a href='$filepath' target='_blank'>Download</a></td>
</tr>
";
}
if ($abstract_text) {
    $message .= "<tr>
<td width='30%' style='padding: 10px;'>Abstract</td>
<td style='padding: 10px;'>$abstract_text</td>
</tr>";
}

$message .= "
</table>
</td>
</tr>
</table>
";
//die( $message );
$crlf = '\r\n';
$to = $email;
$subject = 'IOACON 2025 Abstract Submission';
include('../smtp/PHPMailerAutoload.php');
$mail = new PHPMailer();
// 	$mail->SMTPDebug = 3;
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'localhost';
$mail->Port = '465';
$mail->IsHTML(true);
$mail->CharSet = 'UTF-8';
$mail->Username = 'mail@concepttc.com';
$mail->Password = 'fs1t)k47t4pE';
$mail->SetFrom('mail@concepttc.com', 'IOACON 2025');
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AddAddress($to);
$mail->AddCC('registration@concepttc.com');
// $mail->AddReplyTo( 'operations@concepttc.com' );
$mail->SMTPOptions = array('ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
));
if (!$mail->Send()) {
    echo "<script> alert('Server error, please try later.'); </script>";
    echo "<script>window.location.href = '../index.php';</script>";
} else {

    mysqli_query($conn, "update abstract_submissions SET send_mail='1' WHERE id=$insert_id");
    echo "<script>window.location.href = '../pages/success-abstract.php';</script>";
}