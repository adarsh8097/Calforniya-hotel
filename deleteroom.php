<?php
include "connection.php";
$id=$_GET['rid'];
//echo $id;
$sql= "DELETE FROM rooms WHERE id=$id";
//echo $sql;

if(mysqli_query($conn,$sql)){
	echo"<script>alert('Room Deleted.');</script>";
	echo"<script>window.location='add_rooms.php';</script>";
}else{
	echo"<script>alert('Something went wrong.');</script>";
}
?>