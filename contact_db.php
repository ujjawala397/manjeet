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


$a=$_POST['name'];
if(empty($_POST['name']))
{
	
  $message = "Please Enter Name";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}
else
{
	$name = $_POST["name"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{	

		$message = "Only Letters are allowed in name";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:2;url=contact_us.php");
		return false;
	}
	else
	{
		echo $name."<br>";
	}
}




$b=$_POST['email'];
if(empty($_POST["email"]))
{
  $message = "Email Not Found";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=main.php");
  return false;
}
else{
	$email=$_POST["email"];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
	  $message = "Invalid Email";
	  echo "<script type='text/javascript'>alert('$message');</script>";
	  header("refresh:2;url=main.php");
	  return false;
	}
}



$c=$_POST['phno'];
if(empty($c))
{
	echo 'number not found<br>';
}
else
{
	$number = $c;
	if(!preg_match("/^[0-9]{10}+$/",$number))
	{	
		echo "only numbers are allowed in phone number<br>";
	}
	else
	{
		echo "Your Contact number is = ".$number.'<br>';
	}
}


$d=$_POST['subject'];
if(empty($_POST["subject"]))
{
	
  $message = "Please Enter subject";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}
else
{
	$name = $_POST["subject"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{	

		$message = "Only Letters are allowed in subject";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:2;url=contact_us.php");
		return false;
	}
	else
	{
		echo $name."<br>";
	}
}

$e=$_POST['textarea'];
if(empty($_POST["textarea"]))
{
	
  $message = "Please Enter subject";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2;url=contact_us.php");
  return false;
}
else
{
	$name = $_POST["textarea"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{	

		$message = "Only Letters are allowed in text";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:2;url=contact_us.php");
		return false;
	}
	else
	{
		echo $name."<br>";
	}
}
$sql="INSERT INTO contact_us (name,email,phno,subject,textarea) VALUES ('$a','$b','$c','$d','$e')";


if(!mysqli_query($con,$sql))
{
	echo "<span style='color: black; font-size:20px' /> NOT INSERTED<br>";
}
else
{
	$message = "Query Submitted";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
}
header("refresh:0;url=contact_db.php");
?>