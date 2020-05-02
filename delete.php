<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "rdsconnect";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// sql to delete a record
	$sql = "DELETE FROM users WHERE id='" . $_GET['id'] . "'";

	if ($conn->query($sql) === TRUE) {
	    header("location: index.php?deleted=true");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>