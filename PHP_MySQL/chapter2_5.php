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
#$sql = "INSERT INTO MyGuests (firstname, lastname, email)
#VALUES ('John', 'Doe', 'john@example.com')";

$sql = "INSERT INTO MyGuests (firstname, lastname, email, age)
VALUES ('John', 'Doe', 'john@example.com', '20');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, age)
VALUES ('Mary', 'Moe', 'mary@example.com', '60');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, age)
VALUES ('Julie', 'Dooley', 'julie@example.com', '70')";

#Multi_query
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>