<?php

include_once '../db.php';
include_once '../config.php';


require_once('../TCPDF/tcpdf.php');

// $email='drsandhu@gmail.com';
$email=$_SESSION['email'];

$sql = "SELECT * FROM registration WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $title = $row["title"];
       $fname = $row["fname"];
        $lname = $row["lname"];
        $designation = $row["designation"];
        $institute = $row["institute"];
        $country = $row["country"];
        $state = $row["state"];
        $city = $row["city"];
        $pincode = $row["pincode"];
           $fullname= $title . ' ' . $fname . ' ' . $lname;
 
}

}


class MYPDF extends TCPDF {
	//Page header
	public function Header() {
		$bMargin = $this->getBreakMargin();
		$auto_page_break = $this->AutoPageBreak;
		$this->SetAutoPageBreak(false, 0);
		$this->SetAutoPageBreak($auto_page_break, 0);
		$this->setPageMark();
	}
}

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set margins
// $pdf->SetMargins(15, 0, 15, 0);
$pdf->setMargins(70, 0, 0);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);
$pdf->SetTitle('Abstract Certificate');
//Add a custom size  
$width = 210;  
$height = 297; 

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetAutoPageBreak(TRUE, 0);
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', '', 9);





if($fullname!=''){
$fullname ="<b ></b>".$fullname;}

if($designation!=''){
    $designation="<b></b>". $designation;
}else{$designation="";}

if($institute!=''){
    $institute="<b></b>". $institute;
}else{$institute="";}

if($country!=''){
    $country="<b></b>". $country;
}else{$country="";}

if($state!=''){
    $state="<b></b>". $state;
}else{$state="";}

if($city!=''){
    $city="<b></b>". $city;
}else{$city="";}

if($pincode!=''){
    $pincode="<b></b>". $pincode;
}else{$pincode="";}

if($rid){$rid="<b>Registration ID.:</b>". $rid;}
$email='<b>E-mail:</b> ' .$email;

// $pdf->AddPage('L', $page_format, false, false);

$pdf->AddPage('P', 'A4', false, false);
$resolution= array($width, $height);


$image_file = '../assets/images/letter-img.jpg';
$pdf->Image($image_file, 0, 0, $width, $height, '', '', '', false, 300, '', false, false, 0);
$pdf->Ln(60);
$pdf->writeHTMLCell(150, 5, '', '', $fullname, 0, 1, 0, true, 'L', true);
$pdf->writeHTMLCell(78, 5, '', '', $designation, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(78, 5, '', '', $institute, 0, 1, 0, true, '', true);
$pdf->writeHTMLCell(25, 5, '', '', $country, 0, 0, 0, true, '', true);
$pdf->writeHTMLCell(25, 5, '', '', $state, 0, 0, 0, true, '', true);
$pdf->writeHTMLCell(25, 5, '', '', $city, 0, 0, 0, true, '', true);
$pdf->writeHTMLCell(25, 5, '', '', $pincode, 0, 0, 0, true, '', true);

$pdf->writeHTML($html, true, 0, true, 0);



//Close and output PDF document
ob_end_clean();
$pdf->Output('ioacon-2025-E-Receipt.pdf','I');