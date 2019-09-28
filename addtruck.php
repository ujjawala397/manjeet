
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
	
		$a=$b=$c=$d=$e=$f=$g=$h='';
	
		$a=$_POST['srno'];
		if(empty($a))
		{
			$message='aadhar number not found<br>';
			echo "<script type='text/javascript'>alert('$message');</script>";
				
		}
		else
		{
			$aadhar = $a;
			if(!preg_match("/^[0-9]{12}+$/",$aadhar))
			{	
				$message="only fixed numbers are allowed in aadhar";
				  echo "<script type='text/javascript'>alert('$message');</script>";
				return false;
			}
			else
			{
				echo "Your aadhar number is = ".$aadhar.'<br>';
			}
		}
			





		$b=$_POST['truck_no'];
		if(empty($b))
		{
			$message='truck number not found<br>';echo "<script type='text/javascript'>alert('$message');</script>";
				
		}
		else
		{
			$truck_no = $b;
			if(!preg_match("/^[0-9]{6}+$/",$truck_no))
			{	
				$message="only fixed numbers are allowed in truck";
				  echo "<script type='text/javascript'>alert('$message');</script>";
				return false;
			}
			else
			{
				echo "Your Truck number is = ".$truck_no.'<br>';
			}
		}



		$c=$_POST['source'];
		if(empty($c))
		{
			$message='Source Cant be empty<br>';
			echo "<script type='text/javascript'>alert('$message');</script>";
				
		}
		else
		{
			$source = $c;
			if(!preg_match("/^[a-zA-Z]*$/",$source))
			{	
				$message="only characters allowed in source<br>";
				echo "<script type='text/javascript'>alert('$message');</script>";
				return false;
			}
			else
			{
				echo "Your City name is = ".$source.'<br>';
			}
		}





		$d=$_POST['destination'];
		if(empty($d))
		{
			$message='destination cannot be empty';
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		else
		{
			$destination = $d;
			if(!preg_match("/^[a-zA-Z]*$/",$destination))
			{	
				$message="only characters allowed in destination";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
			else
			{
				echo "Your destination name is = ".$destination.'<br>';
			}
		}
		$e=$_POST['driver_name'];
		if(empty($e))
		{
			$message='driver name cannot be empty<br>';
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		else
		{
			$driver_name = $e;
			if(!preg_match("/^[a-zA-Z]*$/",$driver_name))
			{	
				$message="only characters allowed in driver name";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
			}
			else
			{
				echo "Your driver  name is = ".$driver_name.'<br>';
			}
		}
		$f=$_POST['price'];
		if(empty($f))
		{
			$message='price not found<br>';
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		else
		{
			$price = $f;
			if(!preg_match("/^[0-9]*$/",$price))
			{	
				if($price<10000 && $price>0){
				$message="Max price is 9999 <br>";
				echo "<script type='text/javascript'>alert('$message');</script>";
				  return false;
				}
			}
			else
			{
				echo "You want to charge = ".$price.'<br>';
			}
		}
		$g=$_POST['email'];
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
		$h=$_POST['number'];
		if(empty($h))
		{
			echo 'phone number not found<br>';
		}
		else
		{
			$phone_number = $h;
			if(!preg_match("/^[0-9]{10}+$/",$phone_number))
			{	
				echo "only numbers are allowed in phone number<br>";
				  return false;
			}
			else
			{
				echo "Your Phone number is = ".$phone_number.'<br>';
			}
		}




	$sql="INSERT INTO trucks (aadhar,truck_no,source,destination,driver_name,price,email,phone) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
	if(!mysqli_query($con,$sql))
	{
		$message = "User Already Exists \\n Please Login ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
		echo "<br><span style='color: black; font-size:20px' /> NOT INSERTED";
		header("refresh:2;url=truckform.php");
	}
	else
	{
		echo "<span style='color: black; font-size:20px' /> INSERTED";
		header("refresh:2;url=truckform.php");
	}

?>
