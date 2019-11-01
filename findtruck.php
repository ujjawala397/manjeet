<?php

session_start();
?>
<?php
    $connection=mysqli_connect('localhost','root','');
    mysqli_select_db($connection,'transport');
    $source=$_POST['source'];
    $destination=$_POST['destination'];
    $query="SELECT * FROM trucks where source='$source' AND destination='$destination'";
    $data=mysqli_query($connection,$query);
?>



<!DOCTYPE html>
<html>
<head>
<style>
  a:hover {
  color: orange;
}
</style>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 500px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
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
    <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="#" alt="Logo here"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">Connector</span> <span class="over" style="font-size: 60px">World</span></div>
  </div>
  <div class="topnav" id="myTopnav">
    <a href="main.php" class="active">Home</a>
     <a href="logout.php" class="login">Logout
    <?php
     echo $_SESSION['mail'];
    ?>  
    </a> 
   
    <a href="truck.php">Book</a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="truckform.php"> Add Truck</a>


  </div>

<div class="row container-fluid">

<div class="col-sm-8">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">List of Available Trucks </a>
  </nav>


  <table class="table table-light">
	  <thead>
	    <tr>
	      <th scope="col">Sr no.</th>
	      <th scope="col">Truck number</th>
	      <th scope="col">Source location</th>
	      <th scope="col">Destination Location</th>
	      <th scope="col">Driver name</th>
        <th scope="col">Price</th>
        <th scope="col">Book now</th>
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
			   	 <td><?php echo $row['truck_no']; ?> 
          </td>
          <td><?php echo $row['source']; ?> 
          </td>
          <td><?php echo $row['destination']; ?> 
          </td>
          <td><?php echo $row['driver_name']; ?> 
          </td>
           <td><?php echo $row['price']; ?> 
          </td>
          <td><a href="send-email/index.php?id=<?php echo $row['id']?>">Book now</td>

          
           <?php

            
           $i++;
				}
	    ?>
	  </tbody>
  </table>
</div>
<div class="col-sm-4">
    <div id="floating-panel">
    <b class="btn btn-primary">Source: </b>

    <input  id="start" value=<?php echo $source?>  readonly>
    <br>
    <b class="btn btn-primary">Detination: </b>
    <input id="end" value=<?php echo $destination?> readonly>

    </div>
    <div id="map"></div>
  </div>
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
    <script>

      



      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('mouseenter', onChangeHandler);
        document.getElementById('end').addEventListener('mouseenter', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          }
        });
      }
    </script>


<script>
  function activateSource() {

    var source =document.getElementById('start');
    var autocomplete= new google.maps.places.Autocomplete(source);
    
    var destination =document.getElementById('end');
    var autocomplete= new google.maps.places.Autocomplete(destination);
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnP3T0pM60itcZbJWxc9OWR9G9lp6OPIU
&libraries=places&callback=activateSource&callback=initMap"></script>

</div>
</body>
</html>