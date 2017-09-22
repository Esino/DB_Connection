<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "myDB";

	$conn = new mysqli($servername, $username, $password, $db_name);

	if ($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}
	
	/* $sql = "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";

	if ($conn->query($sql) === TRUE) {
	    echo "Table MyGuests created successfully";
	} else {
	    echo "Error creating table: " . $conn->error;
	} */

	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('Seth', 'Meyers', 'Seth135@gmail.com');";

	$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('Blessing', 'Lewis', 'BlessLe@gmail.com');";

	$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
			VALUES ('Charlotte', 'Williams', 'char.williams@gmail.com')";


	if ($conn->multi_query($sql) === TRUE) {
		echo "New records created successfully.";
	}
	else{
		echo "Error:". $ql . "<br>" . $conn->error;
	}
		
	$conn->close();
?>