
<?php
session_start();
 include "connection.php";
 $sql= "SELECT * FROM rooms ORDER BY RAND()";
 $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
	  while( $row = mysqli_fetch_assoc($result)){
		  //print_r($row);
		  $b[]=$row;
	  }
  } 
 


?>
<html>
<title>Californiya Hotel </title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
<!----Gallery--->
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
 <!------ Image of location ---->
 * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.w3-input{
	color:black;
}

</style> 

<body class="w3-light-grey">

<!-- Navigation Bar -->


<!-- Navbar -->
<center><img src="hotelrooms/logo1.jpeg" width="20%"></center>
 <div class="w3-bar w3-theme-d2 w3-left-align">
 
 <b> <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
     
 <a href="#" class="w3-bar-item w3-button w3-teal" style="font-family: serif; font-weight: bold;"><i class="fa fa-home w3-margin-right"></i><b>HOME</b></a>
  <a href="#Gallery" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="font-family: serif; font-weight: bold;"><b>GALLERY</b></a>
  <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="font-family: serif; font-weight: bold;"><b>THE HOTEL</b></a>
  <a href="#Facilities" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="font-family: serif; font-weight: bold;"><b>FACILITIES</b></a>
  <a href="#Rooms" class="w3-bar-item w3-button w3-hide-small w3-hover-white"style="font-family: serif; font-weight: bold;"><b>ACCOMMODATION</b></a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="font-family: serif; font-weight: bold;"><b>CONTACTUs</b></a>
   <a href="admin.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="font-family: serif; font-weight: bold;"><b>ADMIN</b></a>
   
  <?php
		if(isset($_SESSION['email'])){
			echo' <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><b>LOGOUT</b></a></b>';
		}else{
			echo'<a href="loginform.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><b>SIGNIN</b></a></b>';
		}
	?>
	<div class="w3-dropdown-hover w3-hide-small">
   <b> <a href="#specialpromation" style="text-decoration: none;"><button  class="w3-button" title="Notifications"style="font-family: serif; font-weight: bold;"> SPECIAL PROMATION </a> <i class="fa fa-caret-down"></i></button>    
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#suiteroom" class="w3-bar-item w3-button"style="text-decoration: none;"><b style="font-family: serif; font-weight: bold;">Suite Room</b></a>
      <a href="#dulexroom" class="w3-bar-item w3-button"style="text-decoration: none;"><b style="font-family: serif; font-weight: bold;"> Deluxe Room </b></a>
	  <a href="#honymoon" class="w3-bar-item w3-button"style="text-decoration: none;"><b style="font-family: serif; font-weight: bold;">Honeymoon Pakage</b></a>
      
    </div></b>
  </div>
  <a href="#contact" class="w3-bar-item w3-button w3-left w3-gray  w3-mobile"style="font-family: serif; font-weight: bold; text-decoration: none;border-radius: 4px;font-size: 15px;">ContactUs</a>
</div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#Gallery" class="w3-bar-item w3-button">gallery</a>
	<a href="#Rooms"  class="w3-bar-item w3-button">ACCOMMODATION</a>
    <a href="#about" class="w3-bar-item w3-button">The Hotel</a>
    <a href="#Facilities" class="w3-bar-item w3-button">Facilities</a>
    <a href="#contact" class="w3-bar-item w3-button">ContactUs</a>
	
    <a href="#honymoon" class="w3-bar-item w3-button">HONEYMOON PACKAGE</a>
    <a href="#Booknow" class="w3-bar-item w3-button">BookNow</a>
	<a href="admin.php" class="w3-bar-item w3-button">Admin</a>
	<a href="loginform.php" class="w3-bar-item w3-button">signup</a>
  </div>
