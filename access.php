<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>Add Your Truck</title> 
  <link rel="stylesheet" type="text/css" href="css/addtruck.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link rel="stylesheet" type="text/css" href="style_anil.css">
  <link rel="stylesheet" type="text/css" href="button.css">
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="javascript.js"></script>
</head>
<body>
  <div class="container-fluid  r1">
   <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="logo.jpg" alt="Logo here" height="70px"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">Connector</span> <span class="over" style="font-size: 60px">World</span></div>
  </div>
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
     <a href="logout.php" class="login">Logout
    <?php
     echo $_SESSION['mail'];
    ?>  
    </a> 
   
    <a href="truck.php">Book</a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="truckform.php"> Add Truck</a>
    <a href="order.php">Orders</a>
  </div>
  <div class="container-fluid">

      <div class="col-md-6" style="text-align: center;">
      <a href="truck.php" ><img src="img/users.png" height=300px>
      <h2>Use Booking Service </h2>
      </div>
      <div class="col-md-6" style="text-align: center;">
      <a href="truckform.php" ><img src="img/shipper.jpg" height=300px>
      <h2>Service Provider</h2>
      </div>
      
      </a>
    </div>
  </div></a></div></div><table class="table table-dark">
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


</body></html>