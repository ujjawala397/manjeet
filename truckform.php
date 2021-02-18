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
    <a href="order.php">Orders</a>
    
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="truckform.php"> Add Truck</a></span>


  </div>

  <div class="container-fluid c3 col-sm-12 col-md-12 col-xs-12 col-lg-12">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <div class="col-sm-4">`</div> 
    
        <div class="container sm-4">

            <div class="col-sm-2">`</div>

<div class="container-fluid">

    <form action="addtruck.php" method="POST">
          <div class="col-sm-6 mb-4" style="background-color: white">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Add Your Truck Info:</h3>
                            <!--Body-->
                            <div class="md-form">
                                  <label for="uname"><b>Aadhar Card Number</b></label>
                                  <input class="form-control" type="text" name="srno" placeholder="Enter Aadhar Card Number" required="Please Enter id"><br>   
                                  
                                  <label for="email"><b>Truck Number</b></label>
                                  <input class="form-control" type="text" name="truck_no" placeholder="Enter Truck Number" required="Please Enter truck no"><br>
                                  
                                  <label for="email"><b>E-mail</b></label>
                                  <input type="email" name="email" placeholder="Enter E-mail" required="Please Enter E-mail"><br>
                                  
                                  <label for="text"><b>Phone number</b></label>
                                  <input type="number" name="number" placeholder="Enter Phone Number" required="Please Enter Your Number"><br>
                                  
                                  <label for="text"><b>Source</b></label>
                                  <input class="form-control" id="search_term" type="text" name="source" placeholder="Enter Source" required="Please Enter Source"><br>
                                  
                                  <label for="text"><b>Destination</b></label>
                                  <input class="form-control" id="autofill" type="text" name="destination" placeholder="Enter Destination" required="Please Enter Destination"><br>
                                  
                                  <label for="text"><b>Price Charged</b></label>
                                  <input class="form-control" type="text" name="price" placeholder="Enter price you will charge" required="Please enter price"><br>
                                  
                                  <label for="text"><b>Driver name</b></label>
                                  <input class="form-control" type="text" name="driver_name" placeholder="Enter Driver name" required="Please Enter Driver Name"><br>
                                  

                                  <button type="submit">Add Truck</button>
                                  <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Fill all the details Correctly</h3>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
    </div>
    <br><br>
    </div>
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
          Work Easier</td>
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
  function activateSource() {

    var source =document.getElementById('search_term');
    var autocomplete= new google.maps.places.Autocomplete(source);
    
    var destination =document.getElementById('autofill');
    var autocomplete= new google.maps.places.Autocomplete(destination);
  }
  
</script>

<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=
&libraries=places&callback=activateSource"></script> -->


</body>
</html>