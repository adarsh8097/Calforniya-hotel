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
      <li><a href="#">Home</a></li>
      <li><a href= "#">Enquiry </a></li>
      <li><a href="add_room_form.php ">Rooms </a></li>
	  <li><a href="bookingformfetch.php"> Booking</a></li>
	  <li class=""><a href="contact.php">ContactUs</a></li>
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
 $sql= "SELECT * FROM contactus";
 $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
	  while( $row =mysqli_fetch_assoc($result)){
		  //print_r($row);
		  $b[]=$row;
	  }
  }
  ?>
  
<div class="container">
 <center> <h2>ContactUs</h2>
  <p><b>Custmer Contact table :</b></p>  </center>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
		<th>Firstname</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
	<?php
	 foreach( $b as $key)
	 {?>
    <tbody>
      <tr>
        <td><?php echo $key['id'];?></td>
        <td><?php echo $key['name'];?></td>
        <td><?php  echo $key['email'];?></td>
		<td> <?php echo $key['message'];?></td>
      </tr>
	 <?php }?>
      
    </tbody>
  </table>
</div>

</body>
</html>
