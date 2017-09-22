<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "myDB";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}
	
	$sql = "DELETE FROM MyGuests WHERE id=4";
	$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	}
	else {
		echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>