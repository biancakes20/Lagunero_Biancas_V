<?php

if (isset ($_GET ['id'])){
	
$id = $_GET ['id'];

$connection = mysqli_connect("localhost","root","","bianca");
	
$query = "DELETE FROM studinfo WHERE id = '$id'";

if (mysqli_query ($connection,$query)){
	echo "<script>alert ('You have successfully updated the Student Information successfully!') </script>";
	header("location:display.php");
	}else{
	echo mysqli_error($connection);
	} 
} ?>
?>