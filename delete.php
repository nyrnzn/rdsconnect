<?php
	include("connect.php");

	// sql to delete a record
	$sql = "DELETE FROM users WHERE id='" . $_GET['id'] . "'";

	if ($conn->query($sql) === TRUE) {
	    header("location: index.php?deleted=true");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>