</div>
  
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="hotelrooms/w6.jpg" alt="The Hotel" style="min-width:1000px" width="1500" height="800">
   <div class="w3-display-right w3-padding w3-col l6 m8">
    <div class="w3-container w3-green">
      <h2><b class="fa fa-bed w3-margin-right"></b>Welcome Californiya Hotel</h2>
    </div>
    <div class="w3-container w3- w3-padding-16">
      <form action="" target="" method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom w3-red">
            <label><i class="fa fa-calendar-o"></i> <b>Check In</b></label>
            <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="checkIn" required>
           </div>
          <div class="w3-half  w3-black">
            <label><i class="fa fa-calendar-o"></i> <b>Check Out</b></label>
             <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="checkOut" required>
            </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom w3-red">
            <label><i class="fa fa-male"></i><b> Adults</b></label>
            <input class="w3-input w3-border" type="Number" value="1" name="adults" id="adults" min="1" max="6">
          </div>
          <div class="w3-half w3-black">
            <label><i class="fa fa-child"></i><b> Kids</b></label>
          <input class="w3-input w3-border" type="Number" value="0" name="kids" id="kids" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-red" type="submit" name="enquiry" id= "submit"><i class="fa fa-search w3-margin-center"></i>Enquiry</button>
      </form>
    </div
  </div>
  
  <?php
  include ("connection.php");
  if(isset( $_POST['enquiry'])){
	  $checkin = $_POST['checkIn'];
	  $checkout = $_POST['checkOut'];
	  $adults =$_POST['adults'];
	  $kids = $_POST['kids'];
	  
	  $sql= "insert into enquiry values (DEFAULT,'$checkin','$checkout','$adults','$kids')";
	   $result = mysqli_query($conn,$sql);
	   if($result==1){
			 echo " <script> alert('Enquiry succesfully');</script>";
			  echo" <script>window.locatio='homepage.php'; </script>";
		 }
		  else{
			 echo "<script> alert('Something went wrong')</script>";
		 }
  }
  
  ?>
</header>
<br>
<marquee class="marq" bgcolor = "black" direction = "left" loop="" >
        <div class="geek1" ><font size=15 color= "red"> <b>  Welcome Californiya Hotel</b></font></div></marquee>
	 <div class="w3-container w3-margin-top" id="Gallery">	
   <h3><b><center> Gallery View : </center></b></h3>
   </div>
<!----Gallery-->
  <img id="myImg" src="hotelrooms/r43.jpeg" alt="" style="width:100%;max-width:332px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<!----Gallery1-->
<img id="myImg1" src="hotelrooms/r31.jpeg" alt="" style="width:100%;max-width:332px">

<!-- The Modal -->
<div id="myModal1" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img02">
  <div id="caption1"></div>
</div>
<!----Gallery2-->
<img id="myImg2" src="hotelrooms/r45.jpeg" alt="" style="width:100%;max-width:332px">

<!-- The Modal -->
<div id="myModal2" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img03">
  <div id="caption2"></div>
</div>

<!----Gallery3-->
<img id="myImg3" src="hotelrooms/r35.jpeg" alt="" style="width:100%;max-width:332px">

<!-- The Modal -->
<div id="myModal3" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img04">
  <div id="caption3"></div>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="Rooms">
    <h3><b> <center>ACCOMMODATION</center> </b></h3>
    <p><b><center>Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</center></b></p>
  </div>
  
 
    

<?php

