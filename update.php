<?php
    
    $connection=mysqli_connect('localhost','root','');
    mysqli_select_db($connection,'transport');
   
    $id=$_GET['id'];

    $b=$_POST['aadhar'];
 	$c=$_POST['truck_no'];
	$d=$_POST['source'];
	$e=$_POST['destination'];
	$a=$_POST['driver_name'];
	$f=$_POST['price'];
	$g=$_POST['email'];
	$h=$_POST['phone'];


	 $sql="UPDATE `trucks` SET `aadhar`='$b',`truck_no`='$c',`source`='$d',`destination`='$e',`driver_name`='$a',`price`='$f',`email`='$g',`phone`='$h' WHERE id=$id";


    if(!mysqli_query($connection,$sql))
	{
		echo "Updation failed ";
		header("refresh:0.5;url=manage.php");
	}
	else
	{
		echo "Updation Sucess";
		header("refresh:0.5;url=manage.php");
	}

?>
