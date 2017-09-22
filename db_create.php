<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "myDB";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}
	
	$sql = "UPDATE MyGuests SET lastname = 'Washington' WHERE id=3";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	}
	else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>