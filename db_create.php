<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "myDB";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}
	
	//prepare and bind
	$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
							VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email);

	// Set parameters and execute
	$firstname = "Barkley";
	$lastname = "Ford";
	$email = "BarkFord@gmail.com";
	$stmt->execute();

	$firstname = "Anita";
	$lastname = "Stone";
	$email = "AniStone@gmail.com";
	$stmt->execute();

	echo "New records created successfully";
		
	$stmt->close();	
	$conn->close();
?>