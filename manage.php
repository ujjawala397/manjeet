<?php
    $connection=mysqli_connect('localhost','root','');
    mysqli_select_db($connection,'transport');
 
    $query="SELECT * FROM trucks";
    $data=mysqli_query($connection,$query);
?>

	<link rel="stylesheet" type="text/css" href="css/addtruck.css">
  	<link rel="stylesheet" type="text/css" href="css/form.css">
  
  	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



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
  </div>

<div col-md-12>
	<form action="search.php" method="post" class="form-inline md-form form-sm active-purple-2 mt-2" style="text-align: center;">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Enter email"
    aria-label="Search" name="searchmail">
  <button type="submit" ><i class="fas fa-search" aria-hidden="true"></i></button>
</form>
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