<?php
$order = $transaction;
if(!$order){
    die('transaction is null');
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../static/css/bootstrap.min.css" rel="stylesheet">
	<title>Single Transaction</title>
</head>
<body>
<div class="container">
	<h2>Single Transaction</h2>

	<table class="table table-bordered">
		<thead>
		<tr>
			<th>Transaction ID</th>
			<th>Order Currency</th>
			<th>Order Amount</th>
			<th>Transaction Type</th>
			<th>Note</th>
            <th>Reference</th>
			<th>Transaction Time</th>
			<th>Transaction Status</th>
		</tr>
		</thead>
		<tbody>
		
			<tr>
				<td><?= $order['id'] ?></td>
				<td><?= $order['currency'] ?></td>
				<td><?= $order['amount'] ?></td>
				<td><?= $order['type'] ?></td>
				<td><?= $order['note'] ?></td>
				<td><?= $order['reference'] ?></td>
				<?php
				$date = new DateTime($order['time']);
				?>
				<td><?= $date->format('Y-m-d H:i:s') ?></td>
				<td><?= $order['status'] ?></td>
			</tr>
		</tbody>
	</table>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../static/js/jquery-1.1.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../static/js/bootstrap.min.js"></script>
</body>
</html>