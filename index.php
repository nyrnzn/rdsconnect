<!DOCTYPE html>
<html>
<head>
	<title>RDS Lab</title>
</head>
<body>
	<a href="add-view.php"><button>Add New Entry</button></a><br>
	<?php
		if (isset($_GET['deleted']) && $_GET['deleted'] == 'true') {
			echo "<p style='color: red'>Deleted successfully!</p>";
		}
		if (isset($_GET['added']) && $_GET['added'] == 'true') {
			echo "<p style='color: green'>Added successfully!</p>";
		}
	?>
	<hr>

	<?php
		include("connect.php");

		$sql = "SELECT * FROM users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["id"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. " - <a style='cursor: pointer' href='delete.php?id=" . $row['id'] . "'><button> X </button></a><br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();

	?>
</body>
</html>