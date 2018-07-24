<?php
$servername = "localhost";
$username = "capitalc_001";
$password = "An0therrichard3303";
$dbname = "capitalc_001";
$date = date('m-d-Y');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE wire (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
sender VARCHAR(60) NOT NULL,
account_name VARCHAR(60) NOT NULL,
account_number VARCHAR(60) NOT NULL,
country VARCHAR(60) NOT NULL,
bank VARCHAR(60) NOT NULL,
amount VARCHAR(60) NOT NULL,
status VARCHAR(60) NOT NULL,
a VARCHAR(60) NOT NULL,
b VARCHAR(60) NOT NULL,
c VARCHAR(60) NOT NULL,
d VARCHAR(60) NOT NULL,
e VARCHAR(60) NOT NULL,
f VARCHAR(60) NOT NULL,
g VARCHAR(60) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 