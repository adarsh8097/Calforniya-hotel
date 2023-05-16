<?php
session_start();
if(isset($_SESSION['email'])){
	session_destroy();
	echo"<script> location.href='homepage.php'</script>";
}

include'connection.php';
?>