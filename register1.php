<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Not Connected";
}
if(!mysqli_select_db($con,'transport'))
{
	echo "Database not selected";
}
$a=$b=$c=$d=$e='';
$a=$_GET['name'];
if(empty($_GET["name"]))
{
	
  $message = "Please Enter Name";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=main.php");
  return false;
}
else
{
	$name = $_GET["name"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{	

		$message = "Only Letters are allowed";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:2;url=main.php");
		return false;
	}
	else
	{
		echo $name."<br>";
	}
}

$b=$_GET['email'];
if(empty($_GET["email"]))
{
  $message = "Email Not Found";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=main.php");
  return false;
}
else{
	$email=$_GET["email"];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
	  $message = "Invalid Email";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  header("refresh:2;url=main.php");
	  return false;
	}
}

$c=$_GET['number'];
if(empty($c))
{
	echo 'number not found<br>';
}
else
{
	$number = $c;
	if(!preg_match("/^[0-9]{10}+$/",$number))
	{	
		echo "only numbers are allowed<br>";
	}
	else
	{
		echo "Your Contact number id = ".$number.'<br>';
	}
}

$d=$_GET['pass'];

$e=$_GET['pass1'];
if($d==$e)
{
	echo "Password Matched<br>";
}
else
{
	echo "<span style='color: black; font-size:20px' /> Password Mismatch<br>";

	header("refresh:2;url=main.php");

	die();

}
$sql="INSERT INTO users (Name,Email,Phone,Password,ConfirmPassword) VALUES ('$a','$b','$c','$d','$e')";


if(!mysqli_query($con,$sql))
{
	echo "<span style='color: black; font-size:20px' /> Email already registered<br>";
}
else
{
	echo "<span style='color: black; font-size:20px' /> Registration succesful<br>";
}
header("refresh:2;url=main.php");
?>