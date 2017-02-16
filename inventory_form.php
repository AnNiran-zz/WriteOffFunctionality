<?php 
include('connect.php');

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>inventory</title>
	</head>
	
	<body>
		
		<pre>
			<?php 
			include('inventory_query.php');
			 ?>
		</pre>
		
		<form action"inventory_form.php" method="post">
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
			 <button type="submit" name="send" value="1">Submit</button>
			</p>
			
		</form>
	</body>
</html>

