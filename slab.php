

<?php
$currentdate=date("Ymd");

$cat1 = "IOA MEMBER";
$cat2 = "NON IOA MEMBER";
$acc = "ACCOMPANYING PERSON";
$cat3 = "PG STUDENT";
$cat4 = "FOREIGN DELEGATE";
$cat5 = "SAARC DELEGATE";
$acc1 = "ACCOMPANYING PERSON";
$cat6 = "GUEST NATIONAL DELEGATE";
$cat7 = "TRADE DELAGATE";
$cat8 = "SENIOR DELEGATE";
$pg_teach_pro='PG Teaching Program';
$doll = 87;

if($currentdate<=20250331){
    
    // #IOACON2024 Registration Details
$cat1_fee = 12650; //IOACON MEMBER
$cat2_fee = 18200; //NON IOACON MEMBER
$acc_fee = 8800; //ACCOMPANYING PERSON
$cat3_fee = 9350; // PG STUDENT
$cat4_fee = 385*$doll; //FOREIGN DELEGATE
$cat5_fee = 18250; //SAARC DELEGATE
$acc1_fee = 10000; //ACCOMPANYING PERSON
$cat6_fee = 195*$doll; //GUEST NATIONAL DELEGATE
$cat7_fee = 13750; //TRADE DELAGATE
$cat8_fee = 500; //SENIOR DELEGATE

// #IOACON2024 CME TARIFF

$cme1_fee = 3500; //IOACON MEMBER
$cme2_fee = 4200; //NON IOACON MEMBER
$acc_cme_fee = 2500; //ACCOMPANYING PERSON
$cme3_fee = 2500; // PG STUDENT
$cme4_fee = 75*$doll; //FOREIGN DELEGATE
$cme5_fee = 4200; //SAARC DELEGATE
$acc_cme1_fee = 2500; //ACCOMPANYING PERSON
$cme6_fee = 75*$doll; //GUEST NATIONAL DELEGATE
$cme8_fee = 3500; //SENIOR DELEGATE


// #IOACON2024 Banquet Tariff

$banq1_fee = 3800; //IOACON MEMBER
$banq2_fee = 60*$doll; //FOREIGN DELEGATE
$banq3_fee = 3800; //SAARC DELEGATE
$banq4_fee = 50*$doll; //GUEST NATIONAL DELEGATE
$banq8_fee = 3800; //SENIOR DELEGATE

// #IOACON2024 Workshop
$workshop0="No";
$workshop1="Normal Workshop";
$workshop2="Cadaveric Workshop";

$wrk1_fee = 2000; //workshop
$wrk2_fee = 10000; //Cadaveric Workshop
$wrk3_fee = 1000; //SAARC DELEGATE


$pg_teach=1000;
   
}else{
    
    // #IOACON2024 Registration Details
$cat1_fee = 14850; //IOACON MEMBER
$cat2_fee = 20350; //NON IOACON MEMBER
$acc_fee = 11000; //ACCOMPANYING PERSON
$cat3_fee = 10450; // PG STUDENT
$cat4_fee = 440*$doll; //FOREIGN DELEGATE
$cat5_fee = 25350; //SAARC DELEGATE
$acc1_fee = 11000; //ACCOMPANYING PERSON
$cat6_fee = 247*$doll; //GUEST NATIONAL DELEGATE
$cat7_fee = 14850; //TRADE DELAGATE
$cat8_fee = 500; //SENIOR DELEGATE

// #IOACON2024 CME TARIFF

$cme1_fee = 4000; //IOACON MEMBER
$cme2_fee = 4600; //NON IOACON MEMBER
$acc_cme_fee = 2800; //ACCOMPANYING PERSON
$cme3_fee = 2800; // PG STUDENT
$cme4_fee = 75*$doll; //FOREIGN DELEGATE
$cme5_fee = 4600; //SAARC DELEGATE
$acc_cme1_fee = 2800; //ACCOMPANYING PERSON
$cme6_fee = 75*$doll; //GUEST NATIONAL DELEGATE
$cme8_fee = 4000; //SENIOR DELEGATE


// #IOACON2024 Banquet Tariff

$banq1_fee = 4000; //IOACON MEMBER
$banq2_fee = 80*$doll; //FOREIGN DELEGATE
$banq3_fee = 4000; //SAARC DELEGATE
$banq4_fee = 50*$doll; //GUEST NATIONAL DELEGATE
$banq8_fee = 4000; //SENIOR DELEGATE

// #IOACON2024 Workshop
$workshop0="No";
$workshop1="Normal Workshop";
$workshop2="Cadaveric Workshop";

$wrk1_fee = 2000; //workshop
$wrk2_fee = 10000; //Cadaveric Workshop
$wrk3_fee = 1000; //SAARC DELEGATE


$pg_teach=1000;
    
}






 
