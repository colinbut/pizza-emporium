<!DOCTYPE html>
<html>
<head>
	<title>Pizza Emporium</title>
</head>
<body>

	<div>
		<h1>Pizza Emporium</h1>
		<h6>A very simple version</h6>
		<p><em>Please fill in the order form to order a pizza.</em></p>
		<form method="POST" action="index.php">
			<table>
				<tr>
					<td><label>Customer Name:</label></td>
					<td><input type="text" name="customerName" /></td>
				</tr>
				<tr>
					<td><label>Customer Phone Number:</label></td>
					<td><input type="text" name="customerPhoneNumber" /></td>
				</tr>
				<tr>
					<td><label>Customer Address:</label></td>
					<td><textarea></textarea></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>