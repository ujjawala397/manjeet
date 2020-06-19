<?php
    $connection=mysqli_connect('localhost','root','');
    mysqli_select_db($connection,'transport');
 	$email=$_POST['searchmail'];
    $query="SELECT * FROM trucks where email='$email'";
    $data=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="css/addtruck.css">
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



</head>
<body>
	<div class="container-fluid  r1">
    <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="logo.jpg" alt="Logo here" height="70px"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">Connector</span> <span class="over" style="font-size: 60px">World</span></div>
  </div>
  <div class="topnav" id="myTopnav">
    <a href="main.php" class="active">Home</a>
    <a href="truck.php">Book</a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="truckform.php"> Add Truck</a>
  </div>
<table class="table table-light">
    <thead>
      <tr>
        <th scope="col">Sr no.</th>
        <th scope="col">Driver name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Truck number</th>
        <th scope="col">Source location</th>
        <th scope="col">Destination Location</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $i=1;
            while($row=mysqli_fetch_assoc($data))
        {
           echo "<tr>";
           ?>
          <td><?php echo $i; ?> 
          </td>
          <td><?php echo $row['driver_name']; ?> 
          </td>
          <td><?php echo $row['phone']; ?> 
          </td>
          <td><?php echo $row['email']; ?> 
          </td>
           <td><?php echo $row['truck_no']; ?> 
          </td>
          <td><?php echo $row['source']; ?> 
          </td>
          <td><?php echo $row['destination']; ?> 
          </td>
           <td><?php echo $row['price']; ?> 
          </td>
          <td><a href="edit.php?id=<?php echo $row['id']?>">Edit</td>
        <td><a href="delete.php?id=<?php echo $row['id']?>">Remove</td>

          
           <?php

            
           $i++;
        }
      ?>
    </tbody>
  </table>

</body>
</html>