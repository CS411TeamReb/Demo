<?php
	function connect() {
		$link = mysql_connect('engr-cpanel-mysql.engr.illinois.edu', 'elchao2_admin', '411testing');
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		return $link;
	}
?>