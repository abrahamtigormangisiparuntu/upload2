<?php
	$db_host = "172.18.0.2";
	$db_user = "root";
	$db_password = "ikanasin";
	$db_name = "redlock";
	$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query("SELECT * FROM users");
	while ($row = $result->fetch_assoc()) {
		echo $row['id'] . ' ' . $row['name'] . ' ' . $row['address'] . ' ' . $row['position'] . ' ' ."\n";
	}

	// Close connection
	$conn->close();
?>