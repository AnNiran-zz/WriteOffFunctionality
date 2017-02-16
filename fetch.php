<?php
include('connect.php');
include('query.php');

$query = "SELECT * FROM customer WHERE customer_id = 2";
$result = mysqli_query($dbc, $query);
$customer = mysqli_fetch_assoc($result);
echo $customer['name'];

?>
