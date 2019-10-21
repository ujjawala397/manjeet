<?php
    
    $connection=mysqli_connect('localhost','root','');
    mysqli_select_db($connection,'transport');
 	
 	$id=$_GET['id'];
    
    $sql="delete from trucks where id =$id";
    $result=mysqli_query($connection,$sql);
	header("refresh:0;url=manage.php");

?>

