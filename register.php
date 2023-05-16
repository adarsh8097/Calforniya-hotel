<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
 
}
.bg
{
	 background-img: url("Baner/mall1.jfif");
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: orange;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: blue;
  text-align: center;
}
/*password Validation */
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
<script>
 function validate(){
	var pass=document.getElementById("psw").value;
	var cpass=document.getElementById("cpsw").value;
	if (pass!=cpass)
	{
		alert ("cpassword does not  match");
		 
		return false;
	}
	return true;
}
</script>
</head>
<body>

<form action="registation.php" method="post" name="myform">

  <div class="container">
  
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="Name"><b>First Name</b></label><br>
    <input type="text" placeholder=" Enter Name" name="fname" id="name" required>
	
	<label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter lname" name="lname" id="name" required >
     <br>
    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
	
	<label for="contect"><b>Contact No</b></label>
    <input type="text" placeholder="Enter Contactno" name="contact" id="contact" required >
    <br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    
	<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
	
    
    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpass" id="cpsw" required >
	
	<hr>
     <br> Agree to Terms of Service:
                            <input type="checkbox" name="agree" required>
                            <br>

    <button type="submit" class="registerbtn" name="submit" id ="button" onclick="return validate()">Register</button>
  </div>
 </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="loginform.php">Sign in</a>.</p>
  </div>
  
  <script>
  
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
    

</script>

</form>

</body>
</html>
