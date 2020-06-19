<?php 
require_once('config.php'); 
session_start();
$price=$_SESSION['price'];
echo $price;
?>
<html>
  <head>
    <title> RazorPay Integration in PHP - phpexpertise.com </title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="./../order.php"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="<?php echo $price; ?>"
        data-buttontext="Pay with Razorpay"
        data-name="ujjawal"
        data-description="Live Txn with RazorPay"
        data-image="https://your-awesome-site.com/your_logo.jpg"
        data-prefill.name="=ujjawal aggarwal"
        data-prefill.email="ujjawala397@gmail.com"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
  </body>
</html>