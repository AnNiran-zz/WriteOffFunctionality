<?php
include('connect.php');

if (!isset($_POST["submit"])) { // checks the data submition settings and proceed with entering the filled values into the database table;

				$query = "INSERT INTO inventory (date, location, item, quantity, price) 
				VALUES 
				('$_POST[date]', '$_POST[location]', '$_POST[item]', $_POST[quantity], $_POST[price])";
				
				$inv_result = mysqli_query($dbc, $query); // executes the query;
			}

?>
