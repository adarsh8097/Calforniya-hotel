<!DOCTYPE html>
<html lang="en">
<head>
  <title>Californiya Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
     
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Californiya hotel </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin.php">Home</a></li>
      <li><a href= "#">Enquiry </a></li>
      <li><a href="add_room_form.php ">Rooms </a></li>
	  <li><a href= "add_rooms.php">Add_Rooms </a></li>
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
 $sql= "SELECT * FROM rooms";
 $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
	  while( $row = mysqli_fetch_assoc($result)){
		  //print_r($row);
		  $b[]=$row;
	  }
  }
  ?>
  
<div class="container">
 <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
		<th>Rooms Type</th>
        <th> Room Price</th>
        <th>Room image</th>
		<th>Delete</th>
      </tr>
    </thead>
	<?php
	 foreach( $b as $key)
	 {?>
    <tbody>
      <tr>
        <td><?php echo $key['id'];?></td>
        <td><?php echo $key['type'];?></td>
        <td><?php  echo $key['price'];?></td>
		<td> <?php echo $key['image'];?></td>
		<td><a href="deleteroom.php?rid=<?php echo $key['id'];?>" onclick="return cnf();"><span style="color:red">Delete</span></a></td>
      </tr>
	 <?php }?>
      
    </tbody>
  </table>
</div>
<script>
function cnf(){
	$r=confirm('Are you sure to delete the room.');
	return $r;
}
</script>
</body>
</html>
