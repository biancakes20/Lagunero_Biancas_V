<?php

if (isset ($_GET ['id'])){

$connection = mysqli_connect("localhost","root","","vicente");

	$id = $_GET ['id'];
	
$sql = "SELECT * FROM info WHERE id = '$id'";

$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)){
	$lname = $row ['lname'];
	$fname = $row ['fname'];
	$mname = $row ['mname'];
    $cv = $row ['civ'];
	$st= $row ['stat'];
	
	
?>

<!DOCTYPE HTML>
<html>
<body>
	<h1> STUDENT INFORMATION </h1>
<form>
ID NUMBER : <input type="text" value = "<?php echo $id; ?>" disabled><br>
LAST NAME : <input type="text" value = "<?php echo $lname; ?>" disabled><br>
FIRST NAME : <input type="text" value = "<?php echo $fname; ?>" disabled><br>
MIDDLE NAME : <input type="text" value = "<?php echo $mname; ?>" disabled><br>
Civil Status : <input type="text" value = "<?php echo $civil; ?>" disabled><br>
Status : <input type="text" value = "<?php echo $status; ?>" disabled><br>



</form>
	<button><a href = "display.php"> HOME </a></button>

<?php
	} } }
?>
</body>
</html>