if(isset($_POST['book'])){
	if(!isset($_SESSION['email'])){
		 echo " <script> alert('You are not able to book. Please LogIn.!!!!');</script>";
		 echo" <script>window.location='loginform.php'; </script>";
	}
}
?>
  

  <div class="w3-row-padding w3-padding-16">
  <?php
  foreach($b as $key)
  {?>
    <div class="w3-third w3-margin-bottom">
      <img src= "uploadimg/<?php echo $key['image'];?>" alt="Norway" style="width:100%"> 
      <div class="w3-container w3-white">	 
	  <b>
        <h3 ><b><font size =5  color=green>Type Room : <?php echo $key ['type'];?></font></b></h3>	  
        <h6> <b>MRP: <?php echo $key ['price'];?></b></h6>		
        <p>luxsrius bed</p>
        <p>15m<sup>2</sup></p> 
		<th>
          <span class="fa fa-star checked" style="color:orange;"></span>
            <span class="fa fa-star checked"style="color:orange;"></span>
            <span class="fa fa-star checked"style="color:orange;"></span>
             <span class="fa fa-star"style="color:orange;"></span>
           <span class="fa fa-star"></span>
         </th>
        <p class="w3-large"><i class="fa fa-bath"></i> 
		<i class="fa fa-phone"></i> 
		<i class="fa fa-wifi"></i></p>
		</b>
		<form method="post">
        <button class="w3-button w3-block w3-black w3-margin-bottom" name="croom"><b>Choose Room </b></button>
      </form>    
	 </div>
	  
    </div>
  <?php }?>
  </div>
  <?php
	  
	  if(isset($_POST['croom'])){
		  if(!isset($_SESSION['email'])){
			  echo"<script> window.location='loginform.php';</script>";
		  }else{
			  echo"<script> window.location='bookingform.php';</script>";
		  }
	  }
	?>

  
  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3><b><center>THE Hotel</center><b></h3>
      <h>Our hotel is one of a kind. It is truely amazing. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="hotelrooms/h12.jpeg" class="" style="width:100%;">
    </div>
  </div>
  
  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> 423 Some adr, Chicago, US</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +00 151515</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
  </div>

  <div class="w3-panel w3-red w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer playstation, babycall, children care, dog equipment, etc.</h6>
  </div>

  <div class="w3-container">
    <h1><b><center> Californiya Hotels </center></b></h1>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="hotelrooms/w1.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding"></span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r22.jpeg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r42.jpeg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r32.jpeg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r27.jpeg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!----Facilities---->
   <div class="w3-row-padding" id="Facilities">
    <div class="w3-col l4 12">
      <h3><b><center>**Hotels Facilities and Guest Service</center><b></h3>
	  <ul>
	    <li> Luxurious white marble bathroom with
		 seprate shower and bathtub </li>
	  <li> Soap and bath amenities</li>
	  <li> Bathrobe and slippers</li>
	  <li> Hair dryer</li>
	  <li>coffie and tea making facilities</li>
	  <li> Mini-bar</li>
	  <li> Espresso Machine</li>
	  <li> Telephone</li>
	  <li>Individually Controlled air-conditioning</li>
	  <li> 32 inch Flat screen Tv</li>
	  <li> in room safe</li>
	  <li> Complimentry botled water</li>
	  <li>Private terrace with pogad view</li>
	  <li> Complimentry Wifi</li>
	  <li>Complimentry use of  hotel bicycle</li>
	  <li>Daily turn down service</li>
	  <li> 24 hour room service</li>
	  </ul>
	  <h><b>HOTEL FACILITIES</b></h>
	  <ul>
	  <li>Spa</li>
	  <li>Semi open and outdoor restaturant</li>
	  <li>Poolside bar</li>
	  <li> Car Parking</li>
	  <li> Swimming pool/jacuzzi</li>
	  <li>Public Computer</li>
	  <li>Disable rooms  and Innterconnecting rooms</li>
	  <li> 24 hour security</li>
	  <li> Outside Catring Service</li>
	  <li>100 Seating capacity restaturant</li>
	  <li> 150 Capacity outdoor terrace</li>
	   <li> 45 Seating Conference room</li>
	    <li> 35 Seating Private air-conditioning dining room</li>
		 <li> Water purification system </li>
		  <li> Sunset boat trip</li>
		  <li> Gift shop</li>
	  </ul>
	  <h> <B>GUEST SERVICE <B></h>
	  <UL>
	  <li> 24-Hour room service </li>
	  <li> Free wireless internet access </li>
	  <li> Complimentry use of hotel  bicycle</li>
	  <li> Laundry service</li>
	  <li> Tour & excusions</li>
	  <li> 24 Hour concireg</li>
	  <li> Meeting facilities </li>
	  <li> E-bike & horse cart rental</li>
	  <li> Airport traranfers</li>
	  <li> Babysitting on request</li>
	  <li> 24-Hour docter on cell</li>
	  </UL>
	  
      <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="hotelrooms/h14.jpeg" style="width:100%">
    <img src="hotelrooms/h15.jpeg" style="width:100%">
    <img src="hotelrooms/r15.jpeg" style="width:100%">
    <img src="hotelrooms/h17.jpeg" style="width:100%">
    </div>
  <div class="column">
    <img src="hotelrooms/r6.jpeg" style="width:100%">
    <img src="hotelrooms/r7.jpeg" style="width:100%">
    <img src="hotelrooms/r8.jpeg" style="width:100%">
    <img src="hotelrooms/r10.jpeg" style="width:100%">
    </div>  
  <div class="column">
    <img src="hotelrooms/r13.jpeg" style="width:100%">
    </div>
  <div class="column">
    <img src="hotelrooms/r20.jpeg" style="width:100%">
    </div>
