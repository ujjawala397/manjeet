<?php
session_start();
	$email=$_SESSION['mail'];
	$con=mysqli_connect('localhost','root','','transport');
	$sql="SELECT * FROM paytm WHERE EMAIL='$email'";
	$records=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/addtruck.css">
 
</head>
<body>
	 <div class="container-fluid  r1">
 <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="logo.jpg" alt="Logo here" height="70px"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">Connector</span> <span class="over" style="font-size: 60px">World</span></div>
  </div>
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    
   
    <a href="truck.php">Book</a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="truckform.php"> Add Truck</a>
    <a href="order.php">Orders</a>
  </div>
   <table class="table table-light">
    <thead>
      <tr>
     <th style="padding: 15px">S.no</th>
      <th style="padding: 15px">Date</th>
      <th style="padding: 15px">Order id</th>
      <!-- <th style="padding: 15px">Transaction id</th> -->
      <th style="padding: 15px">Amount</th>
      <th style="padding: 15px">Status</th>     
      </tr>
    </thead>
    <tbody>

      <?php
      $i=1;
            while($a=mysqli_fetch_assoc($records))
        {
           echo "<tr>";
           ?>
          <td><?php echo $i++; ?> 
          </td>
          <td><?php echo $a['DATE']; ?> 
          </td>
          <td><?php echo $a['ORDERID']; ?> 
          </td>
          <td><?php echo $a['TXNAMOUNT']; ?> 
          </td>
           <td><?php echo $a['STATUS']; ?> 
          </td>
      
           <?php

        }
      ?>
    </tbody>
  </table>

	
	<table class="table table-dark">
  <thead>
    <tr style="font-size: 30px;">
      <th scope="col">#</th>
      <th scope="col">About</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr style="font-size: 20px">
      <th scope="row"></th>
      <td>Makes your<br>
          work easier</td>
      <td>+91-9412131680<br>
                <a  href="https://www.instagram.com/jujuspices/"> 
        <i class="fab fa-instagram fa-2x"></i> </a>
                <a href="https://www.facebook.com/Juju-Spices-1681765988789374/?modal=admin_todo_tour"> 
        <i class="fab fa-facebook fa-2x"></i></a>
        <i class="fab fa-whatsapp fa-2x"></i>

        <br>

      </td>
      <td><i class="fas fa-map-marker-alt fa-3x"></i><br>Dal Mandi Pul<br>
        Saharanpur<br>Uttar Pradesh</td>
    </tr>
    
  </tbody>
</table>


</body>
</html>