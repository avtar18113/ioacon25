<?php
require('../config.php');
require('../razorpay-php-master/Razorpay.php');
use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);
//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderdate=date('ymdhis');
$randome=rand(111,999);
$order_id = $randome;
global $order_id;
// die();
$price = $amount = $gtotal;
// $price = $amount = $gtotal;
$_SESSION['price'] = $price;
$customername = $fullname;
$contactno = $mobile;
$orderData = [
    'receipt'         => $order_id,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
$sql_payment = "UPDATE addon SET razorpayOrderId='$razorpayOrderId' WHERE del='0' AND email = '$email' AND srn='$srnReg'";
// echo $sql_payment;
// echo $description;
// die();
$resultPayment = mysqli_query($conn, $sql_payment);
// if($resultPayment){echo $resultPayment;}

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);
   echo $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $siteTitle,
    "description"       => $regData['description'],
    "image"             => $siteLogo,
    "prefill"           => [
    "name"              => $customername,
    "email"             => $email,
    "contact"           => $contactno,
    ],
    "notes"             => [
    "address"           => "Guwahati",
    "merchant_order_id" => "IOACON 2025".$order_id,
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}
$json = json_encode($data);
?>
<form action="addon-verify.php" method="POST">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $data['key']?>"
        data-amount="<?php echo $data['amount']?>" data-currency="INR" data-name="<?php echo $data['name']?>"
        data-image="<?php echo $data['image']?>" data-description="<?php echo $data['description']?>"
        data-prefill.name="<?php echo $data['prefill']['name']?>"
        data-prefill.email="<?php echo $data['prefill']['email']?>"
        data-prefill.contact="<?php echo $data['prefill']['contact']?>"
        data-notes.shopping_order_id="<?php echo $data['notes']['merchant_order_id'] ?>"
        data-order_id="<?php echo $data['order_id']?>" <?php if ($displayCurrency !== 'INR') { ?>
        data-display_amount="<?php echo $data['display_amount']?>" <?php } ?> <?php if ($displayCurrency !== 'INR') { ?>
        data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>>
    // document.getElementsByClassName("razorpay-payment-button").click();
    </script>
    <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
    <input type="hidden" name="shopping_order_id" value="<?php echo $order_id ?>">
</form>