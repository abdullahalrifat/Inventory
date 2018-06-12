<?php

require_once 'core.php';

if($_POST) {

    $client = $_POST['clientName'];



    $sql = "SELECT order_date, (SELECT Name FROM contact WHERE Mobile = '$client') as name, client_contact, grand_total FROM orders WHERE client_contact = '$client' and order_status = 1";
    $query = $connect->query($sql);

    $table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Order Date</th>
			<th>Client Name</th>
			<th>Contact</th>
			<th>Grand Total</th>
		</tr>

		<tr>';
    $totalAmount = "";
    while ($result = $query->fetch_assoc()) {
        $table .= '<tr>
				<td><center>'.$result['order_date'].'</center></td>
				<td><center>'.$result['name'].'</center></td>
				<td><center>'.$result['client_contact'].'</center></td>
				<td><center>'.$result['grand_total'].'</center></td>
			</tr>';
        $totalAmount += $result['grand_total'];
    }
    $table .= '
		</tr>

		<tr>
			<td colspan="3"><center>Total Amount</center></td>
			<td><center>'.$totalAmount.'</center></td>
		</tr>
	</table>
	';

    echo $table;

}

?>