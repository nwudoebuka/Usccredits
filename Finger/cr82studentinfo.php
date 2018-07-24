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
$sql = "CREATE TABLE fp_studentinfo (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AcademicProgram VARCHAR(60) NOT NULL,
Department VARCHAR(60) NOT NULL,
StudentLevel VARCHAR(60) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 