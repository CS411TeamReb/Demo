<?php
	include_once 'connect.php';
	$connection = connect();
	mysql_select_db('elchao2_Test');

	$result = mysql_query(sprintf("SELECT * FROM AwardShow"));

	if (!$result) {
		die('Could not query:' . mysql_error());
	}

	$resultArray = array();
	while ($row = mysql_fetch_array($result)) {
		$resultArray[] = $row;
	}
	$shows = $resultArray;

	echo json_encode($shows);
?>