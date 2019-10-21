<?php
session_start();
	$email=$_SESSION['mail'];
	$con=mysqli_connect('localhost','root','','transport');
	$sql='SELECT * FROM paytm WHERE EMAIL="ujjawala397@gmail.com"';
	$records=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<style>
		td,th{
			padding: 15px;

		}
	</style>
</head>
<body>
	<table style="border: solid; padding: 15px; text-align: center;margin-left:200px;margin-top: 100px;">
		<tr>
			<th>Order id</th>
			<th>Transaction id</th>
			<th>Amount</th>
			<th>Status</th>			
			<th>Date</th>

		</tr>
			<?php
				while($a=mysqli_fetch_assoc($records)) 
				{
					echo "<tr>";
					echo "<td>".$a['ORDERID']."</td>";
					echo "<td>".$a['TXNID']."</td>";
					echo "<td>".$a['TXNAMOUNT']."</td>";
					echo "<td>".$a['STATUS']."</td>";
					echo "<td>".$a['DATE']."</td>";
					echo "</tr>";
				}
			?>
	</table>

</body>
</html>