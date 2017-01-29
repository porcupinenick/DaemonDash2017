<?php

	$host = "localhost";
	$user = "fooduser";
	$password = "findyourfood";
	$database = "foodfinder";
	$table = "restaurants";
	$db = connectToDB($host, $user, $password, $database);

	function connectToDB($host, $user, $password, $database) {
		$db = mysqli_connect($host, $user, $password, $database);
		if (mysqli_connect_errno()) {
			echo "Connect failed.\n".mysqli_connect_error();
			exit();
		}
		return $db;
	}

?>