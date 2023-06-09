<!DOCTYPE html>
<html lang="en">
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>


<!-- Navbar -->

<div class="w3-top">


  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Calforniya Hotel</a>
    <a href="enquiry.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Enquiry</a>
    <a href="bookingformfetch.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Booking</a>
	
    <a href="subscribe.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Subscribe</a>
    <a href="add_rooms.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Add Rooms</a>
    <a href="add_room_form.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Rooms</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CotactUs</a>
	<a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="enquery.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Enquiry</a>
  <a href="add_room.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Add Rooms</a>
  
  <a href="add_room_form.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Add Rooms</a>
  
  <a href="subscribe.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Subscribe</a>
  <a href="contactus" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACTUs</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Booking</a>
  
</div>



 



 

  
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<br>
<img src="hotelrooms/logo1.jpeg" class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
