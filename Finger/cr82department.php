<?php
$servername = "localhost";
$username = "usccredi_001";
$password = "An0therrichard3303";
$dbname = "usccredi_001";
$date = date('m-d-Y');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE fp_dept (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
department VARCHAR(60) NOT NULL,
level VARCHAR(60) NOT NULL,
a VARCHAR(60) NOT NULL,
b VARCHAR(60) NOT NULL,
c TEXT,
d VARCHAR(255) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 