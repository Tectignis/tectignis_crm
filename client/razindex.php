<?php
session_start();
include("config.php");
$id=$_SESSION['id'];

include('razconf.php');
include('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$api = new Api($keyId, $keySecret);

// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$amount=$_POST['price'];

$_SESSION['id']=$id;
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['phone']=$phone;
$_SESSION['price']=$amount;


$orderData = [
    'receipt'         => 3456,
    'amount'          => $amount * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout='manual';

if(isset($_GET['checkout']) and in_array($_GET['checkout'],['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Tectignis",
    "description"       => "Live Transaction",
    "image"             => "https://realestate.tectignis.in/admin/dist/img/avatar1.jpeg",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
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

require("checkout/{$checkout}.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$qss=mysqli_query($conn,"SELECT * FROM `client` WHERE `Client_Code`='$id'");
$ress=mysqli_fetch_array($qss);
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $ress['Client_Code']; ?>">
    <!-- <input type="hidden" name="price"> -->
   Name: <input type="text" name="name" value="<?php echo $ress['Firm_Name']; ?>" redonly><br><br>
    Email:<input type="text" name="email" value="<?php echo $ress['Email']; ?>"  redonly><br><br>
    Phone:<input type="text" name="phone" value="<?php echo $ress['Mobile_Number']; ?>"  redonly><br><br>
    Price:<input type="text" name="price"><br><br>
    <button type="submit" id="rzp-button1" name="submit">Pay</button>
</form>
</body>
</html>