<?php
include"connection.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$pass=$_POST['pass'];

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

$q= mysqli_query($conn,"insert into  loginform values(DEFAULT,'$email','$password','$fname','$lname','$contact')");
if($q)
{
	//echo'data inserted';
	header("location:loginform.php?run=yes");
}
else
{
	echo (mysqli_error($con));
}
?>