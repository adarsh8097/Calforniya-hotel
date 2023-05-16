<?php
session_start();
include"connection.php";
$fname=$_POST['fname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pcode=$_POST['pcode'];
$cname=$_POST['cardname'];
$ccnum=$_POST['cardnumber'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$roomtype=$_POST['roomtype'];
$roomprice=$_POST['roomprice'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];

//echo $fname;
//echo $mname;
//echo $lname;
//echo $email;
//echo $contact;
//echo $pass;
//echo $address;
//cho $pincode;
//echo $city;
//echo $country;

$q= mysqli_query($conn,"insert into  bookingform values(DEFAULT,'$fname','$address','$email','$city','$state','$pcode','$cname','$ccnum','$expmonth','$expyear','$cvv','$roomtype','$roomprice','$checkin','$checkout')");
if($q)
{
	//echo'data inserted';
	echo"<script>alert('Your booking Succesfully');</script>";
	//echo"<script>window.location='paymentsilip.php';</script>";
}
else
{
	echo (mysqli_error($con));
}
?>

<html>

<head>
<title>Simple invoice in PHP</title>
		<style type="text/css">
		body {		
			font-family: Verdana;
		}
		
		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:740pt;
		width:570pt;
		}

		div.company-address {
			border:1px solid #ccc;
			float:left;
			width:200pt;
		}
		
		div.invoice-details {
			border:1px solid #ccc;
			float:right;
			width:200pt;
		}
		
		div.customer-address {
			border:1px solid #ccc;
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
	</style>
</head>
<body>

	<div class="invoice">
	<center><img src="hotelrooms/logo1.jpeg"></center><br>
	<div class="company-address">
	<h>Hotel-address:</h>
	<br>
			ACME ltd
			<br />
			489 Road Street
			<br />
			London, AF3Z 7BP
			<br />
		</div>
	<br>
	
		<div class="invoice-details">
			Invoice N°: 
			<br />
			
		</div>
		
		<div class="customer-address">
			To:<?php echo $address;?>
			
			
		</div>
		<br>
		<br>
		<br>
		<br><div class="customer-name" align="right" >
			To:
			<?php echo $fname;?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   Contact:
			<?php echo $email;?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   City:
			<?php echo  $city;?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   State:
			<?php echo  $state;?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   Pincode:
			<?php echo $pcode;?>
			
		</div>
		
		
	<div class="clear-fix">
	</div>
		<table border='1' cellspacing='0'>
				<tr>
					
				<!---	<th width=100>p_id</th>  -->
					<th width=15>RoomType :<?php echo $roomtype;?></th>
					<th width=85> RoomPrice: <?php echo $roomprice;?></th>
					<th width=85> Checkin : <?php echo $checkin;?></th>
					<th width=85> Checkout :<?php echo $checkout;?></th>
				
					<!--<th width=85> Total.</th> -->
					

			</tr>
			</table>
		</div>
		
	</body>
</html>




