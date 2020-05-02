<?php
	include("connect.php");

	$sql = "INSERT INTO users (username, email, phone)
	VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "')";

	if ($conn->query($sql) === TRUE) {
	    header("location: index.php?added=true");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>