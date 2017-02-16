<?php
// MySQL query function:
include 'connect.php'; // connection is stored in the $dbc variable;

mysqli_query($dbc, 'SELECT * FROM Inventory');


?>
