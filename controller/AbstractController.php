<?php require('../db.php');
require('../config.php');
$member = $memno = $abs_title ='';
if (isset($_POST['submit'])) {
    if (empty($_POST['email'])) {
        echo "<script>window.location.href='../index.php';</script>";
        exit();
    } else {
        (isset($_POST['author'])) ? $author = $_POST['author'] : $author = null;
        (isset($_POST['title'])) ? $title = $_POST['title'] : $title = null;
        (isset($_POST['fname'])) ? $fname = $_POST['fname'] : $fname = null;      
        (isset($_POST['gender'])) ? $gender = $_POST['gender'] : $gender = null;
         (isset($_POST['ethicsAprove'])) ? $ethicsAprove = $_POST['ethicsAprove'] : $ethicsAprove = null;
        (isset($_POST['reg_no'])) ? $reg_no = $_POST['reg_no'] : $reg_no = null;
        (isset($_POST['designation'])) ? $designation = $_POST['designation'] : $designation = null;
        (isset($_POST['yearof_mbbs'])) ? $yearof_mbbs = $_POST['yearof_mbbs'] : $yearof_mbbs = null;
        (isset($_POST['institute'])) ? $institute = $_POST['institute'] : $institute = null;
        (isset($_POST['mobile'])) ? $mobile = $_POST['mobile'] : $mobile = null;
        (isset($_POST['email'])) ? $email = trim($_POST['email']) : $email = null;
        (isset($_POST['address'])) ? $address = $_POST['address'] : $address = null;
        (isset($_POST['city'])) ? $city = $_POST['city'] : $city = null;
        (isset($_POST['pincode'])) ? $pincode = $_POST['pincode'] : $pincode = null;
        (isset($_POST['state'])) ? $state = $_POST['state'] : $state = null;
        (isset($_POST['country'])) ? $country = $_POST['country'] : $country = null;
        (isset($_POST['co_author1_name'])) ? $co_author1_name = $_POST['co_author1_name'] : $co_author1_name = null;
        (isset($_POST['co_author1_affiliation'])) ? $co_author1_affiliation = $_POST['co_author1_affiliation'] : $co_author1_affiliation = null;
        (isset($_POST['a_institution1'])) ? $a_institution1 = $_POST['a_institution1'] : $a_institution1 = null;
        (isset($_POST['co_author2_name'])) ? $co_author2_name = $_POST['co_author2_name'] : $co_author2_name = null;
        (isset($_POST['co_author2_affiliation'])) ? $co_author2_affiliation = $_POST['co_author2_affiliation'] : $co_author2_affiliation = null;
        (isset($_POST['a_institution2'])) ? $a_institution2 = $_POST['a_institution2'] : $a_institution2 = null;
        (isset($_POST['co_author3_name'])) ? $co_author3_name = $_POST['co_author3_name'] : $co_author3_name = null;
        (isset($_POST['co_author3_affiliation'])) ? $co_author3_affiliation = $_POST['co_author3_affiliation'] : $co_author3_affiliation = null;
        (isset($_POST['a_institution3'])) ? $a_institution3 = $_POST['a_institution3'] : $a_institution3 = null;
        (isset($_POST['co_author4_name'])) ? $co_author4_name = $_POST['co_author4_name'] : $co_author4_name = null;
        (isset($_POST['co_author4_affiliation'])) ? $co_author4_affiliation = $_POST['co_author4_affiliation'] : $co_author4_affiliation = null;
        (isset($_POST['a_institution4'])) ? $a_institution4 = $_POST['a_institution4'] : $a_institution4 = null;
        (isset($_POST['co_author5_name'])) ? $co_author5_name = $_POST['co_author5_name'] : $co_author5_name = null;
        (isset($_POST['co_author5_affiliation'])) ? $co_author5_affiliation = $_POST['co_author5_affiliation'] : $co_author5_affiliation = null;
        (isset($_POST['a_institution5'])) ? $a_institution5 = $_POST['a_institution5'] : $a_institution5 = null;
        (isset($_POST['presenting_author_name'])) ? $presenting_author_name = $_POST['presenting_author_name'] : $presenting_author_name = null;
        (isset($_POST['presenting_author_institution'])) ? $presenting_author_institution = $_POST['presenting_author_institution'] : $presenting_author_institution = null;
        (isset($_POST['presenting_author_designation'])) ? $presenting_author_designation = $_POST['presenting_author_designation'] : $presenting_author_designation = null;
        (isset($_POST['presenting_author_email'])) ? $presenting_author_email = $_POST['presenting_author_email'] : $presenting_author_email = null;
        (isset($_POST['type_of_presentation'])) ? $type_of_presentation = $_POST['type_of_presentation'] : $type_of_presentation = null;
        (isset($_POST['category'])) ? $category = $_POST['category'] : $category = null;
        (isset($_POST['subcategory'])) ? $subcategory = $_POST['subcategory'] : $subcategory = null;
        (isset($_POST['apply_for_award'])) ? $apply_for_award = $_POST['apply_for_award'] : $apply_for_award = null;
        (isset($_POST['member_option'])) ? $member_option = $_POST['member_option'] : $member_option = null;
        (isset($_POST['award_category'])) ? $award_category = $_POST['award_category'] : $award_category = null;
        (isset($_POST['membership_no'])) ? $membership_no = $_POST['membership_no'] : $membership_no = null;
        (isset($_POST['abstract_file_path'])) ? $abstract_file_path = $_POST['abstract_file_path'] : $abstract_file_path = null;
        (isset($_POST['video_link'])) ? $video_link = $_POST['video_link'] : $video_link = null;
        (isset($_POST['abstract_topic'])) ? $abstract_topic = $_POST['abstract_topic'] : $abstract_topic = null;
        (isset($_POST['abstract_text'])) ? $abstract_text = $_POST['abstract_text'] : $abstract_text = null; 
        (isset($_POST['iagree'])) ? $iagree = $_POST['iagree'] : $iagree = null;
        $check_abs = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM abstract_submissions WHERE email='$email'"));
        if ($check_abs > 3) {
            echo "<script>alert('You have already submitted 4 abstract as per guidelines.');</script>";
            echo "<script>window.location.href='$sitepath';</script>";
            exit();
        }
        $iagree=1;
        $sql = "INSERT INTO abstract_submissions SET
                title = '" . $title . "',
                fname = '" . addslashes($fname) . "',
                gender = '" . $gender . "',    
                reg_no = '" . $reg_no . "',         
                designation = '" . addslashes($designation) . "',
                yearof_mbbs = '" . addslashes($yearof_mbbs) . "',
                institute = '" . addslashes($institute) . "',
                mobile = '" . $mobile . "',
                email = '" . $email . "',
                address = '" . addslashes($address) . "',
                city = '" . $city . "',
                pincode = '" . $pincode . "',
                state = '" . $state . "',
                country = '" . $country . "', 
                member_option='".$member_option."',
                membership_no='".$membership_no."',
                category='".$category."',
                subcategory='".$subcategory."',
                apply_for_award='".$apply_for_award."',
                award_category='".$award_category."',
                video_link='".$video_link."',
               
                abstract_topic='".addslashes($abstract_topic)."',
                abstract_text='".addslashes($abstract_text)."',
                co_author1_name = '" . addslashes($co_author1_name) . "',
               
                a_institution1 = '" . addslashes($a_institution1) . "',
                co_author2_name = '" . addslashes($co_author2_name) . "',
               
                a_institution2 = '" . addslashes($a_institution2) . "',
                co_author3_name = '" . addslashes($co_author3_name) . "',
                
                a_institution3 = '" . addslashes($a_institution3) . "',
                co_author4_name = '" . addslashes($co_author4_name) . "',
                
                a_institution4 = '" . addslashes($a_institution4) . "',
                co_author5_name = '" . addslashes($co_author5_name) . "',
               
                a_institution5 = '" . addslashes($a_institution5) . "',
                presenting_author_name = '" . addslashes($presenting_author_name) . "',
                presenting_author_institution = '" . addslashes($presenting_author_institution) . "',
                presenting_author_designation = '" . addslashes($presenting_author_designation) . "',
                presenting_author_email = '" . addslashes($presenting_author_email) . "',
                type_of_presentation = '" . addslashes($type_of_presentation) . "',
                iagree = '{$iagree}',
                send_mail = '0'";
        // echo $sql; die;
        $result = mysqli_query($conn, $sql);
        $insert_id = mysqli_insert_id($conn);
        $abs_id = str_pad($insert_id, 4, "0", STR_PAD_LEFT);
        mysqli_query($conn, "update abstract_submissions SET abs_id='$abs_id' WHERE id=$insert_id");
        
        $upload_name = $_FILES['abstract_file_path']['name'];
        if (($upload_name != '') && $insert_id != '') {
            $qry = '';
            $target = '../assets/upload_abs/';
            if ($_FILES['abstract_file_path']['name'] != '') {
                $qry = '';
                $ext = pathinfo($_FILES['abstract_file_path']['name'], PATHINFO_EXTENSION);
                $filname = $insert_id . "_" . time() . '.' . $ext;
                $qry .= "abstract_file_path = '" . $filname . "',";
                $target_path = $target . $filname;
                /*
                    if (file_exists($target_path))
                    unlink($target_path); //for delete previously upload file
                */
            }
            move_uploaded_file($_FILES['abstract_file_path']['tmp_name'], $target_path);
            if ($qry != '') {
                $qry = rtrim($qry, ",");
                mysqli_query($conn, "update abstract_submissions SET " . $qry . ", abs_id='$abs_id' WHERE id=$insert_id");
            }
            $filepath = $regPath . "/assets/upload_abs/" . $filname;
        }
        
        if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
} else {
    // echo "Data inserted successfully";
    require_once 'mailer.php';
        // echo "<script>window.location.href='success.php';</script>";
}
        
        
    }
}
