<?php
session_start();
?>
<?php
$a=$_GET['email'];
$b=$_GET['pass'];
$c=mysqli_connect('localhost','root','');
$d=mysqli_select_db($c,'transport');

$query=mysqli_query($c,"SELECT name from users where Email='$a'and Password='$b'");

$_SESSION['mail']=$a;
$_SESSION['pasw']=$b;

if(!$d)
{
	echo "Database not found";
}
else
{
	$r=mysqli_query($c,"SELECT * FROM users WHERE Email='$a' and Password='$b'");

	$z=mysqli_num_rows($r);
	if($z==0)
	{	
		session_unset();
		$message = "No Such user exists \\n Please Register ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("refresh:0;url=main.php");}
	else
	{		
		$message = "Login successful";
	 	echo "<script type='text/javascript'>alert('$message');</script>";
	 	header("refresh:0;url=access.php");
	}
}
?>