<?php
include('connect.php');
include('inventory_query.php');

if (!isset($_POST["submit"])) { // checks the data submition settings and proceed with entering the filled values into the database table;

				$query = "INSERT INTO cinvoice 
				(inventory_id, customer, email, address, date, location, item, quantity, price, total) 
				VALUES 
				($_POST[inventory_id], '$_POST[customer]', '$_POST[email]', 
				'$_POST[address]', '$_POST[date]', '$_POST[location]', '$_POST[item]', $_POST[quantity], $_POST[price], $_POST[total])";
				
				$ci_result = mysqli_query($dbc, $query); // executes the query;
			}

if ($ci_result) {  // checks if the query is done and collects the submitted data in an array;

	$cinvoice_values[] = array($_POST);
	
	$inventory_id_ci = $_POST["inventory_id"]; // assign the value of inventory_id in the associative array to a variable;
	$quantity_ci = $_POST["quantity"]; // assign the value of quantity to a variable;
	
	$writeoff_query = "SELECT * FROM inventory WHERE inventory_id='$inventory_id_ci'"; // identifies the row from inventory table using the id filled;
	$inv_writeoff_query_result = mysqli_query($dbc, $writeoff_query);
	
	$inventory_values = mysqli_fetch_assoc($inv_writeoff_query_result); // collects the retrieved data into an associative array;
	
	while($row = mysqli_fetch_assoc($inv_writeoff_query_result)) {
		$inventory_values = $row;
		}

	$quantity_inv = $inventory_values["quantity"]; // assign the value of quantity iin the associative array to a variable;
	$item_inv = $inventory_values["inventory_id"]; // assign the value of inventory_id in the associative array to a variable;
	
	if ($quantity_ci <= $quantity_inv) {
		$updated_qty_inv = $quantity_inv - $quantity_ci;
		$execute_writeoff_query = "UPDATE inventory SET quantity='$updated_qty_inv' WHERE inventory_id='$item_inv'"; 
		// decrease the quantity in invetory records with the quantity from the Credit Invoice; if the quantities are equal, the record will stay with zero quantity;
		$update_inv_record = mysqli_query($dbc, $execute_writeoff_query); 
	} else {
		echo "Error in inventory records for item .$item_inv.";
	}
}
	

?>
