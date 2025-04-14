<?php
require '../db.php';
require '../config.php';
require '../razorpay-php-master/Razorpay.php';
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$success = true;
$error = "Payment Failed";
try {
    if (empty($_POST['razorpay_payment_id'])) {
        throw new Exception("Razorpay Payment ID is missing.");
    }
    $api = new Api($keyId, $keySecret);
    $attributes = [
        'razorpay_order_id' => $_SESSION['razorpay_order_id'],
        'razorpay_payment_id' => $_POST['razorpay_payment_id'],
        'razorpay_signature' => $_POST['razorpay_signature']
    ];
    $api->utility->verifyPaymentSignature($attributes);
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $reg_sql = "SELECT MAX(reg_no) AS reg_no FROM addon WHERE del = 0";
    $result = mysqli_query($conn, $reg_sql);
    if (!$result) {
        throw new Exception("Database query failed: " . mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result);
    $reg_no = isset($row['reg_no']) ? $row['reg_no'] + 1 : 1;
    $rid = "IOACON" . str_pad($reg_no, 4, "0", STR_PAD_LEFT);
    $update_sql = "UPDATE addon 
                   SET reg_no = ?, rid = ?, p_status = 'success', razorpay_payment_id = ?, credit = ? 
                   WHERE email = ? AND del = 0";
    $stmt = mysqli_prepare($conn, $update_sql);
    if (!$stmt) {
        throw new Exception("Database statement preparation failed: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "issss", $reg_no, $rid, $razorpay_payment_id, $price, $email);
    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Database update failed: " . mysqli_stmt_error($stmt));
    }
    mysqli_stmt_close($stmt);
    echo "<script>window.location.href='./record_fetch_update.php';</script>";
    // echo "<script>alert('Addon successfully! update'); window.location.href='$regPath';</script>";
    exit();
} catch (SignatureVerificationError $e) {
    $success = false;
    $error = "Razorpay Error: " . $e->getMessage();
} catch (Exception $e) {
    $success = false;
    $error = $e->getMessage();
}
if (!$success) {
    $email = $_SESSION['email'] ?? 'unknown';
    $update_sql = "UPDATE addon SET p_status = 'Failed' WHERE email = ? AND del = 0";
    $stmt = mysqli_prepare($conn, $update_sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        error_log("Failed to log payment failure: " . mysqli_error($conn));
    }
    error_log($error);
    echo "<script>alert('{$error}'); window.location.href='{$regpath}/error_page.php';</script>";
    exit();
}
?>
