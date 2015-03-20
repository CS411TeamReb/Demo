<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('elchao2_Test');

	$value1 = $_POST['value1'];
	$value2 = $_POST['value2'];

	$query = mysql_query(sprintf("INSERT INTO Testing (Value1, Value2) VALUES ('%s', '%s')", $value1, $value2));

	if (!$query) {
		die('Could not query:' . mysql_error());
	}

	mysql_close($connection);
?>