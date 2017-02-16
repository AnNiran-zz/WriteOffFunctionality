<?php 
include('connect.php');

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>credit_invoice</title>
	</head>
	
	<body>
		
		<pre>
			<?php 
			include('cinvoice_query.php');
			 ?>
		</pre>
		
		<form action"inventory_form.php" method="post">
			<p>
			 <label>Inventory_id:</label>
			 <input type="number" name="inventory_id" value="">
			</p>
			<p>
			 <label>Customer:</label>
			 <input type="text" name="customer" value="">
			</p>
			<p>
			 <label>Email:</label>
			 <input type="text" name="email" value="">
			</p>
			<p>
			 <label>Address:</label>
			 <input type="text" name="address" value="">
			</p>
			<p>
			 <label>Date:</label>
			 <input type="date" name="date" value="">
			</p>
			<p>
			 <label>Location:</label>
			 <input type="text" name="location" value="">
			</p>
			<p>
			 <label>Item:</label>
			 <input type="text" name="item" value="">
			</p>
			<p>
			 <label>Quantity:</label>
			 <input type="number" name="quantity" value="">
			</p>
			<p>
			 <label>Price:</label>
			 <input type="number" name="price" value="">
			</p>
			<p>
			 <label>Total:</label>
			 <input type="number" name="total" value="">
			</p>
			<p>
			 <button type="submit" name="send" value="1">Submit</button>
			</p>
			
		</form>
	</body>
</html>
