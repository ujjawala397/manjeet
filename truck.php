 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Track your truck</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_anil.css">
	<link rel="stylesheet" type="text/css" href="button.css">
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style type="text/css">


		.login-form
		{
			margin-top: 15%;
		}
		body
		{
			background-image: url("truck.jpg");
			background-repeat: no-repeat; 
			background-size: cover;
		}
		.card
		{
			background-color: rgba(0,0,0,0.4);
		}
	</style>
</head>
<body>

  <div class="container-fluid  r1">
    <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="logo.jpg" alt="Logo here" height="70px"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">Connector</span> <span class="over" style="font-size: 60px">World</span></div>
  </div>

	
	<div class="topnav" id="myTopnav">
    <a href="index.php" class="active">Home</a>
    <a href="logout.php"> Logout
    	<?php
     echo $_SESSION['mail'];
    	?>  
	</a>
    <a href="truck.php">Book</a>
    <a href="order.php">Orders</a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
   	<a href="truckform.php">Add Truck</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fas fa-bars"></i>
    </a>
  </div>

        <div class="container login-form">
            <section class="section section-shaped section-lg">
					      <div class="container pt-lg-md">
					        <div class="row justify-content-center" style="margin-top:-5.5%;">
					          <div class="col-lg-5">
					            <div class="card  shadow border-0">
					              <div class="card-body px-lg-5 py-lg-5">
					                <div class="text-center text-muted mb-4">
					                  <h1 style="color: white;">Book your truck</h1>
					                </div>
					                <form role="form" action="findtruck.php" method="POST" enctype="multipart/form-data">
					                  <div class="form-group mb-3">
					                    <div class="input-group input-group-alternative">
					                      <div class="input-group-prepend">
					                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
					                      </div>
					                      <input class="form-control" id="search_term" placeholder="Enter Source Location" type="text" name="source" required>
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <div class="input-group input-group-alternative">
					                      <div class="input-group-prepend">
					                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
					                      </div>
					                      <input class="form-control" id="autofill" placeholder="Enter Destination Location" type="text" name="destination" required>
					                    </div>

					                   
					                   
					                  </div>
					                  <div class="text-center">
					                    <button type="submit" class="btn btn-primary my-4" name="login">Find trucks</button>
					                  </div>
					                </form>
					              </div>
					            </div>
					           
					          </div>
					        </div>
					      </div>
               </section>
	  </div>

<script>
	function activateSource() {

		var source =document.getElementById('search_term');
		var autocomplete= new google.maps.places.Autocomplete(source);
		
		var destination =document.getElementById('autofill');
		var autocomplete= new google.maps.places.Autocomplete(destination);
	}
</script>

<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= 
&libraries=places&callback=activateSource"></script> -->

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