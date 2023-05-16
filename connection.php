<?php
$hostName = "localhost:3308";
$userName="root";
$password="";
$db="californiya_hotel";
 $conn = mysqli_connect($hostName,$userName,$password,$db);
 if ($conn)
 {
	//echo "Connection Successfully";
 }
  else 
  {
	  echo " Connection Faild";
  }
?>