
<?php
$flag=1;
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
		    $flag=0;		
		}
		else
		{
			$aadhar = $a;
			if(!preg_match("/^[0-9]{12}+$/",$aadhar))
			{	
				$message="only fixed numbers are allowed in aadhar";
				  echo "<script type='text/javascript'>alert('$message');</script>";
		          $flag=0;		  
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
			$flag=0;
		}
		else
		{
			$truck_no = $b;
			if(!preg_match("/^[0-9]{6}+$/",$truck_no))
			{	
				$message="only fixed numbers are allowed in truck";
				  echo "<script type='text/javascript'>alert('$message');</script>";
				  $flag=0;
				return false;
			}
			else
			{
				echo "Your Truck number is = ".$truck_no.'<br>';
			}
		}



		$c=$_POST['source'];
		
			$source = $c;
		




		$d=$_POST['destination'];
			$destination = $d;
		

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
				$flag=0;
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
			$flag=0;
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
				$flag=0;
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
		  $flag=0;
		  return false;
		}
		else{
			$email=$_POST["email"];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
			  $message = "Invalid Email";
			  echo "<script type='text/javascript'>alert('$message');</script>";
			  header("refresh:2;url=main.php");
			  $flag=0;
			  return false;
			}
		}
		$h=$_POST['number'];
		if(empty($h))
		{
			echo 'phone number not found<br>';
			$flag=0;
		}
		else
		{
			$phone_number = $h;
			if(!preg_match("/^[0-9]{10}+$/",$phone_number))
			{	
				echo "only numbers are allowed in phone number<br>";
				$flag=0;
				  return false;
			}
			else
			{
				echo "Your Phone number is = ".$phone_number.'<br>';
				if($flag==1)
				{
					$otp=mt_rand(100000,999999);
					$response=file_get_contents("https://2factor.in/API/V1/271d9acd-df6d-11e9-ade6-0200cd936042/SMS/$phone_number/$otp");
					session_start();
					$_SESSION['otp']=$otp;
					header("location:verify.php");
				}

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
