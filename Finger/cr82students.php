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
$sql = "CREATE TABLE fp_student (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nameofuser VARCHAR(60) NOT NULL,
schoolofuser VARCHAR(60) NOT NULL,
departmentofuser VARCHAR(60) NOT NULL,
rankofuser VARCHAR(60) NOT NULL,
form_number VARCHAR(60) NOT NULL,
student_name VARCHAR(60) NOT NULL,
department VARCHAR(60) NOT NULL,
fees_status VARCHAR(60) NOT NULL,
finger1 TEXT,
finger2 TEXT,
finger3 TEXT,
finger4 TEXT,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 