</div>
</div>
  </div>
  <!--------Suite Room----->
   <div class="w3-row-padding" id="suiteroom">
    <div class="w3-col l4 12">
      <div style="margin-right :20px"> 
  <h1><b><center>SUITE ROOM </center></b></h1>
 
 </div>
 <div style="background-color:pink;height:; width:20%; border-left: 10px solid red;width:80%;margin-left:40px; margin-bottom:10px;" class="col-sm-10">
  <p>Our One Bedroom Suite(72m2)are designed in restore style.
  providing comfort and feel of a resort with teak wood furniture
   and chic white marble bathroom . A specious private backyard & terrace  
   with view over the pagodas</p>
 </div>
   
 <div style="margin-right:20px">
     <h> <b>Facilites& Services </b></h>
	 <ul>
	   <li>Luxrious white marble bathroom with seperate 
	   shower and bathtub</li>
	    <li> Soap & bath amenities</li>
		 <li> Bathrobe&Slippers</li>
		  <li> Hair dryer</li>
        <li>Coffee & tea making Facilites</li>
	 <li> Mini-bar</li>
	  <li>Espresso machine</li>
	     <li>Telephone</li>
	     <li>Individually Controlled air-conditioning</li>
	  <li> 32 inch Flat screen Tv</li>
	  <li> in room safe</li>
	  <li> Complimentry botled water</li>
	  <li>Private terrace with pogad view</li>
	  <li> Complimentry Wifi</li>
	  <li>Complimentry use of  hotel bicycle</li>
	  <li>Daily turn down service</li>
	  <li> 24 hour room service</li>
	 
	 </ul>
	 
 </div>
 <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="hotelrooms/r13.jpeg" class="w3-image " style="width:100%;">
    </div>
  </div>
  <!----------->
   
  
  
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="hotelrooms/c2.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding"></span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r16.jpeg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/h23.jpeg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r18.jpeg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r27.jpeg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--------Dulex  Room----->
   <div class="w3-row-padding" id="dulexroom">
    <div class="w3-col l4 12">
      <div style="margin-right :20px"> 
  <h1><b><center>DULEX ROOM </center></b></h1>
 
 </div>
 <div style="background-color:pink;height:25%; width:70%;border-left: 10px solid red;width:75%;margin-left:50px; margin-bottom:10px;" class="col-sm-10">
  <p>Nestle and surrended by a topical garden. The specious  and  traditional appointed Deluxe Rooms
   (36m2) are nonsmoking and  designed  by  using teakwood marble and Bagan brik. Each room has high cellings 
    which give the room a large open feeling.
 </p>
 </div>
   
 <div style="margin-right:20px">
     <h> <b>Room Amenities & Service </b></h>
	 <ul>
	   <li>Bathtub or walk-in shower</li>
	   <li> Soap amenities</li>
	    <li> Soap & bath amenities</li>
		 <li> Bathrobe&Slippers</li>
		  <li> Hair dryer</li>
        <li>Coffee & tea making Facilites</li>
	 <li> Mini-bar</li>
	  <li>Espresso machine</li>
	     <li>Telephone</li>
	     <li>Individually Controlled air-conditioning</li>
	  <li> 32 inch Flat screen Tv</li>
	  <li> in room safe</li>
	  <li> Complimentry botled water</li>
	  <li>Private terrace with pogad view</li>
	  <li> Complimentry Wifi</li>
	  <li>Complimentry use of  hotel bicycle</li>
	  <li>Daily turn down service</li>
	  <li> 24 hour room service</li>
	 
	 </ul>
	 
 </div>
 <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="hotelrooms/r12.jpeg" class="w3-image " style="width:100%;">
    </div>
  </div>
  <!----------->
   
  
  
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="hotelrooms/c3.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding"></span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r11.jpeg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r44.jpeg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r4.jpeg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r14.jpeg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--------Dulex  Room----->
   <div class="w3-row-padding" id="honymoon">
    <div class="w3-col l4 12">
      <div style="margin-right :20px"> 
  <h1><b><center>HONEYMOON PACKAGE </center></b></h1>
 
 </div>
 
   
 <div style="margin-right:20px">
     <h> <b>Specialy For New Cuople</b></h>
	 <ul>
	   <li>2 Nights stay in Deluxe Room</li>
	   <li> Daily Buffet Breakfast(Two Time)</li>
	    <li> Honeymoon Room Setup</li>
		 <li> Honeymoon Cake</li>
		  <li> Airport Shuttle Service(only from Nyaung Ooairpot)</li>
        <li>Full Day Sightseeing with driver(one time)</li>
	 <li> Mini-bar</li>
	  <li>Cocktail or Mocktail(one time)</li>
	     <li>Candle light Dinner for two pax (one time)</li>
	     <li>The Best of Myanmar Golden Land of Hidden Gems Gallery book</li>
	  <li> 32 inch Flat screen Tv</li>
	  <li> 10% off F&B. Spa.Laundry and transporation</li>
	  <li> Complimentry botled water</li>
	  <li>Private terrace with pogad view</li>
	  <li> Complimentry Wifi</li>
	  <li>Complimentry use of  hotel bicycle</li>
	  <li>Daily turn down service</li>
	  <li> 24 hour room service</li>
	 
	 </ul>
	 
 </div>
 <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="hotelrooms/w2.jpg" class="w3-image " style="width:100%;">
    </div>
  </div>
  <!----------->
   
  
  

  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="hotelrooms/h2.jpeg" alt="Cinque Terre" style="width:100%">
		<br>
		<img src="hotelrooms/h15.jpeg" alt="Cinque Terre" style="width:100%">
        
        <span class="w3-display-bottomleft w3-padding"></span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r47.jpeg" alt="New York" style="width:100%">
			<br>
			<img src="hotelrooms/r46.jpeg" alt="New York" style="width:100%">
			
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/r44.jpeg" alt="San Francisco" style="width:100%">
			<br>
			<img src="hotelrooms/r35.jpeg" alt="San Francisco" style="width:100%">
            
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/h19.jpeg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="hotelrooms/h18.jpeg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-container w3-padding-32 w3-black w3-opacity w3-card w3-hover-opacity-off" style="margin:32px 0;">
    <h2>Get the best offers first  BookNow! </h2>
    <p>Join our newsletter.</p>
    <label>E-mail</label>
	<form action="" method="post">
    <p><input class="w3-input w3-border" type="text" placeholder="Your Email address"  name="email" id="email1" required ></p>
    <p><button class="w3-button w3-red w3-padding-large" type="submit" name="subscribe" id="subscribe" >Subscribe</button></p>
   </form>
  </div>
  <?php
     include "connection.php";
	 if(isset($_POST['subscribe'])){
		 $email =$_POST['email'];
		 $sql="insert into subscribes values(DEFAULT,'$email')";
		 $result= mysqli_query($conn,$sql);
		 if($result==1){
			 echo" <script> alert('scribe sended');</script>";
			 echo" <script>window.locatio='homepage.php'; </script>";
		 }
		  else{
			 echo "<script> alert('Something went wrong')</script>";
		 }
	 }
  
  ?>
 

  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Chicago, US<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action=""  method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name"   name="name"  id= "name" required></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email"  name="email" id="email"  required></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message"  name="message"  id="message" required></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit" name="send" id="submit" >SEND MESSAGE</button></p>
    </form>
  </div>
  <?php
  include "connection.php";
  if (isset($_POST['send'])){
	  
	  $name= $_POST['name'];
	  $email= $_POST ['email'];
	  $message= $_POST['message'];
	$sql="insert into contactus values(DEFAULT,'$name','$email','$message')";
	// echo $sql;
	 $result=mysqli_query($conn,$sql);
	if($result==1){
		echo"<script>alert('message sended');</script>";
		 echo" <script>window.locatio='homepage.php'; </script>";
		
	}else{
		echo"<script>alert('Something went wrong.');</script>";
	}
  }
  
  
  ?>
 

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p> <B>Californiya hotel</b></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<!---Gallery-->
<script>
// Get the modal2
var modal = document.getElementById("myModal1");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1");
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption1");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<script>
// Get the modal3
var modal = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption2");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<script>
// Get the modal1
var modal = document.getElementById("myModa3");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption3");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<script>
// Get the modal1
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<script>
// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
