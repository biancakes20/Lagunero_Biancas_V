<?php
$connect = mysqli_connect("localhost", "root", "", "pldt_billing");
$sql = "SELECT * FROM subscribers";
$result = $connect->query($sql);
?>

<button><a href = "landing_page.php">BACK</a></button>
<table border="1">
    <tr>
		<th>Telephone Number</th>
        <th>Account Name</th>
        <th>Balance Bill</th>
        <th>Current Charges</th>
        <th>Due Date</th>
        <th>Total Amount Due</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
		<td><?php echo $row['telephone_number']; ?></td>
        <td><?php echo $row['account_name']; ?></td>
        <td><?php echo $row['balance_last_bill']; ?></td>
        <td><?php echo $row['current_charges']; ?></td>
        <td><?php echo $row['due_date']; ?></td>
        <td><?php echo $row['total_amount_due']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
