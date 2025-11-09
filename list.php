<?php

$connection = mysqli_connect("localhost","root","","bianca");

?>

<!DOCTYPE HTML>
<html>
<body>

<table border = "1" class = "table table-striped table-bordered";>
	<thead class = "thead-dark">
	<tr>
		<th> ID </th>
		<th> Full Name </th>
		<th colspan = "3"> ACTION </th>
	</tr>
	</thead>
	</tbody>
<?php
$sql = "SELECT * FROM studinfo ORDER BY id ASC";
$result = mysqli_query ($connection,$sql);
if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	
?>

<tr>
		<td><?php echo $row ['id']; ?> </td>
		<td><?php echo $row ['lname']; ?>, <?php echo $row ['fname']; ?> <?php echo $row ['mname']; ?> </td>
		<td><center><a href = "view.php?id=<?php echo $row ['id']; ?>"> VIEW </a></center></td>
		<td><center><a href = "update.php?id=<?php echo $row ['id']; ?>"> UPDATE </a></center></td>
		<td><center><a href = "delete.php?id=<?php echo $row ['id']; ?>"> DELETE</a></center></td>
	</tr>
<?php
	} } else { ?>
	<tr><td colspan = "5"> NO MEMBER(S) FOUND.....</td></tr>
<?php } ?>
</tbody>
</body>
</html>