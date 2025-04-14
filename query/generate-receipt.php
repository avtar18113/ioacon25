<?php
include_once '../db.php';
include_once 'num_to_word.php';
include_once '../config.php';

$email=$_SESSION['email'];
// $sql = "SELECT * FROM registration WHERE del = '0' AND email = '$email'";
$sql = "SELECT * FROM registration WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reg_no = $row[ 'reg_no' ];
        $fname = $row[ 'fname' ];
        $lname = $row[ 'lname' ];
        $title = $row[ 'title' ];
        $fullname = $title . ' ' . $fname . ' ' . $lname;
        $mobile = $row[ 'mobile' ];
        $email = $row[ 'email' ];
        $wrk_fee = $row[ 'wrk_fee' ];
        $cmeFee = $row[ 'cmeFee' ];
        $acc_fee=(int)$row['accFee1']+(int)$row['accFee2']+(int)$row['accFee3'];
        $workshop = $row[ 'workshop' ];
        $reg_typ = $row[ 'reg_typ' ];
        $regCat = $row[ 'regCat' ];
        
        $rid = $row[ 'rid' ];
        $panno = $row[ 'panno' ];
        $reg_fee = $row[ 'reg_fee' ];
        $mem_id  = $row[ 'mem_id' ];
        $upload_pg  = $row[ 'upload_pg' ];
        $bnq_fee = $row[ 'bnq_fee' ];
        $banqFee = (int)$row['a_banquet1_fee']+(int)$row['a_banquet2_fee']+(int)$row['a_banquet3_fee'];
        $acc_cme_fee=(int)$row['acc_cme1_fee']+(int)$row['acc_cme2_fee']+(int)$row['acc_cme3_fee'];
       $registration_total=$row['registration_total'];
       $accompany_total_fee=$row['accompany_total_fee'];
        
       
        $a1name = $row[ 'a1name' ];
        $a1age = $row[ 'a1age' ];
        $a_banquet1 = $row[ 'a_banquet1' ];
        $acc_cme1 = $row[ 'acc_cme1' ];
        $a2name = $row[ 'a2name' ];
        $a2age = $row[ 'a2age' ];
        $a_banquet2 = $row[ 'a_banquet2' ];
        $acc_cme2 = $row[ 'acc_cme2' ];
        $a3name = $row[ 'a3name' ];
        $a3age = $row[ 'a3age' ];
        $a_banquet3 = $row[ 'a_banquet3' ];
        $acc_cme3 = $row[ 'acc_cme3' ];
       
        $total = $row[ 'total' ];        
       
        $ref = $row[ 'ref' ];
        $p_status = $row[ 'p_status' ];
        $dateCreated = $row[ 'dateCreated' ];
        $pg_teach_pro = $row[ 'pg_teach_pro' ];
        $pg_teach_fee = $row[ 'pg_teach_fee' ];       
        
        $txnid = $row[ 'razorpay_payment_id' ];
        $r_banquet2 = $row[ 'r_banquet2' ];
        $banqFee2 = $row[ 'banqFee2' ];
    }
}
$total = $total . '.00';
$get_amount = AmountInWords($total);
require_once('../TCPDF/tcpdf.php');

