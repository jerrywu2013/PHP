<?php
$servername = "localhost";
$username = "jerry";
$password = "12345";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

#Insert data
$sql = "INSERT INTO MyGuests (firstname, lastname, email, age)
VALUES ('John', 'Doe', 'john@example.com', '30')";


#query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>