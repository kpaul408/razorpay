<?php

require('config.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay.php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $customername=$_SESSION['customername'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $sql = "INSERT INTO `orders` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price')";
    if(mysqli_query($conn, $sql)){
        echo "";
    }

    $html = "<center>
                <h1> THANK YOU</h1>
                <p><h3>Your payment was successful</h3></p>
                <br>
              
                
                
             
             </center>";


    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body><center>
    <table border="5">
        <tr>
            <td>
                <h3><b>Name: </b> </h3>
            </td>
            <td><?php echo  $customername; ?></td>
        </tr>
         <tr>
            <td>
                <h3><b>Phone no: </b> </h3>
            </td>
            <td><?php echo  $_SESSION['contactno']; ?></td>
        </tr>
        <tr>
            <td>
                <h3><b>Payment:  </b></h3>
            </td>
            <td class="bg-info"><?php echo  $price.".00"; ?></td>
        </tr>
        <tr>
            <td>
                <h3><b>Razorpay Order Id: </b> </h3>
            </td>
            <td><?php echo  $razorpay_order_id; ?></td>
        </tr>
        
        <tr>
            <td>
                <h3><b>Razorpay Payment Id: </b> </h3>
            </td>
            <td><?php echo  $razorpay_payment_id; ?></td>
        </tr>

        
    </table>
    <button onclick="window.print()">Print this page</button>

    </center>

</body>
</html>

