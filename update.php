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
<input type = "submit" name ="update">
</form>
	<button><a href = "display.php"> HOME </a></button>

?>

<!DOCTYPE HTML>
<html>
<body>
	<h1> STUDENT INFORMATION </h1>
<form method = "POST" action = "updatepro.php">
ID NUMBER : <input type="text" value = "<?php echo $id; ?>" name = "id"><br>
LAST NAME : <input type="text" value = "<?php echo $lname; ?>" name = "lname"><br>
FIRST NAME : <input type="text" value = "<?php echo $fname; ?>" name = "fname"><br>
MIDDLE NAME : <input type="text" value = "<?php echo $mname; ?>"name = "mname"><br>
Civil Status : <select name="civ">
				<option value = "Single"> Single </option>
				<option value = "Widowed"> Widowed </option>
				</select><br>
Status : <select name="stat">
				<option value = "Married"> Married </option>
				<option value = "Balagtok"> Balagtok </option>
				</select><br>


<input type = "submit" name ="update">
</form>
	<button><a href = "display.php"> HOME </a></button>

<?php
	} } }
?>
</body>
</html>