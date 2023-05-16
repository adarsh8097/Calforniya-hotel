<!DOCTYPE html>
<html lang="en">
<head>
  <title>Californiya Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Californiya hotel </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href= "enquiry.php">Enquiry </a></li>
      <li><a href="add_room_form.php ">Rooms </a></li>
	   <li><a href="add_rooms.php ">Add Rooms </a></li>
	  <li><a href="bookingformfetch.php"> Booking</a></li>
	  <li class="contect.php"><a href="contact.php">ContactUs</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<!--------Table--->
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
  
<div class="container">
 <center> <h2>Booking Form</h2>
  <p><b>Custmer  to hotel Enquiry :</b></p>  </center>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
		<th>Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>City</th>
		<th>State</th>
		<th>Pincode</th>
		<th>Cname</th>
		<th>CCnumber</th>
		<th>Expmonth</th>
		<th>Expyear</th>
		<th>CVV</th>
		<th>Room Type</th>
		<th>Room Price</th>
		<th>Checkin</th>
		<th>Checkout</th>
        
      </tr>
    </thead>
	<?php
	 foreach( $b as $key)
	 {?>
    <tbody>
      <tr>
        <td><?php echo $key['id'];?></td>
        <td><?php echo $key['full name'];?></td>
		<td><?php echo $key['address'];?></td>
		<td><?php echo $key['email'];?></td>
		<td><?php echo $key['city'];?></td>
		<td> <?php echo $key['state'];?></td>
		<td> <?php echo $key['pincode'];?></td>
		<td> <?php echo $key['cname'];?></td>
		<td> <?php echo $key['ccnumber'];?></td>
		<td> <?php echo $key['expmonth'];?></td>
		<td> <?php echo $key['expyear'];?></td>
		<td> <?php echo $key['cvv'];?></td>
		<td> <?php echo $key['roomtype'];?></td>
		<td> <?php echo $key['roomprice'];?></td>
		<td> <?php echo $key['checkin'];?></td>
		<td> <?php echo $key['checkout'];?></td>
		
        </tr>
	 <?php }?>
      
    </tbody>
  </table>
</div>

</body>
</html>
