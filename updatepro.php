<?php

if (isset($_POST ['update'])){
	
$connection = mysqli_connect("localhost","root","","vicente");

	
	$id = $_POST['id'];
	$ln = $_POST['lname'];
	$fn = $_POST['fname'];
	$mn = $_POST['mname'];
    $cv= $row ['civ'];
	$st= $row ['stat'];
	
$sql= "UPDATE info SET lname='$ln', fname='$fn', mname='$mn',cv='civ',st='stat' WHERE id='$id'";

if (mysqli_query ($connection,$sql)){
	header("location:display.php");
} else {
	echo mysqli_error($connection);
} } 
?>

	