<?php
session_start();
session_destroy();
$message = "Logged out successful";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "redirecting to home page";
header("refresh:2;url=main.php");
?>