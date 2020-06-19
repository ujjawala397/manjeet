<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send mail from PHP using SMTP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../js/date.js">
	<link rel="stylesheet" type="text/css" href="../css/date.css">
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src='script.js'></script>
  

  <!-- Time css and script -->
   	<!-- This have distorted styling-->
    
    
    <!--  -->
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

   <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>

    <script type="text/javascript">
      $(function() {
        $('#datetimepicker3').datetimepicker({
          pickDate: false

        });
      });
    </script>
	<!--   TIme script ended -->

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

		<?php
			$id=$_GET['id'];
		    $connection=mysqli_connect('localhost','root','');
		    mysqli_select_db($connection,'transport');
            $sql="select * from trucks where id=$id";
            $result=mysqli_query($connection,$sql);
            $row=mysqli_fetch_assoc($result);
            $email=$row['email'];
     		$price=$row['price'];
     		$_SESSION['price']=$price;
		?>


<div class="container">
<h1 class="text-center">Confirm to book the truck</h1>

<hr>



	<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom($email, 'JUJU');
		


			//////////////* add trucker email id $email*/
			

			$mail->addAddress($email);     // Add a recipient
			$mail->addAddress('jujuspices1@gmail.com');

			$mail->addReplyTo($email);
			// print_r($_FILES['file']); exit;
			for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = "<div style='background-color:cyan'><h1>Truck booking is done of ".$_POST['date']."  date and time is ".$_POST['time']."<br><br><br> The weight to be delivered is".$_POST['weight']."quintals<br><br><br> The product to be delivered is".$_POST['item']."Truck booking price ".$_POST['price']."</h1></div>";
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$message='Message has been sent sucessfully we will contact you soon';
			    echo "<script type='text/javascript'>alert('$message');</script>";
			  header("refresh:0;url=../paytm/shopping.php");
			     // header("refresh:0;url=../razorpay/index.php");
			}
		}
	 ?>
	<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
	    	 <div class="row">
	            
	            <div class="col-sm-9 form-group">
	                <label for="subject" hidden>Truck Booking</label>
	                <input type="text" class="form-control" id="subject" name="subject" value="You have got Truck booking " maxlength="50" hidden>
	            </div>
            </div>

            <div class="row">
	            
	            <div class="col-sm-9 form-group">
	                <label for="subject">Enter date:</label>
	                <input type="date"id="birth_date" class="form-control" name="date" placeholder="Enter Date">
	           
	            </div>


	           <!--   <div  id="datetimepicker3" class="col-sm-9 form-group" class="input-append">
	             	 <label for="subject">Enter time:</label>
    				<input data-format="hh:mm:ss" type="text" class="form-control" value="Enter time" name="time" readonly="">
    				<span class="add-on">
      				<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>	
    </span>
  </div> -->
	            <div class="col-sm-9 form-group">
	                <label for="subject">Enter weight:</label>
	                <input type="number" class="form-control" name="weight" placeholder="Enter weight in quintals">
	            </div>

	            <div class="col-sm-9 form-group">
	                <label for="subject">Price:</label>
	                <input  readonly type="text" class="form-control" name="price" value="<?php echo $price ?>Rs" >
	            </div>


	            
	            <div class="col-sm-9 form-group">
	                <label for="subject">Choose Item to be shipped</label><br>
	                <select name="item" style="height: 30px; width: 200px " >
	                	<option>furniture</option>
	                	<option>food</option>
	                	<option>luggage</option>
	                	<option>other</option>
	                </select>
	            </div>
            </div>

            
            <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-primary btn-block">Book Now</button>
                </div>
            </div>
        </form>
	</div>
</div>
</body>
</html>
