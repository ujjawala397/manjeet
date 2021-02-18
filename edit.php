<?php
    $connection=mysqli_connect('localhost','root','');
    mysqli_select_db($connection,'transport');
 
    $id=$_GET['id'];

    $query="SELECT * FROM trucks where id=$id";
  
    $data=mysqli_query($connection,$query);
?>

    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



	
<style>
  input{
    width: 150px;
    height: 20px;
  }
  #id1{
    width: 80px;
  }
</style>

<a href="manage.php"><h2>Back to manage page</h2></a>

<form action="update.php?id=<?php echo $id?>" method="POST">
 <table class="table table-light">
    <thead>
      <tr>
        <th scope="col">Sr no.</th>
        <th scope="col">Driver name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Aadhar card</th>
        <th scope="col">Truck number</th>
        <th scope="col">Source location</th>
        <th scope="col">Destination Location</th>
        <th scope="col">Price</th>
        <th scope="col">UpDate</th>
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
          <td><input type="text" id="id1" name="driver_name" value="<?php echo $row['driver_name'];?>" width="20" height="20">  
          </td>
          <td><input type="text"  id="id1" name="phone" value="<?php echo $row['phone']; ?>" width="20" height="20"> 
          </td>
          <td><input type="text" name="email" value="<?php echo $row['email']; ?>" width="20" height="20" > 
          </td>
          <td><input type="text" name="aadhar" value="<?php echo $row['aadhar'];?>" width="20" height="20" >  
          </td>
          <td><input type="text" name="truck_no" id="id1" value="<?php echo $row['truck_no']; ?>" width="20" height="20" > 
          </td>
          <td><input type="text" name="source" value="<?php echo $row['source']; ?>" width="20" height="20" > 
          </td>
          <td><input type="text" name="destination" value="<?php echo $row['destination']; ?>" width="20" height="20" >
          </td>
           <td><input type="text" name="price" id="id1" value="<?php echo $row['price']; ?>" width="20" height="20" >
          </td>
          <td><button type="submit">Update</button></td>
          <td><a href="delete.php?id=<?php echo $row['id']?>">Remove</a></td>
    
           <?php

            
           $i++;
        }
      ?>
    </tbody>
  </table>
   </form>
         