class MYPDF extends TCPDF
 {
    //Page header
    public function Header()
    {
       
      
        $this->Image('../assets/images/ioacon-mailer-header.jpg', 0, 0, 210, 0, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }
    // Page footer
    public function Footer()
 {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 10);
        // Page number
        $this->Cell(0, 20, 'This is computer generated E-Receipt', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setTitle('IOACON 2025 Receipt');
$pdf->setSubject('IOACON 2025');
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->setFont('helvetica', '', 10);
// ---------------------------------------------------------
// set page format (read source code documentation for further information)
// add first page -
// detail fetech









if ($mem_id != '') {
    $memde = '<b>Membership No.:</b>' . $mem_id;
} else {
    $memde = '';
}
if ($reg_no != '') {
    $reg_no = 'Receipt No.: ' . $reg_no;
}
if ($fullname != '') {
    $fullname1 = '<b>Received with thanks from:</b>' . $fullname;
}
if ($mobile != '') {
    $mobile = '<b>Mobile No:</b>' . $mobile;
} else {
    $mobile = '';
}
if ($rid) {
    $rid = '<b>Registration ID.:</b>' . $rid;
}
$email = '<b>E-mail:</b> ' . $email;
$message = "

<table style='width:60%; border: 1px solid #ddd;'>
<tr><td><strong>CONFERENCE SECRETARIAT</strong></td></tr> 
<tr><td>Address: Surya Business Centre
503, Orion Towers<br>GS Road
Guwahati 781005, Assam</td></tr>
<tr><td><strong>For Registration Query</strong> Contact: +91 9810399003</td></tr>
</table>
";
$particular = "
<style>
table{border: 0px solid #000;margin: 0px;}
th{border: 1px solid #000;}
td{border-left:1px solid #000;}
</style>
<table style='width:50%; border: 1px solid #ddd;'>
<tr><th><strong>Particular</strong></th><th><strong>Amount (INR)</strong></th></tr>
<tr><td>Conference Fee</td><td>$reg_fee</td></tr>";
if ($bnq_fee > 0){ $particular .= "<tr><td>Banquet Fee</td><td>$bnq_fee</td></tr>";}
if ($cmeFee > 0) { $particular .=  "<tr><td>CME Fee</td><td>$cmeFee</td></tr>";}
if ($banqFee2 > 0) {
    $particular .="<tr><td>Extra Banquet Fee</td><td>$banqFee2</td></tr>";
}
if ($pg_teach_fee > 0) {
    $particular .="<tr><td>PG Teaching Fee</td><td>$pg_teach_fee</td></tr>";
}
if ($wrk_fee > 0) { $particular .= "<tr><td>WorkshopFee</td><td>$wrk_fee</td></tr>";}
if($registration_total>0){
   $particular .= "<tr><td><b>Registration Total Fee</b></td><td><b>$registration_total</b></td></tr>"; 
}
if ($acc_fee > 0) {
   
    $particular .= "<tr><td>Accompanying Fee</td><td>$acc_fee</td></tr>";
}
if($acc_cme_fee>0){
     $particular .= "<tr><td>Accompanying CME Fee</td><td>$acc_cme_fee</td></tr>";
}
if ($banqFee > 0) { $particular .=  "<tr><td>Accompanying Banquet Fee</td><td>$banqFee</td></tr>";}
if($accompany_total_fee>0){
   $particular .= "<tr><td><b>Accompanying Total Fee</b></td><td><b>$accompany_total_fee</b></td></tr>"; 
}


$particular .= "
<tr><th><strong>Total Fee</strong></th><th>$total</th></tr>
</table>
";
$cancelHeading = <<<EOD
<h3><b>Cancellation Policy</b></h3>
EOD;
$cancelation = "<h3><b>Cancellation Policy</b></h3>
<p>Substitutions: As with all IOACON 2025 events, registration is non-transferable that means it cannot be transferred to any other delegate as a substitute.</p>
<h4>Standard cancellation policy:</h4>
<p>Processing of refund: Refund will be processed within 45 working days post the conference.</p>
<p>Refund of cancelled registration will be made only against a written request by email or a post submitted before 31st October, 2025</p>
<p>From 31st October, 2025 onwards, no refund request will be entertained by the Secretariat.</p>
<p>25% of the Registration fee would be deducted as processing charges and the rest will be refunded one month after completion of the conference.</p>";
$word = "<table><tr><td><strong>In Words: </strong>$get_amount</td></tr>
</table>";
// $pdf->AddPage('L', $page_format, false, false);
$pdf->AddPage('P', 'A4', false, false);
$pdf->Ln(22);
// $pdf->writeHTMLCell(70, 8, 'Registration ID.: '.$rid, 0, 0, 'D');

$pdf->writeHTMLCell(78, 0, '', '', $rid, 0, 0, 0, true, 'L', true);
$pdf->writeHTMLCell(78, 70, '', '', $memde, 0, 0, 0, true, '', true);
$pdf->writeHTMLCell(78, 5, '', '', $reg_no, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(150, 5, '', '', $fullname1, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(78, 5, '', '', $mobile, 0, 0, 0, true, '', true);
$pdf->writeHTMLCell(78, 5, '', '', $email, 0, 1, 0, true, '', true);
// $pdf->Cell(50, 8, 'Mobile No.: ' .$mobile, 0, 1, 'E');
$pdf->Ln(3);
$pdf->writeHTMLCell(150, 10, '', '', $particular, 0, 1, 0, true, '', true);
$pdf->Ln(3);
$pdf->writeHTMLCell(180, 0, '', '', $word, 0, 1, 0, true, '', true);
$pdf->Ln(3);
$pdf->Cell(50, 8, 'Date: ' . $dateCreated, 0, 0, 'D');
$pdf->Cell(50, 8, 'Transaction ID: ' . $txnid, 0, 1, 'D');
$pdf->Ln(3);
$pdf->writeHTMLCell(200, 10, '', '', $message, 0, 1, 0, true, '', true);
$pdf->Ln(5);
$pdf->writeHTMLCell(200, 0, '', '', $cancelHeading, 0, 1, 0, true, 'C', true);
// $pdf->writeHTML($cancelHeading, true, false, false, false, '');
$pdf->writeHTMLCell(200, 0, '5', '', $cancelation, 0, 1, 0, true, 'L', true);
//Close and output PDF document

ob_end_clean();
$pdf->Output('ioacon-2025-E-Receipt.pdf', 'I');