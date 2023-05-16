<?php
include "connection.php";
 $sql= "SELECT * FROM bookingform";
 $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
	  while( $row =mysqli_fetch_assoc($result)){
		  //print_r($row);
		  $b[]=$row;
	  }
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
	<center><img src="Saved Pictures\im1 (3).png"></center><br>
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
	<?php
	foreach($b as $key)
	{?>
		<div class="invoice-details">
			Invoice N°: <?php echo $key['id'];?>
			<br />
			
		</div>
		
		<div class="customer-address">
			To:<?php echo $key ['address'];?>
			
			
		</div>
		<br>
		<br>
		<br>
		<br><div class="customer-name" align="right" >
			To:
			<?php echo $key['fullname'];?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   Contact:
			<?php echo $key['email'];?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   Contact:
			<?php echo $key ['city'];?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   Contact:
			<?php echo $key ['state'];?>
			
		</div>
		<br><div class="customer-contect" align="right" >
		   Contact:
			<?php echo $key ['pincode'];?>
			
		</div>
		
		
	<div class="clear-fix">
	</div>
		<table border='1' cellspacing='0'>
				<tr>
					<th width=10>Booking id <?php echo $key['id'];?></th>
				<!---	<th width=100>p_id</th>  -->
					<th width=15>RoomType<?php echo $key['roomtype'];?></th>
					<th width=85> RoomPrice <?php echo $key['roomprice'];?></th>
					<th width=85> Checkin <?php echo $key['checkin'];?></th>
					<th width=85> Checkout <?php echo $key['checkout'];?></th>
				
					<!--<th width=85> Total.</th> -->
					
	<?php }?>
			</tr>
			</table>
		</div>
	</body>
</html>