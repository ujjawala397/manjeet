<!DOCTYPE html>
<?php
	if(isset($_POST['login']))
	{
	// Authorisation details.
	$username = "jujuspices1@gmail.com";
	$hash = "6c4affbc11b3ccb2b80b49e579604ea860f4ac43b9cbe00cd1715c4e5d1970e5";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	$name=$_POST['name'];

	// Data for text message. This is the text message data.
	$sender = "Ujjawal"; // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers

	$otp=mt_rand(100000,999999);
	setcookie("otp",$otp);
	$message = "Hey".$name."your otp is ".$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo ("OTP sent successfully");
	curl_close($ch);
}
if(isset($_POST['ver'])){
	$verotp=$_POST['otp'];
	if($verotp==$_COOKIE['otp']){
		echo ("Login Successfull");
	}
	else{
		echo ("otp Wrong");
	}

}
?>
<html>
<head>
	<title>Otp</title>
</head>
<body>
	<form action="finalotp.php" method="POST">
		<table>
		<tr><td>Name</td>
		<td><input type="text" name="name" placeholder="Enter Name"></td></tr>
		<tr><td>Phone Number</td>
			<td><input type="text" name="num" placeholder="enter number"></td>
		</tr>
		<tr><td></td>
			<td><input type="submit" name="login" value="Send Otp"></td>
		</tr>
		<tr>
			<td>Verify Otp:</td>
			<td><input type="text" name="otp" placeholder="enter otp"></td></tr>
			<tr><td></td>
			<td><input type="submit" name="ver" value="verify otp"></td>
		</tr>
		</table>
	</form>
</body>
</html>