<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Verify otp</title>
<link rel="stylesheet" type="text/css" href="css/verify.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>



<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/acc.jpg" id="icon" alt="User Icon" height="50px" />
    </div>

    <!-- Login Form -->
    <form action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="otpv" placeholder="login">
      <input type="submit" class="fadeIn fourth" value="Verify" name="submit">
      
    </form>

    
  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$a=$_POST['otpv'];
$b=$_SESSION['otp'];
if($a==$b)
	{
	$message = "Mobile verified and We will contact you soon ";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("refresh:2;url=truck.php");
	}
	else{

	$message = "Enter correct otp";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header("refresh:0;url=verify.php");

	}
}
?>