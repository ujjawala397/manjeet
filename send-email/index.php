<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send mail from PHP using SMTP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

		<?php
			
		    $connection=mysqli_connect('localhost','root','');
		    mysqli_select_db($connection,'transport');

		    /////////////////////////////////////////////////////////////
		    //SESSION EMAIL AND PASSWORD NOT WORKING
		    
		    //truckers

		    // $email=$_SESSION['mail'];
		    // $password=$_SESSION['pasw'];
		  
		    $email='ujjawala397@gmail.com';			

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
			$mail->Body    = '<div>Truck booking is done on  </div>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$message='Message has been sent sucessfully we will contact you soon';
			    echo "<script type='text/javascript'>alert('$message');</script>";
			 header("refresh:0;url=../access.php");
			}
		}
	 ?>
	<div class="row">
    <div class="col-md-9 col-md-offset-2">
        <form role="form" method="post" enctype="multipart/form-data">
	    	 <div class="row">
	            <div class="col-sm-9 form-group">
	                <label for="subject">Enter date and time:</label>
	                <input type="text" class="form-control" id="subject" name="subject" value="Truck booking of XX/XX/2019 date and time XX:YY pm  " maxlength="50">
	            </div>
            </div>

            
           
            <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="name">Upload your product image:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Book Now</button>
                </div>
            </div>
        </form>
	</div>
</div>
</body>
</html>
