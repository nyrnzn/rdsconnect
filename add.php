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

	$sql = "INSERT INTO users (username, email, phone)
	VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "')";

	if ($conn->query($sql) === TRUE) {
	    header("location: index.php?added=true");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>