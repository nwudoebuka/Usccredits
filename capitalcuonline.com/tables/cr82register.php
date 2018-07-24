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
$sql = "CREATE TABLE register (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(60) NOT NULL,
account_name VARCHAR(60) NOT NULL,
account_number VARCHAR(60) NOT NULL,
account_type VARCHAR(60) NOT NULL,
account_limit VARCHAR(60) NOT NULL,
account_balance VARCHAR(60) NOT NULL,
account_status VARCHAR(60) NOT NULL,
transaction_status VARCHAR(60) NOT NULL,
address VARCHAR(60) NOT NULL,
phone VARCHAR(60) NOT NULL,
gender VARCHAR(60) NOT NULL,
dp VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
loan_eligible VARCHAR(60) NOT NULL,
username VARCHAR(60) NOT NULL,
password VARCHAR(60) NOT NULL,
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